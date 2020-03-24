<?php
get_header();
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>

<!-- Header -->
  <header class="fondo-blog-interna" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>) !important;">
    <div class="transparente" style="background-color: #00000080;">
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-10 m-auto">
      <div class="intro-text">
        <h1 class="titulo-blog-interna text-center pb-5"><?php echo the_title(); ?></h1>
      </div>
      </div>
      </div>
    </div>
    </div>
  </header>


<!--====SECCION N°1===-->
<section>
    <div class="container">
          <div class="row espacio-arriba-p">
                <div class="col-md-9">
                 <p><?php echo the_content(); ?></p>
                </div>
                <div class="col-md-3">
                	<?php get_sidebar(); ?>
                </div>
          </div>
    </div>
</section>
   

<?php
   
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
 
get_footer();
?>