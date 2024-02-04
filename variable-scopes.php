<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variable scopes</title>
</head>
<body>
  <?php
  $a=10;
  function local(){
    $c=44;
    echo "<p>a is local  variable and value is: $a</p>";//Raise a error.
  }
  local();
  echo "<p>c is local variable and only accesible:$c</p>"; //$c is not accesible.
  //Global keyword
  $b=133;
  $a=45;
  function adder(){
    global  $a,$b;//Reach global element with global keyword
    $a=$a+$b;
  }
  adder();
  echo "Adder result of a+b:$a";
  ?>
</body>
</html>