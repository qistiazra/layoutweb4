<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hazelnut Cookies - HOME COOQIESSS</title>
  <link rel="stylesheet" href="../asets/beli.css" type="text/css"/>
</head>
<body>
  <div id="wrapper">
    <div id="container">
      <header>
        <img src="../img/header1.jpg" alt="logo" />
        <div class="header-text">
          <h2>Hazelnut Cookies</h2>
          <p>Cookies gurih dengan sentuhan kacang hazelnut panggang 🍪</p>
        </div>
      </header>

      <?php include ('../components/nav.php'); ?>

      <main style="padding: 20px;">
        <div class="detail-produk">
          <img src="../img/ckhazelnut.jpg" alt="Hazelnut Cookies" class="detail-img">
          <div class="detail-deskripsi">
            <h3>Hazelnut Cookies</h3>
            <p>Cookies dengan kacang hazelnut yang gurih dan renyah. Cocok untuk dinikmati bersama teh atau kopi di sore hari. Rasa kacang yang khas membuat cookies ini menjadi favorit di musim dingin.</p>
            <p><strong>Harga:</strong> Rp. 30.000 / pack (isi 4 pcs)</p>
            <a href="../kontak.php" class="beli-btn">Pesan Sekarang</a>
            <br><br>
            <a href="../index.php" style="background-color:#ccc; color:#4b2e1e;">← Kembali</a>
          </div>
        </div>
      </main>
      <?php include ('../components/footer.php'); ?>
    </div>
  </div>
</body>
</html>
