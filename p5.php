<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$month=date('m');
echo "What is the current month?"."</br>";
echo $month."</br>";
switch($month){
	case(1):{
		echo "its january";
		break;
		}
		case(2):{
		echo "its febuary";
		break;
		}
		case(3):{
		echo "its march";
		break;
		}
		case(4):{
		echo "its april";
		break;
		}
		case(5):{
		echo "its may";
		break;
		
		}
		default:{
			echo "not properly defined";
			}
	}


?>
</body>
</html>