<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
echo "<h2>ARRAY</h2>";
echo "determine whether the array elements are palindrome or not???.</br>";
$Array=array('maam','madam','dad','sad','pop','wow','saw');
$length=count($Array);
foreach($Array as $val){
	if($val==strrev($val)){
		echo $val." is a palindrome.</br>";
		}
		else{
			echo $val. " is not a palindrome.</br>";
			}
	}
echo "</br>";
echo "<h2>ASSOCIATIVE ARRAY</h2>";
$Asarray=array("TANIA"=>"16SW06","SIDRA"=>"16SW36","KASHMAALA"=>"16SW44","JAWERIA"=>"16SW04","SAPNA"=>"16SW22");
foreach($Asarray as $x=>$x_val){
	echo "key=".$x." "."value=".$x_val."</br>";
	
	}
?>
</body>
</html>