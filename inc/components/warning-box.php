<?php
/**
 * Warning Box Component  
 * Important warning or caution message
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/warning-box',
    array(
        'title'       => __('صندوق تحذير', 'wasla'),
        'description' => __('رسالة تحذير أو تنبيه مهم', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px","right":{"color":"#c70000","width":"5px"}},"color":{"background":"#fff5f5"}}} -->
<div class="wp-block-group has-background" style="border-radius:12px;border-right-color:#c70000;border-right-width:5px;background-color:#fff5f5;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"1.1rem"},"color":{"text":"#c70000"}}} -->
<p style="color:#c70000;font-size:1.1rem;font-weight:700">⚠️ تنبيه مهم</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}}} -->
<p style="line-height:1.7">معلومة مهمة أو تحذير يجب على القارئ الانتباه له. استخدم هذا للأمور الحاسمة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
