<?php 
 
include '../config.php';
$id_crud = $_POST['id_crud'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];;

mysqli_query($connect,"UPDATE crud SET nama='$nama', jumlah='$jumlah', harga='$harga' WHERE id_crud='$id_crud'");
           header("location:tambahData.php");
?>