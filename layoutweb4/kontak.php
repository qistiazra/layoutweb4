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
          <div id="single"> 
            <div id="t-images" style="background:url(img/ckhazelnut.jpg)">$nbsp;</div>
            <h3>Hazelnut Cookies</h3>
            <p>Hazelnut Cookies, kreasi manis dengan sentuhan crispy dari hazelnut panggang dan adonan butter lembut yang meleleh di mulut.</p>
          </div>

          <div>
            <div id="t-images" style="background:url(img/ckchocochips.jpg)">$nbsp;</div> 
            <h3>Chocolate Chip cookies</h3>
            <p>Chocolate Chip Cookies, kenikmatan klasik dengan potongan cokelat leleh yang melimpah di setiap gigitan.</p>
          </div>

          <div> 
            <div id="t-images" style="background:url(img/ckoatmealraisin.jpg)">$nbsp;</div> 
            <h3>Oatmeal Raisin cookies</h3>
            <p>Oatmeal Raisin Cookies, perpaduan sehat antara gandum utuh dan kismis manis yang memberikan rasa alami dan tekstur kenyal.</p>
          </div>
        </article>

        <aside>
          <h4>Sidebar</h4>
          <ul>
            <li><a href="#">Cabang</a></li>
            <li><a href="#">Promo Terbaru</a></li>
          </ul>
        </aside>
      </main>

      <?php include ('components/footer.php'); ?>
      
    </div>
  </div>
</body>
</html>
