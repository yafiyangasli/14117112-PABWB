<html>
<body>
	
<?php

function faktorial($angka){
  if ($angka > 1) {
    return $angka * faktorial($angka-1);
  }elseif ($angka == 1) {
    return $angka;
  }
}

echo "Hasil faktorial adalah ", faktorial($_POST['bilangan']);
?>