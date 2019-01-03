<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$tdate=date("Y/m/d");
$num=date('m');
$year=date('y');

echo "Today's date is "." ".$tdate."</br>";
echo "The time is". date("h:i:sa")."</br>";
if($num==1 ){
	echo "ITS JANUARY";
	}
if($num==2){
	echo "ITS FEBUARY";
	}
if($num==3){
	echo "ITS MARCH";
	}
	echo "</br>";
if($year==2018){
	echo "welcome to 2018";
	}	
	else{
		echo "2018 is ended,welcome to 2019";
		}
		echo "</br>";
if ($nm=0){
	echo "year not started yet";
	}		
else if($num=1){
	echo "Year staerted welcome";}
else{
	echo "we are unaware";
	}	
	
?>


</body>
</html>