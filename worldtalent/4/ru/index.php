<?php
include_once('../../landing-redirect.php');
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
         href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
         rel="stylesheet"
      />
      <link rel="stylesheet" href="../null.css" />
      <link rel="stylesheet" href="../style.css" />
      <link rel="shortcut icon" href="https://worldtalentradar.com/wp-content/themes/worldtalentradar/verstka/assets/images/icons/favicon.svg">
  
  <link rel="icon" type="image/png" href="https://worldtalentradar.com/wp-content/themes/worldtalentradar/verstka/assets/images/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/svg+xml" href="https://worldtalentradar.com/wp-content/themes/worldtalentradar/verstka/assets/images/favicon/favicon.svg">
  <link rel="shortcut icon" href="https://worldtalentradar.com/wp-content/themes/worldtalentradar/verstka/assets/images/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="https://worldtalentradar.com/wp-content/themes/worldtalentradar/verstka/assets/images/favicon/apple-touch-icon.png">   </head>
   </head>

   <body class="ru">
      <div class="wrapper bg__wrap">
      <picture>
         <source media="(max-width: 1024px)" srcset="../image/bgtb.png" />
         <img src="../image/bg.png" alt="" class="bg" />
      </picture>

         <img src="../image/title__bg.svg" alt="" class="title__bg" />
         <img src="../image/content.png" alt="" class="content__image hide-1024" />
         <!--<img src="../image/bgmb.png" alt="" class="bg show-450" />-->
         <div class="content">
            <a href="#" class="logo"><img src="../image/logo.svg" alt="" /></a>
            <h1 class="title">Стань заметным для скаутов мира! Присоединяйся к базе футбольных талантов!</h1>
            <h3 class="subtitle">Ты футболист в возрасте от 6 до 21 лет?</h3>

            <p class="text">
               Выходи за пределы своего поля! Создай профиль, загрузи свои лучшие навыки и стань частью глобальной базы
               талантов.
            </p>

            <img src="../image/contenttb.png" alt="" class="contenttb__image show-1024" />

            <a data-redirect="1" href="#" class="join__button hide-1024">Присоединиться к базе сейчас!</a>
            <div class="footer">
               <div class="footer__line">
                  <img src="../image/01.svg" alt="" class="footer__number" />
                  <p class="profile_text">Создай профиль игрока</p>
               </div>
               <div class="footer__line">
                  <img src="../image/02.svg" alt="" class="footer__number" />
                  <p class="profile_text">Поделись информацией и навыками</p>
               </div>
               <div class="footer__line">
                  <img src="../image/03.svg" alt="" class="footer__number" />
                  <p class="profile_text">Тебя заметят скауты со всего мира!</p>
               </div>
               <a data-redirect="1" href="#" class="join__button show-670">Присоединиться к базе сейчас!</a>
            </div>
            <a data-redirect="1" href="#" class="join__button show-1024 hide-670">Присоединиться к базе сейчас!</a>
         </div>
         <footer class="real__footer">
            <div class="terms">© World Talent Radar 2025</div>
            <div class="footer__links">
               <a href="#" class="footer__link">Политика использования файлов cookie</a>
               <a href="#" class="footer__link">Условия и положения </a>
               <a href="#" class="footer__link">Политика конфиденциальности</a>
               <a href="#" class="footer__link">Выходные данные</a>
            </div>
         </footer>
      </div>
      <script src="../../app.js"></script>
   </body>
</html>
