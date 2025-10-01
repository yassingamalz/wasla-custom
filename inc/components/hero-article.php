<?php
/**
 * Article Hero Pattern
 * Hero section for article pages with title and meta info
 * 
 * @package Wasla
 * @subpackage Components/Organisms
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/hero-article',
    array(
        'title'       => __('مقدمة المقال', 'wasla'),
        'description' => __('قسم البطل للمقالات مع العنوان والمعلومات', 'wasla'),
        'categories'  => array('wasla-patterns'),
        'content'     => '<!-- wp:group {"className":"article-hero","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}}} -->
<div class="wp-block-group article-hero" style="padding-top:3rem;padding-bottom:3rem">
<!-- wp:paragraph {"className":"wasla-meta-text","style":{"elements":{"link":{"color":{"text":"#006A67"}}}}} -->
<p class="wasla-meta-text">📚 <a href="#">التصنيف</a> • 📅 تاريخ النشر • ⏱️ 5 دقائق قراءة</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"},"color":{"text":"#000B58"}}} -->
<h1 style="color:#000B58;font-size:2.5rem;font-weight:700">عنوان المقال الرئيسي هنا</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wasla-lead-text"} -->
<p class="wasla-lead-text">ملخص قصير وجذاب للمقال يشرح الموضوع الرئيسي بشكل مختصر ومشوق.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"wasla-divider"} -->
<hr class="wp-block-separator has-alpha-channel-opacity wasla-divider"/>
<!-- /wp:separator -->
</div>
<!-- /wp:group -->'
    )
);
