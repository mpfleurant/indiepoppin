<?php
/* Template Name: home */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>indie poppin' - festival de musique</title>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">

    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hover-min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/aos.js"></script>

</head>
<body style="scroll-behavior: smooth;
  overflow-x: hidden;">


<section class="parallax">

    <img src="<?php echo get_template_directory_uri(); ?>/images/hero-indie.png" id="back">
    <h1 id="hero-h1">indie poppin’</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/images/1.png" id="front">

</section>









<div class="nav-desktop">
    <a href=""><p>ip</p></a>

    <ul>
        <li><a href="<?php echo esc_url(home_url('/programmation')); ?>">programmation</a></li>
        <li><a class="btn-billets hvr-sweep-to-right" href="">billets</a></li>
        <li><a href="">en</a></li>
    </ul>
</div>

<div class="dates">
    <p>15, 16 & 17 octobre 2021</p>
</div>

<div class="social">
    <i class="fab fa-instagram"></i>
    <i class="fab fa-facebook"></i>
    <i class="fab fa-twitter"></i>
    <i class="fab fa-youtube"></i>
</div>


<div class="info wrapper">
<p><b>indie poppin’</b>, c’est plus de 24 artistes du genre alt/indie/pop qui se rejoignent
    à New York pour offrir un festival unique et intime!
</p>
</div>


<div class="revisiter">
    <a href="">voir les éditions antérieures</a>
    <p>revisite l'expérience en photos</p>
</div>

<section class="vedette">
<h4>En vedette</h4>


    <div class="artistes">
        <article class="vedette-info">

            <div class="text-info">
    <h4>LANY</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>

        <img src="<?php echo get_template_directory_uri(); ?>/images/lany.png" alt="">
        </article>


        <article class="vedette-info">
            <div class="text-info">
                <h4>TAME IMPALA</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>

    <img src="<?php echo get_template_directory_uri(); ?>/images/ti.png" alt="">
        </article>


        <article class="vedette-info">
            <div class="text-info">
                <h4>JOJI</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/images/joji.png" alt="">
        </article>
    </div>


        <div class="btn"><a class="btn" href="<?php echo esc_url(home_url('/programmation')); ?>">voir la programmation complète</a></div>
</section>




<section class="forfaits">
    <h4>Forfaits</h4>

    <div class="forfait">
        <h3>1 jour</h3>
        <h2 class="prix">120 CAD</h2>

        <h5>INCLUS:</h5>
        <ul>
            <li>Lorem ipsum dolor sit amet</li>
            <li>IPSUM</li>
            <li>LOREM</li>
        </ul>

        <a href="" class="btn-acheter">ACHETER</a>
    </div>

    <div class="forfait">
        <h3>2 jours</h3>
        <h2 class="prix">185 CAD</h2>

        <h5>INCLUS:</h5>
        <ul>
            <li>Lorem ipsum dolor sit amet</li>
            <li>IPSUM</li>
            <li>LOREM</li>
        </ul>

        <a href="" class="btn-acheter">ACHETER</a>
    </div>

    <div class="forfait">
        <h3>3 jours</h3>
        <h2 class="prix">275 CAD</h2>

        <h5>INCLUS:</h5>
        <ul>
            <li>Lorem ipsum dolor sit amet</li>
            <li>IPSUM</li>
            <li>LOREM</li>
        </ul>

        <a href="" class="btn-acheter">ACHETER</a>
    </div>
</section>


<section class="location">
    <h4>Location</h4>

    <div class="location-txt">
    <h4 class="ny">CENTRAL PARK, NEW YORK</h4>
    <p>Prépare-toi à être emballé par l’expérience indie poppin’ en plein coeur de Central Park, à New York.
C’est tout un weekend qui pop!</p>
    </div>

    <div class="map">
        <img src="<?php echo get_template_directory_uri(); ?>/images/map.svg" alt="">

        <div class="location-dot"></div>
        <div class="location-ring"></div>

    </div>
</section>



<footer>

    <div class="footer-info">
        <h2>Viens vivre indie poppin’ au maximum!</h2>
        <p>Installe notre application mobile
            pour recevoir  toutes les dernières nouvelles sur le festival</p>


        <div class="appstore">
            <img class="appstore" src="<?php echo get_template_directory_uri(); ?>/images/apple.svg" alt="">
            <img class="appstore" src="<?php echo get_template_directory_uri(); ?>/images/google.svg" alt="">
        </div>


        <div class="social-footer">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
        </div>


        <div class="terms">
            <p>CONDITIONS   |   NOUS CONTACTER   |   CONFIDENTIALITÉ</p>
        </div>

    </div>

    <div class="footer-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/app.png" alt="">
    </div>


</footer>











</body>
</html>

<script>
let parallax = document.getElementById('back');
    let text = document.getElementById('hero-h1')

    window.addEventListener('scroll', function(){
        let value = window.scrollY;
        parallax.style.top = value * 0.45 + 'px';
        text.style.top = value * 1.05 + 'px';

    })
    </script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
AOS.init();
</script>

