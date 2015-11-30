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
	        	<?php the_content(); ?>
		<div class="col-xs-12"> <!-- Full-width column -->

	        <div class="entry">
	        	<?php the_content(); ?>
	    	</div>

		</div>

		<div class="col-sm-6"> <!-- Half-width column -->

			<div class="col-sm-6 profile_details"> <!-- Half-width column with class profile_details -->

				<?php the_field('profile_details'); ?> <!-- get profile_details text -->
				<?php?>

			</div>
		</div>

	</div>

</div>

<?php get_footer(); ?>