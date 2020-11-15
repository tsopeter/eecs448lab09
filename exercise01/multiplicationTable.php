<?php
//  error_reorting(E_ALL);
//  ini_set("display_errors", 1);

  function drawTable($n){
    //echo the table Object
    echo "<table id=\"multiplicationTable\" class=\"mulTable\" >";
    for($i = 0; $i <= $n; $i++){
      echo "<tr>";
      for($k = 0; $k <= $n; $k++){
        if($k == 0 && $i == 0){
          echo "<td> &nbsp </td>";
        }
        else if($i == 0 ){
          echo "<td>" . $k . "</td>";
        }
        else if($k == 0){
          echo "<td>" . $i . "</td>";
        }
        else{
          echo "<td>" . $i * $k . "</td>";
        }
      }
      echo "</tr>";
    }
    echo "</table>";
  }

  drawTable(10);
 ?>
