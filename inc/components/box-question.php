<?php
/**
 * Question Box Component
 * FAQ-style box with question icon
 * 
 * @package Wasla
 * @subpackage Components/Molecules
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/box-question',
    array(
        'title'       => __('صندوق سؤال', 'wasla'),
        'description' => __('صندوق للأسئلة الشائعة', 'wasla'),
        'categories'  => array('wasla-components'),
        'content'     => '<!-- wp:group {"className":"wasla-faq-item"} -->
<div class="wp-block-group wasla-faq-item">
<!-- wp:heading {"level":3,"className":"wasla-faq-question"} -->
<h3 class="wasla-faq-question">❓ السؤال هنا؟</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wasla-faq-answer"} -->
<p class="wasla-faq-answer">الإجابة التفصيلية على السؤال تكتب هنا بشكل واضح ومفهوم.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
