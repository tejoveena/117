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
echo "matrix 1:";
for($r=0;$r<2;$r++) {
	echo "<br>";
	for($c=0;$c<2;$c++) {
	echo " ".$a1[$r][$c];
}
}
echo "matrix 2:";
for($r=0;$r<2;$row++) {
	echo "<br>";
	for($c=0;$c<2;$c++) {
	echo " ".$a2[$r][$c];
}
}

for($r=0;$r<2;$row++) {
	echo "<br>";
	for($c=0;$c<2;$c++) {
	$res[$r][$c]=$a1[$r][$c]+$a2[$r][$c];
	
}
}
echo "resultant matrix: ".$a2[$r][$c];
