<?php

$name="Safiah";
$course="Ijazah Sarjana Muda Sains";
$cgpa=3.28;
if($cgpa==4.0)
{
	$grade="first Class";
}else if ($cgpa >=3.33 && $cgpa<=3.99){
	$grade="second class";
}else if ($cgpa >=2.67 && $cgpa<=3.30){
    $grade="third class";
}else{ 
	$grade=null;
}
if($grade ==null){
	echo "Please enter the correct CGPA";
}else{
 echo "Welcome".$name.".You have enroll ".$course." .Based on your CGPA (".$cgpa."), your grade is ".$grade;
}


?>