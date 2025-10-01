<?php
/**
 * Icon Card Component
 * Card with icon, title, and description
 * 
 * @package Wasla
 * @subpackage Components/Molecules
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/card-icon',
    array(
        'title'       => __('بطاقة مع أيقونة', 'wasla'),
        'description' => __('بطاقة تحتوي على أيقونة وعنوان ووصف', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"className":"wasla-card wasla-icon-card"} -->
<div class="wp-block-group wasla-card wasla-icon-card">
<!-- wp:paragraph {"className":"card-icon"} -->
<p class="card-icon">🎓</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">عنوان البطاقة</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">وصف تفصيلي للبطاقة يشرح المحتوى أو الميزة بشكل واضح.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
