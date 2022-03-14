<?php
$name = "Justin";
$credit = 16;
$temp = 10.10;   // loosely typed.

echo "<h3>below lists the types of variables declared and there values.</h3>";
var_dump($name);
echo "<br/>";
var_dump($credit);
echo "<br/>";
var_dump($temp);
echo "<br/>";

echo "<h3><i>Welcome $name , Based on the amount of credits you are taking, it seems you are a: </i></h3>";
if($credit>=12){
    echo " &nbsp;&nbsp;&nbsp;&nbsp;Full Time Student<br />";
}
else{
    echo " &nbsp;&nbsp;&nbsp;&nbsp;Part Time Student <br />";
}

echo "<br/><br/><br/><br/><br/><br/> <h3>Below is some info on the file that is running, the server software, the host used, and the name of the browser.</h3>";

echo $_SERVER['PHP_SELF'];
echo "<br/>";

echo $_SERVER['SERVER_NAME'];
echo "<br/>";

echo $_SERVER['HTTP_HOST'];
echo "<br/>";

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br/>";



?>