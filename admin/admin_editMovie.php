<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('phpscripts/config.php');

  if(isset($_GET['id'])) {
    $tbl= "tbl_movies";
    $col = "movie_id";
    $id = $_GET['id'];
    $popForm = getSingle($tbl, $col, $id);
    $foundMovie = mysqli_fetch_array($popForm, MYSQLI_ASSOC);

    if(isset($_POST['submit'])){

      $id = $foundMovie['movie_id'];
      $title = $_POST['title'];
      // $poster = $_FILES['poster'];
      // $trailer = $_FILES['trailer'];
      $year = $_POST['year'];
      $storyline = $_POST['storyline'];
      $rating = $_POST['rating'];
      $director = $_POST['director'];
      // $updateMovie = updateMovie($title, $poster, $trailer, $year, $storyline, $rating, $director);
      $updateMovie = updateMovie($id, $title, $year, $storyline, $rating, $director);
      $message = $updateMovie;
   }
  }



 //  if(isset($_POST['submit'])){
 //   $fname = trim($_POST['fname']);
 //   $username = trim($_POST['username']);
 //   $password = trim($_POST['password']);
 //   $email = trim($_POST['email']);
 //   $userlvl = $_POST['userlvl'];
 //   $result = editUser($id, $fname, $username, $password, $email);
	// 		$message = $result;
 // }

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
  <title>Edit Movie</title>
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
             <h1>Edit <?php echo $foundMovie['movie_name'];?></h1>
           </div>
            <div class="card-body">
              <?php if(!empty($message)){echo $message;}?>
            	<form action="admin_editMovie.php?id={$row['movie_id']}" method="post">
                <div class="form-group">
                  <label>Movie Title</label>
              		<input class="input-group=text form-control" placeholder="<?php echo $foundMovie['movie_name'];?>" type="text" name="title">
                </div>

                <!-- <div class="form-group">
                  <label>Poster Image</label>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name="coverImg">
                      <label class="custom-file-label"><?php echo $foundMovie['movie_picture'];?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label>Trailer</label>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name="trailer">
                      <label class="custom-file-label"><?php echo $foundMovie['movie_clip'];?></label>
                  </div>
                </div> -->

                <div class="form-group">
                  <label>Year</label>
                  <input class="input-group=text form-control" placeholder="<?php echo $foundMovie['movie_year'];?>" type="number" name="year">
                </div>

                <div class="form-group">
                  <label>Storyline</label>
                  <textarea class="form-control" name="description"><?php echo $foundMovie['movie_description'];?></textarea>
                </div>

                <div class="form-group">
                  <label>Rating</label>
                  <select class="custom-select" name="rating">
                     <option selected><?php echo $foundMovie['movie_rating'];?></option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                     <option value="7">7</option>
                     <option value="8">8</option>
                     <option value="9">9</option>
                     <option value="10">10</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Movie director</label>
                  <input class="input-group=text form-control" placeholder="<?php echo $foundMovie['movie_director'];?>" type="text" name="director">
                </div>

                <!-- <div class="form-group">
                  <label for="inputGenre">Genre</label>
                  <select id="inputGenre" class="form-control" name="genList">
                    <option value="">Select a Genre</option>
                    <?php
                      while($row=mysqli_fetch_array($genQuery)){
                      echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
                      echo "while";
                      }
                     ?>
                  </select>
                </div> -->

            		<button type="submit" name="submit" value="Update Movie" class="btn btn-primary">Update <?php echo $foundMovie['movie_name'];?></button>
            	</form>


                <!-- <div class="form-group">
                  <label>Username</label>
              		 <input class="input-group=text form-control" placeholder="Username" type="text" name="username" value="<?php echo $found_user['user_name'];?>">
                </div> -->

                <!-- <div class="form-group">
                  <label>Password</label>
                  <input class="input-group=text form-control" placeholder="Password" type="password" name="password" value="<?php echo $found_user['user_pass'];?>">
                </div> -->

                <!-- <div class="form-group">
                  <label>Email address</label>
                  <input class="input-group=text form-control" placeholder="Email address" type="text" name="email" value="<?php echo $found_user['user_email'];?>">
                </div> -->

                <!-- <div class="form-group">
                  <label for="userLevel">User Level</label>
                  <select class="form-control" name="userlvl" id="userLevel">
                    <option value="">Please select a user level</option>
                    <option value="2">Web Admin</option>
              			<option value="1">Web Master</option>
                  </select>
                </div> -->

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
