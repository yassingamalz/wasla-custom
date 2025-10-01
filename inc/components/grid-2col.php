<?php
/**
 * Two Column Grid Component
 * Container for 2-column card layout
 * 
 * @package Wasla
 * @subpackage Components/Molecules
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/grid-2col',
    array(
        'title'       => __('شبكة عمودين', 'wasla'),
        'description' => __('حاوية لعرض المحتوى في عمودين', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"className":"wasla-card-grid-2"} -->
<div class="wp-block-group wasla-card-grid-2">
<!-- wp:group {"className":"wasla-card"} -->
<div class="wp-block-group wasla-card">
<!-- wp:heading {"level":3} -->
<h3>العمود الأول</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>محتوى العمود الأول هنا.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wasla-card"} -->
<div class="wp-block-group wasla-card">
<!-- wp:heading {"level":3} -->
<h3>العمود الثاني</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>محتوى العمود الثاني هنا.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->'
    )
);
