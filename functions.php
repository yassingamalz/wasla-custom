<?php
/**
 * Wasla Functions and definitions
 * Child theme of Astra
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'WASLA_THEME_VERSION', '1.0.0' );

/**
 * Enqueue parent theme and custom styles
 */
function wasla_enqueue_styles() {
    wp_enqueue_style( 'astra-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'wasla-style', get_stylesheet_directory_uri() . '/style.css', array( 'astra-style' ), WASLA_THEME_VERSION );
    
    $header_footer_css = get_stylesheet_directory() . '/wasla-header-footer.css';
    if ( file_exists( $header_footer_css ) ) {
        wp_enqueue_style( 'wasla-header-footer', get_stylesheet_directory_uri() . '/wasla-header-footer.css', array( 'wasla-style' ), WASLA_THEME_VERSION );
    }
}
add_action( 'wp_enqueue_scripts', 'wasla_enqueue_styles' );

/**
 * Enqueue JavaScript
 */
function wasla_enqueue_scripts() {
    $js_file = get_stylesheet_directory() . '/js/wasla-header.js';
    if ( file_exists( $js_file ) ) {
        wp_enqueue_script( 'wasla-header-js', get_stylesheet_directory_uri() . '/js/wasla-header.js', array( 'jquery' ), WASLA_THEME_VERSION, true );
    }
}
add_action( 'wp_enqueue_scripts', 'wasla_enqueue_scripts' );

/**
 * Add Google Fonts
 */
function wasla_add_google_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'wasla_add_google_fonts', 1 );

/**
 * Register navigation menus
 */
function wasla_register_nav_menus() {
    register_nav_menus( array(
        'wasla-main-menu' => __('Wasla Main Menu', 'wasla'),
        'wasla-mobile-menu' => __('Wasla Mobile Menu', 'wasla'),
        'wasla-footer-menu' => __('Wasla Footer Menu', 'wasla'),
    ) );
}
add_action( 'after_setup_theme', 'wasla_register_nav_menus' );

/**
 * Add theme support
 */
function wasla_theme_support() {
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'nav-menus' );
    add_theme_support( 'comments' );
    add_post_type_support( 'post', 'comments' );
    add_post_type_support( 'page', 'comments' );
}
add_action( 'after_setup_theme', 'wasla_theme_support' );

/**
 * Add custom body classes
 */
function wasla_custom_body_class( $classes ) {
    $classes[] = 'wasla-theme';
    
    if ( is_front_page() ) {
        $classes[] = 'wasla-homepage';
    }
    
    if ( is_page( 'contact' ) ) {
        $classes[] = 'wasla-contact-page';
    }
    
    return $classes;
}
add_filter( 'body_class', 'wasla_custom_body_class' );

/**
 * Custom excerpt settings
 */
function wasla_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wasla_excerpt_length', 999 );

function wasla_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wasla_excerpt_more' );

/**
 * Custom Navigation Walker for dropdown menus
 */
class Wasla_Nav_Walker extends Walker_Nav_Menu {
    
    /**
     * Start Level - Output sub-menu HTML
     */
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu sub-menu-level-$depth\">\n";
    }

    /**
     * End Level
     */
    function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    /**
     * Start Element - Individual menu items
     */
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        
        $has_children = in_array('menu-item-has-children', $classes);
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';
        
        $output .= $indent . '<li' . $id . $class_names . '>';
        
        $attributes = ! empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        $link_class = '';
        if (in_array('current-menu-item', $classes) || in_array('current_page_item', $classes)) {
            $link_class = ' class="active"';
        }
        
        $dropdown_indicator = '';
        if ($has_children) {
            $dropdown_indicator = ' <i class="bi bi-chevron-down dropdown-indicator"></i>';
        }
        
        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a' . $attributes . $link_class . '>';
        $item_output .= (isset($args->link_before) ? $args->link_before : '');
        $item_output .= apply_filters('the_title', $item->title, $item->ID);
        $item_output .= $dropdown_indicator;
        $item_output .= (isset($args->link_after) ? $args->link_after : '');
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    /**
     * End Element
     */
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}

/**
 * Enhanced fallback menu function with submenu support
 */
function wasla_fallback_menu() {
    ?>
    <ul class="nav-menu" id="mobile-menu">
        <li class="<?php echo (is_front_page() || is_home()) ? 'current-menu-item' : ''; ?>">
            <a href="<?php echo home_url(); ?>" <?php echo (is_front_page() || is_home()) ? 'class="active"' : ''; ?>>
                الرئيسية
            </a>
        </li>
        
        <li class="menu-item-has-children <?php echo (strpos($_SERVER['REQUEST_URI'] ?? '', '/don-bosco') !== false) ? 'current-menu-item' : ''; ?>">
            <a href="#" onclick="return false;" <?php echo (strpos($_SERVER['REQUEST_URI'] ?? '', '/don-bosco') !== false) ? 'class="active"' : ''; ?>>
                دون بوسكو
                <i class="bi bi-chevron-down dropdown-indicator"></i>
            </a>
            <ul class="sub-menu">
                <li><a href="<?php echo home_url('/don-bosco/application-guide'); ?>">دليل التقديم</a></li>
                <li><a href="<?php echo home_url('/don-bosco/study-programs'); ?>">البرامج الدراسية</a></li>
                <li><a href="<?php echo home_url('/don-bosco/admission-requirements'); ?>">شروط القبول</a></li>
                <li><a href="<?php echo home_url('/don-bosco/fees'); ?>">المصروفات</a></li>
            </ul>
        </li>
        
        <li class="menu-item-has-children <?php echo (strpos($_SERVER['REQUEST_URI'] ?? '', '/thanawya') !== false) ? 'current-menu-item' : ''; ?>">
            <a href="#" onclick="return false;" <?php echo (strpos($_SERVER['REQUEST_URI'] ?? '', '/thanawya') !== false) ? 'class="active"' : ''; ?>>
                الثانوية العامة
                <i class="bi bi-chevron-down dropdown-indicator"></i>
            </a>
            <ul class="sub-menu">
                <li><a href="<?php echo home_url('/thanawya/study-strategies'); ?>">استراتيجيات المذاكرة</a></li>
                <li><a href="<?php echo home_url('/thanawya/subject-guides'); ?>">أدلة المواد</a></li>
                <li><a href="<?php echo home_url('/thanawya/exam-preparation'); ?>">التحضير للامتحانات</a></li>
                <li><a href="<?php echo home_url('/thanawya/time-management'); ?>">إدارة الوقت</a></li>
            </ul>
        </li>
        
        <li class="menu-item-has-children <?php echo (strpos($_SERVER['REQUEST_URI'] ?? '', '/universities') !== false) ? 'current-menu-item' : ''; ?>">
            <a href="#" onclick="return false;" <?php echo (strpos($_SERVER['REQUEST_URI'] ?? '', '/universities') !== false) ? 'class="active"' : ''; ?>>
                الجامعات
                <i class="bi bi-chevron-down dropdown-indicator"></i>
            </a>
            <ul class="sub-menu">
                <li><a href="<?php echo home_url('/universities/coordination-guide'); ?>">دليل التنسيق</a></li>
                <li><a href="<?php echo home_url('/universities/college-selection'); ?>">اختيار الكلية</a></li>
                <li><a href="<?php echo home_url('/universities/private-universities'); ?>">الجامعات الخاصة</a></li>
                <li><a href="<?php echo home_url('/universities/scholarships'); ?>">المنح الدراسية</a></li>
            </ul>
        </li>
        
        <li class="<?php echo (is_page('contact') || strpos($_SERVER['REQUEST_URI'] ?? '', '/contact') !== false) ? 'current-menu-item' : ''; ?>">
            <a href="<?php echo home_url('/contact'); ?>" <?php echo (is_page('contact') || strpos($_SERVER['REQUEST_URI'] ?? '', '/contact') !== false) ? 'class="active"' : ''; ?>>
                اتصل بنا
            </a>
        </li>
    </ul>
    <?php
}

/**
 * Disable Astra's header and footer
 */
function wasla_disable_astra_header_footer() {
    if ( function_exists( 'astra_header_markup' ) ) {
        remove_action( 'astra_header', 'astra_header_markup' );
    }
    
    if ( function_exists( 'astra_footer_markup' ) ) {
        remove_action( 'astra_footer', 'astra_footer_markup' );
    }
}
add_action( 'wp_loaded', 'wasla_disable_astra_header_footer' );

/**
 * Admin notices for missing files
 */
function wasla_admin_notices() {
    if ( current_user_can( 'manage_options' ) ) {
        $missing_files = array();
        
        if ( ! file_exists( get_stylesheet_directory() . '/wasla-header-footer.css' ) ) {
            $missing_files[] = 'wasla-header-footer.css';
        }
        
        if ( ! file_exists( get_stylesheet_directory() . '/js/wasla-header.js' ) ) {
            $missing_files[] = 'js/wasla-header.js';
        }
        
        if ( ! empty( $missing_files ) ) {
            echo '<div class="notice notice-warning is-dismissible">';
            echo '<p><strong>Wasla Theme:</strong> Missing files: ' . implode( ', ', $missing_files ) . '</p>';
            echo '</div>';
        }
    }
}
add_action( 'admin_notices', 'wasla_admin_notices' );

/**
 * Enqueue Template-Specific Styles
 */
function wasla_enqueue_template_styles() {
    // Single Article CSS
    if (is_single()) {
        wp_enqueue_style( 
            'wasla-single-article', 
            get_stylesheet_directory_uri() . '/css/single-article.css', 
            array( 'wasla-header-footer' ), 
            WASLA_THEME_VERSION 
        );
        
        wp_enqueue_script( 
            'wasla-single-article-js', 
            get_stylesheet_directory_uri() . '/js/single-article.js',
            array( 'jquery' ), 
            WASLA_THEME_VERSION, 
            true 
        );
    }
    
    // Archive Pages CSS (author, date, search archives)
    if (is_archive() && !is_category() && !is_tag()) {
        wp_enqueue_style( 
            'wasla-archive-pages', 
            get_stylesheet_directory_uri() . '/css/archive-pages.css', 
            array( 'wasla-header-footer' ), 
            WASLA_THEME_VERSION 
        );
    }
    
    // Generic Page CSS
    if (is_page() && !is_page_template()) {
        wp_enqueue_style( 
            'wasla-generic-page', 
            get_stylesheet_directory_uri() . '/css/generic-page.css', 
            array( 'wasla-header-footer' ), 
            WASLA_THEME_VERSION 
        );
    }
    
    // Blog Index CSS (fallback blog page)
    if (is_home() && !is_front_page()) {
        wp_enqueue_style( 
            'wasla-blog-index', 
            get_stylesheet_directory_uri() . '/css/blog-index.css', 
            array( 'wasla-header-footer' ), 
            WASLA_THEME_VERSION 
        );
    }
    
    // Legal Pages CSS (Privacy Policy & Terms of Service)
    if (is_page(array('privacy-policy', 'terms-of-service', 'سياسة-الخصوصية', 'شروط-الخدمة'))) {
        wp_enqueue_style( 
            'wasla-legal-pages', 
            get_stylesheet_directory_uri() . '/css/legal-pages.css', 
            array( 'wasla-header-footer' ), 
            WASLA_THEME_VERSION 
        );
    }
}
add_action( 'wp_enqueue_scripts', 'wasla_enqueue_template_styles' );

/**
 * Comment functionality setup
 */
function wasla_setup_comments() {
    add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
    add_theme_support( 'post-thumbnails' );
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'after_setup_theme', 'wasla_setup_comments' );

/**
 * Enable comments on posts by default
 */
function wasla_enable_comments_on_posts( $data ) {
    if ( $data['post_type'] === 'post' ) {
        $data['comment_status'] = 'open';
    }
    return $data;
}
add_filter( 'wp_insert_post_data', 'wasla_enable_comments_on_posts' );

/**
 * Handle comment form styling
 */
function wasla_comment_form_defaults( $defaults ) {
    $defaults['class_submit'] = 'submit btn-primary';
    $defaults['class_form'] = 'wasla-comment-form';
    return $defaults;
}
add_filter( 'comment_form_defaults', 'wasla_comment_form_defaults' );

/**
 * Customize comment walker
 */
function wasla_comment_walker( $walker, $args ) {
    return 'wasla_comment_callback';
}
add_filter( 'comment_form_default_walker', 'wasla_comment_walker', 10, 2 );

/**
 * Add AJAX support for comments
 */
function wasla_enqueue_comment_ajax() {
    if ( is_singular() && comments_open() ) {
        wp_enqueue_script( 'jquery' );
        wp_localize_script( 'jquery', 'wasla_ajax', array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce( 'wasla_comment_nonce' )
        ));
    }
}
add_action( 'wp_enqueue_scripts', 'wasla_enqueue_comment_ajax' );

/**
 * Handle comment processing with proper validation
 */
function wasla_process_comment( $commentdata ) {
    if ( ! wp_verify_nonce( $_POST['wasla_comment_nonce'] ?? '', 'wasla_comment_nonce' ) ) {
        wp_die( 'Security check failed.' );
    }
    
    $commentdata['comment_type'] = 'comment';
    $commentdata['comment_approved'] = 1;
    
    return $commentdata;
}
add_filter( 'preprocess_comment', 'wasla_process_comment' );

/**
 * Add nonce field to comment form
 */
function wasla_add_comment_nonce() {
    wp_nonce_field( 'wasla_comment_nonce', 'wasla_comment_nonce' );
}
add_action( 'comment_form', 'wasla_add_comment_nonce' );

/**
 * Post Views Management System
 */
function wasla_initialize_post_views( $post_id ) {
    $existing_views = get_post_meta( $post_id, '_wasla_view_count', true );
    
    if ( empty( $existing_views ) ) {
        $initial_views = rand( 100, 500 );
        update_post_meta( $post_id, '_wasla_view_count', $initial_views );
    }
}

function wasla_set_initial_views_on_publish( $post_id, $post, $update ) {
    if ( $post->post_type === 'post' && $post->post_status === 'publish' && ! $update ) {
        wasla_initialize_post_views( $post_id );
    }
}
add_action( 'wp_insert_post', 'wasla_set_initial_views_on_publish', 10, 3 );

function wasla_track_post_view( $post_id ) {
    if ( is_single() && ! is_user_logged_in() && ! is_admin() ) {
        $current_views = get_post_meta( $post_id, '_wasla_view_count', true );
        $current_views = $current_views ? intval( $current_views ) : 0;
        
        $visitor_key = 'wasla_viewed_' . $post_id;
        
        if ( ! isset( $_COOKIE[$visitor_key] ) && ! headers_sent() ) {
            $new_views = $current_views + 1;
            update_post_meta( $post_id, '_wasla_view_count', $new_views );
        }
    }
}

function wasla_get_post_views( $post_id ) {
    $views = get_post_meta( $post_id, '_wasla_view_count', true );
    return $views ? intval( $views ) : rand( 100, 500 );
}

function wasla_auto_track_views() {
    if ( is_single() ) {
        global $post;
        wasla_track_post_view( $post->ID );
    }
}
add_action( 'wp_head', 'wasla_auto_track_views' );

/**
 * Author Display Management
 */
function wasla_get_proper_author_name( $author_id = null ) {
    if ( ! $author_id ) {
        $author_id = get_the_author_meta( 'ID' );
    }
    
    $display_name = get_the_author_meta( 'display_name', $author_id );
    $first_name = get_the_author_meta( 'first_name', $author_id );
    $last_name = get_the_author_meta( 'last_name', $author_id );
    $user_login = get_the_author_meta( 'user_login', $author_id );
    
    if ( $display_name && ! filter_var( $display_name, FILTER_VALIDATE_EMAIL ) ) {
        return $display_name;
    }
    
    if ( $first_name && $last_name ) {
        return $first_name . ' ' . $last_name;
    }
    
    if ( $first_name ) {
        return $first_name;
    }
    
    if ( $user_login && ! filter_var( $user_login, FILTER_VALIDATE_EMAIL ) ) {
        return $user_login;
    }
    
    return 'فريق وصلة';
}

function wasla_set_default_display_name( $user_id ) {
    $user_info = get_userdata( $user_id );
    $display_name = $user_info->display_name;
    
    if ( filter_var( $display_name, FILTER_VALIDATE_EMAIL ) || empty( $display_name ) ) {
        $first_name = get_user_meta( $user_id, 'first_name', true );
        $last_name = get_user_meta( $user_id, 'last_name', true );
        
        if ( $first_name && $last_name ) {
            $new_display_name = $first_name . ' ' . $last_name;
        } elseif ( $first_name ) {
            $new_display_name = $first_name;
        } else {
            $new_display_name = 'كاتب وصلة';
        }
        
        wp_update_user( array(
            'ID' => $user_id,
            'display_name' => $new_display_name
        ) );
    }
}
add_action( 'user_register', 'wasla_set_default_display_name' );
add_action( 'profile_update', 'wasla_set_default_display_name' );

/**
 * Initialize existing posts with view counts
 */
function wasla_initialize_existing_posts() {
    $posts = get_posts( array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_query' => array(
            array(
                'key' => '_wasla_view_count',
                'compare' => 'NOT EXISTS'
            )
        )
    ) );
    
    foreach ( $posts as $post ) {
        wasla_initialize_post_views( $post->ID );
    }
}

register_activation_hook( __FILE__, 'wasla_initialize_existing_posts' );

/**
 * Auto-initialize posts on first load (for existing installations)
 */
function wasla_auto_init_check() {
    $init_flag = get_option( 'wasla_views_initialized', false );
    
    if ( ! $init_flag ) {
        wasla_initialize_existing_posts();
        update_option( 'wasla_views_initialized', true );
    }
}
add_action( 'init', 'wasla_auto_init_check' );

/**
 * Admin function to reset all view counts
 */
function wasla_reset_all_view_counts() {
    if ( current_user_can( 'manage_options' ) ) {
        $posts = get_posts( array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1
        ) );
        
        foreach ( $posts as $post ) {
            delete_post_meta( $post->ID, '_wasla_view_count' );
            wasla_initialize_post_views( $post->ID );
        }
    }
}

/**
 * Add admin menu for view management
 */
function wasla_add_admin_menu() {
    add_management_page(
        'إدارة المشاهدات',
        'مشاهدات المقالات',
        'manage_options',
        'wasla-views',
        'wasla_views_admin_page'
    );
}
add_action( 'admin_menu', 'wasla_add_admin_menu' );

/**
 * Comment callback function for custom comment display
 * Handles individual comment rendering with Wasla styling
 */
if ( ! function_exists( 'wasla_comment_callback' ) ) {
    function wasla_comment_callback( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        extract($args, EXTR_SKIP);

        if ( 'div' == $args['style'] ) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
        ?>
        <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
            
            <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
                <div class="comment-author-avatar">
                    <?php 
                    if ( $args['avatar_size'] != 0 ) {
                        echo get_avatar( $comment, $args['avatar_size'], '', get_comment_author(), array( 'class' => 'comment-avatar' ) ); 
                    } else {
                        echo '<div class="comment-avatar-placeholder"><i class="bi bi-person-circle"></i></div>';
                    }
                    ?>
                </div>
                
                <div class="comment-content-wrapper">
                    <div class="comment-meta">
                        <div class="comment-author-info">
                            <h4 class="comment-author-name">
                                <?php 
                                $author_url = get_comment_author_url();
                                if ( $author_url && $author_url !== 'http://' ) {
                                    echo '<a href="' . esc_url( $author_url ) . '" target="_blank" rel="nofollow">' . get_comment_author() . '</a>';
                                } else {
                                    echo get_comment_author();
                                }
                                ?>
                                
                                <?php if ( $comment->user_id === get_the_author_meta('ID') ) : ?>
                                    <span class="comment-author-badge">
                                        <i class="bi bi-patch-check-fill"></i>
                                        الكاتب
                                    </span>
                                <?php endif; ?>
                            </h4>
                            
                            <div class="comment-metadata">
                                <time datetime="<?php comment_time('c'); ?>" class="comment-date">
                                    <i class="bi bi-clock"></i>
                                    <?php 
                                    $comment_date = get_comment_date('U');
                                    $current_time = current_time('U');
                                    $time_diff = $current_time - $comment_date;
                                    
                                    if ( $time_diff < 3600 ) { // Less than 1 hour
                                        echo 'منذ ' . ceil($time_diff / 60) . ' دقيقة';
                                    } elseif ( $time_diff < 86400 ) { // Less than 1 day
                                        echo 'منذ ' . ceil($time_diff / 3600) . ' ساعة';
                                    } elseif ( $time_diff < 604800 ) { // Less than 1 week
                                        echo 'منذ ' . ceil($time_diff / 86400) . ' يوم';
                                    } else {
                                        echo get_comment_date('j F Y');
                                    }
                                    ?>
                                </time>
                                
                                <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>" class="comment-permalink">
                                    <i class="bi bi-link-45deg"></i>
                                    رابط
                                </a>
                            </div>
                        </div>
                        
                        <div class="comment-actions">
                            <?php 
                            comment_reply_link( 
                                array_merge( $args, 
                                    array( 
                                        'add_below' => $add_below, 
                                        'depth'     => $depth, 
                                        'max_depth' => $args['max_depth'],
                                        'reply_text' => '<i class="bi bi-reply"></i> رد'
                                    ) 
                                ) 
                            ); 
                            ?>
                        </div>
                    </div>

                    <div class="comment-content">
                        <?php if ( $comment->comment_approved == '0' ) : ?>
                            <div class="comment-awaiting-moderation">
                                <i class="bi bi-hourglass-split"></i>
                                <em>تعليقك في انتظار المراجعة.</em>
                            </div>
                        <?php endif; ?>
                        
                        <div class="comment-text">
                            <?php comment_text(); ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php if ( $comment->comment_approved != '0' ) : ?>
                <div class="comment-footer">
                    <div class="comment-reactions">
                        <button type="button" class="comment-like-btn" data-comment-id="<?php comment_ID(); ?>">
                            <i class="bi bi-hand-thumbs-up"></i>
                            <span class="like-count">0</span>
                        </button>
                    </div>
                </div>
            <?php endif; ?>
        <?php
    }
}

/**
 * Contact form processing functionality
 * Handles form submission and email sending
 */
function wasla_handle_contact_form() {
    if ( isset($_POST['wasla_contact_submit']) && wp_verify_nonce($_POST['wasla_contact_nonce'], 'wasla_contact_form') ) {
        
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $subject = sanitize_text_field($_POST['subject']);
        $inquiry_type = sanitize_text_field($_POST['inquiry_type']);
        $message = sanitize_textarea_field($_POST['message']);
        
        $errors = array();
        
        // Validation
        if (empty($name)) {
            $errors[] = 'الاسم مطلوب';
        }
        
        if (empty($email) || !is_email($email)) {
            $errors[] = 'البريد الإلكتروني غير صحيح';
        }
        
        if (empty($subject)) {
            $errors[] = 'موضوع الرسالة مطلوب';
        }
        
        if (empty($message)) {
            $errors[] = 'نص الرسالة مطلوب';
        }
        
        if (empty($errors)) {
            // Prepare email
            $to = get_option('admin_email', 'info@wasla-eg.com');
            $email_subject = "رسالة جديدة من موقع وصلة - " . $subject;
            $email_body = "\n";
            $email_body .= "الاسم: " . $name . "\n";
            $email_body .= "البريد الإلكتروني: " . $email . "\n";
            $email_body .= "الهاتف: " . $phone . "\n";
            $email_body .= "نوع الاستفسار: " . $inquiry_type . "\n";
            $email_body .= "الموضوع: " . $subject . "\n\n";
            $email_body .= "الرسالة:\n" . $message . "\n\n";
            $email_body .= "---\n";
            $email_body .= "تم الإرسال من: " . home_url() . "\n";
            $email_body .= "التاريخ: " . current_time('Y-m-d H:i:s') . "\n";
            
            $headers = array(
                'Content-Type: text/plain; charset=UTF-8',
                'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
                'Reply-To: ' . $name . ' <' . $email . '>'
            );
            
            // Send email
            $sent = wp_mail($to, $email_subject, $email_body, $headers);
            
            if ($sent) {
                // Store success message using WordPress transients instead of sessions
                set_transient('wasla_contact_success_' . session_id(), 'تم إرسال رسالتك بنجاح! سنتواصل معك في أقرب وقت ممكن.', 300);
            } else {
                set_transient('wasla_contact_error_' . session_id(), 'حدث خطأ في الإرسال. يرجى المحاولة مرة أخرى أو التواصل معنا مباشرة.', 300);
            }
        } else {
            // Store error messages
            set_transient('wasla_contact_error_' . session_id(), implode('<br>', $errors), 300);
            set_transient('wasla_contact_data_' . session_id(), $_POST, 300);
        }
        
        // Redirect back to contact page to prevent resubmission
        wp_redirect(add_query_arg('form_submitted', '1', get_permalink()));
        exit;
    }
}
add_action('init', 'wasla_handle_contact_form');

/**
 * Initialize session for contact form
 * Starts session early to avoid header issues
 */
function wasla_init_session() {
    if (!session_id() && !headers_sent()) {
        session_start();
    }
}
add_action('init', 'wasla_init_session', 1);

/**
 * Get contact form message
 * Returns success or error message from transients
 */
function wasla_get_contact_form_message() {
    if (!session_id() && !headers_sent()) {
        session_start();
    }
    
    $session_id = session_id();
    $message = '';
    
    $success = get_transient('wasla_contact_success_' . $session_id);
    $error = get_transient('wasla_contact_error_' . $session_id);
    
    if ($success) {
        $message = '<div class="form-message success">' . $success . '</div>';
        delete_transient('wasla_contact_success_' . $session_id);
    } elseif ($error) {
        $message = '<div class="form-message error">' . $error . '</div>';
        delete_transient('wasla_contact_error_' . $session_id);
    }
    
    return $message;
}

/**
 * Get contact form field value
 * Returns previously submitted value in case of error
 */
function wasla_get_contact_form_value($field) {
    if (!session_id() && !headers_sent()) {
        session_start();
    }
    
    $session_id = session_id();
    $data = get_transient('wasla_contact_data_' . $session_id);
    
    if ($data && isset($data[$field])) {
        $value = $data[$field];
        if ($field === 'message') {
            delete_transient('wasla_contact_data_' . $session_id);
        }
        return esc_attr($value);
    }
    
    return '';
}

function wasla_views_admin_page() {
    if ( isset( $_POST['reset_views'] ) ) {
        wasla_reset_all_view_counts();
        echo '<div class="notice notice-success"><p>تم إعادة تعيين عدادات المشاهدة بنجاح</p></div>';
    }
    
    if ( isset( $_POST['init_views'] ) ) {
        wasla_initialize_existing_posts();
        echo '<div class="notice notice-success"><p>تم تهيئة عدادات المشاهدة للمقالات الموجودة</p></div>';
    }
    
    echo '<div class="wrap">';
    echo '<h1>إدارة مشاهدات المقالات</h1>';
    echo '<form method="post">';
    echo '<p><input type="submit" name="init_views" class="button button-primary" value="تهيئة المشاهدات للمقالات الموجودة"></p>';
    echo '<p><input type="submit" name="reset_views" class="button button-secondary" value="إعادة تعيين جميع المشاهدات" onclick="return confirm(\'هل أنت متأكد؟\')"></p>';
    echo '</form>';
    echo '</div>';
}
?>