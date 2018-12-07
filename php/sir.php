<?php
$a = array();
  $a[0] = array('id','fname','lname','email');
  $a[1] = array(1,'Peter','Anderson','peter@gmail.com');
  $a[2] = array(2, 'Jon','Miller','john@gmail.com');
  $a[3] = array(3, 'Thomas','Swift','thomas@gmail.com');
  for($i=0; $i < count($a); $i++){
  	echo $a[$i][0] . " " . $a[$i][1] . " " . $a[$i][2] . " " . $a[$i][3] .PHP_EOL;
  }
 ?>
