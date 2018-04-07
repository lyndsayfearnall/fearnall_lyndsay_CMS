<?php
  function createUser($fname, $lname, $username, $password, $email, $userlvl) {
    include('connect.php');
    $userString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$lname}', '{$username}', '{$password}', '{$email}', NULL, '{$userlvl}', 'no', 0, 0)";
    //echo $userString;
    $userQuery = mysqli_query($link, $userString);
    if($userQuery){
      redirect_to("admin_manageUsers.php");
    }else{
      $message = "There was a problem setting up this user.";
      return $message;
    }
    mysqli_close($link);
  }

  function deleteUser($id){
    //echo $id;
    include('connect.php');
    $delstring = "DELETE FROM tbl_user WHERE user_id={$id}"; //be very specific so that you don't delete the wrong or multiple users
    $delquery = mysqli_query($link, $delstring);
    if($delquery){
      redirect_to("../admin_manageUsers.php");
    }else{
      $message = "Something went wrong.";
      return $message;
    }
    mysqli_close($link);
  }

  function editUser($id, $fname, $lname, $username, $password, $email){
    include('connect.php');
    $updatestring = "UPDATE tbl_user SET user_fname='{$fname}', user_lname='{$lname}', user_name='{$username}', user_pass='{$password}', user_email='{$email}' WHERE user_id={$id}";
    //echo $updatestring;
    $updatequery = mysqli_query($link, $updatestring);
    if($updatequery){
      redirect_to("adminIndex.php");
    }else{
      $message = "There was a problem changing your infomation, please contact your web admin.";
      return $message;
    }
    mysqli_close($link);
  }
 ?>
