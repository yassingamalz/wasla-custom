<?php
/**
 * Feature Card Component
 * Card with checkmark icon, title, and description
 * 
 * @package Wasla
 * @subpackage Components/Molecules
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/card-feature',
    array(
        'title'       => __('بطاقة ميزة', 'wasla'),
        'description' => __('بطاقة تحتوي على علامة صح وعنوان ووصف', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"className":"wasla-card wasla-feature-card"} -->
<div class="wp-block-group wasla-card wasla-feature-card">
<!-- wp:paragraph {"className":"card-icon"} -->
<p class="card-icon">✅</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">ميزة رائعة</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">شرح الميزة وفوائدها للمستخدم بشكل واضح ومباشر.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
