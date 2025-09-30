<?php
/**
 * Step-by-Step Guide Pattern
 * Perfect for tutorials and process explanations
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/step-by-step-guide',
    array(
        'title'       => __('دليل خطوة بخطوة', 'wasla'),
        'description' => __('قالب للشروحات والأدلة التفصيلية', 'wasla'),
        'categories'  => array('wasla-educational'),
        'content'     => '<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">📝 دليلك الشامل خطوة بخطوة</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>مقدمة تشرح الهدف من هذا الدليل والنتيجة المتوقعة بعد اتباع الخطوات.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"step-container","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px","left":{"color":"#006A67","width":"5px"}},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group step-container has-background" style="border-radius:10px;border-left-color:#006A67;border-left-width:5px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:heading {"level":3,"className":"step-number","style":{"color":{"text":"#000B58"}}} -->
<h3 class="step-number" style="color:#000B58">الخطوة 1️⃣: اسم الخطوة الأولى</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح تفصيلي للخطوة الأولى مع كل التفاصيل الضرورية.</p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"step-details"} -->
<ul class="step-details"><li>نقطة توضيحية أولى</li><li>نقطة توضيحية ثانية</li><li>نقطة توضيحية ثالثة</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"step-container","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px","left":{"color":"#006A67","width":"5px"}},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group step-container has-background" style="border-radius:10px;border-left-color:#006A67;border-left-width:5px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:heading {"level":3,"className":"step-number","style":{"color":{"text":"#000B58"}}} -->
<h3 class="step-number" style="color:#000B58">الخطوة 2️⃣: اسم الخطوة الثانية</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح تفصيلي للخطوة الثانية.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"step-container","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px","left":{"color":"#006A67","width":"5px"}},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group step-container has-background" style="border-radius:10px;border-left-color:#006A67;border-left-width:5px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:heading {"level":3,"className":"step-number","style":{"color":{"text":"#000B58"}}} -->
<h3 class="step-number" style="color:#000B58">الخطوة 3️⃣: اسم الخطوة الثالثة</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح تفصيلي للخطوة الثالثة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"completion-box","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px"},"color":{"background":"#006A67"}}} -->
<div class="wp-block-group completion-box has-background" style="border-radius:10px;background-color:#006A67;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.2rem","fontWeight":"600"},"color":{"text":"#ffffff"}}} -->
<p class="has-text-align-center" style="color:#ffffff;font-size:1.2rem;font-weight:600">🎉 تهانينا! أنت الآن جاهز للخطوة التالية</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
