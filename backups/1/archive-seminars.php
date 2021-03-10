<?php 
/*
Template Name: Семинары
 */
?>
<?php get_header();?>
    <main class="subpage--white">
      <div class="container">
        <script>
          var mapsDelay = 1000;
        </script>
        <h1 class="section__title--left section__title">Ближайшие семинары</h1>
      </div>


      <div class="container">
        <div class="meetups-page-container">
          <div class="meetups-preview">
                <div class="meetups-item meetups-item--seminar">
                  <picture class="meetups__picture">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/6-meetups/seminar.png"/>
                  </picture>
                  <div class="meetup-info">
                    <h3 class="meetup__title">Название мероприятия</h3>
                    <div class="meetup-about">
                      <div class="meetup-location"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/0-common/geo.svg" alt="geo-icon">
                        <p></p>
                      </div>
                      <div class="meetup-time"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/0-common/time.svg">
                        <p></p>
                      </div>
                    </div>
                    <div class="meetup-buttons">
                      <button class="meetup__primary-button primary-button seminar__button-cta">Принять участие</button>
                      <button class="meetup__secondary-button thirdly-button seminar__button-more">Подробнее</button>
                    </div>
                  </div>
                </div>
          </div>
          <div class="meetups-next-list">

<?php

$args = array(
	'post_type' => 'seminars',
	'supress_filters' => false,
	'numberposts' => -1,
	'orderby' => 'date',
	'order' => 'DESC',
);
$posts = get_posts( $args );

$postsToIncoming = array();
$incomingCounter = 0;
$postsToArchieve = array();
$archieveCounter = 0;

foreach ( $posts as $post ) {
	setup_postdata($post);

	$date = get_field('meetup_date');
	$filter_date_format = strtotime($date);
	$today_date_format = strtotime(date('d.m.y'));
	$result = $filter_date_format - $today_date_format;

	$get_meetup_status = implode('/', explode('.', $date, -2));
	$get_meetup_untill = $get_meetup_status - date('d');


	if ($result > -1) {
		$postsToIncoming[$incomingCounter]['meetup_pic'] = get_field('meetup_pic');
		$postsToIncoming[$incomingCounter]['meetup_address'] = get_field('meetup_address');
		$postsToIncoming[$incomingCounter]['meetup_date'] = get_field('meetup_date');
		$postsToIncoming[$incomingCounter]['meetup_name'] = get_field('meetup_name');
		$postsToIncoming[$incomingCounter]['meetup_speakers'] = get_field('meetup_speakers');
		$postsToIncoming[$incomingCounter]['sorting_days'] = $get_meetup_untill;
		$postsToIncoming[$incomingCounter]['url'] = get_permalink();

		if ($get_meetup_untill < 1) {
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Семинар сегодня';
		} else if ($get_meetup_untill < 2) {
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Семинар завтра';
		} else if ($get_meetup_untill < 5) {
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Осталось ' . $get_meetup_untill . ' дня'; //2, 3, 4
		} else if ($get_meetup_untill > 4){
			$postsToIncoming[$incomingCounter]['days_untill'] = 'Осталось ' . $get_meetup_untill . ' дней'; //5, 6, 7, 8, 9, 10
		}

		$incomingCounter++;
	} else {
		$postsToArchieve[$archieveCounter]['meetup_pic'] = get_field('meetup_pic');
		$postsToArchieve[$archieveCounter]['meetup_address'] = get_field('meetup_address');
		$postsToArchieve[$archieveCounter]['meetup_date'] = get_field('meetup_date');
		$postsToArchieve[$archieveCounter]['meetup_name'] = get_field('meetup_name');
		$postsToArchieve[$archieveCounter]['meetup_speakers'] = get_field('meetup_speakers');
		$postsToArchieve[$incomingCounter]['url'] = get_permalink();

		$archieveCounter++;
	}

} wp_reset_postdata();


usort($postsToIncoming, function($a,$b){
	return ($a['sorting_days'] - $b['sorting_days']);
});

foreach ($postsToIncoming as $post) {
	

?>
							<div class="meetup-next-item" data-url="<?php echo $post['url'] ?>" data-src="<?php echo $post['meetup_pic'] ?>" data-address="<?php echo $post['meetup_address'] ?>" data-date="<?php echo $post['meetup_date'] ?>">
								<div class="meetup-next-item-due">
								<div class="meetup-next-item__date"><?php echo implode('/', explode('.', $post['meetup_date'], -1)) ?></div>
								<div class="meetup-next-item__status"><?php echo $post['days_untill'] ?></div>
              </div>
              <div class="meetup-next-item-info">
							<h3 class="meetup-next-item-info__topic"><?php echo $post['meetup_name'] ?></h3>
								<p class="meetup-next-item-info__speakers"><?php echo $post['meetup_speakers'] ?></p>
              </div>
            </div>
<?php } //wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
      <div class="archieve-wrapper">
        <div class="container">
          <div class="section__title">Архив</div>
          <div class="archieve">

<?php
	foreach ($postsToArchieve as $post) {
?>
            <div class="archieve-item">
              <picture class="archieve__picture">
								<img src="<?php echo $post['meetup_pic'] ?>"/>
              </picture>
							<h3 class="archieve-item__name"><?php echo $post['meetup_name'] ?></h3>
              <p class="archieve-item__status">Семинар завершен</p>
            </div>
<?php } ?>
          </div>
          <div class="button--center-aligner">
            <button class="secondary-button archieve__more">Показать еще</button>
          </div>
        </div>
        <script defer>
          showmore({
          	items: '.archieve-item',
          	clickHandler: '.archieve__more',
          	itemsToShow: 3,
          	initialShow: 3,
          	currentItem: 0,
          })
          
        </script>
      </div>
    </main>
        <script defer>
          showmore({
          	items: '.archieve-item',
          	clickHandler: '.archieve__more',
          	itemsToShow: 3,
          	initialShow: 3,
          	currentItem: 0,
          })
          showMeetup({
          	items: '.meetup-next-item',
          })
					document.querySelector('.meetup-next-item').click()
          
        </script>
<?php get_footer();?>
