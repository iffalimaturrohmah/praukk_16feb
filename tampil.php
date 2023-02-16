<?php
include("koneksi.php");
?>

<html>
    <head>
</head>
<body>
    <center>
        <header>
    <h3>DATA ALAT DAN BAHAN INVENTARIS</h3>
</header>
<table border="1">
    <tr>

        <th>id</th>
        <th>nama user</th>
        <th>jabatan</th>
        <th>nama bahan</th>
        <th>jenis bahan</th>
        <th>stok</th>
        <th>harga</th>
        <th>kondisi</th>
        <th>tgl_masuk</th>
        <th>aksi</th>
</tr>

<?php
include("koneksi.php");
$query=mysqli_query($koneksi, "SELECT * FROM tb_user INNER JOIN 
tb_bahan ON tb_user.id_bahan = tb_bahan.id_bahan");

while($row=mysqli_fetch_array($query)) {
    echo"<tr>";
    echo"<td>".$row['id_user']."</td>";
    echo"<td>".$row['nama_user']."</td>";
    echo"<td>".$row['jabatan']."</td>";
    echo"<td>".$row['nama_bahan']."</td>";
    echo"<td>".$row['jenis_bahan']."</td>";
    echo"<td>".$row['stok']."</td>";
    echo"<td>".$row['harga']."</td>";
    echo"<td>".$row['kondisi']."</td>";
    echo"<td>".$row['tgl_masuk']."</td>";
    echo"<td>";
    echo "<a href='edit.php?id_user=".$row['id_user']."'>Edit</a> |";
    echo "<a href='hapus.php?id_user=".$row['id_user']."'>Hapus</a> |";
    echo"</td>";
    echo"</tr>";
}

?>
<a href="tambah.php"><input type="button" value="Tambah">
</table>
</body>
</html>