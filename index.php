<?php 

$arrayName = array(10,2,5,52,5,5,);

foreach($arrayName as $shamim){
	echo $shamim."<br>";
}


for ($i=0; $i <=50 ; $i++) { 
	// if (($i%2)==0) {
	if (($i%2)==1) {
		
	echo $i."<br>";
	}


}


$letter='Gf';

	if ($letter=='a'||
		$letter=='A'||
		$letter=='e'||
		$letter=='E'||
		$letter=='i'||
		$letter=='I'||
		$letter=='o'||
		$letter=='O'||
		$letter=='u'||
		$letter=='U') {
		echo 'This is Vowel';
	}elseif ( $letter=='b'||
			  $letter=='B'||
			  $letter=='c'||
			  $letter=='C'||
			  $letter=='b'||
			  $letter=='D'||
			  $letter=='f'||
			  $letter=='F'||
			  $letter=='g'||
			  $letter=='G'||
			  $letter=='h'||
			  $letter=='H'||
			  $letter=='j'||
			  $letter=='J'||
			  $letter=='k'||
			  $letter=='K'||
			  $letter=='l'||
			  $letter=='L'||
			  $letter=='m'||
			  $letter=='M'||
			  $letter=='n'||
			  $letter=='N'||
			  $letter=='p'||
			  $letter=='P'||
			  $letter=='q'||
			  $letter=='Q'||
			  $letter=='r'||
			  $letter=='R'||
			  $letter=='s'||
			  $letter=='S'||
			  $letter=='t'||
			  $letter=='T'||
			  $letter=='v'||
			  $letter=='V'||
			  $letter=='w'||
			  $letter=='W'||
			  $letter=='x'||
			  $letter=='X'||
			  $letter=='y'||
			  $letter=='Y'||
			  $letter=='z'||
			  $letter=='Z'
						) {
		echo 'This is consonant';
	}
	else{
		echo 'You can check only one character';
	}




$i=1;
$j=1;

for ($i=1; $i<=10 ; $i++) { 

	echo $i."- multiplication table"."<br>";

	for ($j=1; $j <=10 ; $j++) { 
	$k=$j*$i;

		echo $i.'x'.$j.' = '.$k."<br>";
	}
	
}



$i=0;
$n=50;

while ($i<10) {
	$n--;
	$i++;
}
echo $n."<br>";
..............................
$i=0;
do {
	echo $i;
	$i++;
} while ($i <= 20);
.................................
$i=0;
while($i <=20){
	echo $i;
	$i++;
}
.......................?
$i=20;
while($i >0){
	echo $i;
	$i=$i-2;
}

.......................................
for ($i='A'; $i <'Z' ; $i++) { 
	echo $i."<br>";
}
.........................
for($i=0; $i<=20; $i++){
	echo $i;
}
..........................
for($i=20; $i>=0; $i=$i-3){
	echo $i."<br>";
}
....................
for($i=0; $i<=20; $i=$i+2){
	echo $i."<br>";
}
 ?>