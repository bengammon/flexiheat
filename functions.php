<?php
add_action('after_setup_theme', 'gomarchingin_setup');
function gomarchingin_setup()
{
    load_theme_textdomain('gomarchingin', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_image_size('category-thumb', 768, 432);
    global $content_width;
    if (!isset($content_width))
        $content_width = 640;
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'gomarchingin')
    ));
}
add_action('wp_enqueue_scripts', 'gomarchingin_load_scripts');
function gomarchingin_load_scripts()
{
    wp_enqueue_script('jquery');
}
add_action('comment_form_before', 'gomarchingin_enqueue_comment_reply_script');
function gomarchingin_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_filter('the_title', 'gomarchingin_title');
function gomarchingin_title($title)
{
    if ($title == '') {
        return '&rarr;';
    } else {
        return $title;
    }
}
add_filter('wp_title', 'gomarchingin_filter_wp_title');
function gomarchingin_filter_wp_title($title)
{
    return $title . esc_attr(get_bloginfo('name'));
}
add_action('widgets_init', 'gomarchingin_widgets_init');
function gomarchingin_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'gomarchingin'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

/* Widget area for displaying Google Reviews */

function googlereviews_widgets_init() {
    register_sidebar( array(
      'name' => 'Google Reviews',
      'id' => 'google_reviews',
      'before_widget' => '<div id="googlereviews-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>', ) );
  }
  add_action( 'widgets_init', 'googlereviews_widgets_init' );

function gomarchingin_custom_pings($comment)
{
    $GLOBALS['comment'] = $comment;
?>
<li <?php
    comment_class();
?> id="li-comment-<?php
    comment_ID();
?>"><?php
    echo comment_author_link();
?></li>
<?php
}
add_filter('get_comments_number', 'gomarchingin_comments_number');
function gomarchingin_comments_number($count)
{
    if (!is_admin()) {
        global $id;
        $comments_by_type =& separate_comments(get_comments('status=approve&post_id=' . $id));
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}