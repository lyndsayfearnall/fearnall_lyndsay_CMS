<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('phpscripts/config.php');

  $id = $_SESSION['user_id'];
	$tbl= "tbl_user";
	$col = "user_id";
	$popForm = getSingle($tbl, $col, $id);
	$found_user = mysqli_fetch_array($popForm, MYSQLI_ASSOC);

	 if(isset($_POST['submit'])){
	 	$fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
	 	$userlvl = $_POST['userlvl'];
	 	$result = editUser($id, $fname, $lname, $username, $password, $email);
			$message = $result;
	}

  if(isset($_POST['submit'])){
   $fname = trim($_POST['fname']);
   $username = trim($_POST['username']);
   $password = trim($_POST['password']);
   $email = trim($_POST['email']);
   $userlvl = $_POST['userlvl'];
   $result = editUser($id, $fname, $username, $password, $email);
			$message = $result;
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
  <title>Edit Your Profile</title>
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

       <div class="col-10 adminMainBody mt-1" id="addUser">
         <div class="ml-2 mt-4 mb-5 card">
           <div class="card-header">
             <h1>Edit Your Profile</h1>
           </div>
            <div class="card-body">
              <?php if(!empty($message)){echo $message;} ?>
            	<form action="admin_editProfile.php" method="post">
                <div class="form-group">
                  <label>First name</label>
              		<input class="input-group=text form-control" placeholder="First name" type="text" name="fname" value="<?php echo $found_user['user_fname'];?>">
                </div>

                <div class="form-group">
                  <label>Last name</label>
                  <input class="input-group=text form-control" placeholder="Last name" type="text" name="lname" value="<?php echo $found_user['user_lname'];?>">
                </div>

                <div class="form-group">
                  <label>Username</label>
              		 <input class="input-group=text form-control" placeholder="Username" type="text" name="username" value="<?php echo $found_user['user_name'];?>">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input class="input-group=text form-control" placeholder="Password" type="password" name="password" value="<?php echo $found_user['user_pass'];?>">
                </div>

                <div class="form-group">
                  <label>Email address</label>
                  <input class="input-group=text form-control" placeholder="Email address" type="text" name="email" value="<?php echo $found_user['user_email'];?>">
                </div>

                <div class="form-group">
                  <label for="userLevel">User Level</label>
                  <select class="form-control" name="userlvl" id="userLevel">
                    <option value="">Please select a user level</option>
                    <option value="2">Web Admin</option>
              			<option value="1">Web Master</option>
                  </select>
                </div>

            		<button type="submit" name="submit" value="Edit User Information" class="btn btn-primary">Update Information</button>
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
