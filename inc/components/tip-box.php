<?php
/**
 * Tip Box Component
 * Golden tip box with Wasla branding
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/tip-box',
    array(
        'title'       => __('صندوق نصيحة ذهبية', 'wasla'),
        'description' => __('نصيحة مهمة بتصميم بارز', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"className":"wasla-tip-box","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px","right":{"color":"#006A67","width":"5px"}},"color":{"background":"#FFF4B7"}}} -->
<div class="wp-block-group wasla-tip-box has-background" style="border-radius:12px;border-right-color:#006A67;border-right-width:5px;background-color:#FFF4B7;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:paragraph {"className":"tip-icon-text","style":{"typography":{"fontWeight":"700","fontSize":"1.1rem"},"color":{"text":"#000B58"}}} -->
<p class="tip-icon-text" style="color:#000B58;font-size:1.1rem;font-weight:700">💡 نصيحة ذهبية</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}}} -->
<p style="line-height:1.7">اكتب نصيحتك المهمة هنا. هذا الصندوق مصمم لجذب انتباه القارئ للنقاط الحاسمة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
