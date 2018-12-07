<?php
$cars = array(
  array("BMW",'525',2015),
  array("Audi",'A8',2014),
  array("Fiat",'500L',2015)
);

foreach($cars as $car){
  echo "Brand: " . $car[0] . ", model: " . $car[1] . ", age: " . $car[2] . PHP_EOL;
}
 ?>
