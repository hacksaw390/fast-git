<?php 

// first ami korci
// ...........................................
// for ($i=1; $i <=100 ; $i++) { 
// 	if (($i%2)!=0 && ($i%3)!=0 && ($i%5)!=0 && ($i%7)!=0) {
		
// 	echo $i."<br>";
// 	}
	
// }


// ager kota chilo
// ..............................................

// for($i=1; $i>=2; $i++)
// 		{
// 			if($i==2 || $i==3 || $i==5 || $i==7)
// 				{
// 					echo " $i";
// 				}
// 			else if(($i%2)!= 0 && ($i%3)!=0 && ($i%5)!=0 && ($i%7)!=0)
// 				{
// 					echo " $i";
// 				}
// 			else
// 			continue;
// 		}


// net theke namano
// ...........................................

// $count = 0;  
// $num = 2;  

// 	while ($count < 25 ) {  
// 	$div_count=0;  
// 		for ( $i=1; $i<=$num; $i++)  {  
// 			if (($num%$i)==0) { 

// 				$div_count++;  
// 			}  
// 		}  
// 		if ($div_count<3){   

// 			echo $num." , ";  
// 			$count=$count+1;  
// 		}
		  
// 	$num=$num+1;  
// 	}  

// .......................................
// noyon
// .......................................
// function prime($n){
//   if($n == 1)
//     return 0;

// for($i=2 ; $i <= $n/2 ; $i++){

//     if($n % $i == 0 )
//       return 0;
//   }
//   return 1;
// }
// $n = 5;

// $flag = prime($n);

//   if($flag == 1){
//   echo "Prime";
//   }else{
//     echo 'Not Prime';
//   }




// ..................................................
// All prime number
// ..................................................
// function prime($n){
//   if($n == 1)
//     return 0;

// for($i=2 ; $i <= $n/2 ; $i++){

//     if($n % $i == 0 )
//       return 0;
//   }
//   return 1;
// }

// for ($n=2; $n <=1000 ; $n++) { 	
// 	$allprime = prime($n);
// 	if($allprime == 1)
// 		echo $n."<br>";
// }
// .............................................
// palindrome
// .............................................

// $a = 'noyon';
// $a = 121;
// $b = strrev($a);

// if ($a == $b) {
// 	echo "This is palindrome";
// }else{
// 	echo 'This is not palindrome';
// }



// 100-1000 palindrome number

// for ($i=100; $i <1000 ; $i++) { 
	
// 	if($i == strrev($i))
// 		echo $i.'<br>';
	
// }




// ......................................
// lady
// ....................................///
// for($i=1;$i<=100;$i++){
//   $f=0;
//   for($j=2;$j<$i;$j++)
//   {
//     if(($i%$j)==0){
//       $f=1;
//       break;
// }
// }
// if($f==0){
//   echo $i.'<br>';
// }

// }




// $n=97;
// for($i=2;$i<$n;$i++)
// {
// $f=0;
//   if(($n%$i)==0){
//     $f=1;
//     break;
//   }
// }
// if($f==0){
//   echo 'prime number';
// }
// else {
//   echo 'not prime';
// }







// $a= 6;
// $b= 1;
// $c= -1;
// 	for ($i=$a; $i >=1 ; $i--) {

// 		$b = $b+$i;

// 	}
// 		echo $b+$c.'<br>';





// for ($i='A'; $i <'Z'; $i++) { 
// 	echo $i.'<br>';
// }




// $azRange = range('A', 'Z');
// foreach ($azRange as $letter)
// {
//   print("$letter\n");
// }



// foreach(range('a','z') as $v){
//     echo "$v \n";
// }

// assignment operator

// $x = 10;
// $y = 20;
// $z = 4;

// echo $x+=$y;
// echo '<br>';

// echo $x-=$z;
// echo '<br>';

// echo $x*=$z;
// echo '<br>';

// echo $x/=$z;
// echo '<br>';

// echo $x%=$z;


// ocnditional operator

// $a = 10;
// $b = 20;
// echo $a==$b;

// $a = 10;
// $b = 20;
// echo $a!=$b;

// $a = 10;
// $b = 10;
// echo $a==$b;

// $a = 20;
// $b = '20';
// echo $a==$b;

// $a = 20;
// $b = 20;
// echo $a===$b;

// $a = 20;
// $b = '20';
// echo $a===$b;

// $a = 10;
// $b = '20';
// echo $a!==$b;

// $a = 20;
// $b = 20;
// echo $a!==$b;





 ?>