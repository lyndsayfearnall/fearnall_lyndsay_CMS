<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('phpscripts/config.php');

  $tbl = "tbl_genre";
	$genQuery = getAll($tbl);

	if(isset($_POST['submit'])){
		 $title = $_POST['title'];
		 $poster = $_FILES['poster'];
     // $trailer = $_FILES['trailer'];
     $year = $_POST['year'];
     $storyline = $_POST['storyline'];
     $rating = $_POST['rating'];
     $director = $_POST['director'];
		 // $uploadMovie = addMovie($title, $poster, $trailer, $year, $storyline, $rating, $director);
     $uploadMovie = addMovie($title, $poster, $year, $storyline, $rating, $director);
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
  <title>Add Movie</title>
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
             <?php if(!empty($message)){echo $message;}?>
            <form action="admin_addMovie.php" method="post">
               <div class="form-group">
                 <label>Movie Title</label>
                <input class="input-group=text form-control" placeholder="Movie Title" type="text" name="title">
               </div>

               <div class="form-group">
                 <label>Poster Image</label>
                 <div class="custom-file">
                     <input type="file" class="custom-file-input" name="poster">
                     <label class="custom-file-label">Select a file</label>
                 </div>
               </div>

               <!-- <div class="form-group">
                 <label>Trailer</label>
                 <div class="custom-file">
                     <input type="file" class="custom-file-input" name="trailer">
                     <label class="custom-file-label">Select a file</label>
                 </div>
               </div> -->

               <div class="form-group">
                 <label>Year</label>
                 <input class="input-group=text form-control" placeholder="Year" type="number" name="year">
               </div>

               <div class="form-group">
                 <label>Storyline</label>
                 <textarea class="form-control" name="storyline">Storyline</textarea>
               </div>

               <div class="form-group">
                 <label>Rating</label>
                 <select class="custom-select" name="rating">
                    <option selected>Select a rating</option>
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
                 <input class="input-group=text form-control" placeholder="Director" type="text" name="director">
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

              <button type="submit" name="submit" value="Update Movie" class="btn btn-primary">Add Movie</button>
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
