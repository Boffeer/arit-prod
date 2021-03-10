<?php 
/*
 * Template Name: Подробнее о семинаре или вебинаре
 * Template Post Type: seminars
 */
?>
<?php get_header();?>
    <main class="subpage--white">
      <div class="container">
        <script>
          var mapsDelay = 1000;
          
        </script>


<?php 
	$newsItems = array(
		'post_type' => 'seminars',
		'supress_filters' => false,
		'numberposts' => -1,
		'order' => 'ASC',
	);
?>
        <div class="news-item-page">
          <div class="paper paper--news-item">
					<h1><?php the_field('meetup_name'); ?></h1>
					<img src="<?php the_field('meetup_pic') ?>" alt="<?php the_field('meetup_name'); ?>">
            <div class="paper--news-item-body">
							<?php the_field('meetup_more'); ?>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php get_footer();?>
