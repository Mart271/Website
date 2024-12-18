<?php
session_start();

// Check if user_level is not set or is neither 1 nor 0
if (!isset($_SESSION['user_level']) || ($_SESSION['user_level'] != 1 && $_SESSION['user_level'] != 0)) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exclusive Manga - Members Only</title>
  <link rel="stylesheet" href="css/include.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Include the Header -->
  <?php include('header_member.php'); ?>

  <!-- Member's Welcome Section -->
  <section id="member-welcome">
    <h2>Welcome member!</h2>
    <p>Explore your personalized manga collection and dive into exclusive members-only content!</p>
  </section>

  <!-- Exclusive Content for Members -->
  <section class="Container Catalogue" id="catalogue">
  <h2 class="Title Two"><strong>Your Personalized Manga</strong></h2>
    <div class="Container-Letters">
      <h3 class="Subtitle Two">Recommend</h3>
    </div>
    <div class="Container-Manga Shonen">
      <div class="card" style="--i:url(https://cdn.kobo.com/book-images/fc99d295-1348-4849-bd96-8c25b25f3598/1200/1200/False/attack-on-titan-16.jpg)">
        <div class="content">
          <h3>Attack on Titan</h3>
          <a class="a-1" href="#">Read</a>
        </div>
      </div>
      <div class="card" style="--i:url(https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974714797/dr-stone-vol-11-9781974714797_lg.jpg)">
        <div class="content">
          <h3>Dr. Stone</h3>
          <a class="a-1" href="#">Read</a>
        </div>
      </div>
      <div class="card" style="--i:url(https://tankobonbon.com/cdn/shop/products/ao-ashi-manga-vol-1-tankobonbon_751x.jpg)">
        <div class="content">
          <h3>Ao Ashi</h3>
          <a class="a-1" href="#">Read</a>
        </div>
      </div>
    </div>

  <!-- Manga Catalog for Members -->
  <section class="Container Catalogue" id="catalogue">
    <h2 class="Title Two"><strong></strong></h2>
    <div class="Container-Letters">
      <h3 class="Subtitle Two">Shonen Manga</h3>
    </div>
    <div class="Container-Manga Shonen">
      <div class="card" style="--i:url(https://www.manga-news.com/public/images/vols/.Dandadan_1_crunchyroll_large.jpg)">
        <div class="content">
          <h3>DanDaDan</h3>
          <a class="a-1" href="#">Read</a>
        </div>
      </div>
      <div class="card" style="--i:url(https://images-na.ssl-images-amazon.com/images/I/81s8xJUzWGL.jpg)">
        <div class="content">
          <h3>Chainsaw Man</h3>
          <a class="a-1" href="#">Read</a>
        </div>
      </div>
      <div class="card" style="--i:url(https://images-na.ssl-images-amazon.com/images/I/91XwYkbfN-L.jpg)">
        <div class="content">
          <h3>One Piece</h3>
          <a class="a-1" href="#">Read</a>
        </div>
      </div>
    </div>

    <!-- Exclusive Sport Manga Section -->
    <div class="Container-Letters">
      <h3 class="Subtitle Three">Sport Manga</h3>
    </div>
    <div class="Container-Manga Spokon">
      <div class="card" style="--i:url(https://i.pinimg.com/originals/2f/1f/92/2f1f928f7b784107cf789af7d0b02a02.jpg)">
        <div class="content">
          <h3>Haikyu!</h3>
          <a id="a-1" href="#">Read</a>
        </div>
      </div>
      <div class="card" style="--i:url(https://comicvine.gamespot.com/a/uploads/scale_small/11135/111359134/8804287-beblues~aoninare~%2349-page1.jpg)">
        <div class="content">
          <h3>Be Blues! - Ao ni Nare</h3>
          <a class="a-1" href="#">Read</a>
        </div>
      </div>
      <div class="card" style="--i:url(https://i.pinimg.com/564x/ef/36/c7/ef36c7a4e2587dfd8a3be9db4c27fab6.jpg)">
        <div class="content">
          <h3>Slam Dunk</h3>
          <a class="a-1" href="#">Read</a>
        </div>
      </div>
    </div>

    <!-- Thriller Manga Section -->
    <div class="Container-Letters">
      <h3 class="Subtitle For">Thriller Manga</h3>
    </div>
    <div class="Container-Manga Thriller">
      <div class="card" style="--i:url(https://pbs.twimg.com/media/EVV37jjXQAIYM2w.jpg)">
        <div class="content">
          <h3>Ajin</h3>
          <a id="a-1" href="#">Read</a>
        </div>
      </div>
      <div class="card" style="--i:url(https://www.manga-news.com/public/images/vols/.earsed-4-ki-oon_large.jpg)">
        <div class="content">
          <h3>Erased</h3>
          <a class="a-1" href="#">Read</a>
        </div>
      </div>
      <div class="card" style="--i:url(https://3.bp.blogspot.com/-lf-Mga28Y2U/TtA8foEYWdI/AAAAAAAABXI/MQZXFpTZeVo/s1600/1.jpg)">
        <div class="content">
          <h3>Death Note</h3>
          <a class="a-1" href="#">Read</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Subscription Section -->
  <section id="hero" class="Container Email">
    <h2 class="Sub">Subscribe to get the latest updates!</h2>
    <form action="https://www.freecodecamp.com/email-submit" id="form">
      <input id="email" type="email" name="email" placeholder="Enter your Email" required>
      <input class="buttom" type="submit" id="submit" value="Get Started">
    </form>
  </section>

  <!-- Include the Footer -->
  <?php include('footer.php'); ?>

</body>
</html>
