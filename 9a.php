<?php

$allStates="Mississippi Alabama Texas Massachusetts Kansas";
$statesArray=[];
$states1=explode(' ',$allStates);
$i=0;

foreach ($states1 as $state) {
	if(preg_match('/xas$/',($state))) {
	$statesArray[$i]=($state);
	$i=$i+1;
	echo "<br>\nThe states that ends in xas:".$state;
	}
}

foreach ($states1 as $state) {
	if(preg_match('/^k.*s$/i',($state))) {
	$statesArray[$i]=($state);
	$i=$i+1;
	echo "<br>\nThe states that begins with k and  ends in s:".$state;
	}
}

foreach ($states1 as $state) {
	if(preg_match('/^M.*s$/',($state))) {
	$statesArray[$i]=($state);
	$i=$i+1;
	echo "<br>\nThe states that begins with M and ends in s:".$state;
	}
}
foreach ($states1 as $state) {
	if(preg_match('/^M.*i$/',($state))) {
	$statesArray[$i]=($state);
	$i=$i+1;
	echo "<br>\nThe states that begins with M and ends with i:".$state;
	}
}
$i=0;
foreach ($statesArray as $state) {
	echo "<br>The element " .$i. " is:" .$state;
	$i=$i+1;
}
?>


