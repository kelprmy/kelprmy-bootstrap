<?php get_header(); ?>

<div class="row">
  <div class="span8">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

 <!-- Post info -->
<div class="container-fluid well"> 	
	<p><i class="icon-calendar"></i> <em><?php the_time('l, F jS, Y'); ?></em></br>
		<i class="icon-asterisk"></i> <?php
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
		<i class="icon-tags"></i> <?php the_tags( ' ', ', ' ); ?>  </br>
		<i class="icon-comments-alt"></i> <?php comments_number('None', '1 comment','% comments'); ?>	
	</p>
</div>
  	
        <p><?php the_content('<button type="submit" class="btn btn-inverse pull-right">More »</button>',$stripteaser); ?></p>
</br>     
<hr>
    
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, this post is gone... Contact me if you miss something.'); ?></p>
    <?php endif; ?>

<h2>Post Archive</h2>
<div id="container">
	<div id="content" role="main">

	<div class="row">
	<div class="span4">
		<h2>by Date:</h2>
		<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
  		<option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
				  <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
		</select>
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
