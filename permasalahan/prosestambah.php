<HTML>
<HEAD>
<title>Simpan Data</title>
</HEAD>
<BODY>
<?php
$nrp = $_POST["nrp"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$jurusan = $_POST["jurusan"];
$conn=mysqli_connect ("localhost","root","")
or die ("koneksi gagal");
mysqli_select_db($conn,"mahasiswa");
$sqlstr="insert into mahasiswa (nrp,nama,alamat,id_jur)
values ('$nrp','$nama','$alamat','$jurusan')";
$hasil = mysqli_query($conn,$sqlstr);
echo "Simpan data berhasil dilakukan";
?>
</BODY>
</HTML>