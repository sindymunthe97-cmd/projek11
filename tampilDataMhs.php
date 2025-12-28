<?php
include "koneksi.php";

$sql = "SELECT * FROM mhs";
$query = mysqli_query($koneksi, $sql);

if ($query === false) {
    die("Query error: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>

<b>NIM :</b> A12.2024.07225<br>
<b>Nama :</b> Shindy Novryanti Br Munthe
<hr>

<h2>Daftar Data Mahasiswa</h2>
<a href="tambahDataMhs.php">Tambah Data Baru</a>
<table border="1" cellpadding="6">
<tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Jml Saudara</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Jenis Kelamin</th>
    <th>Status Keluarga</th>
    <th>Hobi</th>
    <th>Email</th>
    <th>Password</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>".$row['nim']."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['tempatLahir']."</td>";
    echo "<td>".$row['tanggalLahir']."</td>";
    echo "<td>".$row['jmlSaudara']."</td>";
    echo "<td>".$row['alamat']."</td>";
    echo "<td>".$row['kota']."</td>";
    echo "<td>".$row['jenisKelamin']."</td>";
    echo "<td>".$row['statusKeluarga']."</td>";
    echo "<td>".$row['hobi']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['password']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
