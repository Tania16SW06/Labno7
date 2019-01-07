<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

echo $_SERVER['HTTP_HOST']."</br>";
echo $_SERVER['SERVER_PROTOCOL']."</br>";
echo $_SERVER['SCRIPT_NAME']."</br>";
echo "</br></br>";


$url = 'https://www.w3schools.com/php/php_superglobals.asp'."</br>";
echo "url:".substr($url,0,50)."</br>";
echo "Scheme:".substr($url,0,5)."</br>";
echo "host".substr($url, 7,18)."</br>";
echo "path:".substr($url, 26)."</br>";

?>

<?php
$url = 'https://www.w3schools.com/php/php_superglobals.asp'."</br>";
//$keywords = preg_split("# # ", $url,-1, PREG_SPLIT_NO_EMPTY);

 
$keywords = preg_split("#/# ", $url,-1, PREG_SPLIT_NO_EMPTY);
echo "URL".$url."</br>";
echo "SCHEME:".$keywords[0]."</br>";
echo "HOST:".$keywords[1]."</br>";

//echo "PATH:".$keywords[2].$keywords[3].$keywords[4]."</br>";
$key= (explode("com",$url));
echo "PATH:".$key[1];

?>
</body>
</html>