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

 //draw the html file
 echo "<html>
      <head>
        <style>
          body{
            background-color: powderblue;
            font-family: monospace;
          }
          tr:nth-child(odd){
            background-color: white;
          }
          tr:nth-child(even){
            background-color: lightgrey;
          }

          td, th{
            font-size: 25px;
            border: 2px solid black;
            text-align: left;
            padding: 12px;
          }
          tr:first-child{
            background-color: darkred;
            color: azure;
          }
          td:first-child{
            background-color: darkred;
            color: azure;
          }
        </style>
      </head>
      <body>
 ";
  drawTable(100);

  echo "</body>
        </html>";
 ?>
