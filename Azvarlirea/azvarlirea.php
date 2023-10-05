<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/about_header.php'; ?>

<section class="about">

   <div class="row">

   <div class="image">
         <img src="images/teamphoto.jpg" alt="">
      </div>

        <div class="content">
            <h3>WHO WE ARE?</h3>
            <p>Azvarlirea is a team from Timisoara that aims to build a strong community both in the city and across Romania. We were the first team in the country and managed to inspire individuals to start Ultimate Frisbee communities in cities such as Brasov, Arad, Bucharest, Iasi, Negresti, Cluj, Sibiu, and others.
            Azvarlirea is a family of people spanning a wide range of ages who all enjoy playing this sport and spending time together. We also enjoy connecting with new people and participating in various tournaments throughout Europe.</p>
            <h3>OUR PURPOSE</h3>
            <p>Our purpose is to ensure that we leave a sport behind for our youth that is enjoyable and fosters friendships because the worldwide community is very welcoming. And to make this sport to be recognized by the Romanian Sport Federation.</p>
        <a href="https://www.facebook.com/Azvarlirea/" class="btn">More Phots</a>
        </div>
    </div>

</section>

<section class="reviews">
   
   <h1 class="heading">TEAM MEMBERS</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/team_members/andreiplesa.jpg" alt="">
         <h3>Andrei Plesa</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/alexandraavramescu.jpg" alt="">
         <h3>Alexandra Avramescu</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/balalucretia.jpg" alt="">
         <h3>Lucretia Bala</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/bogdanapopie.jpg" alt="">
         <h3>Bogdan Apopie</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/tudorpopa.jpg" alt="">
         <h3>Tudor Popa</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/liviucoicea.jpg" alt="">
         <h3>Liviu Coicea</h3>
      </div>
      
      <div class="swiper-slide slide">
         <img src="images/team_members/davidcocoreanu.jpg" alt="">
         <h3>David Cocoreanu</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/carinabotlung.jpg" alt="">
         <h3>Carina Botlung</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/dragosfibu.jpg" alt="">
         <h3>Dragos Fibu</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/flaviusungurean.jpg" alt="">
         <h3>Flavius Ungurean</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/paulfericean.jpg" alt="">
         <h3>Paul Fericean</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/codrinrata.jpg" alt="">
         <h3>Codrin Rata</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/ovidiuvarga.jpg" alt="">
         <h3>Ovidiu Varga</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/saraavram.jpg" alt="">
         <h3>Sara Avram</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/dianastancioni.jpg" alt="">
         <h3>Diana Stancioni</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/cipriantauciuc.jpg" alt="">
         <h3>Ciprian Tauciuc</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/team_members/valihavasi.jpg" alt="">
         <h3>Vali Havasi</h3>
      </div>


   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>