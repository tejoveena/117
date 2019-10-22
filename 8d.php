<?php

$a1=array(
	array(1,1),
	array(2,2)
	);
$a2=array(
	array(3,3),
	array(1,1)
	);
$res=array();
for($i=0;$i<2;$i++) {
	for($j=0;$j<2;$j++) {
	$res[$i][$j]=0;
	for($k=0;$k<2;$k++) 
		$res[$i][$j]+=$a1[$i][$k]*$a2[$k][$j];

}
}
echo "matrix multiplication";
ech0 "<pre/>"print_r($res);
?>
