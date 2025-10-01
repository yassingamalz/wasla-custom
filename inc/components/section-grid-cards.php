<?php
/**
 * Section with Card Grid Pattern
 * Section with heading and card grid layout
 * 
 * @package Wasla
 * @subpackage Components/Organisms
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/section-grid-cards',
    array(
        'title'       => __('قسم مع شبكة بطاقات', 'wasla'),
        'description' => __('قسم يحتوي على عنوان وشبكة بطاقات', 'wasla'),
        'categories'  => array('wasla-patterns'),
        'content'     => '<!-- wp:heading {"level":2,"className":"wasla-section-heading"} -->
<h2 class="wasla-section-heading">🎯 عنوان القسم</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wasla-lead-text"} -->
<p class="wasla-lead-text">وصف موجز للقسم يشرح محتوى البطاقات.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"wasla-card-grid-3"} -->
<div class="wp-block-group wasla-card-grid-3">
<!-- wp:group {"className":"wasla-card wasla-icon-card"} -->
<div class="wp-block-group wasla-card wasla-icon-card">
<!-- wp:paragraph {"className":"card-icon"} -->
<p class="card-icon">🎓</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">البطاقة الأولى</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">وصف البطاقة الأولى مع تفاصيل مفيدة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wasla-card wasla-icon-card"} -->
<div class="wp-block-group wasla-card wasla-icon-card">
<!-- wp:paragraph {"className":"card-icon"} -->
<p class="card-icon">📚</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">البطاقة الثانية</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">وصف البطاقة الثانية مع معلومات إضافية.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wasla-card wasla-icon-card"} -->
<div class="wp-block-group wasla-card wasla-icon-card">
<!-- wp:paragraph {"className":"card-icon"} -->
<p class="card-icon">✨</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">البطاقة الثالثة</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">وصف البطاقة الثالثة مع تفاصيل مهمة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->'
    )
);
