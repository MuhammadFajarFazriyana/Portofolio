<?php
  include('koneksi.php'); 
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Postingan Blog Fajar</title>
    
  </head>
  <style>
    body {
  font-family: "Open Sans", sans-serif;
  background-color: #040404;
  color: #fff;
  position: relative;
  background: transparent;
}

body::before {
  content: "";
  position: fixed;
  background: #040404 url("../blog/assets/img/DSC_0088.jpg") top right no-repeat;
  background-size: cover;
  left: 0;
  right: 0;
  top: 0;
  height: 100vh;
  z-index: -1;
}
#btn {
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 500px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 1000px;
    margin-left: 50px;
    text-decoration: none;
  }
  #btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
  }
.tabel1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #f2f5f7;
}
.tabel1, th, td {
    padding: 10px 20px;
    text-align: left;
}
 
.tabel1 tr:hover {
    background-color: #f5f5f5;
}
 
.tabel1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
  </style>
  <body>
    <center><h1>Data Postingan</h1><center>
    <center><a href="tambah_postingan.php" id="btn" >+ &nbsp; Tambah Postingan</a><center>
    <br/>
    <table>
      <thead>
        <tr class="table1">
          <th>No</th>
          <th>Judul</th>
          <th>Dekripsi</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM blog ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['judul']; ?></td>
          <td><?php echo substr($row['deskripsi'], 0, 20); ?>...</td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
          <td>
              <a style="text-decoration: none; color: white" href="edit_postingan.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a style="text-decoration: none; color: white" href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++;
      }
      ?>
    </tbody>
    </table>
  </body>
</html>