<?php
/**
 * Button Components
 * Primary and secondary CTA buttons
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/button-primary',
    array(
        'title'       => __('زر أساسي', 'wasla'),
        'description' => __('زر دعوة لإجراء', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#006A67","text":"#ffffff"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"2rem","right":"2rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:8px;color:#ffffff;background-color:#006A67;padding-top:0.75rem;padding-right:2rem;padding-bottom:0.75rem;padding-left:2rem">ابدأ الآن</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->'
    )
);

register_block_pattern(
    'wasla/button-secondary',
    array(
        'title'       => __('زر ثانوي', 'wasla'),
        'description' => __('زر إجراء ثانوي', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#006A67"},"border":{"radius":"8px","width":"2px"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"2rem","right":"2rem"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" style="border-radius:8px;border-width:2px;color:#006A67;padding-top:0.75rem;padding-right:2rem;padding-bottom:0.75rem;padding-left:2rem">اعرف المزيد</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->'
    )
);
