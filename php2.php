<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$var1=90;
$var2="16SW06";
$var3=89.086;
$var4=true;
$var5=array(23,45,56,76,67,90,647,4);
$var6=null;
echo "<h1>DATATYPES</h1>";
var_dump($var1);
echo "</br>";
var_dump($var2)."</br>";
echo "</br>";
var_dump($var3)."</br>";
echo "</br>";
var_dump($var4)."</br>";
echo "</br>";
var_dump($var5)."</br>";
echo "</br>";
var_dump($var6)."</br>";
echo "</br>";
function fun(){
	echo "THIS IS A FUNCTION";
	return;
	}
fun();
$rollno;
class Student{
	 function Roll(){
		 $this->$rollno="16SW06"; 
		 }}
$objt=new student();
echo $objt.Roll();

class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>
</body>
</html>
