<?php
  function single_edit($tbl, $col, $id){
    $result = getSingle($tbl, $col, $id);
    $getResult = mysqli_fetch_array($result);
    //echo mysqli_num_fields($result); we can dig down to look at more than just the content, tells us how many columns are in the table
    //go through and get information about each one
    echo "<form action=\"phpscripts/editall.php\" method=\"post\">";
    echo "<input hidden name=\"tbl\" value=\"{$tbl}\">";
    echo "<input hidden name=\"col\" value=\"{$col}\">";
    echo "<input hidden name=\"id\" value=\"{$id}\">";

    for($i=0; $i<mysqli_num_fields($result); $i++)
    {
      $dataType = mysqli_fetch_field_direct($result, $i);
      //-> reaches inside data properties
      $fieldname = $dataType -> name;
      // echo $fieldname. "<br>";
      $fieldtype = $dataType -> type;
      // echo $fieldtype."<br>";
      //make sure they can't edit id
      if($fieldname != $col){
        echo "
        <div class=\"form-group\">
          <label>{$fieldname}</label>";
        if($fieldtype != "252"){
          echo "
          <input class=\"input-group=text form-control\" type=\"text\" name=\"{$fieldname}\" value=\"{$getResult[$i]}\">
          </div>";
          echo $fieldtype;
        }else{
          echo "<textarea class=\"form-control\" name=\"{$fieldname}\">{$getResult[$i]}</textarea>";
          echo $fieldtype;
        }
      }
    }
    echo "<input type=\"submit\" name=\"submit\" value=\"Update Movie\" class=\"btn btn-primary\">";
    echo "</form>";
  }
?>
