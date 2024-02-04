<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>
<body>
  <?php
  $x=5;
  $y=10;
  echo "<div>";
  echo "Variable value and type of x:";
  echo var_dump($x);//Learn typeof of x
  echo "<br>";
  echo "Variable value and type of y:";
  echo var_dump($y);
  echo "</div>";
  echo "<div>";
  echo "Addition:";
  echo "x add y is equal to:";//Print total value x+y;
  echo $x+$y;//Addition
  echo "<br>";
  echo "x minus to y equal to:";
  echo $x-$y;//Minus
  echo "<br>";
  echo "x production to y equal to:";
  echo $x*$y;//Production
  echo "<br>";
  echo "x division y equals to:";
  echo $x/$y;//Division
  echo "<br>";
  echo "x mod y equals to:";
  echo $x%$y;
  echo "</div>";

  ?>
</body>
</html>