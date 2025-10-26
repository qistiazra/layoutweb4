<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Matcha Cookies - HOME COOQIESSS</title>
  <link rel="stylesheet" href="../asets/beli.css" type="text/css"/>
</head>

<body>
  <div id="wrapper">
    <div id="container">
      <header>
        <img src="../img/header1.jpg" alt="logo" />
        <div class="header-text">
          <h2>Matcha Cookies</h2>
          <p>Cookies manis dengan aroma teh jepang 🍪</p>
        </div>
      </header>

      <?php include ('../components/nav.php'); ?>

      <main style="padding: 20px;">
        <div class="detail-produk">
          <img src="../img/ckmatcha.jpg" alt="Matcha Cookies" class="detail-img">
          <div class="detail-deskripsi">
            <h3>Matcha Cookies</h3>
            <p>Tenang dalam satu gigitan. CK Matcha Cookies membawa aroma teh hijau Jepang yang earthy dan menenangkan, cocok untuk kamu yang suka rasa yang elegan dan tidak berlebihan. <br>🌿 Made with real matcha powder <br>🌿 Gluten Free & Vegan Friendly Rasa yang dewasa. <br>untuk jiwa yang tahu apa yang ia cari.</p>
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
