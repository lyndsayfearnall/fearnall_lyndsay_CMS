<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('phpscripts/config.php');

  $tbl = "tbl_user";
  $users = getAll($tbl);

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
  <title>Manage Users</title>
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

       <div class="col-10 adminMainBody mt-1">
         <div class="ml-2 mt-4 mb-5 card">
           <div class="card-header">
             <h1>Manage Admin Users</h1>
           </div>

            <div class="card-body">

              <ul class="userList">
                <div class="row" id="tableHeading">
                  <div class="col-4">Name</div>
                  <div class="col-4">User Level</div>
                </div>
                <?php
                  while($row = mysqli_fetch_array($users)){
                    if ($row['user_level'] == 1){
                      $usrlvl = "Master";
                    }else{
                      $usrlvl = "Admin";
                    }
                    echo "
                      <li class=\"row\">
                        <div class=\"col-4\">
                        {$row['user_fname']}&nbsp;{$row['user_lname']}&nbsp;
                        </div>
                        <div class=\"col-4\">
                        $usrlvl
                        </div>
                        <div class=\"col-4\">
                        <a class=\"remove\" href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Remove</a>
                        </div>
                        </br>
                      </li>
                      ";
                    }
                ?>
                <a class="row" id="addOne" href="admin_addUser.php"><i class="material-icons">add_circle_outline</i>Add User</a>
              </ul>

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
