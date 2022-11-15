<?php
include("koneksi.php");
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $keluhan=$_POST['keluhan'];
    $merk=$_POST['merk_motor'];

    $sql = "INSERT INTO tb_tabel(nama,keluhan,merk_motor) VALUES ('$nama', '$keluhan', '$merk')";
    $query = mysqli_query($db, $sql);
}
?>