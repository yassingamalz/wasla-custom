<?php
/**
 * FAQ Section Pattern
 * Complete FAQ section with multiple question/answer pairs
 * 
 * @package Wasla
 * @subpackage Components/Organisms
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/faq-section',
    array(
        'title'       => __('قسم الأسئلة الشائعة', 'wasla'),
        'description' => __('قسم كامل للأسئلة والأجوبة', 'wasla'),
        'categories'  => array('wasla-patterns'),
        'content'     => '<!-- wp:heading {"level":2,"className":"wasla-section-heading"} -->
<h2 class="wasla-section-heading">❓ الأسئلة الشائعة</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"wasla-faq-item"} -->
<div class="wp-block-group wasla-faq-item">
<!-- wp:heading {"level":3,"className":"wasla-faq-question"} -->
<h3 class="wasla-faq-question">❓ السؤال الأول هنا؟</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wasla-faq-answer"} -->
<p class="wasla-faq-answer">الإجابة التفصيلية على السؤال الأول مع توضيح كامل.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wasla-faq-item"} -->
<div class="wp-block-group wasla-faq-item">
<!-- wp:heading {"level":3,"className":"wasla-faq-question"} -->
<h3 class="wasla-faq-question">❓ السؤال الثاني هنا؟</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wasla-faq-answer"} -->
<p class="wasla-faq-answer">الإجابة التفصيلية على السؤال الثاني مع معلومات إضافية.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wasla-faq-item"} -->
<div class="wp-block-group wasla-faq-item">
<!-- wp:heading {"level":3,"className":"wasla-faq-question"} -->
<h3 class="wasla-faq-question">❓ السؤال الثالث هنا؟</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wasla-faq-answer"} -->
<p class="wasla-faq-answer">الإجابة التفصيلية على السؤال الثالث بشكل واضح ومفهوم.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->'
    )
);
