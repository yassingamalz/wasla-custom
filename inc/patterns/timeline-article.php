<?php
/**
 * Timeline Article Pattern
 * Chronological events or process timeline
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/timeline-article',
    array(
        'title'       => __('مقال زمني (تايم لاين)', 'wasla'),
        'description' => __('قالب لعرض الأحداث أو العمليات بترتيب زمني', 'wasla'),
        'categories'  => array('wasla-educational'),
        'content'     => '<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">⏱️ الجدول الزمني</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>مقدمة توضح الخط الزمني والأحداث المهمة.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px","right":{"color":"#006A67","width":"4px"}},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;border-right-color:#006A67;border-right-width:4px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:heading {"level":4,"style":{"color":{"text":"#000B58"}}} -->
<h4 style="color:#000B58">📅 [التاريخ/المرحلة الأولى]</h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>وصف ما حدث في هذه المرحلة والأهمية.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px","right":{"color":"#006A67","width":"4px"}},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;border-right-color:#006A67;border-right-width:4px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:heading {"level":4,"style":{"color":{"text":"#000B58"}}} -->
<h4 style="color:#000B58">📅 [التاريخ/المرحلة الثانية]</h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>وصف ما حدث في هذه المرحلة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px","right":{"color":"#006A67","width":"4px"}},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;border-right-color:#006A67;border-right-width:4px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:heading {"level":4,"style":{"color":{"text":"#000B58"}}} -->
<h4 style="color:#000B58">📅 [التاريخ/المرحلة الثالثة]</h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>وصف ما حدث في هذه المرحلة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
