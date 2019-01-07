<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$var=40;
echo "value=".$var;
echo "</br>";
echo ($var < 10) ? "ten" : ($var<20) ? "twenty" : ($var <30)? "thyirty" : "non of these" ;
echo "</br>";
echo "using operator single time";
echo ($var < 10 &&  $var < 20 && $var < 30)."</br>"? "output:true.</br>" :"output:false.</br>" ;


?>
</body>
</html>