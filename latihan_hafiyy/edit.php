<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<center>
<?php
  include("koneksii.php");
  $query = mysqli_query($db, "SELECT * FROM tb_barang INNER JOIN tb_karyawan ON tb_barang.id_karyawan =
  tb_karyawan.id_karyawan");
    ?>
    
</body>
<form action="proses-edit.php" method="POST">
    <label for="nama_karyawan">Nama karyawan :</label>
    <input type="text" name="nama_karyawan">
<br>
<br>
    <label for="nama_barang">Nama barang  :</label>
    <input type="text" name="nama_barang">
<br>
<br>
    <label for="divisi">Divisi :</label>
    <input type="text" name="divisi">
<br>
<br>
    <label for="jabatan">Jabatan :</label>
    <input text="text" name="jabatan">
<br>
<br>
    <label for="kategori_barang">Kategori barang :</label>
    <input type="text" name="kategori_barang">
<br>
<br>

<input type="submit" name="submit" value="submit">

  </center>

</form>
</body>
</html>


  