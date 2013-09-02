<!DOCTYPE html> 
<html lang="en">

  <head>
	<!-- Explorer compability -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        <div class="nav-collapse collapse">
          <ul class="nav">

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
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container">
  
<p><em>This page is currently not IExplorer friendly - I'm working on it! Consider giving <a href="http://www.mozilla.org/en-US/firefox/fx/#desktop">Mozilla Firefox</a> a try...</em></p>
<hr>
