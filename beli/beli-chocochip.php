<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>chocochips Cookies - HOME COOQIESSS</title>
  <link rel="stylesheet" href="../asets/beli.css" type="text/css"/>
</head>
<body>
  <div id="wrapper">
    <div id="container">
      <header>
        <img src="../img/header1.jpg" alt="logo" />
        <div class="header-text">
          <h2>Chocochips Cookies</h2>
          <p>Cookies klasik dengan chocochips yang krispi di setiap gigitan 🍪</p>
        </div>
      </header>

      <?php include ('../components/nav.php'); ?>

      <main style="padding: 20px;">
        <div class="detail-produk">
          <img src="../img/ckchocochips.jpg" alt="Chocochips Cookies" class="detail-img">
          <div class="detail-deskripsi">
            <h3>Chocochips Cookies</h3>
            <p>Klasik tak pernah gagal. Chocochips menghadirkan potongan cokelat krispi yang melimpah di setiap gigitan, dibalut adonan lembut yang bikin nagih. <br>✅ Gluten Free Option Available <br>✅ Less Sugar, More Flavor Cocok untuk kamu yang ingin menikmati manisnya hidup tanpa rasa bersalah.</p>
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
