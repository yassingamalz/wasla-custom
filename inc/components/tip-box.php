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
        'content'     => '<!-- wp:group {"className":"wasla-tip-box wasla-box"} -->
<div class="wp-block-group wasla-tip-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">💡</span> نصيحة ذهبية</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">اكتب نصيحتك المهمة هنا. هذا الصندوق مصمم لجذب انتباه القارئ للنقاط الحاسمة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
