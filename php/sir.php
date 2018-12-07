<?php
$a = array();
  $a[0] = array('id','fname','lname','email');
  $a[1] = array(1,'Peter','Anderson','peter@gmail.com');
  $a[2] = array(2, 'Jon','Miller','john@gmail.com');
  $a[3] = array(3, 'Thomas','Swift','thomas@gmail.com');
  for($n=0; $n < count($a); $n++){
  	echo $a[$n][0] . " " . $a[$n][1] . " " . $a[$n][2] . " " . $a[$n][3] .PHP_EOL;
  }
 ?>
