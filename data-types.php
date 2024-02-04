<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Types</title>
</head>
<body>
  <?php
  //var_dump() shows data types.
  echo "<div>";
  $str="This is string";//This is string.
  echo "str is:";
  echo var_dump($str);
  echo "<br>";
  $int=45;//This is integer.
  echo "int is:";
  echo var_dump($int);
  echo "<br>";
  $flo=5.6;
  echo "flo is:";
  echo var_dump($flo);
  echo "<br>";
  $bool=true;
  echo "bool is:";
  echo var_dump($bool);
  echo "<br>";
  $cars=array("BMW","Bugatti","Opel","Toyota");
  echo "cars is:";
  echo var_dump($cars);
  echo "<br>";
  class Car{
    public $color;
    public $model;
    public function __construct($color,$model)
    {
      $this->color=$color;
      $this->model=$model;
    }
    public function message()
    {
      return "My car is a".$this->color.$this->model."!";
    }
  }
  $car=new Car("red","Ferrari");
  echo "Car is:";
  echo var_dump($car);
  echo "<br>";
  $nll=null;
  echo "nll is:";
  echo var_dump($nll);
  echo "<br>";
  //Data type change
  $numbr=10;
  $numbr=(string)$numbr;//change value to string.
  echo "</div>";
  ?>
</body>
</html>