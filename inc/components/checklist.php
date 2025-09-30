<?php
/**
 * Checklist Component
 * Interactive checklist for tasks or requirements
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/checklist',
    array(
        'title'       => __('قائمة تحقق', 'wasla'),
        'description' => __('قائمة مهام أو متطلبات', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">✓ قائمة التحقق</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"10px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background-color:#f8f9fa;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}}} -->
<p style="font-size:1rem">☐ العنصر الأول في القائمة</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0.5rem"} -->
<div style="height:0.5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"10px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background-color:#f8f9fa;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}}} -->
<p style="font-size:1rem">☐ العنصر الثاني في القائمة</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0.5rem"} -->
<div style="height:0.5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"10px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background-color:#f8f9fa;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}}} -->
<p style="font-size:1rem">☐ العنصر الثالث في القائمة</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
