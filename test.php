<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota"); 
define("GREETING", "Welcome to W3Schools.com!");
echo "<br>";
echo GREETING;
echo "<br>";
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
print_r($cars);
echo "<br>";
echo count($cars); 


?>

</body>
</html>