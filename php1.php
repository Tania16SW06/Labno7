<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php   
$var="<h1>VARIABLES</h1>";
$var1="<h1>ADDITION</h1>";
$var2="<h1>SUBTRACTION</h1>";
$name="TANIA";
$lname="KHAN";
$roll ="16SW06";
echo $var."</br>";
echo  $name." ".$lname."(".$roll.")" ;
echo $var1."</br>";
function add($wr1,$wr2){
	$wr3=$wr1+$wr2;
	return $wr3;
	}
echo "5+7=".add(5,7);	
echo $var2."</br>";
function sub($wr1,$wr2){
	$wr3=$wr1-$wr2;
	return $wr3;
	}
echo "5-7=".sub(5,7);		
	?>
</body>
</html>
