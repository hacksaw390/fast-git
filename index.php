<?php

date_default_timezone_set('Asia/Dhaka');

$date = date('d/m/y');
$time = date('h:i:s');
$am_pm =date('A');
$day = date('l');



	if ($time <=12 && $time >= 6  && $am_pm == 'AM') {
		echo "good morning ".$day." ".$date;

	}elseif ($time <= 3 && $time >= 12  && $am_pm == 'PM') {
		echo "good noon ".$day." ".$date;

	}elseif ($time <= 6 && $time >= 3  && $am_pm == 'PM') {
		echo "good afternoon ".$day." ".$date;

	}elseif ($time <= 12 && $time >= 6 && $am_pm == 'PM') {
		echo "good evening ".$day." ".$date;

	}elseif ($time <= 6 && $time >= 12 && $am_pm == 'AM') {
		echo "good night ".$day." ".$date;
	}
	else{
		echo "Invalid timezome";
	}

echo "<br>";
echo "<br>";

date_default_timezone_set('Asia/Dhaka');

$date = date('d/m/y');
$hour = date('h');
$min  = date('i');
$am_pm =date('A');
$day = date('l');



	if ($hour <= 12 && $hour >= 6  && $min <= 59 ) {
		echo "good morning ".$day." ".$date;

	}elseif ($hour <= 15 && $hour >= 12  && $min <= 59 ) {
		echo "good noon ".$day." ".$date;

	}elseif ($hour <= 18 && $hour >= 15  && $min <= 59 ) {
		echo "good afternoon ".$day." ".$date;

	}elseif ($hour <= 24 && $hour >= 18 && $min <= 59 ) {
		echo "good evening ".$day." ".$date;

	}elseif ($hour <= 6 && $hour >= 24 && $min <= 59 ) {
		echo "good night ".$day." ".$date;
	}
	else{
		echo "Invalid timezome";
	}




date_default_timezone_set("Asia/Dhaka");

$time1 = date("h:i:s A");
$time2 = date("h:i:s a");

echo $time1."<br>";
echo $time2."<br>";


$date1 = date("d/m/y");
$date2 = date("D/M/Y");
$date3 = date("D");

echo $date1."<br>";
echo $date2."<br>";
echo $date3."<br>";
// full day
$day  = date("l");

echo $day."<br>";



// switch condition problem.............
$num = 0;

	switch($num){

		case ($num > 100 || $num < 0):
			echo "invalid number";
			break;

		case ($num <= 100 && $num >= 80):
			echo "A+";
			break;

		case ($num <= 79 && $num >= 70):
			echo "A";
			break;

		case ($num <= 69 && $num >= 60):
			echo "A-";
			break;
		case ($num <= 59 && $num >= 50):
			echo "B";
			break;

		case ($num <= 49 && $num >= 40):
			echo "C";
			break;

		case ($num <= 39 && $num >= 33):
			echo "D";
			break;

	default:
	echo "fail";
	break;

}




// if condition........
$result = 0;

	if ($result > 100 || $result < 0 ) {
		echo "invalid numer";
	}elseif ($result <= 100 && $result >= 80){
		echo "A+";
	}elseif ($result <= 79 && $result >=70) {
		echo "A";
	}elseif ($result <= 69 && $result >= 60) {
		echo "A-";
	}elseif ($result <= 59 && $result >= 50) {
		echo "B";
	}elseif ($result <= 49 && $result >= 40) {
		echo "C";
	}elseif ($result <= 39 && $result >= 33) {
		echo "D";
	}
	else{
		echo "fail";
	}



$result = 59;

	if ($result <= 100 && $result >= 0) {
		if ($result >= 80) {
			echo "A+";
		}elseif ($result >=70) {
			echo "A";
		}elseif ($result >=60) {
			echo "A-";
		}elseif ($result >=50) {
			echo "B";
		}elseif ($result >=40) {
			echo "C";
		}elseif ($result >=33) {
			echo "D";
		}else{
			echo "fail";
		}

	}else{
		echo "invalid number";
	}

?>