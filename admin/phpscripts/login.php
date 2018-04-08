<?php

  function logIn($username, $password, $ip, $timestamp){
    require_once('connect.php');
    $username = mysqli_real_escape_string($link, $username);
    $password = mysqli_real_escape_string($link, $password);

    // check for vaild username
    $loginstring = "SELECT * FROM tbl_user WHERE user_name='{$username}'";
    $user_set = mysqli_query($link, $loginstring);

    if(mysqli_num_rows($user_set)){
      $found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
      // //check to see if user's password matches stored hashed password in database ... not working, ugh.
      // $secret = $found_user['user_pass'];
      // if (password_verify($password, $secret))
      // {
      //   echo "password all good!";
      // }
      // else
      // {
      //   echo "nope";
      // }
      
      //check how many login attempts
      $logins = $found_user['login_attempts'];
      if ($logins <=3){

        //check for a valid password
        if($password === $found_user['user_pass']){

          //reset login attempts back to zero
          $id = $found_user['user_id'];
          $resetLoginAttempts = "UPDATE tbl_user SET login_attempts = 0 WHERE user_id='{$id}'";
          $resetLoginquery = mysqli_query($link, $resetLoginAttempts);

          $lastLogin = $found_user['user_date'];
          $logins = $found_user['login_attempts'];
          $_SESSION['user_id'] = $id;
          $_SESSION['user_name'] = $found_user['user_fname'];
          $_SESSION['user_lname'] = $found_user['user_lname'];
          $_SESSION['user_date'] = $lastLogin;
          $_SESSION['login_attempts'] = $logins;
          $_SESSION['first_login']= $found_user['first_login'];
          if(mysqli_query($link, $loginstring)){
              $updatestring = "UPDATE tbl_user SET user_ip = '$ip' WHERE user_id={$id}";
              $updatequery = mysqli_query($link, $updatestring);
              $updateTimestamp = "UPDATE tbl_user SET user_date = '$timestamp' WHERE user_id={$id}";
              $updateTimestampquery = mysqli_query($link, $updateTimestamp);
            }
          if($_SESSION['first_login'] == 0){
            redirect_to("admin_editProfile.php");
          }else{
            redirect_to("adminIndex.php");
          }
        } else {
          //add 1 to login_attempts for that user
          $addLoginAttempts = "UPDATE tbl_user SET login_attempts = login_attempts +1 WHERE user_name='{$username}'";
          $addLoginAttempts = mysqli_query($link, $addLoginAttempts);
          $message = "Username and/ or password is incorrect. <br>Please make sure your caps lock key is turned off.";
          return $message;
        }
      }else {
          redirect_to("admin_login_failed.php");
      }
    }else{
      $message = "Username and/ or password is incorrect. <br>Please make sure your caps lock key is turned off.";
      return $message;
    }
  mysqli_close($link);
}
