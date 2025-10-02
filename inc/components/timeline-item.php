<?php
/**
 * Timeline Component
 * Timeline item for events
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/timeline-item',
    array(
        'title'       => __('عنصر جدول زمني', 'wasla'),
        'description' => __('نقطة في الجدول الزمني', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"right":"2rem"}},"border":{"right":{"color":"#006A67","width":"4px"}}}} -->
<div class="wp-block-group" style="border-right-color:#006A67;border-right-width:4px;padding-right:2rem">
<!-- wp:paragraph {"style":{"color":{"text":"#006A67"},"typography":{"fontWeight":"700","fontSize":"0.875rem"}}} -->
<p style="color:#006A67;font-size:0.875rem;font-weight:700">📅 يوليو 2025</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3>بداية التقديم</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>تفاصيل الحدث أو المرحلة</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->'
    )
);
