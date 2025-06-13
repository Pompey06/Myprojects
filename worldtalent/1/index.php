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
      <link rel="shortcut icon" href="https://worldtalentradar.com/wp-content/themes/worldtalentradar/verstka/assets/images/icons/favicon.svg">
  
  <link rel="icon" type="image/png" href="https://worldtalentradar.com/wp-content/themes/worldtalentradar/verstka/assets/images/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/svg+xml" href="https://worldtalentradar.com/wp-content/themes/worldtalentradar/verstka/assets/images/favicon/favicon.svg">
  <link rel="shortcut icon" href="https://worldtalentradar.com/wp-content/themes/worldtalentradar/verstka/assets/images/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="https://worldtalentradar.com/wp-content/themes/worldtalentradar/verstka/assets/images/favicon/apple-touch-icon.png">   </head>

   <body>
      <div class="wrapper bg__wrap">
         <img src="./image/footballer.png" alt="" class="footballer higher" />

         <div class="content">
            <section class="info bg__wrap">
               <picture>
                  <!-- мобильная версия -->
                  <source class="bg" srcset="./image/first__bgmb.png" media="(max-width: 650px)" />
                  <!-- планшетная -->
                  <source class="bg" srcset="./image/first__bgtb.png" media="(max-width: 1200px)" />
                  <!-- desktop-фолбек -->
                  <img class="bg" src="./image/first__bg.png" alt="" loading="lazy" />
               </picture>

               <div class="info__content higher">
                  <a href="#" class="logo">
                     <img src="./image/logo.svg" alt="" />
                  </a>
                  <h1 class="info__title">
                     DREAMING OF A<br />
                     <span class="lower">FOOTBALL CAREER?</span>
                  </h1>
                  <p class="info__text">
                     A Platform where football players <br />
                     (ages 6–21) connect with real scouts and coaches worldwide!
                  </p>
                  <a data-redirect="1" href="#" class="join__button">Join & Get Noticed</a>
               </div>
            </section>
            <section class="invisible">
               <div class="invisible__wrapper">
                  <img src="./image/content__image.png" alt="" class="invisible__image hide-850" />
                  <div class="invisible__content">
                     <div class="invisible__content_top">
                        <h2 class="invisible__title">
                           Most Talented Players Stay <span class="red">Invisible...</span>
                        </h2>
                        <img src="./image/content__image.png" alt="" class="invisible__image show-850" />

                        <p class="invisible__text">
                           Thousands of young players never get the chance they deserve - not because of their skill,
                           but because they lack visibility.
                        </p>
                     </div>
                     <div class="invisible__lines hide-420">
                        <div class="invisible__line">
                           <img src="./image/video.svg" alt="" class="invisible__line_icon" />
                           <div class="invisible__line_text"><span class="red">No video</span> = no visibility</div>
                        </div>
                        <div class="invisible__line">
                           <img src="./image/access.svg" alt="" class="invisible__line_icon" />
                           <div class="invisible__line_text">
                              <span class="red">No scout access</span> = no career progress
                           </div>
                        </div>
                        <div class="invisible__line">
                           <img src="./image/profile.svg" alt="" class="invisible__line_icon" />
                           <div class="invisible__line_text">
                              <span class="red">No online profile</span> = missed opportunities
                           </div>
                        </div>
                     </div>
                     <div class="invisible__lines show-420">
                        <div class="invisible__line">
                           <img src="./image/video.svg" alt="" class="invisible__line_icon" />
                           <div class="invisible__line_text">
                              <span class="red">No video</span> <br />
                              = no visibility
                           </div>
                        </div>
                        <div class="invisible__line">
                           <img src="./image/access.svg" alt="" class="invisible__line_icon" />
                           <div class="invisible__line_text">
                              <span class="red">No scout access</span> <br />
                              = no career progress
                           </div>
                        </div>
                        <div class="invisible__line">
                           <img src="./image/profile.svg" alt="" class="invisible__line_icon" />
                           <div class="invisible__line_text">
                              <span class="red">No online profile</span> <br />
                              = missed opportunities
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="opportunities">
               <div class="opportunities__wrapper">
                  <div class="opportunities__content">
                     <h2 class="opportunities__title">
                        Turn Your Talent into <span class="green">Real Opportunities!</span>
                     </h2>
                     <p class="opportunities__text">
                        WorldTalentRadar gives you everything you need to promote your football journey!
                     </p>
                     <img src="./image/boys.png" alt="" class="boys show-850" />

                     <ul class="opportunities__list">
                        <li>
                           <img src="./image/01.svg" alt="" class="opportunities__list_number" />
                           Create Your Profile
                        </li>
                        <li>
                           <img src="./image/02.svg" alt="" class="opportunities__list_number" />
                           Share your playing position, footwork, goals,...
                        </li>
                        <li>
                           <img src="./image/03.svg" alt="" class="opportunities__list_number" />
                           Showcase Your Best Moves with Videos and Photos, add your social media
                        </li>
                        <li>
                           <img src="./image/04.svg" alt="" class="opportunities__list_number" />
                           Be Found Globally!
                        </li>
                     </ul>
                     <a data-redirect="2" href="#" class="join__button">Join & Get Noticed</a>
                  </div>
                  <img src="./image/boys.png" alt="" class="boys hide-1200" />
                  <img src="./image/boys2.png" alt="" class="boys2 show-1200 hide-850" />
               </div>
            </section>
            <footer class="footer">
               <div class="terms">© World Talent Radar 2025</div>
               <div class="footer__links">
                  <a href="#" class="footer__link ">Cookie Policy</a>
                  <a href="#" class="footer__link">Terms and conditions</a>
                  <a href="#" class="footer__link">Privacy Policy</a>
                  <a href="#" class="footer__link">Imprint</a>
               </div>
            </footer>
         </div>
      </div>
      <div class="copied_modal">copied to clipboard</div>

      <script src="../app.js"></script>
   </body>
</html>
