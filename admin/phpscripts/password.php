<?php
  function generatePass($passlength){
    $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($characters), 0, $passlength);
  }
?>
