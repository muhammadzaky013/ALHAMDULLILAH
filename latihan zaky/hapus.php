<?php
include ("koneksi.php");

$id = $_GET['id_barang'];


mysqli_query($db,"DELETE FROM tb_karyawan where id_karyawan='$id'");
mysqli_query($db,"DELETE FROM tb_barang where id_barang='$id'");

header("location:tampil.php");
?>