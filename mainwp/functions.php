<?php
	 function arit_styles() {
		  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css'  );

		  wp_enqueue_script( 'modal', get_template_directory_uri() . '/js/modal.min.js', '', '1.0.0', false );
		  wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', '', '1.0.0', true );
		  wp_enqueue_script( 'showmore', get_template_directory_uri() . '/js/blocks/showmore.min.js', '', '1.0.0', false );
		  wp_enqueue_script( 'tabbar', get_template_directory_uri() . '/js/blocks/tabbar.min.js', '', '1.0.0', true );
		  wp_enqueue_script( 'header_and_footer', get_template_directory_uri() . '/js/blocks/headerAndFooter.min.js', '', '1.0.0', true );
		  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/main.min.js', '', '1.0.0', true   );
	}
	add_action('wp_enqueue_scripts','arit_styles' );


	add_action( 'init', 'register_post_types' );
	function register_post_types(){
		register_post_type( 'seminars', array(
			'labels'             => array(
				'name'               => 'Семинар',
				'singular_name'      => 'Семинар',
				'add_new'            => 'Добавить новый',
				'add_new_item'       => 'Добавить новый семинар',
				'edit_item'          => 'Редактировать семинар',
				'new_item'           => 'Новый семинар',
				'view_item'          => 'Посмотреть семинар',
				'search_items'       => 'Найти семинар',
				'not_found'          => 'Семинаров не найдено',
				'not_found_in_trash' => 'Удаленных семинаров не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Семинары',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-id-alt'
		) );


		register_post_type( 'webinars', array(
			'labels'             => array(
				'name'               => 'Вебинар',
				'singular_name'      => 'Вебинар',
				'add_new'            => 'Добавить новый',
				'add_new_item'       => 'Добавить новый вебинар',
				'edit_item'          => 'Редактировать вебинар',
				'new_item'           => 'Новый вебинар',
				'view_item'          => 'Посмотреть вебинар',
				'search_items'       => 'Найти вебинар',
				'not_found'          => 'Вебинаров не найдено',
				'not_found_in_trash' => 'Удаленных вебинаров не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Вебинары',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-welcome-view-site'
		) );


		register_post_type( 'news', array(
			'labels'             => array(
				'name'               => 'Новость',
				'singular_name'      => 'Новость',
				'add_new'            => 'Добавить',
				'add_new_item'       => 'Добавить новость',
				'edit_item'          => 'Редактировать новость',
				'new_item'           => 'Новая новость',
				'view_item'          => 'Посмотреть новость',
				'search_items'       => 'Найти новость',
				'not_found'          => 'Новостей не найдено',
				'not_found_in_trash' => 'Удаленных новостей не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Новости',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-admin-site-alt3'
		) );

		register_post_type( 'courses', array(
			'labels'             => array(
				'name'               => 'Курс',
				'singular_name'      => 'Курс',
				'add_new'            => 'Добавить новый',
				'add_new_item'       => 'Добавить курс',
				'edit_item'          => 'Редактировать курс',
				'new_item'           => 'Новый курс',
				'view_item'          => 'Посмотреть курс',
				'search_items'       => 'Найти курс',
				'not_found'          => 'Курсов не найдено',
				'not_found_in_trash' => 'Удаленных курсов не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Курсы',
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'menu_icon'          => 'dashicons-welcome-learn-more',
			'taxonomies'         => array( 'category' ),
		) );
	}

