<?php
/*
Template Name: cover page template
*/
?>

<?php get_header(); ?>

<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail();
} 
?>
<?php the_content(); ?>

<div class="header">
	<img src="<?php echo $feat_img_src; ?>" class="responsive" />
</div>

<div id="page_wrap" class="container home">

</div>

<?php get_footer(); ?>