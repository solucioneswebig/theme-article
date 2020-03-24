<?php
get_header();
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
?>
<section style="padding:120px 0px 80px 0px;">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

</section>	
        

<?php
	endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
 
get_sidebar();
get_footer();
?>