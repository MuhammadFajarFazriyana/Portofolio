<?php
include 'koneksi.php';

  $judul   = $_POST['judul'];
  $deskripsi     = $_POST['deskripsi'];
  $gambar = $_FILES['gambar']['name'];

if($gambar != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); 
  $x = explode('.', $gambar); 
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar; 
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 
                  $query = "INSERT INTO blog (judul, deskripsi, gambar) VALUES ('$judul', '$deskripsi', '$nama_gambar_baru')";
                  $result = mysqli_query($koneksi, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

            } else {    
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_postingan.php';</script>";
            }
} else {
   $query = "INSERT INTO blog (nama_produk, deskripsi, gambar) VALUES ('$judul', '$deskripsi', null)";
                  $result = mysqli_query($koneksi, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }
}

 
