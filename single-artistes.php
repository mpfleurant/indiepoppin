

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
<body>

<div class="nav-desktop">
    <a href="<?php echo esc_url(home_url('/')); ?>"><p>ip</p></a>

    <ul>
        <li><a href="<?php echo esc_url(home_url('/programmation')); ?>">programmation</a></li>
        <li><a class="btn-billets hvr-sweep-to-right" href="">billets</a></li>
        <li><a href="">en</a></li>
    </ul>
</div>




<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>



<div class="hero-single" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>">
    <h1><?php the_title(); ?></h1>
</div>


<div class="info-single">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>

    <a href="">lany.com</a>
</div>


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


    <?php endwhile; ?>
    <?php endif; ?>

    <?php wp_reset_query(); ?>

</footer>

</body>
</html>