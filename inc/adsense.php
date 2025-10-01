<?php
/**
 * Wasla AdSense Integration
 * Google AdSense ad management functions
 * 
 * @package Wasla
 * @since 1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Check if AdSense is enabled in theme options
 * 
 * @return bool True if AdSense is enabled
 */
function wasla_is_adsense_enabled() {
    return get_theme_mod( 'wasla_enable_adsense', false );
}

/**
 * Get AdSense Publisher ID
 * 
 * @return string Publisher ID or empty string
 */
function wasla_get_adsense_publisher_id() {
    return get_theme_mod( 'wasla_adsense_publisher_id', '' );
}

/**
 * Display AdSense ad unit
 * 
 * @param string $slot_id AdSense ad slot ID
 * @param string $format Ad format (auto, rectangle, horizontal, vertical)
 * @param array $args Additional arguments
 */
function wasla_display_adsense_ad( $slot_id, $format = 'auto', $args = array() ) {
    if ( ! wasla_is_adsense_enabled() ) {
        return;
    }
    
    $publisher_id = wasla_get_adsense_publisher_id();
    
    if ( empty( $publisher_id ) || empty( $slot_id ) ) {
        return;
    }
    
    $defaults = array(
        'class' => 'wasla-adsense-unit',
        'style' => 'display:block',
        'full_width' => false,
        'responsive' => true,
    );
    
    $args = wp_parse_args( $args, $defaults );
    
    echo '<div class="wasla-ad-container ' . esc_attr( $args['class'] ) . '">';
    echo '<ins class="adsbygoogle"';
    echo ' style="' . esc_attr( $args['style'] ) . '"';
    echo ' data-ad-client="' . esc_attr( $publisher_id ) . '"';
    echo ' data-ad-slot="' . esc_attr( $slot_id ) . '"';
    
    if ( $args['full_width'] ) {
        echo ' data-full-width-responsive="true"';
    }
    
    if ( $args['responsive'] ) {
        echo ' data-ad-format="' . esc_attr( $format ) . '"';
    }
    
    echo '></ins>';
    echo '</div>';
}

/**
 * Header Ad Unit (Leaderboard 728x90 / Mobile Banner 320x100)
 */
function wasla_header_ad() {
    $slot_id = get_theme_mod( 'wasla_ad_slot_header', '' );
    
    if ( empty( $slot_id ) ) {
        return;
    }
    
    wasla_display_adsense_ad( 
        $slot_id, 
        'horizontal',
        array(
            'class' => 'wasla-ad-header',
            'style' => 'display:block;text-align:center;',
            'responsive' => true,
        )
    );
}

/**
 * Sidebar Ad Unit (Rectangle 300x250)
 * 
 * @param string $position Position (top, mid, bottom)
 */
function wasla_sidebar_ad( $position = 'top' ) {
    $slot_id = get_theme_mod( 'wasla_ad_slot_sidebar_' . $position, '' );
    
    if ( empty( $slot_id ) ) {
        return;
    }
    
    wasla_display_adsense_ad( 
        $slot_id, 
        'rectangle',
        array(
            'class' => 'wasla-ad-sidebar wasla-ad-sidebar-' . $position,
            'style' => 'display:block;',
            'responsive' => true,
        )
    );
}

/**
 * In-Content Ad Unit (Responsive Native)
 */
function wasla_content_ad() {
    $slot_id = get_theme_mod( 'wasla_ad_slot_content', '' );
    
    if ( empty( $slot_id ) ) {
        return;
    }
    
    wasla_display_adsense_ad( 
        $slot_id, 
        'auto',
        array(
            'class' => 'wasla-ad-content',
            'style' => 'display:block;text-align:center;',
            'full_width' => true,
        )
    );
}

/**
 * Footer Ad Unit (Leaderboard 728x90 / Mobile Banner 320x100)
 */
function wasla_footer_ad() {
    $slot_id = get_theme_mod( 'wasla_ad_slot_footer', '' );
    
    if ( empty( $slot_id ) ) {
        return;
    }
    
    wasla_display_adsense_ad( 
        $slot_id, 
        'horizontal',
        array(
            'class' => 'wasla-ad-footer',
            'style' => 'display:block;text-align:center;',
            'responsive' => true,
        )
    );
}

/**
 * In-Feed Ad Unit (Native for article lists)
 */
function wasla_infeed_ad() {
    $slot_id = get_theme_mod( 'wasla_ad_slot_infeed', '' );
    
    if ( empty( $slot_id ) ) {
        return;
    }
    
    wasla_display_adsense_ad( 
        $slot_id, 
        'fluid',
        array(
            'class' => 'wasla-ad-infeed',
            'style' => 'display:block;',
            'responsive' => true,
        )
    );
}

/**
 * Enqueue AdSense script
 */
function wasla_enqueue_adsense_script() {
    if ( ! wasla_is_adsense_enabled() ) {
        return;
    }
    
    $publisher_id = wasla_get_adsense_publisher_id();
    
    if ( empty( $publisher_id ) ) {
        return;
    }
    
    wp_enqueue_script(
        'google-adsense',
        'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=' . esc_attr( $publisher_id ),
        array(),
        null,
        false
    );
    
    add_filter( 'script_loader_tag', 'wasla_add_adsense_attributes', 10, 2 );
}
add_action( 'wp_enqueue_scripts', 'wasla_enqueue_adsense_script' );

/**
 * Add async and crossorigin attributes to AdSense script
 */
function wasla_add_adsense_attributes( $tag, $handle ) {
    if ( 'google-adsense' !== $handle ) {
        return $tag;
    }
    
    return str_replace( ' src', ' async crossorigin="anonymous" src', $tag );
}

/**
 * Initialize AdSense ads
 */
function wasla_init_adsense_ads() {
    if ( ! wasla_is_adsense_enabled() ) {
        return;
    }
    ?>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <?php
}
add_action( 'wp_footer', 'wasla_init_adsense_ads', 100 );

/**
 * Register AdSense settings in WordPress Customizer
 */
function wasla_register_adsense_settings( $wp_customize ) {
    $wp_customize->add_section( 'wasla_adsense', array(
        'title'    => 'إعدادات الإعلانات (AdSense)',
        'description' => 'إدارة إعلانات Google AdSense على موقعك',
        'priority' => 35,
    ) );
    
    $wp_customize->add_setting( 'wasla_enable_adsense', array(
        'default'           => false,
        'sanitize_callback' => 'wp_validate_boolean',
        'transport'         => 'refresh',
    ) );
    
    $wp_customize->add_control( 'wasla_enable_adsense', array(
        'label'       => 'تفعيل إعلانات Google AdSense',
        'description' => 'قم بتفعيل هذا الخيار لعرض الإعلانات على الموقع',
        'section'     => 'wasla_adsense',
        'type'        => 'checkbox',
        'priority'    => 10,
    ) );
    
    $wp_customize->add_setting( 'wasla_adsense_publisher_id', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    
    $wp_customize->add_control( 'wasla_adsense_publisher_id', array(
        'label'       => 'معرف الناشر (Publisher ID)',
        'description' => 'مثال: ca-pub-1234567890123456',
        'section'     => 'wasla_adsense',
        'type'        => 'text',
        'priority'    => 20,
    ) );
    
    $wp_customize->add_setting( 'wasla_ad_slot_header', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'wasla_ad_slot_header', array(
        'label'       => 'رقم إعلان الهيدر (Header)',
        'description' => 'إعلان أفقي 728x90 (Desktop) / 320x100 (Mobile)',
        'section'     => 'wasla_adsense',
        'type'        => 'text',
        'priority'    => 30,
    ) );
    
    $wp_customize->add_setting( 'wasla_ad_slot_sidebar_top', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'wasla_ad_slot_sidebar_top', array(
        'label'       => 'رقم إعلان الشريط الجانبي - أعلى',
        'description' => 'إعلان مربع 300x250',
        'section'     => 'wasla_adsense',
        'type'        => 'text',
        'priority'    => 40,
    ) );
    
    $wp_customize->add_setting( 'wasla_ad_slot_sidebar_mid', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'wasla_ad_slot_sidebar_mid', array(
        'label'       => 'رقم إعلان الشريط الجانبي - وسط',
        'description' => 'إعلان مربع 300x250',
        'section'     => 'wasla_adsense',
        'type'        => 'text',
        'priority'    => 50,
    ) );
    
    $wp_customize->add_setting( 'wasla_ad_slot_sidebar_bottom', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'wasla_ad_slot_sidebar_bottom', array(
        'label'       => 'رقم إعلان الشريط الجانبي - أسفل',
        'description' => 'إعلان مربع 300x250',
        'section'     => 'wasla_adsense',
        'type'        => 'text',
        'priority'    => 60,
    ) );
    
    $wp_customize->add_setting( 'wasla_ad_slot_content', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'wasla_ad_slot_content', array(
        'label'       => 'رقم إعلان المحتوى (In-Content)',
        'description' => 'إعلان متجاوب داخل المقال',
        'section'     => 'wasla_adsense',
        'type'        => 'text',
        'priority'    => 70,
    ) );
    
    $wp_customize->add_setting( 'wasla_ad_slot_footer', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'wasla_ad_slot_footer', array(
        'label'       => 'رقم إعلان الفوتر (Footer)',
        'description' => 'إعلان أفقي قبل الفوتر',
        'section'     => 'wasla_adsense',
        'type'        => 'text',
        'priority'    => 80,
    ) );
    
    $wp_customize->add_setting( 'wasla_ad_slot_infeed', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'wasla_ad_slot_infeed', array(
        'label'       => 'رقم إعلان In-Feed',
        'description' => 'إعلان طبيعي ضمن قوائم المقالات',
        'section'     => 'wasla_adsense',
        'type'        => 'text',
        'priority'    => 90,
    ) );
}
add_action( 'customize_register', 'wasla_register_adsense_settings' );
