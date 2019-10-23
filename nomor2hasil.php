<!DOCTYPE html>
<html>
<body>

<?php
function nama($a,$color="red"){
	$b=strlen($a);
	$c=0;
	if ($b>1&&$b<=10){
		$c=$b*300;
	}else if($b>10&&$b<=20){
		$c=$b*500;
	}else if($b>20){
		$c=$b*700;
	}
	echo 'Harga = '," $c ", '<br>Warna = <font color="'.$color.'">' ,"$a" , '</font><br>';
}

if ($_POST['warna']=="") {
	nama($_POST['nama']);
}else{
	nama($_POST['nama'],$_POST['warna']);
}
?>
</body>
</html>
