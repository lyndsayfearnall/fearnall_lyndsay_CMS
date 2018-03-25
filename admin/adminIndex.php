<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('phpscripts/config.php');
  confirm_logged_in();

  $currentTimestamp = date('l F d, Y');
  $currentHour = date('G');
  //echo $currentHour;
  if ($currentHour >= 0){ //midnight till 5 am
    $greeting = "Sleep is for the weak, {$_SESSION['user_name']}.";
  }
   if ($currentHour >= 6) { //6-12
    $greeting= "Good morning {$_SESSION['user_name']}!";
  }
  if ($currentHour >= 12){
     $greeting = "Good afternoon {$_SESSION['user_name']}!";
  }
  if ($currentHour >= 17){
    $greeting = "Good evening {$_SESSION['user_name']}!";
   }
   if ($currentHour >= 22){
     $greeting = "Hey {$_SESSION['user_name']}, it's getting kinda late.";
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
  <title>Your Admin Page</title>
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
         <div class="ml-2 mt-4 card">
           <div class="card-header">
             <h1><?php echo "$greeting &nbsp";?>Welcome to your Moviez R Cool admin page.</h1>
           </div>
           <div class="card-body">
             <p>Today is <?php echo "$currentTimestamp"; ?></p>
             <p><small>The date and time of your last session login was:  <?php echo "&nbsp{$_SESSION['user_date']}"; ?></p>
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
