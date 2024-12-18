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
  <title>Manga</title>
  <link rel="stylesheet" href="css/include.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>

<body>
  <!-- Include the Header -->
  <?php include('header_member.php'); ?>
  

  <!-- Main Content -->
  <section class="Container Best-Manga" id="bestmanga">
    <h2 class="Title One">POPULAR THIS WEEK</h2>
    <div class="Container-MainManga">
      <img class="Banner" src="https://comicvine.gamespot.com/a/uploads/scale_small/11155/111559613/8626993-kaoruhana3.jpg" alt="kaoru to hana">
      <div class="Text-MainManga">
        <h3 class="Subtitle One">Kaoru Hana wa Rin to Saku</h3>
        <p> In a certain place, there are two neighboring high schools. Chidori 
          High School, a bottom-feeder boys' school where idiots gather, and Kikyo Girls' School, a well-established girls' school. Rintaro Tsumugi, a strong and quiet second year student at Chidori High School, meets Kaoruko Wakuri, a girl who comes as a customer while helping out at his family's cake shop. Rintaro feels comfortable spending time with Kaoruko, but she is a student at Kikyo Girls, a neighboring school that thoroughly dislikes Chidori High. This is the story of two people who are so close and yet so far apart.
         </p>
        <button class="button">Read</button>
        


      </div>
     </div>
    </section>  
     <section class="Container Catalogue" id="catalogue">
       <h2 class="Title Two"><strong>Manga</strong></h2>
       <div class="Container-Letters">
         <h3 class="Subtitle Two">Shonen Manga</h3>    
       </div>
       <div class="Container-Manga Shonen">
         <div class="card" style="--i:url(https://www.manga-news.com/public/images/vols/.Dandadan_1_crunchyroll_large.jpg)">
           <div class="content">
             <h3>DanDaDan</h3>
             <a id="a-1" href="#">Read</a>
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
       
 
         <div class="card" style="--i:url(https://1.bp.blogspot.com/-S0_dsDYx0uA/YD2EzLvnaaI/AAAAAAABpWg/CUbqQD9aA8QCIS3pBZDdWSVhLlqJUGzsgCLcBGAsYHQ/w1200-h630-p-k-no-nu/4.jpg)">
           <div class="content">
             <h3>Jujutsu Kaisen</h3>
             <a class="a-1" href="#">Read</a>
           </div>
         </div>
 
         <div class="card" style="--i:url(https://www.normaeditorial.com/upload/media/albumes/0001/07/c8433c899e4bbca8535eda3f362abd3d1f0fca03.jpeg)">
           <div class="content">
             <h3>Jigokuraku</h3>
             <a class="a-1" href="#">Read</a>
           </div>
         </div>
       </div>
    <!-- Sport Manga Section -->
  
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
         
 
         <div class="card" style="--i:url(https://i1.whakoom.com/small/11/16/c88dbf13ac4c4c54b0e9c04248387a50.jpg)">
           <div class="content">
             <h3>Blue Lock</h3>
             <a class="a-1" href="#">Read</a>
           </div>
         </div>
 
         <div class="card" style="--i:url(https://i.pinimg.com/originals/8d/ff/41/8dff418fe43d64b923db96323115523e.jpg)">
           <div class="content">
           <h3>Capitan Tsubasa</h3>
           <a class="a-1" href="#">Read</a>
           </div>
         </div>
       </div>
      </div>
      <!--Thiller Section -->
      <div class="Container-Letters">
         <h3 class="Subtitle For"> Thriller Manga</h3>    
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
     
         <div class="card" style="--i:url(https://hapimanga.com/cdn/shop/products/9781421569062_c7360_600x.jpg)">
           <div class="content">
             <h3>Monster</h3>
             <a class="a-1" href="#">Read</a>
           </div>
         </div>

         <div class="card" style="--i:url(https://ramenparados.com/wp-content/uploads/2018/11/NEOBK-2184228-300x424.jpg)">
           <div class="content">
           <h3>Summer Time Render</h3>
           <a class="a-1" href="#">Read</a>
           </div>
         </div>
       </div>
     </section>
     <section id="hero" class="Container Email">
       <h2 class="Sub">Subscribe to get the latest!</h2>
       <form action="https://www.freecodecamp.com/email-submit" id="form">
          <input  id="email" type="email" name="email" placeholder="Enter your Email" required>
          <input class="buttom" type="submit" id="submit" value="Get Started"></input>
       </form>
     </section>  
  <!-- Include the Footer -->
  <?php include('footer.php'); ?>

</body>

</html>
