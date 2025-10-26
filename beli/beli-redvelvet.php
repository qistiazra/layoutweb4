<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Redvelvet Cookies - HOME COOQIESSS</title>
  <link rel="stylesheet" href="../asets/beli.css" type="text/css"/>
</head>
<body>
  <div id="wrapper">
    <div id="container">
      <header>
        <img src="../img/header1.jpg" alt="logo" />
        <div class="header-text">
          <h2>Redvelvet Cookies</h2>
          <p>Cookies gurih rasa Redvelvet dengan sentuhan cheese chips yang renyah 🍪</p>
        </div>
      </header>

      <?php include ('../components/nav.php'); ?>

      <main style="padding: 20px;">
        <div class="detail-produk">
          <img src="../img/ckredvelvet.jpg" alt="Redvelvet Cookies" class="detail-img">
          <div class="detail-deskripsi">
            <h3>Redvelvet Cookies</h3>
            <p>Merahnya menggoda, rasanya memikat. Red Velvet Cookies kami punya tekstur lembut dengan sentuhan cheese chips yang bikin momen spesial makin berkesan. <br>✨ Healthier twist with reduced sugar <br>✨ Perfect for gifting or self-love rituals Karena kamu pantas mendapatkan yang istimewa.</p>
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
