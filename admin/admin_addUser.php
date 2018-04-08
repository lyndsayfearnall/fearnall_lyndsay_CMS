<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('phpscripts/config.php');

  if(isset($_POST['submit'])){
   $fname = trim($_POST['fname']);
   $lname = trim($_POST['lname']);
   $username = trim($_POST['username']);
   $password = trim($_POST['password']);
   $email = trim($_POST['email']);
   $userlvl = $_POST['userlvl'];
   if(empty($userlvl)){
     $message = "Please select a user level.";
   }else{
     $password = generatePass(6);
     $encryptPass = password_hash($password, PASSWORD_BCRYPT, array('cost'=>11));
     $result = createUser($fname, $lname, $username, $encryptPass, $email, $userlvl);
     $message = $result;
     $sendMail = sendUserMessage($fname, $username, $password, $email, $userlvl);
   }
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/css/main.css">
  <title>Add User</title>
</head>
<body class="admin">
    <?php
      include('../includes/adminNav.php');
     ?>
    <div class="container-fluid">
      <div class="row">
        <?php
          include('../includes/adminSidebar.php')
         ?>

         <div class="col-10 adminMainBody mt-1 addUser">
           <div class="ml-2 mt-4 card">
             <div class="card-header">
               <h1>Add a Movie</h1>
             </div>
             <div class="card-body">
              <?php if(!empty($message)){echo $message;} ?>
            	<form action="admin_addUser.php" method="post" autocomplete="off">
                <div class="form-group">
                  <label>First name</label>
              		<input class="input-group=text form-control" placeholder="First name" type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;} ?>">
                </div>

                <div class="form-group">
                  <label>Last name</label>
              		<input class="input-group=text form-control" placeholder="Last name" type="text" name="lname" value="<?php if(!empty($lname)){echo $lname;} ?>">
                </div>

                <div class="form-group">
                  <label>Username</label>
              		 <input class="input-group=text form-control" placeholder="Username" type="text" name="username" value="<?php if(!empty($username)){echo $username;} ?>">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input class="input-group=text form-control" placeholder="Password" type="password" name="password" value="<?php if(!empty($password)){echo $password;} ?>">
                </div>

                <div class="form-group">
                  <label>Email address</label>
                  <input class="input-group=text form-control" placeholder="Email address" type="text" name="email" value="<?php if(!empty($email)){echo $email;} ?>">
                </div>

                <div class="form-group">
                  <label for="userLevel">User Level</label>
                  <select class="form-control" name="userlvl" id="userLevel">
                    <option value="">Please select a user level</option>
                    <option value="2">Web Admin</option>
              			<option value="1">Web Master</option>
                  </select>
                </div>

            		<button type="submit" name="submit" value="Create User" class="btn btn-primary">Create User</button>
            	</form>
            </div>
          </div>
        </div>
     </div>
   </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
