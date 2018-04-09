<?php
  include('connect.php');

  //gather variables from the form, these pieces will always be consistent (content within will change)
  $tbl = $_POST['tbl'];
  $col = $_POST['col'];
  $id = $_POST['id'];

  //grab information that you need out of post array, run unset to remove extra count (from submit button)
  unset($_POST['tbl']);
  unset($_POST['col']);
  unset($_POST['id']);
  unset($_POST['submit']);

  //count the number of items in the array, need number to be equal to the number of rows you want to edit
  //echo count($_POST);
  $num = count($_POST);

  $qstring = "UPDATE {$tbl} SET ";

  //everything between two $qstring(s) changes, qstrings stay the same
  foreach($_POST as $key => $value){
    $value = mysqli_real_escape_string($link, $value);
    $count++;
    if($count !=$num){
      //add commas
      $qstring .= $key."='" .$value. "', ";
    }else{
      //add space
      $qstring .= $key."='" .$value. "' ";
    }
    // echo "ESCAPE STRING:".mysqli_real_escape_string($value);
  }
  $qstring .= "WHERE {$col}={$id}";
  $updatequery = mysqli_query($link, $qstring);
  if($updatequery){
    header("Location:../admin_editMovies.php");
  }else{
    echo "There was a problem with the server, please contact the web admin";
  }

  mysqli_close($link);
?>
