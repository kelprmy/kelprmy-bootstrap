<?php get_header(); ?>

<div class="row">
  <div class="span8">

	<!--Post info-->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <h1><?php the_title(); ?></h1>
           <p><i class="icon-time"></i> <em><?php the_date(); ?></em></p>	

		<!--Content-->
           <p><?php the_content(); ?></p>
		
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
			
			</br>
			<!-- Flattr -->
			<script id='flattrbtn'>(function(i){var f,s=document.getElementById(i);f=document.createElement('iframe');f.src='//api.flattr.com/button/view/?uid=kelpRmy&button=compact&url='+encodeURIComponent(document.URL);f.title='Flattr';f.height=20;f.width=110;f.style.borderWidth=0;s.parentNode.insertBefore(f,s);})('flattrbtn');</script> 

		<!--Back button-->
		<span><a href="http://guriandersen.no/my-blog/" class="btn btn-inverse pull-right"><i class="icon-rotate-left"></i> Back </a></span>
		</br>

		<!--Social share-->
		<p><?php if( function_exists( do_sociable() ) ){ do_sociable(); }; ?></p>
	
		<!--Comments-->
		<p><?php comments_template(); ?></p>
		
  </div> <!-- span -->

  <div class="span4">
	<?php get_sidebar(); ?>	
  </div>
  
</div> <!-- row -->

<div class="row">
  <div class="span8">

<?php get_footer(); ?>

  </div>
</div>

