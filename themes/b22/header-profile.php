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

<head id="www.B22.it" data-template-set="html5-reset">

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
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/_/scss/style.scss">

	<script src="<?php bloginfo('template_directory') ?>/_/js/modernizr-1.7.min.js"></script>
	<!-- <script src="<?php bloginfo('template_directory') ?>/_/js/cover.js"></script> -->

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

<body <?php body_class(); ?> id="<?php if(is_home()){ echo ('page_home'); } else { echo ('page_internal'); } ?>">

<!-- Google Analytics -->

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-383327-5', 'auto');
	ga('send', 'pageview');

	</script>

<!-- end Google Analytics -->

	<div class="page-header-profile">
	    <div class="container-fluid col-xl-10 col-xl-offset-1">
		    <div class="col-xs-4">
		    	<div class="b22-logo">
			  		<a href="http://www.b22.it/web">
			  		<svg xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 54.2 80 32" width="70" height="30" xml:space="preserve" enable-background="new 0 54.2 80 32">
					  <title>
					    B22
					  </title>
					  <desc>
					    Architecture
					  </desc>
					  <g id="Welcome" sketch:type="MSPage">
					    <g id="_x30_3-profile" transform="translate(-80.000000, -67.000000)" sketch:type="MSArtboardGroup">
					      <g id="B22-_x28_black_x29_" transform="translate(80.000000, 67.000000)" sketch:type="MSLayerGroup">
					        <g id="Clip-2"/>
					        <g id="Clip-7"/>
					        <g id="Clip-12"/>
					      </g>
					    </g>
					  </g>
					  <g>
					    <path class="B22-logo-dark" d="M12.6 61.2h-0.1V55H0v30.6h12.6c7 0 12.6-5.4 12.6-12.2C25.1 66.7 19.5 61.2 12.6 61.2z"/>
					    <path class="B22-logo-dark" d="M48.1 73.8c0.2-0.2 0.3-0.5 0.5-0.9 1-1.6 1.5-3.5 1.6-5.4 0-0.1 0-0.3 0-0.4l0 0c0-6.9-5.7-12.3-12.5-12.3 -0.2 0-0.3 0-0.5 0 -2.4 0.1-4.6 0.9-6.4 2l0.9 1.4 4.7 7.4c0.2 0.3 0.3 0.9 0.3 1.4 0 0.5-0.1 1-0.3 1.4l-3.5 5.4 -2.2 3.4 -4.8 7.1c-0.5 0.8-0.2 1.4 0.8 1.4h23.5V73.8H48.1L48.1 73.8zM48.1 73.8L48.1 73.8 48.1 73.8 48.1 73.8 48.1 73.8 48.1 73.8z"/>
					    <path class="B22-logo-dark" d="M77.8 73.8c0 0 0.3-0.5 0.5-0.9 1-1.6 1.5-3.5 1.6-5.4 0-0.1 0-0.3 0-0.4l0 0c0-6.9-5.7-12.3-12.6-12.3 -0.2 0-0.3 0-0.5 0 -2.3 0.1-4.5 0.8-6.3 2l0.9 1.4 4.7 7.4c0.2 0.3 0.3 0.9 0.3 1.4 0 0.5-0.1 1-0.3 1.4l-3.5 5.4 -2.2 3.4 -4.8 7.1c-0.5 0.8-0.2 1.4 0.8 1.4h23.5V73.8H77.8zM77.8 73.8L77.8 73.8 77.8 73.8 77.8 73.8 77.8 73.8 77.8 73.8z"/>
					  </g>
					</svg>
			  		</a>
				</div>
			</div>

<!-- B22 Title H1
			  	<a href="<?php bloginfo('url'); ?>" title="" accesskey="1">
			  		<span class="logo"><?php bloginfo('name') ?></span>
			  	</a>

		  	</h1>
-->

	    <div class="col-xs-8">
		    <nav class="navbar navbar"> <!-- <nav class="navbar navbar-inverse navbar-fixed-top"> -->

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
				<div class="page-id-94">
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
				</div>
					<!-- / wp menu -->
				</div>
		        </div>

		        <!-- /.nav-collapse -->

		      </div>
		    </nav>
		</div>
		</div>

	</div>