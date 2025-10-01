<?php
/**
 * Three Column Grid Component
 * Container for 3-column card layout
 * 
 * @package Wasla
 * @subpackage Components/Molecules
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/grid-3col',
    array(
        'title'       => __('شبكة ثلاثة أعمدة', 'wasla'),
        'description' => __('حاوية لعرض المحتوى في ثلاثة أعمدة', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"className":"wasla-card-grid-3"} -->
<div class="wp-block-group wasla-card-grid-3">
<!-- wp:group {"className":"wasla-card"} -->
<div class="wp-block-group wasla-card">
<!-- wp:heading {"level":3} -->
<h3>العمود الأول</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>محتوى العمود الأول.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wasla-card"} -->
<div class="wp-block-group wasla-card">
<!-- wp:heading {"level":3} -->
<h3>العمود الثاني</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>محتوى العمود الثاني.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wasla-card"} -->
<div class="wp-block-group wasla-card">
<!-- wp:heading {"level":3} -->
<h3>العمود الثالث</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>محتوى العمود الثالث.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->'
    )
);
