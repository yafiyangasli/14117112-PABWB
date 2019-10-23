<?php
function swap(&$a, &$b){
	$c=$a;
	$a=$b;
	$b=$c;
}
$A=30;
$B=20;

swap($A,$B);

echo "$A";
echo "<br> $B";
?>