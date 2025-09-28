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
 * Enqueue Single Article Assets
 */
function wasla_enqueue_single_article_assets() {
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
}
add_action( 'wp_enqueue_scripts', 'wasla_enqueue_single_article_assets' );

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
?>