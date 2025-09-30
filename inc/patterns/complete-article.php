<?php
/**
 * Complete Educational Article Pattern
 * Full-featured article template with all sections
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/complete-educational-article',
    array(
        'title'       => __('مقال تعليمي متكامل', 'wasla'),
        'description' => __('قالب مقال تعليمي احترافي بتصميم جذاب ومحتوى منظم', 'wasla'),
        'categories'  => array('wasla-educational'),
        'content'     => '<!-- wp:group {"className":"article-introduction","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group article-introduction has-background" style="border-radius:12px;background-color:#f0f8ff;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">📖 نظرة عامة على المقال</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.8"}}} -->
<p style="font-size:1.1rem;line-height:1.8">مقدمة تشويقية تجذب القارئ وتوضح أهمية الموضوع. اشرح باختصار ما سيتعلمه القارئ من هذا المقال والفائدة التي سيحصل عليها.</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul><li><strong>النقطة الرئيسية الأولى:</strong> وصف مختصر</li><li><strong>النقطة الرئيسية الثانية:</strong> وصف مختصر</li><li><strong>النقطة الرئيسية الثالثة:</strong> وصف مختصر</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">✨ العنوان الرئيسي الأول</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>ابدأ بفقرة شاملة تشرح الموضوع بوضوح. استخدم أمثلة واقعية وقصص ذات صلة لجعل المحتوى أكثر جاذبية.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"wide","className":"wasla-article-image"} -->
<figure class="wp-block-image alignwide wasla-article-image"><img src="https://placehold.co/1200x600/000B58/FFF4B7?text=صورة+توضيحية" alt="صورة توضيحية"/><figcaption>وصف الصورة - يساعد في SEO وإمكانية الوصول</figcaption></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"1.5rem"} -->
<div style="height:1.5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"}}} -->
<h3 style="color:#006A67">🎯 عنوان فرعي مهم</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>محتوى تفصيلي يشرح النقطة الفرعية. قسم المعلومات إلى فقرات قصيرة سهلة القراءة.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered":true} -->
<ol><li><strong>الخطوة الأولى:</strong> شرح تفصيلي مع أمثلة</li><li><strong>الخطوة الثانية:</strong> معلومات إضافية مع نصائح</li><li><strong>الخطوة الثالثة:</strong> إرشادات واضحة</li></ol>
<!-- /wp:list -->

<!-- wp:group {"className":"wasla-tip-box","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","left":{"color":"#006A67","width":"4px"}},"color":{"background":"#FFF4B7"}}} -->
<div class="wp-block-group wasla-tip-box has-background" style="border-radius:8px;border-left-color:#006A67;border-left-width:4px;background-color:#FFF4B7;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:paragraph {"className":"tip-icon-text","style":{"typography":{"fontWeight":"700"}}} -->
<p class="tip-icon-text" style="font-weight:700">💡 نصيحة ذهبية:</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>نصيحة عملية أو معلومة مهمة يجب على القارئ الانتباه إليها.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">📊 مقارنة أو جدول معلومات</h2>
<!-- /wp:heading -->

<!-- wp:table {"className":"wasla-comparison-table"} -->
<figure class="wp-block-table wasla-comparison-table"><table><thead><tr><th>الخيار</th><th>المميزات</th><th>مناسب لـ</th></tr></thead><tbody><tr><td><strong>الخيار الأول</strong></td><td>مميزة 1، مميزة 2، مميزة 3</td><td>الطلاب المبتدئين</td></tr><tr><td><strong>الخيار الثاني</strong></td><td>مميزة 1، مميزة 2، مميزة 3</td><td>الطلاب المتقدمين</td></tr><tr><td><strong>الخيار الثالث</strong></td><td>مميزة 1، مميزة 2، مميزة 3</td><td>جميع المستويات</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">❓ أسئلة شائعة</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"wasla-faq-item","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group wasla-faq-item has-background" style="border-radius:8px;background-color:#f8f9fa;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"className":"faq-question","style":{"color":{"text":"#000B58"},"typography":{"fontSize":"1.2rem"}}} -->
<h3 class="faq-question" style="color:#000B58;font-size:1.2rem">🔸 السؤال الأول المهم؟</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"faq-answer"} -->
<p class="faq-answer">إجابة شاملة وواضحة على السؤال. قدم معلومات دقيقة ومفيدة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"wasla-faq-item","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group wasla-faq-item has-background" style="border-radius:8px;background-color:#f8f9fa;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"className":"faq-question","style":{"color":{"text":"#000B58"},"typography":{"fontSize":"1.2rem"}}} -->
<h3 class="faq-question" style="color:#000B58;font-size:1.2rem">🔸 السؤال الثاني المهم؟</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"faq-answer"} -->
<p class="faq-answer">إجابة شاملة وواضحة على السؤال الثاني.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"wasla-action-box","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#000B58"}}} -->
<div class="wp-block-group wasla-action-box has-background" style="border-radius:12px;background-color:#000B58;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"textAlign":"center","className":"action-heading","style":{"color":{"text":"#FFF4B7"}}} -->
<h3 class="has-text-align-center action-heading" style="color:#FFF4B7">🚀 الخطوة التالية</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"action-description","style":{"color":{"text":"#ffffff"}}} -->
<p class="has-text-align-center action-description" style="color:#ffffff">دعوة للعمل تشجع القارئ على اتخاذ الخطوة التالية.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"wasla-cta-button","style":{"border":{"radius":"25px"},"color":{"background":"#006A67","text":"#ffffff"}}} -->
<div class="wp-block-button wasla-cta-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:25px;color:#ffffff;background-color:#006A67">اقرأ المزيد</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">🏷️ الكلمات المفتاحية</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"article-tags"} -->
<p class="article-tags"><em>التعليم، الطلاب، دون بوسكو، الثانوية العامة، تنسيق الجامعات، النجاح الأكاديمي</em></p>
<!-- /wp:paragraph -->'
    )
);
