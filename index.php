<?php get_header(); ?>

<div class="container">
<div class="row">

  <div class="col-md-8">

	<!-- Post info -->
	<div class="row">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <h1><?php the_title(); ?></h1>
           <p><i class="icon-time"></i> <em><?php the_date(); ?></em></p>	
	</div>


		<!-- Content -->
		<div class="row">
           <p><?php the_content(); ?></p>
		
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
		</div>	
	
		<!-- Comments -->
		<div class="row">
		<p><?php comments_template(); ?></p>	
		</div>	
		
  </div> <!-- col-md-8-->

<!-- sidebar -->
  <div class="col-md-4">
	<?php get_sidebar(); ?>	
  </div>

</div>  
</div>

<!-- footer -->
<div class="container">
<div class="row">
	<?php get_footer(); ?>
</div>
</div>

