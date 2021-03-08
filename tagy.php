<?php 
/*
Template Name: Направление
Template Post Type: retrain
 */
?>


<?php

$url;
$current_url = home_url(add_query_arg( array() ), $url->requiest);

$allPosts = get_posts( array(
	'post_type' => 'courses',
	'supress_filters' => false,
	'numberposts' => -1,
	'orderby' => 'date',
	'order' => 'DESC',
	// 'tag' => 'retrain',
	// 'category' => 'fly-and-space',
) );


foreach ($allPosts as $post) {
?>

<h1><?php the_title() ?></h1>
<h2><?php echo get_field('course_name') ?></h2>

<?php } ?>
<p><?php single_tag_title() ?> метка</p>
<br>
<p><?php echo $current_url ?></p>
<p><?php echo $url ?></p>


