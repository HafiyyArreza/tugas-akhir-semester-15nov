<?php
include("koneksi.php");

if(isset($_POST['submit'])){
$kode = $_POST['id'];
$nama = $_POST['nama'];
$keluhan = $_POST['keluhan'];
$merk = $_POST['merk_motor'];

$sql = "UPDATE tb_tabel SET nama='$nama', keluhan='$keluhan', merk_motor='$merk' WHERE id=$kode";
$query= mysqli_query($db,$sql);

if($query){
    header('Location:tampil.php');
}
else {
    die ('gagal mengedit');
}
}
?>
