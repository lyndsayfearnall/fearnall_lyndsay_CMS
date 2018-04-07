<?php
  // function addMovie($title, $poster, $trailer, $year, $storyline, $rating, $director){
  function addMovie($title, $year, $storyline, $rating, $director){
		include('connect.php');

    // if($_FILES['poster']['type'] == "image/jpeg" || $_FILES['poster']['type'] == "image/jpg" ){
    //   $target = "../images/{$poster['name']}"; //run through mysqli_escape_string so that sql injection doesn't happen...
    //   if(move_uploaded_file($_FILES['poster']['tmp_name'], $target)){
    //       $orig = $target;
    //       $th_copy = "../images/TH_{$poster['name']}"; //TH_ for thumbnail
    //       if(!copy($orig, $th_copy)){
    //         echo "failed to copy";
    //       }

        // if(move_uploaded_file($_FILES['trailer']['tmp_name'], $target)){
        //       $orig = $target;
        //       $th_copy = "../videos/TH_{$trailer['name']}"; //TH_ for thumbnail
        //       if(!copy($orig, $th_copy)){
        //         echo "failed to copy";
        //       }
        $addstring = "INSERT INTO tbl_movies VALUES (NULL, '{$title}', '', '','{$year}','{$storyline}', '{$rating}', '{$director}')";

        $addresult = mysqli_query($link, $addstring);
        // echo $addstring;
      //   if($addresult){
      //     $qstring = "SELECT * FROM tbl_movies ORDER BY movies_id DESC LIMIT 1"; //only selects the last ID
      //     $lastmovie = mysqli_query($link, $qstring);
      //     $row = mysqli_fetch_array($lastmovie);
      //     $lastId = $row['movies_id'];
      //
      //     $addgenre = "INSERT INTO tbl_mov_genre VALUES (NULL, {$lastId}, {$genre})"; //don't need quotes around $lastID and $genre because both are integers
      //     $genresult = mysqli_query($link, $addgenre);
      //     redirect_to("admin_editMovies.php");
      // }
    // }

    if($addresult){
     redirect_to("admin_editMovies.php");
    }else{
      $message = "There was a problem.";
      return $message;
    }

  mysqli_close($link);
}

function deleteMovie($id){
  include('connect.php');
  $delstring = "DELETE FROM tbl_movies WHERE movie_id={$id}"; //be very specific so that you don't delete the wrong or multiple users
  $delquery = mysqli_query($link, $delstring);
  if($delquery){
    redirect_to("../admin_editMovies.php");
  }else{
    $message = "Something went wrong.";
    return $message;
  }
  mysqli_close($link);
}

function updateMovie($id, $title, $year, $storyline, $rating, $director){
  include('connect.php');
  $updatestring = "UPDATE tbl_movies SET movie_name='{$title}', movie_year='{$year}', movie_description='{$storyline}', movie_rating='{$rating}', movie_director='{$director}' WHERE movie_id={$id}";
  echo $updatestring;
  // $updatequery = mysqli_query($link, $updatestring);
  // if($updatequery){
  //   redirect_to("admin_editMovies.php");
  // }else{
  //   $message = "There was a problem changing this infomation, please contact your web admin.";
  //   return $message;
  // }
  // mysqli_close($link);
}
?>
