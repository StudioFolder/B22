<?php
/*
Template Name: cover page template
*/
?>


<?php get_header(); ?>


<?php
// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail( $post->ID ) ){
	$feat_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
	$feat_img_src = $feat_img[0];
}else{
	$feat_img_src = "http://placehold.it/1024x768/";
}
?>


<div class="header">
	<img src="<?php echo $feat_img_src; ?>" class="responsive" />
</div>

<div id="page_wrap" class="container home">

</div>

<?php get_footer(); ?>