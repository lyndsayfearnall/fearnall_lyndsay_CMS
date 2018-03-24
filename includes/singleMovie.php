<div class="container" id="singleMovie">
  <div class="row">

	<?php
		if(!is_string($getMovie)) {
			$row=mysqli_fetch_array($getMovie);
			echo "
      <div class=\"col-sm-12 mb-3\">
        <h1>{$row['movies_title']}</h1>
      </div>

      <div class=\"col-sm-10 col-md-5 pb-5\">
        <img src=\"images/dunkirk.jpg\" alt=\"{$row['movies_title']}\" width=\"90%\">
      </div>

      <div class=\"col-sm-12 col-md-7\">
  			<p>Released in {$row['movies_year']}</p>
        <p>Runtime: {$row['movies_runtime']}</p>
  			<p>{$row['movies_storyline']}</p>
  			<a href=\"index.php\" class=\"btn\">Back to All Movies</a>
      </div>
			";

		}else{
			echo "<p>{$getMovie}</p>";
		}

	?>

  </div>
</div>
