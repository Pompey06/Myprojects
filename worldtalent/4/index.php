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
         <img src="./image/content.png" alt="" class="content__image hide-1024" />
         <!--<img src="./image/bgmb.png" alt="" class="bg show-450" />-->
         <div class="content">
            <a href="#" class="logo"><img src="./image/logo.svg" alt="" /></a>
            <h1 class="title">Get Scouted Worldwide! Join the Global Talent Database!</h1>
            <h3 class="subtitle">Are you a footballer aged 6–21?</h3>
            <p class="text">
               Go beyond your local football field! Сreate your profile, upload highlights, and join the global database
               where real scouts and coaches are searching for talent.
            </p>

            <img src="./image/contenttb.png" alt="" class="contenttb__image show-1024" />

            <a data-redirect="1" href="#" class="join__button hide-1024">Join database now!</a>
            <div class="footer">
               <div class="footer__line">
                  <img src="./image/01.svg" alt="" class="footer__number" />
                  <p class="profile_text">Create your player profile</p>
               </div>
               <div class="footer__line">
                  <img src="./image/02.svg" alt="" class="footer__number" />
                  <p class="profile_text">Share your info and skills</p>
               </div>
               <div class="footer__line">
                  <img src="./image/03.svg" alt="" class="footer__number" />
                  <p class="profile_text">Get noticed by scouts around the world!</p>
               </div>
               <a data-redirect="1" href="#" class="join__button show-670">Join database now!</a>
            </div>
            <a data-redirect="1" href="#" class="join__button show-1024 hide-670">Join database now!</a>
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
