<?php
/**
 * Case Study Pattern
 * Real-world example or success story template
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/case-study',
    array(
        'title'       => __('دراسة حالة', 'wasla'),
        'description' => __('قالب لعرض قصص النجاح والحالات الواقعية', 'wasla'),
        'categories'  => array('wasla-educational'),
        'content'     => '<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">📖 دراسة حالة: [عنوان قصة النجاح]</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"15px"},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group has-background" style="border-radius:15px;background-color:#f0f8ff;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">📌 ملخص الحالة</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><strong>الطالب:</strong> [اسم مستعار للحفاظ على الخصوصية]</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><strong>التحدي:</strong> وصف مختصر للمشكلة أو التحدي الذي واجهه</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><strong>الحل:</strong> الاستراتيجية المتبعة للتغلب على التحدي</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><strong>النتيجة:</strong> الإنجاز النهائي والنجاح المحقق</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"}}} -->
<h3 style="color:#006A67">🎯 التحدي</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>شرح تفصيلي للتحدي أو المشكلة التي واجهها الطالب، مع توضيح الظروف والعقبات.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"}}} -->
<h3 style="color:#006A67">💡 الحل</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>شرح الخطوات والاستراتيجيات التي تم اتباعها للتغلب على التحدي.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"}}} -->
<h3 style="color:#006A67">🏆 النتائج</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>النتائج الملموسة والإنجازات المحققة بعد تطبيق الحل.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#FFF4B7"}}} -->
<div class="wp-block-group has-background" style="border-radius:12px;background-color:#FFF4B7;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"1.1rem"}}} -->
<p style="font-size:1.1rem;font-weight:700">💬 نصيحة من الطالب:</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>"اقتباس ملهم من الطالب يشارك فيه نصيحته للآخرين"</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
