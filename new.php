<?php 
/*
Template Name: Новость
Template Post Type: news
 */
?>
<?php get_header();?>
    <main class="subpage--white">
      <div class="container">
        <script>
          var mapsDelay = 1000;
          
        </script>
        <div class="breadcrumbs"><a class="breadcrumb breadcrumb--main" href="#">Главная</a><a class="breadcrumb" href="#">Обучение</a><a class="breadcrumb" href="#">Повышение квалификации</a><a class="breadcrumb" href="#">Менеджмент</a><a class="breadcrumb" href="#">Логистическйи менеджмент</a></div>

<?php 
	$newsItems = array(
		'post_type' => 'news',
		'supress_filters' => false,
		'numberposts' => -1,
		'order' => 'ASC',
	);
?>
        <div class="news-item-page">
          <div class="paper paper--news-item">
					<h1><?php the_field('news_title'); ?></h1>
            <div class="paper--news-item-body">
							<?php the_field('news_text'); ?>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php get_footer();?>
