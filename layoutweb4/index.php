<?php session_start(); ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HOME COOQIESSS</title>
  <link rel="stylesheet" href="asets/style.css" type="text/css"/>
</head>

<body>
  <div id="wrapper">
    <div id="container">
      
    <?php include ('components/header.php'); ?>
    <?php include ('components/nav.php'); ?>

      <main>
        <article>
          <div class="produk-baris">
           <div class="produk-item">
             <img src="img/ckhazelnut.jpg" alt="Hazelnut Cookies">
             <h3>Hazelnut Cookies</h3>
              <p>Hazelnut Cookies, kreasi manis dengan sentuhan crispy dari hazelnut panggang dan adonan butter lembut yang meleleh di mulut.</p>
              <a href="beli/beli-hazelnut.php" class="beli-btn">Beli</a>
            </div>

            <div class="produk-item">
              <img src="img/ckchocochips.jpg" alt="Chocolate Chip Cookies">
              <h3>Chocolate Chip Cookies</h3>
              <p>Kenikmatan klasik dengan potongan cokelat leleh yang melimpah di setiap gigitan.</p>
              <a href="beli/beli-chocochip.php" class="beli-btn">Beli</a>
            </div>

            <div class="produk-item">
              <img src="img/ckoatmealraisin.jpg" alt="Oatmeal Raisin Cookies">
              <h3>Oatmeal Raisin Cookies</h3>
              <p>Perpaduan sehat antara gandum utuh dan kismis manis yang memberikan rasa alami dan tekstur kenyal</p>
              <a href="beli/beli-oatmeal.php" class="beli-btn">Beli</a>
            </div>
          </div>

          <!-- baris artikel kedua -->
          <div class="produk-baris">
            <div class="produk-item">
              <img src="img/ckmatcha.jpg" alt="Matcha Cookies">
              <h3>Matcha Cookies</h3>
              <p>Cookies dengan aroma teh hijau Jepang yang khas, memberikan rasa earthy dan lembut yang menenangkan.</p>
              <a href="beli/beli-matcha.php" class="beli-btn">Beli</a>
            </div>
            <div class="produk-item">
              <img src="img/ckredvelvet.jpg" alt="Red Velvet Cookies">
              <h3>Red Velvet Cookies</h3>
              <p>Warna merah yang manis dengan rasa red velvet yang lembut dan sentuhan cheese chips, cocok untuk momen spesial.</p>
              <a href="beli/beli-redvelvet.php" class="beli-btn">Beli</a>
            </div>
            <div class="produk-item">
              <img src="img/ckbiscoff.jpg" alt="Biscoff Cookies">
              <h3>Biscoff Cookies</h3>
              <p>Cookies dengan rasa karamel dan rempah khas dari biskuit Lotus dari belgia, renyah dan wangi di setiap gigitan.</p>
              <a href="beli/beli-biscoff.php" class="beli-btn">Beli</a>
            </div>
          </div>  
        </article>


        <aside>
          <h4>Pilihan Terlaris</h4>
          <ul>
            <li><a href="#">Hazelnut Cookies</a></li>
            <li><a href="#">Oatmeal Raisin Cookies</a></li>
             <li><a href="#">ckchocochips Cookies</a></li>
          </ul>

          <h4>Promo Terbaru</h4>
          <ul>
            <li><a href="#">Diskon 20% untuk pembelian 3 box</a></li>
            <li><a href="#">Gratis ongkir area Siantar dan Medan</a></li>
          </ul>

          <h4>Gluten Free Area</h4>
          <ul>
            <li><a href="#">Buat kamu yang suka menu health</a></li>
            <li><a href="#">Cek koleksi cookies gluten free kami</a></li>
          </ul>

          <h4>Less Sugar for Diet Club</h4>
          <ul>
            <li><a href="#">Cookies dengan gula rendah</a></li>
            <li><a href="#">Nikmati manis tanpa rasa bersalah</a></li>
          </ul>
        </aside>
      </main>

      <?php include ('components/footer.php'); ?>
      
    </div>
  </div>
</body>
</html>
