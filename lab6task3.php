<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$var1=10;
$var2=20;
echo "first var=".$var1." "."Second var=".$var2;
echo "</br>";
$temp;
$temp=$var1;
$var1=$var2;
$var2=$temp;
echo "first var=".$var1." "."Second var=".$var2;



?>
</body>
</html>