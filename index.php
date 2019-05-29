<?php
/*
===================
History of PHP
===================
Creator of PHP: Rasmus Lerdorf.
PHP Sence: 1994.
PHP   = Personal Home Page
or
PHP   = PHP Hipertext Preprosesor.
HTTP  = Hyper Text Transfer Protocol.
HTTPS = Securite socet leyars.
URL   = Uniform Resource Locator. 
WAMP  = Windows Apache MySQL PHP.
XAMPP = Cross Platform Apache MariaDB PHP and Perl
SQl   = stactur query language.


.........................................................
variable 3 items:

1nd = LOCAL VARIABLE.  (Write in function & access from function.)
2st= GLOBALS VARIABLE. (Write out of function & access out from function.)
		{
		SUPER GLOBAlS: (access in function.) 
			
			$_POST
			$_GET
			$_FILES
			$_SESSION
			$_COOKIES
			$_GLOBALS
			$_SERVER
			$_REQUEST

		}
3rd = STATICT VARIABLE.(not want to change value.)
*/

/*============================================
============================================
variable
============================================
============================================*/
$a = "Hello!";
echo $a."<br>";
// ............................................
$a = "Hello!";
$b = "This is PHP programing.";
echo $a." ".$b."<br>";
// ............................................
$x = 12;
$y = 13;
echo $x+$y."<br><br>";
// ............................................
echo "First number is: 12"."<br>";
echo "Secend number is: 13"."<br>";
$x = 12;
$y = 13;
$z = $x+$y;
echo "The sum is:"." ".$z."<br><br>";


echo "First number is: 13"."<br>";
echo "Secend number is: 12"."<br>";
$x = 13;
$y = 12;
$z = $x-$y;
echo "The minus is: ".$z."<br><br>";


echo "First number is: 13"."<br>";
echo "Secend number is: 12"."<br>";
$x = 13;
$y = 12;
$z = $x*$y;
echo "The multiply is: ".$z."<br><br>";


echo "First number is: 12"."<br>";
echo "Secend number is: 4"."<br>";
$x = 12;
$y = 4;
$z = $x/$y;
echo "The divide is: ".$z."<br><br>";


echo "First number is: 15"."<br>";
echo "Secend number is: 12"."<br>";
$x = 15;
$y = 12;
$z = $x%$y;
echo "The Modulus is: ".$z."<br><br>";
/*============================================
============================================
constant variable (not change value)
============================================
============================================*/

echo "Constant variable:"."<br>";
define('shamim', 1000);
echo shamim."<br><br>";

echo "Another Constant variable:"."<br>";
define('SHAMIM', 1000);
echo SHAMIM."<br><br>";
/*============================================
============================================
function
============================================
============================================*/
echo "Function String:"."<br>";

function show($a, $s,$b){
 // peramitar  ^  ^  ^
	echo $a.$s.$b;
}
show('Shamim',' ','Dewan');
//argoment^    ^     ^  
echo "<br><br>";
// ....................................................
echo "Function Intiger:"."<br>";

function add($a, $b,$c){
// peramitar  ^  ^  ^
	echo $a+$b*$c;
}
        add(10,20,30);
//argoment  ^   ^  ^
echo "<br><br>";
/*============================================
============================================
Building function
============================================
============================================*/
echo "string lenght:"."<br>";

$length = "Shamim Dewan";
$result = strlen($length);
echo $result."<br><br>";
// ..............................................
echo "string word count:"."<br>";

$abc = "Shamim Dewan";
$count = str_word_count($abc);
echo $count."<br><br>";
// ......................................................
echo "revers: Dhaka"."<br>";

$rev = "Dhaka";
$rev_result = strrev($rev);
echo $rev_result."<br><br>";
// ...........................................
echo "replace Shamim Dewan to: "."<br>";
$rep = "Shamim Dewan";
echo str_replace("Dewan", "Ahamad.", $rep)."<br>";


?> 

<?php 
$s = "shamim";
$d = 5;
$d .=$s;
echo $d;

echo "shamim dewan";

 ?>

