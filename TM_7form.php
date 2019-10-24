<html>
<body>

<form action="tugastampilan.php" method="POST">
<label>Nama: </label><br>
<input type="text" name="nama"><br><br>
<label>Alamat: </label><br>
<input type="text" name="alamat"><br><br>
Jenis Kelamin         :
    <input type="radio" name="jenis_kelamin" if (isset($gender) && $gender=="female") echo "checked" value="Perempuan">Perempuan
    <input type="radio" name="jenis_kelamin" if (isset($gender) && $gender=="male") echo "checked" value="Laki-laki">Laki-laki
    <br><br>
<label>Golongan Darah :   </label> 
  <select name="golongan_darah">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="AB">AB</option>
      <option value="O">O</option>
    </select> <br><br>
<label>Hobi :</label><br>
    <input type="checkbox" name="hobi[]" value="game">Game<br>
    <input type="checkbox" name="hobi[]" value="bermain">Bermain<br>
    <input type="checkbox" name="hobi[]" value="playing">Playing<br><br>
<label>Keterangan: </label><br>
<textarea name="keterangan" rows="5" cols="40"></textarea><br>
<input type="submit">
</form>
</body>
</html>