<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Oatmeal Raisin Cookies - HOME COOQIESSS</title>
  <link rel="stylesheet" href="../asets/beli.css" type="text/css"/>
</head>
<body>
  <div id="wrapper">
    <div id="container">
      <header>
        <img src="../img/header1.jpg" alt="logo" />
        <div class="header-text">
          <h2>Oatmeal Raisin Cookies</h2>
          <p>Cookies manis tinggi serat gandum dan kismis yang menyegarkan 🍪</p>
        </div>
      </header>

      <?php include ('../components/nav.php'); ?> 

      <main style="padding: 20px;">
        <div class="detail-produk">
          <img src="../img/ckoatmealraisin.jpg" alt="Oatmeal Raisin Cookies" class="detail-img">
          <div class="detail-deskripsi">
            <h3>Oatmeal Raisin Cookies</h3>
            <p>Cookies sehat yang tetap enak! CK Oatmeal Raisin menggabungkan gandum utuh dan kismis manis, memberikan tekstur chewy dan rasa alami yang bikin nyaman. <br>💪 High Fiber, Low Guilt <br>💪 Less Sugar, More Wholesome Goodness <br>Pilihan tepat buat kamu yang ingin ngemil pintar.</p>
            <p><strong>Harga:</strong> Rp. 30.000 / pack (isi 4 pcs)</p>
            <a href="kontak.php" class="beli-btn">Pesan Sekarang</a>
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
