<?php
	global $options;
//	foreach ($options as $value) {
//	    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-sitename-com" data-template-set="html5-reset">

	<meta charset="utf-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>
	<?php if (is_home () ) { bloginfo('name'); echo " | "; bloginfo('description'); } elseif ( is_category() ) {
		single_cat_title(); echo " - "; bloginfo('name');
	} elseif (is_single() || is_page() ) {
		single_post_title();
	} elseif (is_search() ) {
		bloginfo('name'); echo " Risultati di ricerca per: "; echo wp_specialchars($s);
	} else { wp_title('',true); } ?>
	</title>


	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/_/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/_/css/bootstrap-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/_/css/style.css">
	
	<script src="<?php bloginfo('template_directory') ?>/_/js/modernizr-1.7.min.js"></script>
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	
	<?php if(is_single()): ?>
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
		<meta property="og:image" content="<?php echo $image[0]; ?>" />
		<?php endif; ?>
	<?php endif; ?>

	<!-- wp_head() -->
	<?php wp_head(); ?>

</head>

<body class="<?php if(is_home()){ echo ('page_home'); } else { echo ('page_internal'); } ?>">

    <nav class="navbar navbar-inverse"> <!-- <nav class="navbar navbar-inverse navbar-fixed-top"> -->	

      <div class="container-fluid">


        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>

        <div id="navbar" class="collapse navbar-collapse">

			<!-- wp menu -->

			<?php

			$top_menu = array(
				'theme_location'  => '',
				'menu'            => '',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);

			wp_nav_menu( $top_menu );

			?>

			<!-- / wp menu -->

        </div>

        <!-- /.nav-collapse -->

      </div>

    </nav>



	<div class="page-header">

	    <div class="container">

		  	<h1>
			  	<a href="<?php bloginfo('url'); ?>" title="" accesskey="1">
			  		<span class="logo"><?php bloginfo('name') ?></span>
			  	</a>
		  	</h1>

		</div>

	</div>

