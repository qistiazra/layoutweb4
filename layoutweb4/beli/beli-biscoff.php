<?php session_start(); ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Biscoff Cookies - HOME COOQIESSS</title>
  <link rel="stylesheet" href="../asets/beli.css" type="text/css"/>
</head>
<body>
  <div id="wrapper">
    <div id="container">
      <header>
        <img src="../img/header1.jpg" alt="logo" />
        <div class="header-text">
          <h2>Biscoff Cookies</h2>
          <p>Rasakan karamel dan rempah khas lotus dari belgia 🍪</p>
        </div>
      </header>

      <?php include ('../components/nav.php'); ?>

      <main style="padding: 20px;">
        <div class="detail-produk">
          <img src="../img/ckbiscoff.jpg" alt="Biscoff Cookies" class="detail-img">
          <div class="detail-deskripsi">
            <h3>Biscoff Cookies</h3>
            <p>Renyah, harum, dan penuh kejutan rasa karamel-rempah yang khas—Biscoff Cookies bukan sekadar camilan, tapi pengalaman. Terinspirasi dari biskuit legendaris asal Belgia, setiap kepingnya membawa aroma hangat yang memeluk, dengan tekstur garing yang memuaskan. Cocok dinikmati bersama kopi pagi, teh sore, atau saat kamu butuh pelukan manis di tengah deadline.Buat kamu yang suka rasa yang beda tapi tetap familiar, Biscoff Cookies adalah jawabannya. Karena hidup terlalu singkat untuk cookies yang biasa-biasa saja..</p>
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
