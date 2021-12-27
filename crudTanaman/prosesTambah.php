<?php
include "../config.php";
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$submit  = $_POST['submit'];
if(mysqli_query ($connect, "INSERT INTO crud VALUES('','$nama','$jumlah','$harga')")) {
    header("location:tambahData.php");
  } else{
   echo mysqli_error($connect);
  }


?>