<?php
echo "NIM : A12.2024.07225 <br>";
echo "Nama : Shindy Novryanti Br Munthe <hr>";
     include "koneksi.php";
     function bersih($data){
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
     }

     $xnim               = bersih($_POST['nim']?? '');
     $xnama              = bersih($_POST['nama']?? '');
     $xtempatLahir       = bersih($_POST['tempatLahir']?? '');
     $xtanggalLahir      = bersih($_POST['tanggalLahir']?? '');
     $xtanggalLahir      = date("Y-m-d", strtotime($xtanggalLahir));
     $xjmlSaudara        = bersih($_POST['jmlSaudara']?? '');
     $xalamat            = bersih($_POST['alamat']?? '');
     $xkota              = bersih($_POST['kota']?? '');
     $xjeniskelamin      = bersih($_POST['jeniskelamin']?? '');
     $xstatusKeluarga    = bersih($_POST['statusKeluarga']?? '');
     $xhobi              = isset($_POST['hobi'])?implode (",", $_POST['hobi']) : "";
     $xemail             = bersih($_POST['email']?? '');
     $xraw_password      = bersih($_POST['password']?? '');

     if(empty($xraw_password) || strlen($xraw_password) <10) {
        die("Password minimal 10 karakter.");
     }

     $hashed_password = password_hash($xraw_password, PASSWORD_BCRYPT);
     $sql1 = "INSERT INTO mhs (nim,nama,tempatLahir,tanggalLahir,jmlSaudara,alamat,kota,jenisKelamin,
              statusKeluarga,hobi,email,password)VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
     $stmt=$koneksi->prepare($sql1);
     $stmt->bind_param( "ssssssssssss",$xnim,$xnama,$xtempatLahir,$xtanggalLahir,$xjmlSaudara,$xalamat,
                     $xkota,$xjeniskelamin,$xstatusKeluarga,$xhobi, $xemail,$hashed_password);
     if ($stmt->execute()) {
        echo "Data berhasil disimpan! <br>";
     } else {
        echo "Error: " . mysqli_error($koneksi);
     }
     $koneksi->close();
     $stmt->close();
?>