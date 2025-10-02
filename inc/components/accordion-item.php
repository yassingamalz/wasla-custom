<?php
/**
 * Accordion Component
 * Expandable content section
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/accordion-item',
    array(
        'title'       => __('عنصر قابل للطي', 'wasla'),
        'description' => __('محتوى قابل للتوسيع', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px","width":"1px"},"color":{"background":"#ffffff"}},"borderColor":"#e0e0e0"} -->
<div class="wp-block-group has-border-color has-background" style="border-color:#e0e0e0;border-width:1px;border-radius:12px;background-color:#ffffff;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"1.1rem"},"color":{"text":"#000B58"}}} -->
<p style="color:#000B58;font-size:1.1rem;font-weight:700">▼ السؤال أو العنوان</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
<p style="margin-top:1rem">المحتوى القابل للتوسيع يظهر هنا...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
