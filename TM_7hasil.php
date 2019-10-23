<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<?php
if($_POST['nama']!=""){
echo "Data diri<br><br>";
echo "Nama   		 : ", $_POST['nama'],"<br>";
echo "Alamat 		 : ", $_POST['alamat'],"<br>";
echo "Jenis Kelamin	 : ", $_POST['jenis_kelamin'],"<br>";
echo "Golongan Darah : ", $_POST['golongan_darah'],"<br>";
echo "Hobi 			 : ";
if(!empty($_POST['hobi'])){
	foreach ($_POST['hobi'] as $selected) {
		echo $selected.", ";
	}
	echo "<br>";
}
echo "Keterangan	 : ", $_POST['keterangan'],"<br>";
}else{
	echo "Maaf nama harus diisikan.";
}
?>
</body>
</html>