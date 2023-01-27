<!DOCTYPE html>
<html>
<head>
 <title>CUKUP TAHU?</title>
 <link rel="stylesheet" href="style.css">
 <link rel="icon" type="icon/x-icon" href="hitler.jpg">
</head>
<body>
  
  <center>
<h4> <a href=tambah.php>KARYAWAN</a></h4>
 <table border="1">
  <tr>
   <td>No.</td>
   <td>Nama karyawan</td>
   <td>Nama barang</td>
   <td>Divisi</td>
   <td>Jabatan</td>
   <td>Kategori barang</td>
   <td>Aksi</td>
  </tr>
  
  <?php
  include("koneksi.php");
  $query = mysqli_query($db, "SELECT * FROM tb_barang INNER JOIN tb_karyawan ON tb_barang.id_karyawan =
  tb_karyawan.id_karyawan");
  $no = 1;
  foreach ($query as $row):
    ?>

<tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama_karyawan']; ?></td>
        <td><?= $row['nama_barang']; ?></td>
        <td><?= $row['divisi']; ?></td>
        <td><?= $row['jabatan']; ?></td>
        <td><?= $row['kategori_barang']; ?></td>
        <td>
        <a href="edit.php?id_barang=<?= $row['id_barang'];?>">Edit</a>
          <a href="hapus.php?id_barang=<?= $row['id_barang'];?>">| Hapus</a>
  <?php endforeach; ?>

  </center>
  </table>
  </body>
  </html>