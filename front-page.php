<?php get_header(); ?>

<!-- Professional -->
<div class="container">
<div class="row">
	<div class="col-md-4">
	<h2><a href="http://kelprmy.wpengine.com/?page_id=11"  style="text-decoration:none;"><i class="icon-archive icon-2x pull-left"></i></a></h2>
		<p>I am interested in science communication because I believe science should be <strong>for everyone</strong>. My own publications can be found here...</p>
	</div> <!-- col-md-4 -->

	<div class="col-md-4">
	<h2><a href="https://github.com/kelprmy" style="text-decoration:none;" target="blank"><i class="icon-github icon-2x pull-left"></i></a></h2>
		<p>I am passionate about <strong>open access</strong>. I aim to push all my scientific as well as other work to GitHub. Please be patient - I'm a git newbie.</p>
	</div> <!-- col-md-4 -->

	<div class="col-md-4">
	<h2><a href="http://kelprmy.wpengine.com/?page_id=9"><i class="icon-envelope icon-2x pull-left" style="text-decoration:none;"></i></a></h2>
		<p>Feel free to contact me with any questions you have. I am always open for <strong>discussions</strong> and looking for <strong>new projects</strong>.</p>
	</div> <!-- col-md-4 -->
</div>
</div>

<!-- Main hero unit from front-page content -->

<div class="jumbotron">
<div class="container">
<div class="row">
	<div class="col-md-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  	<?php the_content(); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Uups, not working right now. Come back later.'); ?></p>
		<?php endif; ?>
	</div> <!-- col-md-12 -->
</div> <!-- /row -->
</div> <!-- /container -->
</div> <!-- /jumbo -->

<!-- Personal stuff -->
<div class="container">

<div class="row">
	<h2>More Personal:</h2>
</div>

<div class="row">
	<div class="col-md-4">
	<h2><a href="http://kelprmy.wpengine.com/?page_id=53" style="text-decoration:none;"><i class="icon-bullhorn icon-2x pull-left"></i></a></h2>
		<p>On <strong>my personal blog</strong> you'll find PhD-hickups, tips & tricks (LaTeX, Ubuntu) and the occational reflections (mostly from vacations) :-) </p>
	</div> <!-- col-md- -->

	<div class="col-md-4">
	<h2><a href="https://twitter.com/kelprmy" style="text-decoration:none;" target="blank"><i class="icon-twitter icon-2x pull-left"></i></a></h2>
		<p>I used to tweet and stuff, but then I didn't for quite a while. Now that I am emerging from my PhD-bubble, I plan on getting out there again...</p>
	</div> <!-- col-md- -->

	<div class="col-md-4">
	<h2><a href="http://instagram.com/kelprmy" style="text-decoration:none;" target="_blank"><i class="icon-instagram icon-2x pull-left"></i></a></h2>
		<p>Pixelized comments on clouds, oceans, buildings, mountains, love, hate and the life of animals and others. That's right, you just gotta love it... </p>
	</div> <!-- col-md- -->
</div> <!-- row -->

<!-- footer -->
<div class="row">
	<?php get_footer(); ?>
</div> <!-- row -->

</div> <!-- container -->
