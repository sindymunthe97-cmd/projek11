<!DOCTYPE html>
<htm lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Data Mahasiswa</title>
</head>
<body>
<p>
<b>NIM :</b> A12.2024.07225 <br>
<b>Nama :</b> Shindy Novryanti Br Munthe<b>
</p>
<hr>
<h2>Form Input Mahasiswa</h2>
<form action="simpanDataMhs.php" method="POST">
     NIM :  <input type="text" name="nim" required> <br><br>
     Nama : <input type="text" name="nama"required><br><br>
     Tempat Lahir : <input type="textarea" name="tempatLahir"><br><br>
     Tanggal Lahir : <input type="date" name="tanggalLahir"><br><br>
     JmlSaudara : <input type="number" name="jmlSaudara"required><br><br>
     Alamat : <br>
          <textarea rows="5" cols="50" name="alamat"></textarea><br><br>
     Kota :
     <select name="kota">
          <option>Semarang</option>
          <option>Solo</option>
          <option>Brebes</option>
          <option>Salatiga</option>
          <option>Medan</option>
          <option>Pekalongan</option>
     </select>
     <br><br>
     Jenis Kelamin :
    <input type="radio" name="jk" value="L" required> Laki-laki
    <input type="radio" name="jk" value="P"> Perempuan
     <br><br>
     Status:
     <input type="radio" name="statusKeluarga" value="K" required>Kawin
     <input type="radio" name="statusKeluarga" value="B" required>Belum Kawin
     <br><br>
     Hobi (boleh dari satu):<br>
     <input type="checkbox" name="hobi[]" value="Membaca">Membaca <br>
     <input type="checkbox" name="hobi[]" value="Menari">Menari <br>
     <input type="checkbox" name="hobi[]" value="Badminton">Badminton <br>
     <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga <br>
     <input type="checkbox" name="hobi[]" value="Traveling">Traveling <br>
     <input type="checkbox" name="hobi[]" value="Musik">Musik <br>
     Email : <input type="email" name="email" required><br><br>
             <input type="Password" name="password" required>
             <input type="submit" value="simpan">
</form>

</body>
</html>


