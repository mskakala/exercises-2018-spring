<?php
$number = $_POST['number'];

for($i=1;$i<=10;$i++){
	
	echo $number.' x '.$i.' = ';
	echo  $number * $i;
	echo "<br>";
	
	
}

?>