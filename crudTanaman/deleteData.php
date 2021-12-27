<?php 
include '../config.php';
$id_crud = $_GET['id_crud'];
mysqli_query($connect,"DELETE FROM crud WHERE id_crud='$id_crud'")or die(mysqli_error($connect));
 
header("location:tambahData.php");
?>