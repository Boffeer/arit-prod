<?php get_header();?>

    <main id="top">
      <script>var mapsDelay = 10000;</script>
      <div class="hero-wrapper">
        <picture class="hero__picture-left">
          <source srcset="<?php echo get_template_directory_uri()?>/img/1-hero/chess.webp 1x,<?php echo get_template_directory_uri()?>/img/1-hero/chess@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/1-hero/chess.png" srcset="<?php echo get_template_directory_uri()?>/img/1-hero/chess@2x.png 2x"/>
        </picture>
        <picture class="hero__picture-right">
          <source srcset="<?php echo get_template_directory_uri()?>/img/1-hero/cap.webp 1x,<?php echo get_template_directory_uri()?>/img/1-hero/cap@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/1-hero/cap.png" srcset="<?php echo get_template_directory_uri()?>/img/1-hero/cap@2x.png 2x"/>
        </picture>
        <div class="hero-container container">
          <div class="hero">
            <h1 class="section__title section__title--left hero__title">Стань востребованным специалистом в сжатые сроки, не отрываясь от&nbsp;работы</h1>
            <ul class="hero-bullets">
              <li class="hero-bullet">Выбери одно из <span class="text-bold"> 40 направлений</span> переподготовки и повышения квалификации</li>
              <li class="hero-bullet">Пройди теорию<span class="text-bold"> удаленно</span>, а практику очно (в&nbsp;высокотехнологичных классах)</li>
              <li class="hero-bullet">Получи<span class="text-bold"> поддержку 24/7 и диплом</span> по&nbsp;окончании</li>
            </ul>
            <div class="hero-buttons">
              <button class="primary-button hero-cta">Получить консультацию</button><a class="secondary-button hero-learning" target="_blank" href="https://dpoarit.ispringlearn.ru">Учебный портал</a>
            </div>
          </div>
        </div>
      </div>







      <div class="learning" id="learning">
        <div class="container">
          <h2 class="section__title learning__title">Направления обучения в АРИТ</h2>
<?php
$arit_get_categories = array(
	'show_count' => true,
	'depth' => 0,
	'echo' => 0,
	'hide_empty' => 0,
	'taxonomy' => 'category',
	'pad_counts' => 1,
	'child_of' => 5,
);
	// $categories = wp_list_categories( $arit_get_categories );
	$categories = get_categories( $arit_get_categories );
	$categories_per_column = count($categories) / 3;
	$column_1_count = floor($categories_per_column);
	$column_2_count = floor($categories_per_column);
	$column_3_count = ceil($categories_per_column);


	// echo '<pre>';
	// var_dump($categories);
	// echo '</pre>';
	// foreach ($categories as $category) {
	// echo '<pre>';
	// var_dump($category);
	// echo '</pre>';
	// }
?>
					<ul>
					</ul>
          <div class="learning-tabs-wrap">
            <div class="learning-tabbar">
              <button class="learning-tab__control learning-tab__control--skillup learning-tab__control--active">Профессиональная переподготовка</button>
              <button class="learning-tab__control learning-tab__control--retrain">Повышение квалификации </button>
            </div>
            <div class="learning-tab--retrain">
              <div class="learning-tab">
                <ul class="learning-tab-list">
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">АвиаГСМ</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Агрономия</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Архитектура и дизайн</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Бухгалтерское дело</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Ветеринария</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Горная промышленность и маркшейдерское дело</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Государственное и муниципальное управление</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Государственные закупки</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Железнодорожный транспорт</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Землеустройство и кадастр</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Инженерные изыскания</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Инженерные системы</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Кадровое делопроизводство</a></li>
                </ul>
                <ul class="learning-tab-list">
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Косметология</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Лаборатории</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Медицина</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Менеджмент</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Металлургия</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Метрологический контроль</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Нефтегазовое дело</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Охрана труда. Специальная оценка условий труда (СОУТ)</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Оценочная деятельность</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Педагогика</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Подъемные сооружения и лифты</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Пожарно-технический минимум</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Проектирование </a></li>
                </ul>
                <ul class="learning-tab-list">
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Радиационная безопасность</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Реставрация</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Спорт и фитнес</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Строительство</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Техническое обслуживание медицинской техники (ТОМТ)</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Транспортная безопасность</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Фармация</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Холодильное оборудование</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Экология</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Экономика и финансы</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Электробезопасность</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Энергетика</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Юриспруденция</a></li>
                </ul>
              </div>
              <button class="learning-more--retrain secondary-button">Показать еще</button>
            </div>
            <div class="learning-tab--skillup learning-tab--active">
              <div class="learning-tab">
                <ul class="learning-tab-list">
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Master of Business Administration&nbsp;(MBA)</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">АвиаГСМ </a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Агрономия </a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Архитектура и дизайн</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Бухгалтерское дело</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Ветеринария</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Горная промышленность и маркшейдерское дело</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Государственное и муниципальное управление</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Государственные закупки</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Железнодорожный транспорт</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Землеустройство и кадастр</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Инженерные изыскания</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Инженерные системы</a></li>
                </ul>
                <ul class="learning-tab-list">
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Кадровое делопроизводство</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Косметология</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Лаборатории</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Медицина</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Менеджмент</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Металлургия</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Метрологический контроль</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Нефтегазовое дело</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Охрана труда. Специальная оценка условий труда (СОУТ)</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Оценочная деятельность</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Педагогика</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Подъемные сооружения и лифты</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Пожарно-технический минимум</a></li>
                </ul>
                <ul class="learning-tab-list">
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Проектирование</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Реставрация</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Спорт и фитнес</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Строительство</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Техническое обслуживание медицинской техники (ТОМТ)</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Транспортная безопасность</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Фармация </a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Холодильное оборудование</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Экология</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Экономика и финансы</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Энергетика</a></li>
                  <li class="learning-tab-list-item"> <a class="learning-tab-list-item__link" href="#">Юриспруденция</a></li>
                </ul>
              </div>
              <button class="learning-more--skillup secondary-button">Показать еще</button>
            </div>
          </div>
        </div>
      </div>
      <div class="about-wrap" id="about">
        <div class="about-container container">
          <div class="about">
            <h2 class="section__title section__title--left about__title">О нашей академии</h2>
            <p class="regular-text about__text">Академия развития инновационных технологий (АРИТ). АРИТ — это место, где помогают людям разных профессий повысить квалификацию или пройти полную профессиональную переподготовку. В академии свои знания и опыт  передают команда профессоров, докторов наук, специалистов практиков с выдающимися результатами в своих областях. </p>
            <p class="regular-text about__text text-bold">Достаточно выбрать одно из 100 направлений.</p>
            <p class="regular-text about__text">Теоретические знания вы можете получать дистанционно, в удобное для Вас время. А практика всегда проходит в оборудованных высокотехнологичных классах. Поэтому у вас нет необходимости надолго отрываться от работы ради обучения.</p>
            <p class="regular-text about__text">Врачи, геодезисты, строители, проектировщики, педагоги, средний медперсонал и люди других профессий, — получают дополнительное образование в нашей Академии.<span class="text-bold"> На базе АРИТ обучаются до 15 тысяч специалистов ежемесячно со всей России. </span></p>
            <p class="regular-text about__text">Если у вас уже есть базовое образование, но вы хотите стать более востребованным специалистом ,то мы ждем вас в АРИТ. </p>
          </div>
          <picture class="about-picture">
            <source srcset="<?php echo get_template_directory_uri()?>/img/3-about/about-pic.webp 1x,<?php echo get_template_directory_uri()?>/img/3-about/about-pic@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/3-about/about-pic.png" srcset="<?php echo get_template_directory_uri()?>/img/3-about/about-pic@2x.png 2x"/>
          </picture>
        </div>
        <picture class="about-picture__left">
          <source srcset="<?php echo get_template_directory_uri()?>/img/3-about/horse-l.webp 1x,<?php echo get_template_directory_uri()?>/img/3-about/horse-l@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/3-about/horse-l.png" srcset="<?php echo get_template_directory_uri()?>/img/3-about/horse-l@2x.png 2x"/>
        </picture>
        <picture class="about-picture__right">
          <source srcset="<?php echo get_template_directory_uri()?>/img/3-about/apolo-r.webp 1x,<?php echo get_template_directory_uri()?>/img/3-about/apolo-r@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/3-about/apolo-r.png" srcset="<?php echo get_template_directory_uri()?>/img/3-about/apolo-r@2x.png 2x"/>
        </picture>
        <picture class="about-picture__right-2">
          <source srcset="<?php echo get_template_directory_uri()?>/img/3-about/microscope.webp 1x,<?php echo get_template_directory_uri()?>/img/3-about/microscope@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/3-about/microscope.png" srcset="<?php echo get_template_directory_uri()?>/img/3-about/microscope@2x.png 2x"/>
        </picture>
      </div>
      <div class="features-wrapper">
        <div class="features-container container">
          <div class="features">
            <h2 class="section__title features__title">Преимущества</h2>
            <ol class="features-list">
              <li class="features-list-item">
                <p class="features-item__text"> <span class="text-bold">Индивидуальный подход </span> и&nbsp;модульная система обучения </p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/stairs.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/stairs@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/stairs.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/stairs@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">01</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text"> <span class="text-bold">Сотни</span> направлений обучения</p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/weathervane.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/weathervane@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/weathervane.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/weathervane@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">02</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Поддержка кураторов <span class="text-bold">24/7</span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/shield.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/shield@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/shield.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/shield@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">03</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Все преподаватели<br>действующие <span class="text-bold">практики</span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/caduceus.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/caduceus@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/caduceus.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/caduceus@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">04</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text features-item__text--single-row">Учебные программы соответствуют<span class="text-bold"> государственным стандартам (ФГОС) </span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/book.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/book@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/book.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/book@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">05</h3>
              </li>
              <li class="features-list-item"> 
                <p class="features-item__text features-item__text--single-row">Доставка документов<span class="text-bold"> по всей России</span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/box.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/box@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/box.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/box@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">06</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text features-item__text--single-row">Документы установленного образца</p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/paper.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/paper@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/paper.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/paper@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">07</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Доступ к учебным материалам <span class="text-bold">в&nbsp;любое время</span></p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/safe.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/safe@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/safe.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/safe@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">08</h3>
              </li>
              <li class="features-list-item">
                <p class="features-item__text">Доступные цены</p>
                <picture class="features-pic">
                  <source srcset="<?php echo get_template_directory_uri()?>/img/4-features/piggy.webp 1x,<?php echo get_template_directory_uri()?>/img/4-features/piggy@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/4-features/piggy.png" srcset="<?php echo get_template_directory_uri()?>/img/4-features/piggy@2x.png 2x"/>
                </picture>
                <h3 class="features-item__number">09</h3>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="teachers-wrap">
        <div class="teachers-container container">
          <div class="teachers">
            <h2 class="section__title teachers__title">Наши преподаватели</h2>
            <div class="teachers-slider-outer">
              <div class="teachers-slider-wrap swiper-container">
                <div class="teachers-slider swiper-wrapper">
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/agafonov.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/agafonov@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/agafonov.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/agafonov@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Агафонов Николай Владимирович</h3>
                    <p class="teachers-slide__descr">Генеральный директор компании «Альфа Консалтинг», преподаватель по геодезии со стажем более 10 лет</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/bahtiyarov.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/bahtiyarov@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/bahtiyarov.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/bahtiyarov@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Бахтияров Камиль Рафаэльевич</h3>
                    <p class="teachers-slide__descr">Доктор медицинских наук, профессор, врач акушер-гинеколог</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/bikov.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/bikov@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/bikov.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/bikov@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Быков Алексей Юрьевич</h3>
                    <p class="teachers-slide__descr">Врач-нейрохирург, член Европейской ассоциации клинической гипертермии, продакт-менеджер компании Zerts</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/shmatkova.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/shmatkova@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/shmatkova.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/shmatkova@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Шматкова Виктория Викторовна</h3>
                    <p class="teachers-slide__descr">Медицинский маркетолог, кандидат экономических наук, MBA, предприниматель, владелец компании ZERTS</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/glazkova.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/glazkova@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/glazkova.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/glazkova@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Глазкова Ольга Леонидовна</h3>
                    <p class="teachers-slide__descr">Кандидат медицинских наук, доцент, врач акушер-гинеколог, врач узи, гинеколог-эндокринолог, онкогинеколог</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/knish.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/knish@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/knish.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/knish@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Кныш Олег Юрьевич</h3>
                    <p class="teachers-slide__descr">Клинический психолог, гипнолог, коуч, преподаватель и автор серии курсов и тренингов по применению методик прикладной психологии для установления эффективной коммуникации</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/leizerman.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/leizerman@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/leizerman.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/leizerman@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Лейзерман Михаил Григорьевич</h3>
                    <p class="teachers-slide__descr">Доктор медицинских наук, профессор, врач-оториноларинголог высшей категории, заместитель главного врача по хирургии в ГКБ № 29 им. Н. Э. Баумана, основоположник радиохирургии в России</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/lozhnikova.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/lozhnikova@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/lozhnikova.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/lozhnikova@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Ложникова Татьяна Вячеславовна</h3>
                    <p class="teachers-slide__descr">Кандидат педагогических наук, доцент, заместитель директора по учебно-методической работе СПО</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/lucenko.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/lucenko@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/lucenko.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/lucenko@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Луценко Николай Николаевич</h3>
                    <p class="teachers-slide__descr">Кандидат медицинских наук, доцент, врач-гинеколог, начальник отдела по производственной практике РНИМУ им. Н.И. Пирогова, руководитель кластера «высокие технологии в гинекологии» НПС «Эндохирургия» ЦА УЦИМТ, ведущий специалист Центра по направлению гинекология — лапароскопические и гистероскопические технологии</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/markevich.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/markevich@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/markevich.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/markevich@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Маркевич Харита Алексеевна</h3>
                    <p class="teachers-slide__descr">Психолог, коуч, сертифицированный бизнес-тренер</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/mindlin.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/mindlin@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/mindlin.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/mindlin@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Миндлин Сергей Николаевич</h3>
                    <p class="teachers-slide__descr">Врач-оториноларинголог, стипендиат президента 2016-2018 гг., обладатель золотой медали «Я-профессионал» (2018 г.), Победитель гранта УМНИК (2017 г.), автор более 10 печатных работ в рецензируемых изданиях, докладчик на всероссийских и международных конференциях</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/pogosyan.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/pogosyan@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/pogosyan.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/pogosyan@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Погосян Месроп Левонович</h3>
                    <p class="teachers-slide__descr">Врач анестезиолог-реаниматолог, заведующий отделением анестезиологии и реанимации и оперблока официального филиала израильской клиники Hadassah Medical Moscow</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/skvortsova.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/skvortsova@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/skvortsova.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/skvortsova@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Скворцова Мария Артуровна</h3>
                    <p class="teachers-slide__descr">Кандидат медицинских наук, врач травматолог-ортопед, ассистент кафедры травматологии, ортопедии и ВПХ ПФ РНИМУ им. Н. И. Пирогова</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/firichenko.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/firichenko@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/firichenko.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/firichenko@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Фириченко Сергей Викторович</h3>
                    <p class="teachers-slide__descr">Доктор медицинских наук, доцент кафедры акушерства и гинекологии лечебного факультета Московского Государственного Медико-стоматологического университета имени А.И. Евдокимова, эксперт РАГИН, член РАГИН, МАРС, сертифицированный специалист по кольпоскопии в Великобритании и США</p>
                  </div>
                  <div class="teachers-slide swiper-slide">
                    <picture class="teachers__pic">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/churganova.webp 1x,<?php echo get_template_directory_uri()?>/img/5-teachers/churganova@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/5-teachers/churganova.png" srcset="<?php echo get_template_directory_uri()?>/img/5-teachers/churganova@2x.png 2x"/>
                    </picture>
                    <h3 class="teachers-slide__title">Чурганова Анастасия Алексеевна</h3>
                    <p class="teachers-slide__descr">Кандидат медицинских наук, доцент кафедры акушерства, гинекологии и перинатологии Института клинической медицины имени Н.В. Склифосовского Первого МГМУ имени И.М.Сеченова</p>
                  </div>
                </div>
              </div>
              <div class="teachers-slider-scrollbar slider-scrollbar"></div>
              <div class="teachers-slider-prev slider-button">
                <svg class="news-slider__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.3929 6.95737C14.3321 6.9475 14.2705 6.94295 14.209 6.94375H3.72757L3.95612 6.83744C4.17952 6.73171 4.38276 6.5878 4.55673 6.41224L7.49598 3.47298C7.88308 3.10345 7.94813 2.50899 7.65012 2.06448C7.30327 1.59081 6.63812 1.48796 6.16441 1.8348C6.12614 1.86284 6.08977 1.8934 6.05559 1.92629L0.740483 7.24139C0.325108 7.6563 0.324743 8.32936 0.739653 8.74473C0.739919 8.745 0.740218 8.7453 0.740483 8.74557L6.05559 14.0607C6.47129 14.4752 7.14435 14.4743 7.55893 14.0586C7.59155 14.0259 7.62201 13.991 7.65012 13.9544C7.94813 13.5099 7.88308 12.9154 7.49598 12.5459L4.56204 9.6013C4.40608 9.44517 4.22676 9.31425 4.03053 9.21329L3.71163 9.06979H14.1505C14.6935 9.08995 15.17 8.71062 15.272 8.17685C15.366 7.59734 14.9724 7.05138 14.3929 6.95737Z" fill="white"></path>
                </svg>
              </div>
              <div class="teachers-slider-next slider-button">
                <svg class="news-slider__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.60714 6.95737C1.66794 6.9475 1.72946 6.94295 1.79101 6.94375H12.2724L12.0439 6.83744C11.8205 6.73171 11.6172 6.5878 11.4433 6.41224L8.50402 3.47298C8.11692 3.10345 8.05187 2.50899 8.34988 2.06448C8.69673 1.59081 9.36188 1.48796 9.83559 1.8348C9.87386 1.86284 9.91023 1.8934 9.94441 1.92629L15.2595 7.24139C15.6749 7.6563 15.6753 8.32936 15.2603 8.74473C15.2601 8.745 15.2598 8.7453 15.2595 8.74557L9.94441 14.0607C9.52871 14.4752 8.85565 14.4743 8.44107 14.0586C8.40845 14.0259 8.37799 13.991 8.34988 13.9544C8.05187 13.5099 8.11692 12.9154 8.50402 12.5459L11.438 9.6013C11.5939 9.44517 11.7732 9.31425 11.9695 9.21329L12.2884 9.06979H1.84951C1.30647 9.08995 0.830042 8.71062 0.728025 8.17685C0.634048 7.59734 1.02763 7.05138 1.60714 6.95737Z" fill="white"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="meetups-wrapper" id="meetups">
        <div class="meetups-container container">
          <div class="meetups">
            <div class="meetups-category meetups-category--seminars">
              <h2 class="section__title">Семинары</h2>
                  <div class="meetups-item meetups-item--seminar">
                    <picture class="meetups__picture">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/6-meetups/seminar.webp 1x,<?php echo get_template_directory_uri()?>/img/6-meetups/seminar@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/6-meetups/seminar.png" srcset="<?php echo get_template_directory_uri()?>/img/6-meetups/seminar@2x.png 2x"/>
                    </picture>
                    <div class="meetup-info">
                      <h3 class="meetup__title">Название мероприятия</h3>
                      <div class="meetup-about">
                        <div class="meetup-location"><img src="<?php echo get_template_directory_uri()?>/img/0-common/geo.svg" alt="geo-icon">
                          <p>г. Санкт-Петербург, ул. 50 лет ВЛКСМ д.22, офис 351</p>
                        </div>
                        <div class="meetup-time"><img src="<?php echo get_template_directory_uri()?>/img/0-common/time.svg">
                          <p>26.03.21</p>
                        </div>
                      </div>
                      <div class="meetup-buttons">
                        <button class="meetup__primary-button primary-button seminar__button-cta">Принять участие</button>
                        <button class="meetup__secondary-button thirdly-button seminar__button-more">Подробнее</button>
                      </div>
                    </div>
                  </div><a class="secondary-button meetups-more--seminars" href="/seminars">Показать еще</a>
            </div>
            <div class="meetups-category meetups-category--webinars">
              <h2 class="section__title">Вебинары</h2>
                  <div class="meetups-item meetups-item--webinar">
                    <picture class="meetups__picture">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/6-meetups/webinar.webp 1x,<?php echo get_template_directory_uri()?>/img/6-meetups/webinar@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/6-meetups/webinar.png" srcset="<?php echo get_template_directory_uri()?>/img/6-meetups/webinar@2x.png 2x"/>
                    </picture>
                    <div class="meetup-info">
                      <h3 class="meetup__title">Название мероприятия</h3>
                      <div class="meetup-about">
                        <div class="meetup-location"><img src="<?php echo get_template_directory_uri()?>/img/0-common/geo.svg" alt="geo-icon">
                          <p>г. Санкт-Петербург, ул. 50 лет ВЛКСМ д.22, офис 351</p>
                        </div>
                        <div class="meetup-time"><img src="<?php echo get_template_directory_uri()?>/img/0-common/time.svg">
                          <p>26.03.21</p>
                        </div>
                      </div>
                      <div class="meetup-buttons">
                        <button class="meetup__primary-button primary-button webinar__button-cta">Принять участие</button>
                        <button class="meetup__secondary-button thirdly-button webinar__button-more">Подробнее</button>
                      </div>
                    </div>
                  </div><a class="secondary-button meetups-more--webinars" href="/webinars">Показать еще</a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="news-wrapper" id="news">
      <div class="news-container container">
        <div class="news">
          <h2 class="section__title news__title">Новости</h2>
          <div class="news-slider-outer">
            <div class="news-slider-wrapper swiper-container">
              <div class="news-slider swiper-wrapper">
                <div class="news-item swiper-slide"><a href="">
                    <picture class="news__picture">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/7-news/news-1.webp 1x,<?php echo get_template_directory_uri()?>/img/7-news/news-1@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/7-news/news-1.png" srcset="<?php echo get_template_directory_uri()?>/img/7-news/news-1@2x.png 2x"/>
                    </picture></a>
                  <div class="news-info"><a href="">
                      <h3 class="news-item__title">Заголовок новости</h3></a>
                    <p class="news-item__descr">Текст описания в 2 строчки, чтобы набить обхем текста</p>
                    <div class="news-bottom"><a class="news-button" href="">Подробнее</a><span class="news-date">02.06.20</span></div>
                  </div>
                </div>
                <div class="news-item swiper-slide"><a href="">
                    <picture class="news__picture">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/7-news/news-2.webp 1x,<?php echo get_template_directory_uri()?>/img/7-news/news-2@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/7-news/news-2.png" srcset="<?php echo get_template_directory_uri()?>/img/7-news/news-2@2x.png 2x"/>
                    </picture></a>
                  <div class="news-info"><a href="">
                      <h3 class="news-item__title">Заголовок новости</h3></a>
                    <p class="news-item__descr">Текст описания в 2 строчки, чтобы набить обхем текста</p>
                    <div class="news-bottom"><a class="news-button" href="">Подробнее</a><span class="news-date">02.06.20</span></div>
                  </div>
                </div>
                <div class="news-item swiper-slide"><a href="">
                    <picture class="news__picture">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/7-news/news-3.webp 1x,<?php echo get_template_directory_uri()?>/img/7-news/news-3@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/7-news/news-3.png" srcset="<?php echo get_template_directory_uri()?>/img/7-news/news-3@2x.png 2x"/>
                    </picture></a>
                  <div class="news-info"><a href="">
                      <h3 class="news-item__title">Заголовок новости</h3></a>
                    <p class="news-item__descr">Текст описания в 2 строчки, чтобы набить обхем текста</p>
                    <div class="news-bottom"><a class="news-button" href="">Подробнее</a><span class="news-date">02.06.20</span></div>
                  </div>
                </div>
                <div class="news-item swiper-slide"><a href="">
                    <picture class="news__picture">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/7-news/news-2.webp 1x,<?php echo get_template_directory_uri()?>/img/7-news/news-2@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/7-news/news-2.png" srcset="<?php echo get_template_directory_uri()?>/img/7-news/news-2@2x.png 2x"/>
                    </picture></a>
                  <div class="news-info"><a href="">
                      <h3 class="news-item__title">Заголовок новости</h3></a>
                    <p class="news-item__descr">Текст описания в 2 строчки, чтобы набить обхем текста</p>
                    <div class="news-bottom"><a class="news-button" href="">Подробнее</a><span class="news-date">02.06.20</span></div>
                  </div>
                </div>
                <div class="news-item swiper-slide"><a href="">
                    <picture class="news__picture">
                      <source srcset="<?php echo get_template_directory_uri()?>/img/7-news/news-1.webp 1x,<?php echo get_template_directory_uri()?>/img/7-news/news-1@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/7-news/news-1.png" srcset="<?php echo get_template_directory_uri()?>/img/7-news/news-1@2x.png 2x"/>
                    </picture></a>
                  <div class="news-info"><a href="">
                      <h3 class="news-item__title">Заголовок новости</h3></a>
                    <p class="news-item__descr">Текст описания в 2 строчки, чтобы набить обхем текста</p>
                    <div class="news-bottom"><a class="news-button" href="">Подробнее</a><span class="news-date">02.06.20</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="news-slider-scrollbar slider-scrollbar"></div>
            <div class="news-slider-prev slider-button">
              <svg class="news-slider__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.3929 6.95737C14.3321 6.9475 14.2705 6.94295 14.209 6.94375H3.72757L3.95612 6.83744C4.17952 6.73171 4.38276 6.5878 4.55673 6.41224L7.49598 3.47298C7.88308 3.10345 7.94813 2.50899 7.65012 2.06448C7.30327 1.59081 6.63812 1.48796 6.16441 1.8348C6.12614 1.86284 6.08977 1.8934 6.05559 1.92629L0.740483 7.24139C0.325108 7.6563 0.324743 8.32936 0.739653 8.74473C0.739919 8.745 0.740218 8.7453 0.740483 8.74557L6.05559 14.0607C6.47129 14.4752 7.14435 14.4743 7.55893 14.0586C7.59155 14.0259 7.62201 13.991 7.65012 13.9544C7.94813 13.5099 7.88308 12.9154 7.49598 12.5459L4.56204 9.6013C4.40608 9.44517 4.22676 9.31425 4.03053 9.21329L3.71163 9.06979H14.1505C14.6935 9.08995 15.17 8.71062 15.272 8.17685C15.366 7.59734 14.9724 7.05138 14.3929 6.95737Z" fill="white"></path>
              </svg>
            </div>
            <div class="news-slider-next slider-button">
              <svg class="news-slider__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.60714 6.95737C1.66794 6.9475 1.72946 6.94295 1.79101 6.94375H12.2724L12.0439 6.83744C11.8205 6.73171 11.6172 6.5878 11.4433 6.41224L8.50402 3.47298C8.11692 3.10345 8.05187 2.50899 8.34988 2.06448C8.69673 1.59081 9.36188 1.48796 9.83559 1.8348C9.87386 1.86284 9.91023 1.8934 9.94441 1.92629L15.2595 7.24139C15.6749 7.6563 15.6753 8.32936 15.2603 8.74473C15.2601 8.745 15.2598 8.7453 15.2595 8.74557L9.94441 14.0607C9.52871 14.4752 8.85565 14.4743 8.44107 14.0586C8.40845 14.0259 8.37799 13.991 8.34988 13.9544C8.05187 13.5099 8.11692 12.9154 8.50402 12.5459L11.438 9.6013C11.5939 9.44517 11.7732 9.31425 11.9695 9.21329L12.2884 9.06979H1.84951C1.30647 9.08995 0.830042 8.71062 0.728025 8.17685C0.634048 7.59734 1.02763 7.05138 1.60714 6.95737Z" fill="white"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="partners-wrapper" id="partners">
        <div class="partners-container container">
          <div class="partners">
            <h2 class="section__title partners__title">Партнеры</h2>
            <div class="partners-slider-outer">
              <div class="partners-slider-wrap swiper-container">
                <div class="partners-slider swiper-wrapper"><a class="partners-item swiper-slide" href="https://www.atmos-med.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/atmos.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/atmos@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/atmos.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/atmos@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://www.btlmed.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/btl.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/btl@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/btl.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/btl@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://www.cbr.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/cb.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/cb@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/cb.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/cb@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://fcgie.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/center-hygien.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/center-hygien@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/center-hygien.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/center-hygien@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="http://ucentr.karelia.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/center-karnelius.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/center-karnelius@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/center-karnelius.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/center-karnelius@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://vk.com/dental.aurora" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/dental-aurora-clinic.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/dental-aurora-clinic@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/dental-aurora-clinic.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/dental-aurora-clinic@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://www.instagram.com/doctor_super/?hl=ru" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/dr-super.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/dr-super@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/dr-super.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/dr-super@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://www.vladokb.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/gbuzvookb.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/gbuzvookb@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/gbuzvookb.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/gbuzvookb@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://g-richter.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/gedeon-richter.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/gedeon-richter@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/gedeon-richter.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/gedeon-richter@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://gkbe.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/gkb-eramishanceva.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/gkb-eramishanceva@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/gkb-eramishanceva.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/gkb-eramishanceva@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/job-service.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/job-service@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/job-service.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/job-service@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://niioz.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/nii.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/nii@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/nii.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/nii@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://www.pnzgu.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/president-gov-univercity.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/president-gov-univercity@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/president-gov-univercity.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/president-gov-univercity@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="http://spmuzrb.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/sergiev-posad.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/sergiev-posad@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/sergiev-posad.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/sergiev-posad@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://www.lvrach.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/doctor.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/doctor@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/doctor.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/doctor@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://www.lvrach.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/ttp-optic.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/ttp-optic@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/ttp-optic.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/ttp-optic@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://szgmu.ru/rus/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/szgmu.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/szgmu@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/szgmu.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/szgmu@2x.png 2x"/>
                      </picture>
                    </div></a><a class="partners-item swiper-slide" href="https://www.rastatus.ru/" target="_blank">
                    <div class="partners-item__border">
                      <picture class="partners__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/8-partners/status.webp 1x,<?php echo get_template_directory_uri()?>/img/8-partners/status@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/8-partners/status.png" srcset="<?php echo get_template_directory_uri()?>/img/8-partners/status@2x.png 2x"/>
                      </picture>
                    </div></a>
                </div>
              </div>
              <div class="partners-slider-scrollbar slider-scrollbar"></div>
              <div class="partners-slider-prev slider-button">
                <svg class="news-slider__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.3929 6.95737C14.3321 6.9475 14.2705 6.94295 14.209 6.94375H3.72757L3.95612 6.83744C4.17952 6.73171 4.38276 6.5878 4.55673 6.41224L7.49598 3.47298C7.88308 3.10345 7.94813 2.50899 7.65012 2.06448C7.30327 1.59081 6.63812 1.48796 6.16441 1.8348C6.12614 1.86284 6.08977 1.8934 6.05559 1.92629L0.740483 7.24139C0.325108 7.6563 0.324743 8.32936 0.739653 8.74473C0.739919 8.745 0.740218 8.7453 0.740483 8.74557L6.05559 14.0607C6.47129 14.4752 7.14435 14.4743 7.55893 14.0586C7.59155 14.0259 7.62201 13.991 7.65012 13.9544C7.94813 13.5099 7.88308 12.9154 7.49598 12.5459L4.56204 9.6013C4.40608 9.44517 4.22676 9.31425 4.03053 9.21329L3.71163 9.06979H14.1505C14.6935 9.08995 15.17 8.71062 15.272 8.17685C15.366 7.59734 14.9724 7.05138 14.3929 6.95737Z" fill="white"></path>
                </svg>
              </div>
              <div class="partners-slider-next slider-button">
                <svg class="news-slider__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.60714 6.95737C1.66794 6.9475 1.72946 6.94295 1.79101 6.94375H12.2724L12.0439 6.83744C11.8205 6.73171 11.6172 6.5878 11.4433 6.41224L8.50402 3.47298C8.11692 3.10345 8.05187 2.50899 8.34988 2.06448C8.69673 1.59081 9.36188 1.48796 9.83559 1.8348C9.87386 1.86284 9.91023 1.8934 9.94441 1.92629L15.2595 7.24139C15.6749 7.6563 15.6753 8.32936 15.2603 8.74473C15.2601 8.745 15.2598 8.7453 15.2595 8.74557L9.94441 14.0607C9.52871 14.4752 8.85565 14.4743 8.44107 14.0586C8.40845 14.0259 8.37799 13.991 8.34988 13.9544C8.05187 13.5099 8.11692 12.9154 8.50402 12.5459L11.438 9.6013C11.5939 9.44517 11.7732 9.31425 11.9695 9.21329L12.2884 9.06979H1.84951C1.30647 9.08995 0.830042 8.71062 0.728025 8.17685C0.634048 7.59734 1.02763 7.05138 1.60714 6.95737Z" fill="white"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="resourses-wrapper" id="resourses">
        <div class="resourses-container container">
          <div class="resourses">
            <h2 class="section__title resourses__title">Ресурсы</h2>
            <ul class="resourses-list">
              <li class="resourses-item"><a class="resourses-item__link" href="#"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/books.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Электронно-библиотечная система</h3></a></li>
              <li class="resourses-item"><a class="resourses-item__link" href="#"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/pharmacy.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Федеральное медико‑биологическое агентство</h3></a></li>
              <li class="resourses-item"><a class="resourses-item__link" href="#"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/graduate.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Портал непрерывного медицинского образования</h3></a></li>
              <li class="resourses-item"><a class="resourses-item__link" href="#"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/atom.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Центральная научная медицинская библиотека</h3></a></li>
              <li class="resourses-item"><a class="resourses-item__link" href="#"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/caduceus.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Электронная медицинская библиотека</h3></a></li>
              <li class="resourses-item"><a class="resourses-item__link" href="#"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/dna.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Фундаментальная медицинская библиотека</h3></a></li>
              <li class="resourses-item"><a class="resourses-item__link" href="#"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/encyclopedia.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Медицинская энциклопедия</h3></a></li>
              <li class="resourses-item"><a class="resourses-item__link" href="#"><img class="resourses-item__icon" src="<?php echo get_template_directory_uri()?>/img/9-resources/file.svg" alt="resourse"/>
                  <h3 class="resourses-item__name">Единое окно доступа к информационным ресурсам</h3></a></li>
            </ul>
          </div>
        </div>
      </section>
      <div class="testimonials-wrapper" id="testimonials">
        <div class="testimonials-container container">
          <div class="testimonials">
            <h2 class="section__title testimonials__title">Отзывы</h2>
            <div class="testimonials-slider-outer">
              <div class="testimonials-slider-wrap">
                <div class="testimonials-list testimonials-slider">
                  <div class="testimonial-item swiper-slide">
                    <div class="testimonial">
                      <picture class="testimonial__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/10-testimonials/testimonial-1.webp 1x,<?php echo get_template_directory_uri()?>/img/10-testimonials/testimonial-1@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/10-testimonials/testimonial-1.png" srcset="<?php echo get_template_directory_uri()?>/img/10-testimonials/testimonial-1@2x.png 2x"/>
                      </picture>
                      <div class="testimonial-message">
                        <div class="testimonial-message-info">
                          <div class="testimonial-who">
                            <h3 class="testimonial-who__name">Оксана Иванова</h3>
                            <p class="testimonial-who__position">Директор MacDonalds</p>
                          </div>
                          <div class="testimonial__date">02.06.20</div>
                        </div>
                        <p class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. In culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-item swiper-slide">
                    <div class="testimonial">
                      <picture class="testimonial__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/10-testimonials/testimonial-1.webp 1x,<?php echo get_template_directory_uri()?>/img/10-testimonials/testimonial-1@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/10-testimonials/testimonial-1.png" srcset="<?php echo get_template_directory_uri()?>/img/10-testimonials/testimonial-1@2x.png 2x"/>
                      </picture>
                      <div class="testimonial-message">
                        <div class="testimonial-message-info">
                          <div class="testimonial-who">
                            <h3 class="testimonial-who__name">Оксана Иванова</h3>
                            <p class="testimonial-who__position">Директор MacDonalds</p>
                          </div>
                          <div class="testimonial__date">02.06.20</div>
                        </div>
                        <p class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. In culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-item swiper-slide">
                    <div class="testimonial">
                      <picture class="testimonial__picture">
                        <source srcset="<?php echo get_template_directory_uri()?>/img/10-testimonials/testimonial-1.webp 1x,<?php echo get_template_directory_uri()?>/img/10-testimonials/testimonial-1@2x.webp 2x" type="image/webp"/><img src="<?php echo get_template_directory_uri()?>/img/10-testimonials/testimonial-1.png" srcset="<?php echo get_template_directory_uri()?>/img/10-testimonials/testimonial-1@2x.png 2x"/>
                      </picture>
                      <div class="testimonial-message">
                        <div class="testimonial-message-info">
                          <div class="testimonial-who">
                            <h3 class="testimonial-who__name">Оксана Иванова</h3>
                            <p class="testimonial-who__position">Директор MacDonalds</p>
                          </div>
                          <div class="testimonial__date">02.06.20</div>
                        </div>
                        <p class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. In culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testimonials-slider-scrollbar"></div>
              </div>
            </div>
            <div class="testimonials-more-wrap"><a class="secondary-button testimonials-more" href="/testimonials.html">Показать еще</a></div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer();?>
