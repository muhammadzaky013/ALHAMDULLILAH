<?php
include("koneksi.php");
if(isset($_POST['submit'])){
 $nama_karyawan = $_POST['nama_karyawan'];
 $nama_barang = $_POST['nama_barang'];
 $divisi = $_POST['divisi'];
 $jabatan = $_POST['jabatan'];
 $kategori_barang = $_POST['kategori_barang'];
 
 $sql = "INSERT INTO tb_karyawan (nama_karyawan, divisi, jabatan)VALUES('$nama_karyawan', '$divisi', '$jabatan')";
 $query = mysqli_query ($db,$sql);

 $sql = "SELECT max(id_karyawan)AS karyawan_id FROM tb_karyawan LIMIT 1";
 $query = mysqli_query($db,$sql);

$data = mysqli_fetch_array($query);
$karyawan_id = $data['karyawan_id'];

$sql = "INSERT INTO tb_barang(id_karyawan,nama_barang,kategori_barang) 
VALUES('$karyawan_id','$nama_barang','$kategori_barang')";
$query = mysqli_query($db,$sql);

if($query){
    header('location:tampil.php?status=sukses');
}else{
    header('location:tampil.php?status=gagal');
}
}
?>