<?php
/**
 * Four Column Grid Component
 * Container for 4-column card layout
 * 
 * @package Wasla
 * @subpackage Components/Molecules
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/grid-4col',
    array(
        'title'       => __('شبكة أربعة أعمدة', 'wasla'),
        'description' => __('حاوية لعرض المحتوى في أربعة أعمدة', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"className":"wasla-card-grid-4"} -->
<div class="wp-block-group wasla-card-grid-4">
<!-- wp:group {"className":"wasla-card"} -->
<div class="wp-block-group wasla-card">
<!-- wp:heading {"level":3} -->
<h3>العمود 1</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>محتوى العمود الأول.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wasla-card"} -->
<div class="wp-block-group wasla-card">
<!-- wp:heading {"level":3} -->
<h3>العمود 2</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>محتوى العمود الثاني.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wasla-card"} -->
<div class="wp-block-group wasla-card">
<!-- wp:heading {"level":3} -->
<h3>العمود 3</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>محتوى العمود الثالث.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wasla-card"} -->
<div class="wp-block-group wasla-card">
<!-- wp:heading {"level":3} -->
<h3>العمود 4</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>محتوى العمود الرابع.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->'
    )
);
