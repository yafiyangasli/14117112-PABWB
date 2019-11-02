<?php
$cari=$_POST['cari'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"mahasiswa");
$hasil=mysqli_query($conn,"select * from mahasiswa where nama like '%$cari%'");
$jumlah=mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan: $jumlah";
echo "<br>";
while($baris=mysqli_fetch_array($hasil))
{
echo "NRP : ";
echo $baris[0];
echo "<br>";
echo "Nama : ";
echo $baris[1];
echo "<br>";
echo "Alamat :";
echo $baris[2];
echo "<br>";
echo "Jurusan :";
$idjur=$baris[3];
$hasil2=mysqli_query($conn, "select nama from jurusan where id_jur='$idjur'");
$jumlah2=mysqli_num_rows($hasil2);
while ($baris2=mysqli_fetch_array($hasil2)) {
	echo $baris2[0];
}
}
?>