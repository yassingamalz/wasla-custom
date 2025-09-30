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
        'content'     => '<!-- wp:group {"className":"article-introduction","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group article-introduction has-background" style="border-radius:12px;background-color:#f0f8ff;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">📖 في هذا المقال</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.8"}}} -->
<p style="font-size:1.05rem;line-height:1.8">مقدمة موجزة توضح محتوى المقال وما سيتعلمه القارئ.</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul><li><strong>النقطة الأولى:</strong> وصف مختصر</li><li><strong>النقطة الثانية:</strong> وصف مختصر</li><li><strong>النقطة الثالثة:</strong> وصف مختصر</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->'
    )
);
