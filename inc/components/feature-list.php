<?php
/**
 * Feature List Component
 * Grid of features with icons
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/feature-list',
    array(
        'title'       => __('قائمة مميزات', 'wasla'),
        'description' => __('عرض المميزات بشكل منظم', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">✨ المميزات الرئيسية</h3>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"12px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group has-background" style="border-radius:12px;background-color:#f8f9fa;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem"}}} -->
<p class="has-text-align-center" style="font-size:2.5rem">🎯</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"textAlign":"center","style":{"color":{"text":"#000B58"}}} -->
<h4 class="has-text-align-center" style="color:#000B58">الميزة الأولى</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">وصف مختصر للميزة الأولى</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"12px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group has-background" style="border-radius:12px;background-color:#f8f9fa;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem"}}} -->
<p class="has-text-align-center" style="font-size:2.5rem">⚡</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"textAlign":"center","style":{"color":{"text":"#000B58"}}} -->
<h4 class="has-text-align-center" style="color:#000B58">الميزة الثانية</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">وصف مختصر للميزة الثانية</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"12px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group has-background" style="border-radius:12px;background-color:#f8f9fa;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem"}}} -->
<p class="has-text-align-center" style="font-size:2.5rem">🚀</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"textAlign":"center","style":{"color":{"text":"#000B58"}}} -->
<h4 class="has-text-align-center" style="color:#000B58">الميزة الثالثة</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">وصف مختصر للميزة الثالثة</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->'
    )
);
