<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
  <!--==========================
  Header
  ============================-->
    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/RA.png" alt="" width="120px"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">

          <?php if(is_home() || is_front_page()): ?> 

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/#who-we-are">WHO WE ARE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/#why-us">WHY US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/#how-to-order">HOW TO ORDER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/blog">BLOG</a>
          </li>
         <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact-us">CONTACT US</a>
          </li>-->
          <?php 
          else:
          ?>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>">Home</a>
          </li>         

          <?php 
          endif; 
          ?>

        <?php 
        if(is_user_logged_in()):
        ?>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/mi-cuenta/"><i class="fa fa-user-cog"></i> Mi cuenta</a>
          </li>   


        <?php else: ?>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/mi-cuenta/"><i class="fa fa-sign-in-alt"></i> Acceder</a>
          </li>   


        <?php endif; ?>             

        </ul>
      </div>
    </div>
  </nav>
