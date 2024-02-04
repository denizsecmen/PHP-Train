<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imagine Bar</title>
</head>
<body>
  <form method="get" action="">
    <input type="text"  name="age" placeholder="Enter your age...">
    <input type="submit" value="Submit">
  </form> 
  <?php
  if($_GET['age']<18)
  {
    echo "Get off kiddo!";
  }
  elseif($_GET['age']>18 and $_GET['age']<24)
  {
    echo "You can enter.But be careful!";
  }
  else
  {
    echo "Welcome to our Guest!";
  }
  ?>
</body>
</html>