<?php
/*
Template Name: cover page template
*/
?>


<?php get_header(); ?>


<?php
// check if the post or page has a Featured Image assigned to it.
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
?>


<div class="header">
	<img src="<?php echo $feat_img_src; ?>" class="responsive" />
</div>

<div id="page_wrap" class="container home">

</div>

<?php get_footer(); ?>