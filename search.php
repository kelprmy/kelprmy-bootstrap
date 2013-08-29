<?php get_header(); ?>

<div class="row">
  <div class="span8">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

 <!-- Post info -->
<div class="container-fluid well"> 	
	<p>Published on <em><?php the_time('l, F jS, Y'); ?></em></br>
		Categories: <?php
				$categories = get_the_category();
				$separator = ', ';
				$output = '';
					if($categories){
					foreach($categories as $category) 					{
				$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
				}
				echo trim($output, $separator);
				}
			?></br>
		<?php the_tags( 'Tags: ', ', ' ); ?>  </br>
		Comments: <?php comments_number('None', '1 comment','% comments'); ?>	
	</p>
</div>
  	
        <p><?php the_content('<button type="submit" class="btn btn-inverse pull-right">More »</button>',$stripteaser); ?></p>
</br>     
<hr>
    
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, no match was found. You may have better luck trying a different search term.'); ?></p>
    <?php endif; ?>

<h2>Post Archive</h2>
<div id="container">
	<div id="content" role="main">

	<div class="row">
	<div class="span4">
		<h2>by Date:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div> <!--#span-->

	<div class="span4">		
		<h2>by Subject:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>
	</div> <!--#span-->
	</div> <!--#row-->

	</div><!-- #content -->
</div><!-- #container -->

  </div><!-- #span -->
  <div class="span4">

    <?php get_sidebar(); ?>   

  </div>
</div>


<?php get_footer(); ?>
