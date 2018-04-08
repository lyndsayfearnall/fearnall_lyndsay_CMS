<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  require_once('phpscripts/config.php');
  $id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Edit All</title>
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
           <div class="ml-2 mt-4 mb-5 card">
             <div class="card-header">
               <h1>Edit Movie</h1>
             </div>
              <div class="card-body">
                <?php if(!empty($message)){echo $message;}?>
                <?php
                  echo single_edit("tbl_movies", "movie_id", $id);
                ?>
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
