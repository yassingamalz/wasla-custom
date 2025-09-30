<?php
/**
 * Wasla Custom Block Patterns
 * 
 * Professional, engaging article templates for educational content
 * Designed to enhance reader engagement and content readability
 * 
 * @package Wasla
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Wasla Block Pattern Category
 */
function wasla_register_block_pattern_category() {
    if (function_exists('register_block_pattern_category')) {
        register_block_pattern_category(
            'wasla-educational',
            array(
                'label' => __('قوالب وصلة التعليمية', 'wasla')
            )
        );
    }
}
add_action('init', 'wasla_register_block_pattern_category');

/**
 * Register Block Patterns
 */
function wasla_register_block_patterns() {
    if (function_exists('register_block_pattern')) {
        
        // Pattern 1: Complete Educational Article
        register_block_pattern(
            'wasla/complete-educational-article',
            array(
                'title'       => __('مقال تعليمي متكامل - وصلة', 'wasla'),
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

<!-- wp:image {"align":"wide"} -->
<figure class="wp-block-image alignwide"><img src="https://placehold.co/1200x600/000B58/FFF4B7?text=صورة+توضيحية" alt="صورة توضيحية"/><figcaption>وصف الصورة - يساعد في SEO وإمكانية الوصول</figcaption></figure>
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

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","left":{"color":"#006A67","width":"4px"}},"color":{"background":"#FFF4B7"}}} -->
<div class="wp-block-group has-background" style="border-radius:8px;border-left-color:#006A67;border-left-width:4px;background-color:#FFF4B7;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
<p style="font-weight:700">💡 نصيحة ذهبية:</p>
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

<!-- wp:table -->
<figure class="wp-block-table"><table><thead><tr><th>الخيار</th><th>المميزات</th><th>مناسب لـ</th></tr></thead><tbody><tr><td><strong>الخيار الأول</strong></td><td>مميزة 1، مميزة 2، مميزة 3</td><td>الطلاب المبتدئين</td></tr><tr><td><strong>الخيار الثاني</strong></td><td>مميزة 1، مميزة 2، مميزة 3</td><td>الطلاب المتقدمين</td></tr><tr><td><strong>الخيار الثالث</strong></td><td>مميزة 1، مميزة 2، مميزة 3</td><td>جميع المستويات</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">❓ أسئلة شائعة</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group has-background" style="border-radius:8px;background-color:#f8f9fa;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"},"typography":{"fontSize":"1.2rem"}}} -->
<h3 style="color:#000B58;font-size:1.2rem">🔸 السؤال الأول المهم؟</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>إجابة شاملة وواضحة على السؤال. قدم معلومات دقيقة ومفيدة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group has-background" style="border-radius:8px;background-color:#f8f9fa;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"},"typography":{"fontSize":"1.2rem"}}} -->
<h3 style="color:#000B58;font-size:1.2rem">🔸 السؤال الثاني المهم؟</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>إجابة شاملة وواضحة على السؤال الثاني.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#000B58"}}} -->
<div class="wp-block-group has-background" style="border-radius:12px;background-color:#000B58;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"#FFF4B7"}}} -->
<h3 class="has-text-align-center" style="color:#FFF4B7">🚀 الخطوة التالية</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#ffffff"}}} -->
<p class="has-text-align-center" style="color:#ffffff">دعوة للعمل تشجع القارئ على اتخاذ الخطوة التالية.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":"25px"},"color":{"background":"#006A67","text":"#ffffff"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:25px;color:#ffffff;background-color:#006A67">اقرأ المزيد</a></div>
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

<!-- wp:paragraph -->
<p><em>التعليم، الطلاب، دون بوسكو، الثانوية العامة، تنسيق الجامعات، النجاح الأكاديمي</em></p>
<!-- /wp:paragraph -->'
            )
        );

        // Pattern 2: Step-by-Step Guide
        register_block_pattern(
            'wasla/step-by-step-guide',
            array(
                'title'       => __('دليل خطوة بخطوة - وصلة', 'wasla'),
                'description' => __('قالب للشروحات والأدلة التفصيلية', 'wasla'),
                'categories'  => array('wasla-educational'),
                'content'     => '<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">📝 دليلك الشامل خطوة بخطوة</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>مقدمة تشرح الهدف من هذا الدليل والنتيجة المتوقعة بعد اتباع الخطوات.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px","left":{"color":"#006A67","width":"5px"}},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;border-left-color:#006A67;border-left-width:5px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">الخطوة 1️⃣: اسم الخطوة الأولى</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح تفصيلي للخطوة الأولى مع كل التفاصيل الضرورية.</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul><li>نقطة توضيحية أولى</li><li>نقطة توضيحية ثانية</li><li>نقطة توضيحية ثالثة</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px","left":{"color":"#006A67","width":"5px"}},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;border-left-color:#006A67;border-left-width:5px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">الخطوة 2️⃣: اسم الخطوة الثانية</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح تفصيلي للخطوة الثانية.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px","left":{"color":"#006A67","width":"5px"}},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;border-left-color:#006A67;border-left-width:5px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">الخطوة 3️⃣: اسم الخطوة الثالثة</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح تفصيلي للخطوة الثالثة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px"},"color":{"background":"#006A67"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background-color:#006A67;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.2rem","fontWeight":"600"},"color":{"text":"#ffffff"}}} -->
<p class="has-text-align-center" style="color:#ffffff;font-size:1.2rem;font-weight:600">🎉 تهانينا! أنت الآن جاهز للخطوة التالية</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
            )
        );

        // Pattern 3: Comparison Article
        register_block_pattern(
            'wasla/comparison-article',
            array(
                'title'       => __('مقال مقارنة - وصلة', 'wasla'),
                'description' => __('قالب لمقارنة الخيارات والبدائل', 'wasla'),
                'categories'  => array('wasla-educational'),
                'content'     => '<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">⚖️ مقارنة شاملة</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>مقدمة تشرح أهمية المقارنة ومعايير الاختيار.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"style":{"border":{"radius":"10px","width":"2px","color":"#006A67"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-column" style="border-color:#006A67;border-width:2px;border-radius:10px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"#000B58"}}} -->
<h3 class="has-text-align-center" style="color:#000B58">الخيار الأول</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"3rem"}}} -->
<p class="has-text-align-center" style="font-size:3rem">🎓</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"style":{"color":{"text":"#006A67"}}} -->
<h4 style="color:#006A67">✅ المميزات</h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><li>ميزة أولى مهمة</li><li>ميزة ثانية مهمة</li><li>ميزة ثالثة مهمة</li></ul>
<!-- /wp:list -->
<!-- wp:heading {"level":4,"style":{"color":{"text":"#c70000"}}} -->
<h4 style="color:#c70000">❌ العيوب</h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><li>عيب أو نقطة يجب الانتباه لها</li><li>عيب آخر أو قيد</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"radius":"10px","width":"2px","color":"#006A67"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-column" style="border-color:#006A67;border-width:2px;border-radius:10px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"#000B58"}}} -->
<h3 class="has-text-align-center" style="color:#000B58">الخيار الثاني</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"3rem"}}} -->
<p class="has-text-align-center" style="font-size:3rem">🏫</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"style":{"color":{"text":"#006A67"}}} -->
<h4 style="color:#006A67">✅ المميزات</h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><li>ميزة أولى مهمة</li><li>ميزة ثانية مهمة</li><li>ميزة ثالثة مهمة</li></ul>
<!-- /wp:list -->
<!-- wp:heading {"level":4,"style":{"color":{"text":"#c70000"}}} -->
<h4 style="color:#c70000">❌ العيوب</h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><li>عيب أو نقطة يجب الانتباه لها</li><li>عيب آخر أو قيد</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"10px"},"color":{"background":"#FFF4B7"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background-color:#FFF4B7;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">🏆 التوصية النهائية</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>خلاصة المقارنة وتوصية واضحة بناءً على معايير محددة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
            )
        );

        // Pattern 4: Quick Tips List
        register_block_pattern(
            'wasla/quick-tips-list',
            array(
                'title'       => __('قائمة نصائح سريعة - وصلة', 'wasla'),
                'description' => __('قالب لعرض نصائح ومعلومات سريعة', 'wasla'),
                'categories'  => array('wasla-educational'),
                'content'     => '<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">💡 نصائح ذهبية للنجاح</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","left":{"color":"#FFF4B7","width":"4px"}},"color":{"background":"#f9f9f9"}}} -->
<div class="wp-block-group has-background" style="border-radius:8px;border-left-color:#FFF4B7;border-left-width:4px;background-color:#f9f9f9;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"},"typography":{"fontSize":"1.1rem"}}} -->
<h3 style="color:#006A67;font-size:1.1rem">1️⃣ النصيحة الأولى</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح مختصر وواضح للنصيحة الأولى مع سبب أهميتها.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0.5rem"} -->
<div style="height:0.5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","left":{"color":"#FFF4B7","width":"4px"}},"color":{"background":"#f9f9f9"}}} -->
<div class="wp-block-group has-background" style="border-radius:8px;border-left-color:#FFF4B7;border-left-width:4px;background-color:#f9f9f9;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"},"typography":{"fontSize":"1.1rem"}}} -->
<h3 style="color:#006A67;font-size:1.1rem">2️⃣ النصيحة الثانية</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح مختصر وواضح للنصيحة الثانية.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0.5rem"} -->
<div style="height:0.5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","left":{"color":"#FFF4B7","width":"4px"}},"color":{"background":"#f9f9f9"}}} -->
<div class="wp-block-group has-background" style="border-radius:8px;border-left-color:#FFF4B7;border-left-width:4px;background-color:#f9f9f9;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"},"typography":{"fontSize":"1.1rem"}}} -->
<h3 style="color:#006A67;font-size:1.1rem">3️⃣ النصيحة الثالثة</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح مختصر وواضح للنصيحة الثالثة.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
            )
        );
    }
}
add_action('init', 'wasla_register_block_patterns');