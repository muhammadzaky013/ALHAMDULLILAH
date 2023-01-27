<?php
include("koneksi.php");
if (isset($_POST['edit'])){
 $id = $_POST['id_barang'];
 $nama_karyawan = $_POST['nama_karyawan'];
 $divisi = $_POST['divisi'];
 $jabatan = $_POST['jabatan'];
 $nama_barang = $_POST['nama_barang'];
 $kategori_barang = $_POST['kategori_barang'];


 $sql = "UPDATE tb_karyawan SET nama_karyawan='$nama_karyawan', divisi='$divisi' , jabatan='$jabatan' WHERE id_karyawan=$id";
 $query= mysqli_query($db,$sql);

 $sql = "UPDATE tb_barang SET nama_barang='$nama_barang', kategori_barang='$kategori_barang' WHERE id_barang=$id";
 $query= mysqli_query($db,$sql);

 if($query){
    header('location:tampil.php');
}else{
    die('gagal mengedit');
}


}
?>