<?php

// Enqueuing
function load_css()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], 1, 'all');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), _S_VERSION);
  wp_enqueue_style('bootstrap-style');
  wp_register_style('slick', get_template_directory_uri() . '/css/slick.css', [], 1, 'all');
  wp_enqueue_style('slick');
  wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], 1, 'all');
  wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], 1, true);
  wp_enqueue_script('bootstrap');
  wp_enqueue_script('bootstrap1', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
  wp_enqueue_script('bootstrap1');
  wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
  wp_enqueue_script('custom');
  // add slider
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
  wp_enqueue_script('jquery');
  wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), null, true);
  wp_enqueue_script('slick');
}

add_action('wp_enqueue_scripts', 'load_js');





// Nav Menus
register_nav_menus(array(
  'top-menu' => __('Top Menu', 'theme'),
  'footer-menu1' => __('Footer Menu1', 'theme'),
  'footer-menu2' => __('Footer Menu2', 'theme'),
  'footer-menu3' => __('Footer Menu3', 'theme'),
));

// Theme Support
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Image Sizes
add_image_size('small', 600, 600, false);

//page option

if (function_exists('acf_add_options_page')) {
  acf_add_options_sub_page(array(
    'page_title'   => 'Настройки шапки',
    'menu_title'  => 'Шапка',
    'parent_slug'  => 'theme-general-settings',
  ));
}

if (function_exists('acf_add_options_page')) {
  acf_add_options_sub_page(array(
    'page_title'   => 'Настройки подвала',
    'menu_title'  => 'Подвал',
    'parent_slug'  => 'theme-general-settings',
  ));
}
if (function_exists('acf_add_options_page')) {

  acf_add_options_page();
}
add_filter('upload_mimes', 'svg_upload_allow');

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
  $mimes['svg']  = 'image/svg+xml';

  return $mimes;
}

// нові мінатюри для blog
add_image_size('blog_image', 380, 240, true);
// нові мінатюри для team
add_image_size('team_image', 380, 470, true);

add_action('init', 'register_post_types');

function register_post_types()
{

  register_post_type('team', [
    'label'  => null,
    'labels' => [
      'name'               => 'team', // основное название для типа записи
      'singular_name'      => 'team', // название для одной записи этого типа
      'add_new'            => 'Add Team-Member', // для добавления новой записи
      'add_new_item'       => 'Add Team-Member', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Edit Team-Member', // для редактирования типа записи
      'new_item'           => 'New Team-Member', // текст новой записи
      'view_item'          => 'View Team-Member', // для просмотра записи этого типа.
      'search_items'       => 'Search Team-Member', // для поиска по этим типам записи
      'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Not found', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Team', // название меню
    ],
    'description'         => '',
    'public'              => true,
    // 'publicly_queryable'  => null, // зависит от public
    // 'exclude_from_search' => null, // зависит от public
    // 'show_ui'             => null, // зависит от public
    // 'show_in_nav_menus'   => null, // зависит от public
    'show_in_menu'        => null, // показывать ли в меню адмнки
    // 'show_in_admin_bar'   => null, // зависит от show_in_menu
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => null,
    'menu_icon'           => null,
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => ['title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => [],
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ]);
}
