<!DOCTYPE html> 
<html lang="en">

<head>
	<!-- Explorer compability -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	
	<!-- mobile intitial scale -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
	
	<!-- tab tiltle -->
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
<div class="container">  
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
 
    <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <?php wp_list_pages(array('title_li' => '', 'exclude' => '5,53')); ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogs <b class="caret"></b></a>
        <ul class="dropdown-menu">
                        <li><a href="http://kelprmy.wpengine.com/?page_id=53">My blog</a></li>
                        <li><a href="http://blog.marinbiologene.no" target="_blank">Marinbiobloggen (Norwegian)</a></li>
						<li><a href="http://oceanviewers.tumblr.com/" target="_blank">Ocean Viewers</a></li>
        </ul>
      </li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      					<li><a href="https://twitter.com/kelprmy"><i class="icon-twitter icon-large"></i></a></li>
      					<li><a href="http://feeds.feedburner.com/kelpRmy"><i class="icon-rss icon-large"></i></a></li>
    </ul>    
    
  </div><!-- /.navbar-collapse -->
</div><!-- container -->
</nav>

<div class="row">
<div class="container">
<p><i class="icon-exclamation-sign icon-large icon-muted pull-left"></i><em>This page is not always IExplorer friendly - I'm working on it! Consider giving <a href="http://www.mozilla.org/en-US/firefox/fx/#desktop">Mozilla Firefox</a> a try...</em></p>
</div>
</div>

