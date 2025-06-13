<?php
include_once('../landing-redirect.php');
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="format-detection" content="telephone=no" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>WorldTalent</title>
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
         rel="stylesheet"
      />
      <link rel="stylesheet" href="./null.css" />
      <link rel="stylesheet" href="./style.css" />
      <link rel="shortcut icon" href="./image/favicon.png" type="image/x-icon" />
   </head>

   <body>
      <div class="wrapper bg__wrap">
      <picture>
         <source media="(max-width: 1024px)" srcset="./image/bgtb.png" />
         <img src="./image/bg.png" alt="" class="bg" />
      </picture>
         <img src="./image/title__bg.svg" alt="" class="title__bg" />
         <img src="./image/man.png" alt="" class="man" />
         <div class="content">
            <a href="#" class="logo"><img src="./image/logo.svg" alt="" /></a>
            <h1 class="title">Your Football Future Starts Here!</h1>
            <p class="text">
               Join the platform where football players (ages 6–21) connect with scouts and coaches worldwide!
            </p>
            <div class="discount show-1024">
               <h3 class="discount__title">87% DISCOUNT!</h3>
               <p class="discount__text">Until September 1, 2025</p>
            </div>
            <a data-redirect="1" href="#" class="join__button hide-550">Join Now!</a>
            <div class="footer">
               <img src="./image/ball.svg" alt="" class="ball hide-550" />

               <div class="footer__text">
                  Create your player profile today br and get <br />
                  <span class="green">2 YEARS of full access for just $12.99</span> <br />
                  (Regular price: $99.98)
               </div>
               <div class="offer hide-1600">Offer valid until September 1st, 2025</div>
               <div class="offer show-1600">
                  Offer valid until <br />
                  September 1st, 2025
               </div>

               <a data-redirect="1" href="#" class="join__button show-550">Join Now!</a>
            </div>
            <div class="discount hide-1024">
               <h3 class="discount__title">87% DISCOUNT!</h3>
               <p class="discount__text">Until September 1, 2025</p>
            </div>
         </div>
         <footer class="real__footer">
            <div class="terms">© World Talent Radar 2025</div>
            <div class="footer__links">
               <a href="#" class="footer__link ">Cookie Policy</a>
               <a href="#" class="footer__link">Terms and conditions</a>
               <a href="#" class="footer__link">Privacy Policy</a>
               <a href="#" class="footer__link">Imprint</a>
            </div>
         </footer>
      </div>
      <script src="../app.js"></script>
   </body>
</html>
