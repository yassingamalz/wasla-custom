<?php
/**
 * Tutorial/Walkthrough Pattern Component
 * Perfect for: mobile app tutorials, website guides, procedure explanations
 * 
 * Features:
 * - Step-by-step instructions with screenshots
 * - Numbered steps with visual progression
 * - Screenshot placeholders with annotations
 * - Tips and warnings
 * - Completion checklist
 * 
 * @package Wasla
 */

if (!defined('ABSPATH')) exit;

register_block_pattern(
    'wasla/tutorial-walkthrough',
    array(
        'title'       => __('شرح تطبيق أو موقع (Tutorial)', 'wasla'),
        'description' => __('قالب شامل لشرح استخدام تطبيق أو موقع خطوة بخطوة مع صور توضيحية', 'wasla'),
        'categories'  => array('wasla-educational'),
        'content'     => '<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">📱 دليل استخدام [اسم التطبيق/الموقع] - شرح شامل</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tutorial-introduction","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group tutorial-introduction has-background" style="border-radius:12px;background-color:#f0f8ff;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">📖 نظرة عامة على التطبيق</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.8"}}} -->
<p style="font-size:1.1rem;line-height:1.8">وصف مختصر عن التطبيق أو الموقع وما ستتعلمه من هذا الشرح.</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul><li>📍 <strong>المدة المتوقعة:</strong> 10-15 دقيقة</li><li>📍 <strong>مستوى الصعوبة:</strong> مبتدئ</li><li>📍 <strong>ما ستتعلمه:</strong> التسجيل، الاستخدام، المميزات الأساسية</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"requirements-box","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","left":{"color":"#006A67","width":"4px"}},"color":{"background":"#FFF4B7"}}} -->
<div class="wp-block-group requirements-box has-background" style="border-radius:8px;border-left-color:#006A67;border-left-width:4px;background-color:#FFF4B7;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:heading {"level":4,"style":{"color":{"text":"#000B58"}}} -->
<h4 style="color:#000B58">✅ المتطلبات قبل البدء</h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><li>هاتف ذكي (Android أو iOS)</li><li>اتصال بالإنترنت</li><li>رقم هاتف أو بريد إلكتروني</li><li>[أي متطلبات أخرى]</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">🎯 الخطوات التفصيلية</h2>
<!-- /wp:heading -->

<!-- ===== STEP 1 ===== -->
<!-- wp:group {"className":"tutorial-step","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"},"margin":{"bottom":"2rem"}},"border":{"radius":"12px","width":"2px"},"borderColor":"#006A67"}} -->
<div class="wp-block-group tutorial-step has-border-color" style="border-color:#006A67;border-width:2px;border-radius:12px;margin-bottom:2rem;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">الخطوة 1️⃣: تحميل التطبيق</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>شرح تفصيلي للخطوة الأولى مع جميع التفاصيل المهمة.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","width":"350px","className":"tutorial-screenshot"} -->
<figure class="wp-block-image aligncenter is-resized tutorial-screenshot">
<img src="https://placehold.co/600x1200/000B58/FFF4B7?text=لقطة+شاشة+١" alt="لقطة شاشة الخطوة 1" style="width:350px"/>
<figcaption><strong>صورة 1:</strong> شاشة تحميل التطبيق من المتجر</figcaption>
</figure>
<!-- /wp:image -->

<!-- wp:list {"ordered":true} -->
<ol><li>افتح متجر التطبيقات (Google Play أو App Store)</li><li>ابحث عن "[اسم التطبيق]"</li><li>اضغط على زر "تثبيت" أو "Get"</li><li>انتظر حتى ينتهي التحميل</li></ol>
<!-- /wp:list -->

<!-- wp:group {"className":"step-tip","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1rem","right":"1rem"}},"border":{"radius":"6px"},"color":{"background":"#e3f9f6"}}} -->
<div class="wp-block-group step-tip has-background" style="border-radius:6px;background-color:#e3f9f6;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">💡 نصيحة: تأكد من وجود مساحة كافية على هاتفك (حوالي 100 ميجابايت)</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- ===== STEP 2 ===== -->
<!-- wp:group {"className":"tutorial-step","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"},"margin":{"bottom":"2rem"}},"border":{"radius":"12px","width":"2px"},"borderColor":"#006A67"}} -->
<div class="wp-block-group tutorial-step has-border-color" style="border-color:#006A67;border-width:2px;border-radius:12px;margin-bottom:2rem;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">الخطوة 2️⃣: إنشاء حساب جديد</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>شرح عملية التسجيل وإنشاء الحساب بالتفصيل.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","width":"350px","className":"tutorial-screenshot"} -->
<figure class="wp-block-image aligncenter is-resized tutorial-screenshot">
<img src="https://placehold.co/600x1200/000B58/FFF4B7?text=لقطة+شاشة+٢" alt="لقطة شاشة الخطوة 2" style="width:350px"/>
<figcaption><strong>صورة 2:</strong> شاشة التسجيل وإنشاء الحساب</figcaption>
</figure>
<!-- /wp:image -->

<!-- wp:list {"ordered":true} -->
<ol><li>افتح التطبيق بعد التثبيت</li><li>اضغط على "تسجيل حساب جديد"</li><li>أدخل رقم هاتفك أو بريدك الإلكتروني</li><li>أدخل كلمة مرور قوية</li><li>اضغط على "تسجيل"</li></ol>
<!-- /wp:list -->

<!-- wp:group {"className":"step-warning","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1rem","right":"1rem"}},"border":{"radius":"6px"},"color":{"background":"#fff3cd"}}} -->
<div class="wp-block-group step-warning has-background" style="border-radius:6px;background-color:#fff3cd;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">⚠️ تنبيه: استخدم كلمة مرور قوية تحتوي على أحرف وأرقام ورموز</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- ===== STEP 3 ===== -->
<!-- wp:group {"className":"tutorial-step","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"},"margin":{"bottom":"2rem"}},"border":{"radius":"12px","width":"2px"},"borderColor":"#006A67"}} -->
<div class="wp-block-group tutorial-step has-border-color" style="border-color:#006A67;border-width:2px;border-radius:12px;margin-bottom:2rem;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">الخطوة 3️⃣: إعداد الملف الشخصي</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>شرح كيفية تخصيص الملف الشخصي والإعدادات الأساسية.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"width":"250px","className":"tutorial-screenshot"} -->
<figure class="wp-block-image is-resized tutorial-screenshot">
<img src="https://placehold.co/600x1200/000B58/FFF4B7?text=لقطة+شاشة+٣" alt="لقطة شاشة الخطوة 3" style="width:250px"/>
<figcaption>شاشة الملف الشخصي</figcaption>
</figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:list {"ordered":true} -->
<ol><li>اضغط على "الملف الشخصي"</li><li>أضف صورة شخصية</li><li>أدخل اسمك ومعلوماتك</li><li>اختر تفضيلاتك</li><li>احفظ التغييرات</li></ol>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">🎨 المميزات الأساسية</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"feature-section","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group feature-section has-background" style="border-radius:8px;background-color:#f8f9fa;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"}}} -->
<h3 style="color:#006A67">✨ ميزة 1: [اسم الميزة]</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح تفصيلي للميزة الأولى وكيفية استخدامها.</p>
<!-- /wp:paragraph -->
<!-- wp:image {"align":"center","width":"400px"} -->
<figure class="wp-block-image aligncenter is-resized">
<img src="https://placehold.co/800x600/000B58/FFF4B7?text=ميزة+١" alt="ميزة 1" style="width:400px"/>
</figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"feature-section","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group feature-section has-background" style="border-radius:8px;background-color:#f8f9fa;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"}}} -->
<h3 style="color:#006A67">✨ ميزة 2: [اسم الميزة]</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>شرح تفصيلي للميزة الثانية وكيفية الاستفادة منها.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">🔧 نصائح وحلول للمشاكل الشائعة</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"troubleshooting","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","left":{"color":"#dc3545","width":"4px"}},"color":{"background":"#fff5f5"}}} -->
<div class="wp-block-group troubleshooting has-background" style="border-radius:8px;border-left-color:#dc3545;border-left-width:4px;background-color:#fff5f5;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:heading {"level":4,"style":{"color":{"text":"#dc3545"}}} -->
<h4 style="color:#dc3545">⚠️ المشكلة: لا يعمل التطبيق بشكل صحيح</h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><strong>الحل:</strong></p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul><li>تأكد من تحديث التطبيق لآخر إصدار</li><li>أعد تشغيل هاتفك</li><li>امسح الذاكرة المؤقتة للتطبيق</li><li>أعد تثبيت التطبيق إذا استمرت المشكلة</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">✅ قائمة التحقق النهائية</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"checklist-box","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group checklist-box has-background" style="border-radius:8px;background-color:#f0f8ff;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:paragraph -->
<p><strong>تأكد من إكمال جميع الخطوات:</strong></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"checklist"} -->
<ul class="checklist"><li>☑️ تم تحميل التطبيق بنجاح</li><li>☑️ تم إنشاء الحساب وتفعيله</li><li>☑️ تم إعداد الملف الشخصي</li><li>☑️ تم التعرف على المميزات الأساسية</li><li>☑️ جاهز للاستخدام الكامل</li></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"wasla-action-box","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#000B58"}}} -->
<div class="wp-block-group wasla-action-box has-background" style="border-radius:12px;background-color:#000B58;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"#FFF4B7"}}} -->
<h3 class="has-text-align-center" style="color:#FFF4B7">🎉 مبروك! أنت الآن جاهز للبدء</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#ffffff"}}} -->
<p class="has-text-align-center" style="color:#ffffff">إذا واجهت أي مشكلة، لا تتردد في التواصل معنا أو ترك تعليق في الأسفل.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">🏷️ الكلمات المفتاحية</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"article-tags"} -->
<p class="article-tags"><em>شرح التطبيق، دليل الاستخدام، خطوة بخطوة، تعليمي، tutorial، guide</em></p>
<!-- /wp:paragraph -->'
    )
);
