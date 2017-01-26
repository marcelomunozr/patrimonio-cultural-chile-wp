<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'menu_header' => __('Menu Header', 'sage')
  ]);
  register_nav_menus([
    'menu_header_top' => __('Menu Header Top', 'sage')
  ]);
  register_nav_menus([
    'menu_footer' => __('Menu Footer', 'sage')
  ]);
  //los menu interiores
  register_nav_menus([
    'menu_somos' => __('Menu Quiénes Somos', 'sage')
  ]);
  register_nav_menus([
    'menu_socios' => __('Menu Socios', 'sage')
  ]);
  register_nav_menus([
    'menu_patrimonial' => __('Menu Actualidad Patrimonial', 'sage')
  ]);
  register_nav_menus([
    'menu_biblioteca' => __('Menu Biblioteca', 'sage')
  ]);
  register_nav_menus([
    'menu_nuestro' => __('Menu Nuestro', 'sage')
  ]);



  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');
  add_image_size('first-zone', 753, 880, true, array( 'center', 'center' ) );
  add_image_size('second-zone', 753, 370, true, array( 'center', 'center' ) );
  add_image_size('third-zone', 753, 370, true, array( 'center', 'center' ) );
  //interior de cajas
  add_image_size('caja-big', 612, 400, true, array( 'center', 'center' ) );
  add_image_size('caja-small', 306, 400, true, array( 'center', 'center' ) );
  // directorio
  add_image_size('pic-directorio', 316, 382, true, array( 'center', 'center' ) );

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Menú Quiénes somos', 'sage'),
    'id'            => 'sidebar-somos',
    'class'         => 'sidebar-menu',
    'before_widget' => '<section class="widget sidebar-menute %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
  register_sidebar([
    'name'          => __('Menú Socios', 'sage'),
    'id'            => 'sidebar-socios',
    'class'         => 'sidebar-menu',
    'before_widget' => '<section class="widget sidebar-menute %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
  register_sidebar([
    'name'          => __('Menú Actualidad Patrimonial', 'sage'),
    'id'            => 'sidebar-patrimonial',
    'class'         => 'sidebar-menu',
    'before_widget' => '<section class="widget sidebar-menute %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
  register_sidebar([
    'name'          => __('Menú Biblioteca', 'sage'),
    'id'            => 'sidebar-biblio',
    'class'         => 'sidebar-menu',
    'before_widget' => '<section class="widget sidebar-menute %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
  register_sidebar([
    'name'          => __('Menú Nuestro', 'sage'),
    'id'            => 'sidebar-nuestro',
    'class'         => 'sidebar-menu',
    'before_widget' => '<section class="widget sidebar-menute %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Opciones Visuales',
    'menu_title'  => 'Opciones visuales',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  acf_add_options_sub_page(array(
    'page_title'  => 'Opciones del Home',
    'menu_title'  => 'Destacados Home',
    'parent_slug' => 'theme-general-settings',
  ));
  acf_add_options_sub_page(array(
    'page_title'  => 'Imágenes del Menú',
    'menu_title'  => 'Imágenes Menú',
    'parent_slug' => 'theme-general-settings',
  ));
  /*acf_add_options_sub_page(array(
    'page_title'  => 'Opciones Banners - Publicidad - tracking',
    'menu_title'  => 'Banners',
    'parent_slug' => 'theme-general-settings',
  ));
  acf_add_options_sub_page(array(
    'page_title'  => 'Selecciones del editor',
    'menu_title'  => 'Selecciones del editor',
    'parent_slug' => 'theme-general-settings',
  ));*/
}
/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_archive(),
    is_single(),
    is_page_template('template-custom.php'),
  ]);

  return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);
