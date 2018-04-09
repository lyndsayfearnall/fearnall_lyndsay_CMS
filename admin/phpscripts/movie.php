<?php
function addMovie($title, $coverImg, $trailer, $year, $storyline, $rating, $director, $genre){
include('connect.php');

  if($_FILES['coverImg']['type'] == "image/jpeg" || $_FILES['coverImg']['type'] == "image/jpg" ){
    $target = "../images/{$coverImg['name']}"; //run through mysqli_escape_string so that sql injection doesn't happen... add in later, we're not doing it in class
    if(move_uploaded_file($_FILES['coverImg']['tmp_name'], $target)){
        $orig = $target;
        $th_copy = "../images/TH_{$coverImg['name']}"; //TH_ for thumbnail
        if(!copy($orig, $th_copy)){
          echo "failed to copy";
        }
      }
    }

  if($_FILES['trailer']['type'] == "video/mp4"){
    $target = "../videos/{$trailer['name']}";
    if(move_uploaded_file($_FILES['trailer']['tmp_name'], $target)){
      $orig = $target;
      $th_copy = "../videos/TH_{$trailer['name']}";
      if(!copy($orig, $th_copy)){
        echo "failed to copy";
      }
    }
  }

    $addstring = "INSERT INTO tbl_movies VALUES (NULL, '{$title}', '{$coverImg['name']}', '{$trailer['name']}', '{$year}', '{$storyline}', '{$rating}', '{$director}')";
    // echo $addstring;
    $addresult = mysqli_query($link, $addstring);
    if($addresult){
      $qstring = "SELECT * FROM tbl_movies ORDER BY movie_id DESC LIMIT 1";
      $lastmovie = mysqli_query($link, $qstring);
      $row = mysqli_fetch_array($lastmovie);
      $lastId = $row['movie_id'];
      $addgenre = "INSERT INTO tbl_movies_genres VALUES (NULL, {$lastId}, {$genre})";
      $genresult = mysqli_query($link, $addgenre);
      redirect_to("admin_editMovies.php");
      }
mysqli_close($link);
}

function deleteMovie($id){
  include('connect.php');
  $delstring = "DELETE FROM tbl_movies WHERE movie_id={$id}"; //be very specific so that you don't delete the wrong or multiple users
  $delgenre = "DELETE FROM tbl_movies_genres WHERE movie_id={$id}";
  $delquery = mysqli_query($link, $delstring);
  if($delquery){
    redirect_to("../admin_editMovies.php");
  }else{
    $message = "Something went wrong.";
    return $message;
  }
  mysqli_close($link);
}

?>
