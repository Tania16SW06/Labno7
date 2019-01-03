<?php 
$input=80;
if($input>=85 && $input<=100)
{ 
	echo "Your garde is A+";
}
else if($input>=80 && $input<=84){
    echo "Your grade is A";
}
else if($input>=75 && $input<=79){
	echo "Your grade is B+";

}
else if($input>=70 && $input<=74){
	echo "Your grade is B";

}
else if($input>=65 && $input<=69){
	echo "Your grade is C+";

}
else if($input>=60 && $input<=64){
	echo "Your grade is C";

}
else if($input>=55 && $input<=59){
	echo "Your grade is D+";

}
else if($input>=50 && $input<=54){
	echo "Your grade is D";

}
	else if($input<50){
    echo "Fail";

	}
else{

	echo "Enter marks between 0 to 100";
}
    echo "<br>";
$age=18;
switch($age)
{
    case 1:
	case 2:	
	case 3:	
	case 4:	
	case 5:	
	case 6:	
	case 7:	
	case 8:	
	case 9:	
	case 10:
	case 11:	
	case 12:
	echo "child";
	break;
	case 13:	
    case 14:
	case 15:
	case 16:
	case 17:
	case 18:
	case 19:
	echo "Teenager";
	break;
	case 20:
	case 21:	
	case 22:	
	case 23:	
	case 24:	
	case 25:	
	case 26:	
	case 27:	
	case 28:
	case 29:
	case 30:
	echo "Middle Age";
	break;
	case 31:
	case 32:
	case 33:
	case 34:
	case 35:
	case 36:
	case 37:
	case 38:
	case 39:
	case 40:
	case 41:
	case 42:
	case 43:
	case 44:
	case 45:
	case 46:
	case 47:
	case 48:
	case 49:
	case 50:
	echo "Adult";
	break;
	default:
	echo "Old";
}
	$i=1;
$arr=array();
for($i=1;$i<=20;$i++){
	if($i%2==0)
		continue;
	array_push($arr,$i);
}
$meanodd=(array_sum($arr))/count($arr);
echo "<br>";
echo "The mean of first 10 odd numbers is:$meanodd";
$arr1=array();
   $a=1;
for($a=1;$a<=20;$a++){
	if($a%2!=0)
		continue;
	array_push($arr1,$a);
}
 $meaneven=(array_sum($arr1))/count($arr1);
  echo "<br>";
echo "The mean of first 10 even numbers is:$meaneven";

$arr2=array();
	for($b=1;$b<=100;$b++){
	if($b%11!=0)
		continue;
	array_push($arr2,$b);
}
echo "<br>";
echo "Shuffle array:";
echo "<br>";
array_push($arr2,"00");
shuffle($arr2);
for($x = 0; $x <count($arr2); $x++) {
    echo $arr2[$x]." ";
}
   ?>