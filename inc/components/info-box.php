<?php
/**
 * Info Box Component
 * General information box
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/info-box',
    array(
        'title'       => __('صندوق معلومات', 'wasla'),
        'description' => __('صندوق معلومات عامة', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px","right":{"color":"#0066cc","width":"5px"}},"color":{"background":"#f0f7ff"}}} -->
<div class="wp-block-group has-background" style="border-radius:12px;border-right-color:#0066cc;border-right-width:5px;background-color:#f0f7ff;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"1.1rem"},"color":{"text":"#0066cc"}}} -->
<p style="color:#0066cc;font-size:1.1rem;font-weight:700">ℹ️ معلومة مفيدة</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}}} -->
<p style="line-height:1.7">معلومة إضافية أو توضيح مفيد للقارئ. استخدم هذا للمعلومات المكملة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
