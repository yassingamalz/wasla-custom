<?php
/**
 * Comparison Article Pattern
 * Side-by-side option comparisons with pros/cons
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/comparison-article',
    array(
        'title'       => __('مقال مقارنة', 'wasla'),
        'description' => __('قالب لمقارنة الخيارات والبدائل', 'wasla'),
        'categories'  => array('wasla-educational'),
        'content'     => '<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">⚖️ مقارنة شاملة</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>مقدمة تشرح أهمية المقارنة ومعايير الاختيار.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"wasla-comparison-columns"} -->
<div class="wp-block-columns wasla-comparison-columns">
<!-- wp:column {"className":"option-column","style":{"border":{"radius":"10px","width":"2px","color":"#006A67"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-column option-column" style="border-color:#006A67;border-width:2px;border-radius:10px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"#000B58"}}} -->
<h3 class="has-text-align-center" style="color:#000B58">الخيار الأول</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"option-icon","style":{"typography":{"fontSize":"3rem"}}} -->
<p class="has-text-align-center option-icon" style="font-size:3rem">🎓</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"className":"pros-title","style":{"color":{"text":"#006A67"}}} -->
<h4 class="pros-title" style="color:#006A67">✅ المميزات</h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><li>ميزة أولى مهمة</li><li>ميزة ثانية مهمة</li><li>ميزة ثالثة مهمة</li></ul>
<!-- /wp:list -->
<!-- wp:heading {"level":4,"className":"cons-title","style":{"color":{"text":"#c70000"}}} -->
<h4 class="cons-title" style="color:#c70000">❌ العيوب</h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><li>عيب أو نقطة يجب الانتباه لها</li><li>عيب آخر أو قيد</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->

<!-- wp:column {"className":"option-column","style":{"border":{"radius":"10px","width":"2px","color":"#006A67"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-column option-column" style="border-color:#006A67;border-width:2px;border-radius:10px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"#000B58"}}} -->
<h3 class="has-text-align-center" style="color:#000B58">الخيار الثاني</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"option-icon","style":{"typography":{"fontSize":"3rem"}}} -->
<p class="has-text-align-center option-icon" style="font-size:3rem">🏫</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"className":"pros-title","style":{"color":{"text":"#006A67"}}} -->
<h4 class="pros-title" style="color:#006A67">✅ المميزات</h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><li>ميزة أولى مهمة</li><li>ميزة ثانية مهمة</li><li>ميزة ثالثة مهمة</li></ul>
<!-- /wp:list -->
<!-- wp:heading {"level":4,"className":"cons-title","style":{"color":{"text":"#c70000"}}} -->
<h4 class="cons-title" style="color:#c70000">❌ العيوب</h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><li>عيب أو نقطة يجب الانتباه لها</li><li>عيب آخر أو قيد</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"final-recommendation","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px"},"color":{"background":"#FFF4B7"}}} -->
<div class="wp-block-group final-recommendation has-background" style="border-radius:10px;background-color:#FFF4B7;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">🏆 التوصية النهائية</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>خلاصة المقارنة وتوصية واضحة بناءً على معايير محددة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
