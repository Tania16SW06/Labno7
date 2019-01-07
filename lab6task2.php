<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

echo 'Current script owner: ' . get_current_user();
echo "</br>";
echo 'path of current script'.$_SERVER['SCRIPT_NAME'];//return path of 
echo "</br>";
echo 'Document root directory' .$_SERVER['DOCUMENT_ROOT'];
echo "</br>";
echo 'Operating system'.($_SERVER['HTTP_USER_AGENT']);
echo "</br>";
echo "</br></br>";
?>

<?php
echo $_SERVER['PHP_SELF'];  //return the  file name of cureent executing scipt
echo "<br>";
echo $_SERVER['SERVER_NAME'];//name of host server
echo "<br>";
echo $_SERVER['HTTP_HOST'];//returns the host header 
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];//
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];//return path of current scrit
echo "</br>";
echo $_SERVER['SCRIPT_FILENAME'];


?>
</body>
</html>