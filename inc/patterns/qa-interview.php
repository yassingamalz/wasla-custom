<?php
/**
 * Q&A Interview Pattern
 * Question and answer format for interviews or detailed explanations
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/qa-interview',
    array(
        'title'       => __('مقابلة سؤال وجواب', 'wasla'),
        'description' => __('قالب لمقابلات وأسئلة تفصيلية', 'wasla'),
        'categories'  => array('wasla-educational'),
        'content'     => '<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">🎤 مقابلة حصرية</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>مقدمة:</strong> نقدم لكم مقابلة شاملة تجيب على أهم الأسئلة حول [الموضوع].</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"wasla-faq-item","style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.75rem","right":"1.75rem"}},"border":{"radius":"12px"},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group wasla-faq-item has-background" style="border-radius:12px;background-color:#f0f8ff;padding-top:1.25rem;padding-right:1.75rem;padding-bottom:1.25rem;padding-left:1.75rem">
<!-- wp:heading {"level":3,"className":"faq-question","style":{"color":{"text":"#000B58"},"typography":{"fontSize":"1.3rem"}}} -->
<h3 class="faq-question" style="color:#000B58;font-size:1.3rem">❓ السؤال الأول: [اكتب السؤال هنا]</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"faq-answer","style":{"typography":{"lineHeight":"1.8"}}} -->
<p class="faq-answer" style="line-height:1.8">إجابة تفصيلية ومعمقة على السؤال الأول. اشرح بوضوح مع تقديم أمثلة واقعية ونصائح عملية.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"wasla-faq-item","style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.75rem","right":"1.75rem"}},"border":{"radius":"12px"},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group wasla-faq-item has-background" style="border-radius:12px;background-color:#f0f8ff;padding-top:1.25rem;padding-right:1.75rem;padding-bottom:1.25rem;padding-left:1.75rem">
<!-- wp:heading {"level":3,"className":"faq-question","style":{"color":{"text":"#000B58"},"typography":{"fontSize":"1.3rem"}}} -->
<h3 class="faq-question" style="color:#000B58;font-size:1.3rem">❓ السؤال الثاني: [اكتب السؤال هنا]</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"faq-answer","style":{"typography":{"lineHeight":"1.8"}}} -->
<p class="faq-answer" style="line-height:1.8">إجابة تفصيلية على السؤال الثاني.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"wasla-faq-item","style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.75rem","right":"1.75rem"}},"border":{"radius":"12px"},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group wasla-faq-item has-background" style="border-radius:12px;background-color:#f0f8ff;padding-top:1.25rem;padding-right:1.75rem;padding-bottom:1.25rem;padding-left:1.75rem">
<!-- wp:heading {"level":3,"className":"faq-question","style":{"color":{"text":"#000B58"},"typography":{"fontSize":"1.3rem"}}} -->
<h3 class="faq-question" style="color:#000B58;font-size:1.3rem">❓ السؤال الثالث: [اكتب السؤال هنا]</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"faq-answer","style":{"typography":{"lineHeight":"1.8"}}} -->
<p class="faq-answer" style="line-height:1.8">إجابة تفصيلية على السؤال الثالث.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"wasla-tip-box","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#FFF4B7"}}} -->
<div class="wp-block-group wasla-tip-box has-background" style="border-radius:12px;background-color:#FFF4B7;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">💡 الخلاصة</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>ملخص سريع لأهم النقاط التي تم تناولها في المقابلة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
