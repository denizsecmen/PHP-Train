<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
</head>
<body>
  <?php
  $val=0;
  while($val<10)
  {
    echo "Value of val:$val";
    echo "<br>";
    $val+=1;
  }
  echo "<br>";
  for($forval=0;$forval<10;$forval+=2)
  {
    echo "value of forval:$forval";
    echo "<br>";
  }
  ?>
</body>
</html>