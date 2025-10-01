<?php
/**
 * Numbered Card Component
 * Card with large number, title, and description
 * 
 * @package Wasla
 * @subpackage Components/Molecules
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/card-numbered',
    array(
        'title'       => __('بطاقة مرقمة', 'wasla'),
        'description' => __('بطاقة تحتوي على رقم وعنوان ووصف', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"className":"wasla-card wasla-numbered-card"} -->
<div class="wp-block-group wasla-card wasla-numbered-card">
<!-- wp:paragraph {"className":"card-number"} -->
<p class="card-number">1</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">الخطوة الأولى</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">شرح تفصيلي للخطوة مع توضيح الإجراءات المطلوبة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
