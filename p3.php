<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
<?php 
echo "STRING IN PHP"."</br>";

$var="HELLO TANIA 16SW06";
echo "string is=".$var."</br>";
echo "length of string=".strlen($var)."</br>";
echo "number of words=".str_word_count($var)."</br>";
echo "reverse of string=".strrev($var)."</br>";
echo "find the position of word tania=".strpos("HELLO TANIA 16SW06", "TANIA")."</br>"; 
echo "replace tania with tania khan=".str_replace("TANIA","TANIA KHAN","HELLO TANIA 16SW06")."</br>";

?>

</body>
</html>
