<div class="container" id="mainBody">
    <div class="row mt-1 mb-5">
          <h1 class="col-12">Welcome to <span class="light-purple">Moviez R Cool</span>, the coolest place on the internet to look at awesome movies.</h1>
          <p class="col-12">Click on a movie to learn more about it.</p>
    </div>

  <div class="row">
  <?php
    if(!is_string($getMovies)){
      //if $getMovies is not a string, write content to page
      while($row = mysqli_fetch_array($getMovies)){
        echo
        "
            <div class=\"col-12 col-md-6 col-lg-4 text-center pb-5\">
              <div class=\"posterCon pb-4\">
                <h2 class=\"mb-3 pt-4\">{$row['movie_name']}</h2>
                <a href=\"singleMovie.php?id={$row['movie_id']}\"><img src=\"images/{$row['movie_picture']}\" alt=\"{$row['movie_name']}\" width=\"90%\"></a>
              </div>
            </div>
        ";
      }
    }else{
      echo "<p class=\"error\">{$getMovies}</p>";
    }
   ?>

   <!-- <img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\" width=\"80%\"> -->
   <!-- <a href=\"details.php?id={$row['movies_id']}\" id=\"detailsBut\" class=\"btn mb-2 mt-2\">Learn More</a> -->
    </div>
  </div>
