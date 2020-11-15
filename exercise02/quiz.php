<?php
  //get data from pst

  $a = array('MADRID', 'Magnavox Odyssey', 'Affine Texture Warping', 'align-item', 'Roger Marshall');
  $b = array($_POST['question01'], $_POST['question02'], $_POST['question03'], $_POST['question04'], $_POST['question05']);
  $c = array("<p> What is the capital of Portugal: </p>", "<p> What was the first home game console? </p>", "<p> What did the first-generation PlayStation suffer from: </p>", "<p> What is NOT a valid CSS attribute: </p>", "<p> Who won the 2020 Senate Election in Kansas? </p>");


  $d = 0;
  for($i = 0; $i < 5; $i++){
    if($a[$i] == $b[$i]){
      $d++;
    }
  }

  $d = $d * 20;

  $e = "";
  for($i = 0; $i < 5; $i++){
    $e = $e . $c[$i] . "</br> <p> Your answer: " . $b[$i] . "</br>Corret Answer: " . $a[$i] . "</br>";
  }

  //create html index
  echo "<html>";
  echo "  <head>";
  echo "    <style>";
  echo "      body{ background-color: powderblue; border: 5px darkslateblue; font-family: monospace; }";
  echo "      p{ background-color: white}";
  echo "    </style>";
  echo "  </head>";
  echo "  <body>";
  echo $e;
  echo " <p> Your score: " . $d . "%</p></br>";
  echo "  </body>";
  echo "</html>";
 ?>
