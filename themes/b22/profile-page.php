<?php
/*
Template Name: profile page template
*/
?>


<?php get_header(); ?>


<div class="header">
	<img src="<?php echo $feat_img_src; ?>" class="responsive" />
</div>

<div id="page_wrap" class="container home">

	<div class="row">

		<div class="col-xs-12"> <!-- Full-width column -->

			<div class="single-title"><h2 class="page-title"><?php echo get_the_title(); ?></h2></div>

		</div>

		<div class="col-sm-6 project_specifications"> <!-- Half-width column -->

			<?php the_field('project_specifications'); ?>
			<?php?>

		</div>

	</div>

</div>

<?php get_footer(); ?>