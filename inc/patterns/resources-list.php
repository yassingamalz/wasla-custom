<?php
/**
 * Resources List Pattern
 * List of educational resources or links
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/resources-list',
    array(
        'title'       => __('قائمة مصادر', 'wasla'),
        'description' => __('قالب لعرض المصادر التعليمية والروابط المفيدة', 'wasla'),
        'categories'  => array('wasla-educational'),
        'content'     => '<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">📚 مصادر إضافية مفيدة</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group has-background" style="border-radius:12px;background-color:#f8f9fa;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:heading {"level":4,"style":{"color":{"text":"#000B58"}}} -->
<h4 style="color:#000B58">📖 الكتب والمراجع</h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><li><strong>كتاب [العنوان]</strong> - وصف مختصر عن الكتاب</li><li><strong>مرجع [العنوان]</strong> - وصف مختصر عن المرجع</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group has-background" style="border-radius:12px;background-color:#f8f9fa;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:heading {"level":4,"style":{"color":{"text":"#000B58"}}} -->
<h4 style="color:#000B58">🌐 مواقع مفيدة</h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><li><a href="#">موقع [اسم الموقع]</a> - وصف الموقع</li><li><a href="#">منصة [اسم المنصة]</a> - وصف المنصة</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->'
    )
);
