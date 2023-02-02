<?php
  include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Blog Fajar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.10.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <style type="text/css">
      a {
    text-decoration: none;
  }
  body {
    background-repeat: no-repeat;
    background-image: url();
    background-size: 1300px;
    background-position-y: center;
  
  }
  label {
    font-family: "Raleway", sans-serif;
    font-size: 13px;
  }
 
  #card {
    background: #f8f7f7;
    border-radius: 8px;
    box-shadow: 1px 2px 8px  rgba(0, 0, 0, 0.65);
    height: 430px;
    margin: 6rem auto 8.1rem auto;
    width: 329px;
    box-shadow: 0 0 10px rgba(255,255,255,.3);
    background:rgba(255, 255, 255, 0.3);
  
  }
  #card-content {
    padding: 12px 44px;
  }
  #card-title {
    font-family: "Raleway Thin", sans-serif;
    letter-spacing: 4px;
    padding-bottom: 23px;
    padding-top: 13px;
    text-align: center;
  }
  #submit-btn {
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
    margin-left: 50px;
  }
  #submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
  }
  .form {
    align-items: left;
    display: flex;
    flex-direction: column;
  }
  .form-border {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 1px;
    width: 100%;
  }
  .form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
    font-size: 10pt;
    border-radius: 8px;
    
  }
  .underline-title {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 2px;
    margin: -1.1rem auto 0 auto;
    width: 89px;
  }
    </style>
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2 style="color: black;">Publish</h2>
          <div class="underline-title"></div>
        </div>
      <form method="POST" class="form" action="proses_tambah.php" enctype="multipart/form-data">
        <label style= "padding-top:13px; color: black; "  autofocus="" required="">
        &nbsp;Judul 
      </label>
        <input class="form-content" type="text" name="judul"></input>
        <div class="form-border"></div>
        <label for="user-text" style="padding-top:22px; color : black;">
        &nbsp;Deskripsi
      </label>
        <input id="user-text" class="form-content" type="text" name="deskripsi"></input>
        <div class="form-border"></div>
          <label  name="gambar" style="padding-top: 22px; color: black; " required="">
          &nbsp;Gambar
        </label>
              <input style="font-size: 10pt;" type="file" name="gambar">
              <button id= "submit-btn" type="submit">Simpan Postingan</button>
          </form>
</form>
</div>
      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>