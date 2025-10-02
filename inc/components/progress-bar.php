<?php
/**
 * Progress Component
 * Progress indicator bar
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/progress-bar',
    array(
        'title'       => __('شريط التقدم', 'wasla'),
        'description' => __('مؤشر التقدم', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"700"}}} -->
<p style="font-size:0.875rem;font-weight:700">المرحلة 3 من 5</p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"20px"},"color":{"background":"#e0e0e0"}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#e0e0e0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0","right":"0"}},"border":{"radius":"20px"},"color":{"background":"#006A67"},"layout":{"type":"constrained","contentSize":"60%"}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#006A67;padding-top:0.5rem;padding-right:0;padding-bottom:0.5rem;padding-left:0"></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#666666"}}} -->
<p style="color:#666666;font-size:0.875rem">60% مكتمل</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
