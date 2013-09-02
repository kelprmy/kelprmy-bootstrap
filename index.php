<?php get_header(); ?>

<div class="row">
  <div class="span8">

<!--Post info-->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <h1><?php the_title(); ?></h1>
           <p><i class="icon-calendar"></i> <em><?php the_date(); ?></em></p>	

<!--Content-->
           <p><?php the_content(); ?></p>
		
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

<!--Back button-->
<a href="http://guriandersen.no/my-blog/"><button type="submit" class="btn btn-inverse pull-right"><i class="icon-rotate-left"></i> Back </button><a>
</br>
<hr>

<!--Social share-->
<p><?php if( function_exists( do_sociable() ) ){ do_sociable(); }; ?></p>
	
<!--Comments-->
	<p><?php comments_template(); ?></p>
</div>
  <div class="span4">
	<?php get_sidebar(); ?>	
  </div>
</div>

<div class="row">
  <div class="span8">

<?php get_footer(); ?>

  </div>
</div>

