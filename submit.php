<!DOCTYPE html>
<html>
<head><title>Form Submition</title><head>
<body>
<h1>Form Submition Page</h1>
<?php
$name= $_POST["name"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$car=$_POST["car"];
$bike=$_POST["bike"];
$pet=$_POST["pet"];

echo "Welcome " .$name."<br>";
echo "Your gender is ".$gender."<br>";
if($car == "car"){
echo "You like ".$car."<br>";
}
if($bike == "bike"){
echo "You like ".$bike."<br>";
}
echo "Your pet is ".$pet."<br>";

?>
</body>
</html>