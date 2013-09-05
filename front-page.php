<?php get_header(); ?>

<hr>
<!-- Professional -->

<div class="row">
	<div class="span4">
	<h2><a href="http://kelprmy.wpengine.com/?page_id=11"  style="text-decoration:none;"><i class="icon-archive icon-2x pull-left"></i></a></h2>
		<p>I am interested in science communication because I believe science should be <strong>for everyone</strong>. My own publications can be found here...</p>
	</br>
	</div> <!-- span4 -->

	<div class="span4">
	<h2><a href="https://github.com/kelprmy" style="text-decoration:none;" target="blank"><i class="icon-github icon-2x pull-left"></i></a></h2>
		<p>I am passionate about <strong>open access</strong>. I aim to push all my scientific as well as other work to GitHub. Please be patient - I'm a git newbie.</p>
	</br>
	</div> <!-- span4 -->

	<div class="span4">
	<h2><a href="http://kelprmy.wpengine.com/?page_id=9"><i class="icon-envelope icon-2x pull-left" style="text-decoration:none;"></i></a></h2>
		<p>Feel free to contact me with any questions you have. I am always open for <strong>discussions</strong> and looking for <strong>new projects</strong>.</p>
	</br>
	</div> <!-- span4 -->

</div> <!-- row -->

<!-- Main hero unit from front-page content -->
<div class="hero-unit">
<div class="row">

<div class="span7">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Uups, not working right now. Come back later.'); ?></p>
	<?php endif; ?>

</div> <!-- span7 -->

<div class="span3 pull-right">
	<a href="http://kelprmy.wpengine.com/wp-content/uploads/2013/08/guriBW-e1375787553163.jpg"><img src="http://kelprmy.wpengine.com/wp-content/uploads/2013/08/guriBW-e1375787553163-682x1024.jpg" alt="guriBW" width="682" height="1024" class="size-large wp-image-8 img-rounded" /></a>
</div> <!-- span3 -->

</div> <!-- row -->
</div> <!-- hero -->

<!-- Personal stuff -->
<h2>More Personal:</h2>
<div class="row">

	<div class="span4">
	<h2><a href="http://kelprmy.wpengine.com/?page_id=53" style="text-decoration:none;"><i class="icon-bullhorn icon-2x pull-left"></i></a></h2>
		<p>On <strong>my personal blog</strong> you'll find PhD-hickups, tips & tricks (LaTeX, Ubuntu) and the occational reflections (mostly from vacations) :-) </p>
	</div> <!-- span -->

	<div class="span4">
	<h2><a href="https://twitter.com/kelprmy" style="text-decoration:none;" target="blank"><i class="icon-twitter icon-2x pull-left"></i></a></h2>
		<p>I used to tweet and stuff, but then I didn't for quite a while. Now that I am emerging from my PhD-bubble, I plan on getting out there again...</p>
	</div> <!-- span -->

	<div class="span4">
	<h2><a href="http://instagram.com/kelprmy" style="text-decoration:none;" target="_blank"><i class="icon-instagram icon-2x pull-left"></i></a></h2>
		<p>Pixelized comments on clouds, oceans, buildings, mountains, love, hate and the life of animals and others. That's right, you just gotta love it... </p>
	</div> <!-- span -->

</div> <!-- row -->
</br>

<div class="row">

<div class="span12">
	<?php get_footer(); ?>
</div> <!-- span -->

</div> <!-- row -->

