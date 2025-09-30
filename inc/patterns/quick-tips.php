<?php
/**
 * Quick Tips List Pattern
 * Numbered tips with professional styling
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/quick-tips',
    array(
        'title'       => __('قائمة نصائح سريعة', 'wasla'),
        'description' => __('قالب لعرض نصائح ومعلومات سريعة', 'wasla'),
        'categories'  => array('wasla-educational'),
        'content'     => '<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">💡 نصائح ذهبية للنجاح</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tip-item","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","left":{"color":"#FFF4B7","width":"4px"}},"color":{"background":"#f9f9f9"}}} -->
<div class="wp-block-group tip-item has-background" style="border-radius:8px;border-left-color:#FFF4B7;border-left-width:4px;background-color:#f9f9f9;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"},"typography":{"fontSize":"1.1rem"}}} -->
<h3 style="color:#006A67;font-size:1.1rem">1️⃣ النصيحة الأولى</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح مختصر وواضح للنصيحة الأولى مع سبب أهميتها.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0.5rem"} -->
<div style="height:0.5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"tip-item","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","left":{"color":"#FFF4B7","width":"4px"}},"color":{"background":"#f9f9f9"}}} -->
<div class="wp-block-group tip-item has-background" style="border-radius:8px;border-left-color:#FFF4B7;border-left-width:4px;background-color:#f9f9f9;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"},"typography":{"fontSize":"1.1rem"}}} -->
<h3 style="color:#006A67;font-size:1.1rem">2️⃣ النصيحة الثانية</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح مختصر وواضح للنصيحة الثانية.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0.5rem"} -->
<div style="height:0.5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"tip-item","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","left":{"color":"#FFF4B7","width":"4px"}},"color":{"background":"#f9f9f9"}}} -->
<div class="wp-block-group tip-item has-background" style="border-radius:8px;border-left-color:#FFF4B7;border-left-width:4px;background-color:#f9f9f9;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"},"typography":{"fontSize":"1.1rem"}}} -->
<h3 style="color:#006A67;font-size:1.1rem">3️⃣ النصيحة الثالثة</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح مختصر وواضح للنصيحة الثالثة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
