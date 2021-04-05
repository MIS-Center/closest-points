<html>
<head>
<title>PHP training</title>
</head>

<body>

<h1>Problem 1</h1>

<?php

$points = [[3,2],[4,2],[2,3]] ;


 
$dis = array() ;

// step 1: calculates distances of each point to center, I have added ordering or index to each element to clarify affect of sorting
for($i=0;$i<count($points) ;$i++){
	array_push( $dis , [ sqrt( pow(2,$points[$i][0])   + pow(2,$points[$i][1] ) ),$i ] )  ;   // distance between two points ,one of them is (0,0)
	echo  $dis[$i][0]  . "<br>"  ;
}

// it is just to print the order of each array of distance
function print_order_array($array){
	echo "<br>-----------Print Array---------------</br>";
	for($i=0;$i<count($array);$i++){
		echo $array[$i][1] . " "  ;
	}
	echo "<br>--------------------------</br>";
}

// print the order of array before sorting
print_order_array($dis) ;
 
 
// step 2 : sorting distance by closest to center
for($i=0; $i<count($dis); $i++) { // repeats looping to guarantee scan of all arrays element
	for($j=0; $j<count($dis)-$i-1; $j++) { // loop for swap between every two elements, which will produce sorting the largest element to be located at last. and repeat it again -again belongs to the outer loop- to push the next largest element to be located before last loop (and we eliminate looping to count(array) because we have sorted largest element with last loop action -for optimal performance sake-)
	  if($dis[$j]>$dis[$j+1]) {
		$temp = $dis[$j];
		$dis[$j] = $dis[$j+1];
		$dis[$j+1] = $temp;
	  }
	}
}
print_order_array($dis) ;
// note: I can organize th code by incapsolate it by functions but I kept its algorithmatic shap instead of procedral or OOP form
// and it took about 70 minute to review and write down the code 
?>

<body>
</html>