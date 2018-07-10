<?php
$myArr = array("John", "Mary", "Peter", "Sally");
$myJSON = json_encode($myArr);
 
SEND this varialbe $myJSON TO ANDROID /IPHONE applicaiton


echo "<pre> PHP ARRAY";
print_r($myArr);
echo "</pre>";

echo "<pre> JSON ENCODE FUCNTION";
print_r($myJSON);
echo "</pre>";

$myJSONdecodevalue = json_decode($myJSON);
echo "<pre> JSON DECODE FUNCTION ";
print_r($myJSONdecodevalue);
echo "</pre>";




?>