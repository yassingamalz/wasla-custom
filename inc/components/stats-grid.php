<?php
/**
 * Stats Grid Component
 * Display statistics in a grid format
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/stats-grid',
    array(
        'title'       => __('شبكة إحصائيات', 'wasla'),
        'description' => __('عرض الإحصائيات في شبكة', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">📊 إحصائيات مهمة</h3>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-column has-background" style="border-radius:12px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"},"color":{"text":"#006A67"}}} -->
<p class="has-text-align-center" style="color:#006A67;font-size:2.5rem;font-weight:700">85%</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#666"}}} -->
<p class="has-text-align-center" style="color:#666;font-size:0.95rem">نسبة النجاح</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-column has-background" style="border-radius:12px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"},"color":{"text":"#006A67"}}} -->
<p class="has-text-align-center" style="color:#006A67;font-size:2.5rem;font-weight:700">1000+</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#666"}}} -->
<p class="has-text-align-center" style="color:#666;font-size:0.95rem">طالب مستفيد</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-column has-background" style="border-radius:12px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"},"color":{"text":"#006A67"}}} -->
<p class="has-text-align-center" style="color:#006A67;font-size:2.5rem;font-weight:700">5★</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#666"}}} -->
<p class="has-text-align-center" style="color:#666;font-size:0.95rem">تقييم الجودة</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->'
    )
);
