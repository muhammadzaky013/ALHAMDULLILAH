<?php

include("koneksi.php");


if( !isset($_GET['id_barang']) ){
    header('Location: tampil.php');
}



$id = $_GET['id_barang'];
$sql = "SELECT * FROM tb_barang WHERE id_barang=$id";
$query = mysqli_query($db, $sql);
$tb_barang = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<html>
   <head>
   <link rel="stylesheet" href="style.css">
 <link rel="icon" type="icon/x-icon" href="hitler.jpg">
   </head>
   <body>
       <center>
        <table border ="0">
       <h1>Edit</h1>
       <form action="proses_edit.php" method="POST">
       <input type="hidden" name="id_barang" value="<?php echo $tb_barang['id_barang']?>" />

       <tr>
        <td><label for="nama_karyawan">Nama karyawan :</label></td>
        <td><input type="text" name="nama_karyawan"></td>
    </tr>
    <tr>
        <td><label for="nama_barang">Nama barang  :</label></td>
        <td><input type="text" name="nama_barang"></td>
    </tr>
    <tr>
        <td><label for="divisi">Divisi :</label></td>
        <td><input type="text" name="divisi"></td>
    </tr>
    <tr>
       <td><label for="jabatan">Jabatan :</label></td>
       <td><input text="text" name="jabatan"></td>
    </tr>
    <tr>
       <td><label for="kategori_barang">Kategori barang :</label></td>
        <td><input type="text" name="kategori_barang"></td>
    </tr>

<td><input type="submit" name="edit" value="edit"></td>

</center>
</table>
</form>
</body>
</html>  