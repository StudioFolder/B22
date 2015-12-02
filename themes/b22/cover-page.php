<?php
/*
Template Name: cover page template
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div id="cover">

	<div class="header">
		<img src="<?php echo $feat_img_src; ?>" class="responsive" />
	</div>

	<div id="page_wrap" class="container home">
		<div class="intro">
			<?php the_content(); ?>
		</div>
	</div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>