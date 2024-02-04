<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings</title>
</head>
<body>
  <?php
  $y="Hello World";
  echo "double quote:$y";//Double quote allows use speacial charecters
  echo "<br>";
  echo 'single quote:$y';//Single quote don't allow use speacial charecters.Takes all speacial charecters as string.
  echo "<br>";
  $leny=str_word_count($y);
  echo "Word length of y:$leny";
  echo "<br>";
  echo "Postion of 'New' string in 'Happy New Year' string:";
  echo strpos('Happy New Year','New');//Get position of string of 
  echo "<br>";
  echo 'Word lenght $y:';
  echo strlen($y);
  ?>
</body>
</html>