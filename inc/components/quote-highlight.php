<?php
/**
 * Quote Highlight Component
 * Beautiful quote box with attribution
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/quote-highlight',
    array(
        'title'       => __('اقتباس مميز', 'wasla'),
        'description' => __('صندوق اقتباس مع توثيق', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2.5rem","right":"2.5rem"}},"border":{"radius":"15px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group has-background" style="border-radius:15px;background-color:#f8f9fa;padding-top:2rem;padding-right:2.5rem;padding-bottom:2rem;padding-left:2.5rem">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.5rem","lineHeight":"1.6","fontStyle":"italic"},"color":{"text":"#000B58"}}} -->
<p class="has-text-align-center" style="color:#000B58;font-size:1.5rem;font-style:italic;line-height:1.6">"اقتباس ملهم أو مقولة مهمة تدعم محتوى المقال وتضيف قيمة للقارئ"</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem","fontWeight":"600"},"color":{"text":"#006A67"}}} -->
<p class="has-text-align-center" style="color:#006A67;font-size:1rem;font-weight:600">— اسم الشخص أو المصدر</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
