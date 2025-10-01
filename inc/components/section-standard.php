<?php
/**
 * Standard Section Pattern
 * Standard content section with heading and paragraphs
 * 
 * @package Wasla
 * @subpackage Components/Organisms
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/section-standard',
    array(
        'title'       => __('قسم قياسي', 'wasla'),
        'description' => __('قسم محتوى قياسي مع عنوان وفقرات', 'wasla'),
        'categories'  => array('wasla-patterns'),
        'content'     => '<!-- wp:heading {"level":2,"className":"wasla-section-heading"} -->
<h2 class="wasla-section-heading">✨ عنوان القسم</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wasla-lead-text"} -->
<p class="wasla-lead-text">فقرة افتتاحية مهمة تقدم نظرة عامة على محتوى القسم.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>فقرة تفصيلية تشرح المحتوى بشكل أعمق مع تقديم معلومات مفيدة للقارئ.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>فقرة إضافية للتوسع في الموضوع وتقديم المزيد من السياق.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->'
    )
);
