<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('phpscripts/config.php');

  $tbl = "tbl_genre";
	$genQuery = getAll($tbl);

	if(isset($_POST['submit'])){
		 $title = $_POST['title'];
		 $coverImg = $_FILES['coverImg'];
		 $year = $_POST['year'];
		 $runtime = $_POST['runtime'];
		 $storyline = $_POST['storyline'];
		 $trailer = $_FILES['trailer'];
		 $release = $_POST['release'];
		 $genre = $_POST['genList'];
		 $uploadMovie = addMovie($title, $coverImg, $year, $runtime, $storyline, $trailer, $release, $genre);
		 $message = $uploadMovie;
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
  <?php if(!empty($message)){echo $message;} ?>
  <?php
    include('../includes/adminNav.php');
   ?>
  <div class="container-fluid">
    <div class="row">
      <?php
        include('../includes/adminSidebar.php')
       ?>

       <div class="col-10 mt-1" id="addUser">
         <div class="ml-2 mt-4 mb-5 card">
           <div class="card-header">
             <h1>Add a Movie</h1>
           </div>
            <div class="card-body">

            	<form action="admin_addMovie.php" method="post"  enctype="multipart/form-data">

                <div class="form-group">
                  <label>Movie Title</label>
              		<input class="input-group=text form-control" placeholder="Movie title" type="text" name="title">
                </div>

                <div class="form-group">
                  <label>Poster Image</label>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name="coverImg">
                      <label class="custom-file-label">Upload .jpg</label>
                  </div>
                </div>

                <div class="form-group">
                  <label>Year</label>
                  <input class="input-group=text form-control" placeholder="Year" type="number" name="year">
                </div>

                <div class="form-group">
                  <label>Runtime</label>
                  <input class="input-group=text form-control" placeholder="Runtime" type="text" name="runtime">
                </div>

                <div class="form-group">
                  <label>Storyline</label>
                  <input class="input-group=text form-control" placeholder="Storyline" type="text" name="storyline">
                </div>

                <div class="form-group">
                  <label>Trailer</label>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name="trailer">
                      <label class="custom-file-label">Upload .mp4 file</label>
                  </div>
                </div>

                <div class="form-group">
                  <label>Release date</label>
                  <input class="input-group=text form-control" placeholder="Release date" type="date" name="release">
                </div>

                <div class="form-group">
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
                </div>

            		<button type="submit" name="submit" value="Add Movie" class="btn btn-primary">Add Movie</button>
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
