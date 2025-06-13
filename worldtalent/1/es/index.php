
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

   <body class="es">
      <div class="wrapper bg__wrap">
         <img src="../image/footballer.png" alt="" class="footballer higher" />

         <div class="content">
            <section class="info bg__wrap">
               <picture>
                  <!-- мобильная версия -->
                  <source class="bg" srcset="../image/first__bgmb.png" media="(max-width: 650px)" />
                  <!-- планшетная -->
                  <source class="bg" srcset="../image/first__bgtb.png" media="(max-width: 1200px)" />
                  <!-- desktop-фолбек -->
                  <img class="bg" src="../image/first__bg.png" alt="" loading="lazy" />
               </picture>
               <div class="info__content higher">
                  <a href="#" class="logo">
                     <img src="../image/logo.svg" alt="" />
                  </a>
                  <h1 class="info__title">
                     ¿Sueñas con una carrera <br />
                     <span class="lower">en el fútbol?</span>
                  </h1>
                  <p class="info__text">
                     La plataforma donde los futbolistas <br />
                     (de 6 a 21 años) se conectan con verdaderos ojeadores y entrenadores de todo el mundo.
                  </p>
                  <a data-redirect="1" href="#" class="join__button">Únete ahora</a>
               </div>
            </section>
            <section class="invisible">
               <div class="invisible__wrapper">
                  <img src="../image/content__image.png" alt="" class="invisible__image hide-850" />
                  <div class="invisible__content">
                     <div class="invisible__content_top">
                        <h2 class="invisible__title">
                           Los jugadores más talentosos permanecen <span class="red">invisibles...</span>
                        </h2>
                        <img src="../image/content__image.png" alt="" class="invisible__image show-850" />

                        <p class="invisible__text">
                           Miles de jóvenes futbolistas nunca reciben la oportunidad que merecen, no por falta de
                           talento, sino por falta de visibilidad.
                        </p>
                     </div>
                     <div class="invisible__lines hide-420">
                        <div class="invisible__line">
                           <img src="../image/video.svg" alt="" class="invisible__line_icon" />
                           <div class="invisible__line_text"><span class="red">Sin video</span> = sin visibilidad</div>
                        </div>
                        <div class="invisible__line">
                           <img src="../image/access.svg" alt="" class="invisible__line_icon" />
                           <div class="invisible__line_text">
                              <span class="red">Sin acceso a ojeadores</span> = sin progreso en tu carrera
                           </div>
                        </div>
                        <div class="invisible__line">
                           <img src="../image/profile.svg" alt="" class="invisible__line_icon" />
                           <div class="invisible__line_text">
                              <span class="red">Sin perfil online</span> = oportunidades perdidas
                           </div>
                        </div>
                     </div>
                     <div class="invisible__lines show-420">
                        <div class="invisible__line">
                           <img src="../image/video.svg" alt="" class="invisible__line_icon" />
                           <div class="invisible__line_text">
                              <span class="red">Sin video</span> <br />
                              = sin visibilidad
                           </div>
                        </div>
                        <div class="invisible__line">
                           <img src="../image/access.svg" alt="" class="invisible__line_icon" />
                           <div class="invisible__line_text">
                              <span class="red">Sin acceso a ojeadores</span> <br />
                              = sin progreso en tu carrera
                           </div>
                        </div>
                        <div class="invisible__line">
                           <img src="../image/profile.svg" alt="" class="invisible__line_icon" />
                           <div class="invisible__line_text">
                              <span class="red">Sin perfil online</span> <br />
                              = oportunidades perdidas
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
                        ¡Convierte tu talento en <span class="green">oportunidades reales!</span>
                     </h2>
                     <p class="opportunities__text">
                        WorldTalentRadar te da todo lo que necesitas para impulsar tu camino en el fútbol.
                     </p>
                     <img src="../image/boys.png" alt="" class="boys show-850" />

                     <ul class="opportunities__list">
                        <li>
                           <img src="../image/01.svg" alt="" class="opportunities__list_number" />
                           Crea tu perfil
                        </li>
                        <li>
                           <img src="../image/02.svg" alt="" class="opportunities__list_number" />
                           Comparte tu posición, habilidades, goles...
                        </li>
                        <li>
                           <img src="../image/03.svg" alt="" class="opportunities__list_number" />
                           Muestra tus mejores jugadas en videos y fotos, agrega tus redes sociales
                        </li>
                        <li>
                           <img src="../image/04.svg" alt="" class="opportunities__list_number" />
                           ¡Hazte ver en todo el mundo!
                        </li>
                     </ul>
                     <a data-redirect="2" href="#" class="join__button">Únete ahora</a>
                  </div>
                  <img src="../image/boys.png" alt="" class="boys hide-1200" />
                  <img src="../image/boys2.png" alt="" class="boys2 show-1200 hide-850" />
               </div>
            </section>
            <footer class="footer">
               <div class="terms">© World Talent Radar 2025</div>
               <div class="footer__links">
                  <a href="#" class="footer__link">Política de Cookies</a>
                  <a href="#" class="footer__link">Términos y Condiciones</a>
                  <a href="#" class="footer__link">Política de Privacidad</a>
                  <a href="#" class="footer__link">Aviso Legal</a>
               </div>
            </footer>
         </div>
      </div>
      <script src="../../app.js"></script>
   </body>
</html>
