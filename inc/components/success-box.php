<?php
/**
 * Success Box Component
 * Success message or positive highlight
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/success-box',
    array(
        'title'       => __('صندوق نجاح', 'wasla'),
        'description' => __('رسالة نجاح أو تمييز إيجابي', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px","right":{"color":"#28a745","width":"5px"}},"color":{"background":"#f0fff4"}}} -->
<div class="wp-block-group has-background" style="border-radius:12px;border-right-color:#28a745;border-right-width:5px;background-color:#f0fff4;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"1.1rem"},"color":{"text":"#28a745"}}} -->
<p style="color:#28a745;font-size:1.1rem;font-weight:700">✅ نقطة نجاح</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}}} -->
<p style="line-height:1.7">معلومة إيجابية أو نصيحة للنجاح. استخدم هذا لتسليط الضوء على النتائج الإيجابية.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
