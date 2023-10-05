<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

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
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

   <div class="video-container">
         <iframe width="410" height="360" src="https://www.youtube.com/embed/NmZ77Yn3Fr4" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="content">
         <h3>What is ultimate Frisbee?</h3>
         <h4>Ultimate is a non-contact, self-refereed team sport played with a flying disc frisbee.</h4>
         <p>The aim of the game-Two teams of seven players compete on a playing field about the same length as a football field, but narrower.  At each end of the playing field there is an end zone.  Each team defends one end zone. They score a goal if one of their players catches the disc in the opposite end zone.

The player with the disc is called the thrower. The thrower may not run with the disc.  Instead they move the disc by passing to team-mates in any direction.

The defensive team gets possession of the disc if an offensive team’s throw is not caught by a player of the same team. Then the defensive team becomes the offensive team and can try to score in the opposite end zone.</p>
      </div>

   </div>

</section>

<section class="view">
   
   <h1 class="heading">Other Info</h1>

      <div class="swiper-slide slide">
         <img src="images/home-img-1.png" alt="">
         <p>Azvarlirea is a project of the Kizuna Cultural Association, which aims to bring and promote a new sport in Romania, namely: Ultimate Frisbee. We are trying to promote the mentality conveyed by this sport through its rules, including non-contact (it is a sport where there is no contact between players), non-referee (decisions on the field are discussed only by the players involved in the event), and equality on the field (both women and men play on the field at the same time).</p>
         <a href="azvarlirea.php" class="btn">More</a>
      </div>

      <div class="swiper-slide slide">
         <img src="images/home-img-2.png" alt="">
         <p>The World Flying Disc Federation (“WFDF”) is the international sports federation responsible for world governance of flying disc (frisbee) sports, including Ultimate, Beach Ultimate, Disc Golf, Freestyle, Guts, and Individual Events. 
WFDF is a federation of 110 member associations, which represent flying disc sports and their athletes in more than 106 countries.</p>
         <a href="https://wfdf.sport/" class="btn">More</a>
      </div>

      <div class="swiper-slide slide">
         <img src="images/home-img-3.png" alt="">
         <p>Here, you'll find a glimpse of our participation in a variety of events, including festivals, social gatherings, and more. Additionally, explore the contests we've both participated in and organized.</p>
         <a href="events.php" class="btn">More</a>
      </div>

      <div class="swiper-slide slide">
         <img src="images/home-img-4.png" alt="">
         <p>Discover the times and locations where we come together to train and engage in freestyle Frisbee throwing. You can also explore the exciting competitions we host and organize.</p>
         <a href="activity.php" class="btn">More</a>
      </div>

   </div>

</section>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".view-slider", {
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