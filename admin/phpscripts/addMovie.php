<?php
  function addMovie($title, $coverImg, $year, $runtime, $storyline, $trailer, $release, $genre){
		include('connect.php');

    if($_FILES['coverImg']['type'] == "image/jpeg" || $_FILES['coverImg']['type'] == "image/jpg" ){
      $target = "../images/{$coverImg['name']}"; //run through mysqli_escape_string so that sql injection doesn't happen... add in later, we're not doing it in class
      if(move_uploaded_file($_FILES['coverImg']['tmp_name'], $target)){
          $orig = $target;
          $th_copy = "../images/TH_{$coverImg['name']}"; //TH_ for thumbnail
          if(!copy($orig, $th_copy)){
            echo "failed to copy";
          }

        if(move_uploaded_file($_FILES['trailer']['tmp_name'], $target)){
              $orig = $target;
              $th_copy = "../videos/TH_{$trailer['name']}"; //TH_ for thumbnail
              if(!copy($orig, $th_copy)){
                echo "failed to copy";
              }
        $addstring = "INSERT INTO tbl_movies VALUES (NULL, '{$coverImg['name']}', '{$title}', '{$year}','{$runtime}', '{$storyline}', '{$trailer}', '{$release}')";

        $addresult = mysqli_query($link, $addstring);
        if($addresult){
          $qstring = "SELECT * FROM tbl_movies ORDER BY movies_id DESC LIMIT 1"; //only selects the last ID
          $lastmovie = mysqli_query($link, $qstring);
          $row = mysqli_fetch_array($lastmovie);
          $lastId = $row['movies_id'];

          $addgenre = "INSERT INTO tbl_mov_genre VALUES (NULL, {$lastId}, {$genre})"; //don't need quotes around $lastID and $genre because both are integers
          $genresult = mysqli_query($link, $addgenre);
          redirect_to("admin_editMovies.php");
      }
    }
  }
  }
  mysqli_close($link);
}
?>
