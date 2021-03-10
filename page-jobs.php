<?php 
/*
 * Template Name: Вакансии
 */
?>
<?php get_header();?>
    <main class="subpage">
      <div class="container">
        <script>
          var mapsDelay = 1000;
          
        </script>
        <h1 class="section__title section__title--page">Вакансии</h1>
      </div>
      <div class="container">
        <div class="jobs-list">
          <div class="jobs-list__header jobs-item">
            <div class="jobs-list__header-item jobs-item__name">Вакансия </div>
            <div class="jobs-list__header-item jobs-item__descr">Описание</div>
            <div class="jobs-list__header-item jobs-item__cta">Подать заявку</div>
          </div>
          <div class="jobs-list__body">
<?php
$args = array(
	'post_type' => 'jobs',
	'supress_filters' => false,
	'numberposts' => -1,
	'orderby' => 'date',
	'order' => 'DESC',
);
$jobs = get_posts( $args );
?>
<?php if (count($jobs) == 0) {?>
	<p>Пока нет ни одной вакансии</p>
<?php } ?>
<?php 
		foreach ($jobs as $job) {
		$id = $job->to_array()['ID'];
		setup_postdata($job);
?>

						<div class="jobs-item">
							<div class="jobs-item__name"><?php the_field('name', $id) ?></div>
							<div class="jobs-item__descr"><?php the_field('descr', $id) ?></div>
							<div class="jobs-item__cta">
								<button data-to-fom="Заявка на вакансию <?php the_field('name', $id) ?>"class="primary-button">Подать заявку</button>
							</div>
						</div>
<?php }  wp_reset_postdata(); ?>
          </div>

        </div>
      </div>
    </main>
<?php get_footer();?>
