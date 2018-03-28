<div class="container" id="singleMovie">
  <div class="row">

	<?php
		if(!is_string($getMovie)) {
			$row=mysqli_fetch_array($getMovie);
			echo "
      <div class=\"col-sm-12 mb-3\">
        <h1>{$row['movie_name']}</h1>
      </div>

      <div class=\"col-sm-10 col-md-7 pb-5\">

        <video src=\"videos/{$row['movie_clip']}\" alt=\"{$row['movie_name']}\" width=\"100%\" autoplay>
        </video>
      </div>

      <div class=\"col-sm-12 col-md-5\">
  			<p>Released in {$row['movie_year']}</p>
        <p>{$row['movie_director']}</p>
  			<p>{$row['movie_description']}</p>
        <p>User rating: &nbsp {$row['movie_rating']}/10</p>
  			<a href=\"index.php\" class=\"btn\">Back to All Movies</a>
      </div>
			";

		}else{
			echo "<p>{$getMovie}</p>";
		}

	?>

  </div>
</div>
