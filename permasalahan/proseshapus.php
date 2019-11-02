<HTML>
<HEAD>
<title>Hapus Data</title>
</HEAD>
<BODY>
<?php
$hapus=$_POST['hapus'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"mahasiswa");
$hasil=mysqli_query($conn, "delete from mahasiswa where nrp='$hapus'");
echo "Hapus data berhasil dilakukan";
?>
</BODY>
</HTML>