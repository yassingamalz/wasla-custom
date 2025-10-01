<?php
/**
 * Introduction Box Component
 * Reusable article introduction with key points
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/introduction-box',
    array(
        'title'       => __('صندوق المقدمة', 'wasla'),
        'description' => __('مقدمة مع النقاط الرئيسية', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"className":"wasla-intro-box"} -->
<div class="wp-block-group wasla-intro-box">
<!-- wp:heading {"level":3} -->
<h3>📖 في هذا المقال</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wasla-lead-text"} -->
<p class="wasla-lead-text">مقدمة موجزة توضح محتوى المقال وما سيتعلمه القارئ.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"wasla-checklist"} -->
<ul class="wasla-checklist"><li><strong>النقطة الأولى:</strong> وصف مختصر</li><li><strong>النقطة الثانية:</strong> وصف مختصر</li><li><strong>النقطة الثالثة:</strong> وصف مختصر</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->'
    )
);
