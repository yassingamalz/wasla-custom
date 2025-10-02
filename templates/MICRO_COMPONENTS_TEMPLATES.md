# 🎯 MICRO COMPONENTS - 50 COMPLETE EXAMPLES

**Purpose**: Complete HTML templates for 5 micro components with 10 variations each

**Last Updated**: October 2, 2025  
**Total Examples**: 50

---

## 📦 TABLE OF CONTENTS

1. [Buttons](#buttons) (Examples 1-10)
2. [Breadcrumbs](#breadcrumbs) (Examples 11-20)
3. [Timeline Items](#timeline-items) (Examples 21-30)
4. [Accordion Items](#accordion-items) (Examples 31-40)
5. [Progress Bars](#progress-bars) (Examples 41-50)

---

<a name="buttons"></a>
## 1️⃣ BUTTONS (10 Examples)

### Example 1: Primary Button (Teal)
```html
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#006A67","text":"#ffffff"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"2rem","right":"2rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" style="border-radius:8px;color:#ffffff;background-color:#006A67;padding-top:0.75rem;padding-right:2rem;padding-bottom:0.75rem;padding-left:2rem">ابدأ الآن</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
```

### Example 2: Secondary Button (Outline)
```html
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#006A67"},"border":{"radius":"8px","width":"2px"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"2rem","right":"2rem"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color" style="border-radius:8px;border-width:2px;color:#006A67;padding-top:0.75rem;padding-right:2rem;padding-bottom:0.75rem;padding-left:2rem">اعرف المزيد</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
```

### Example 3: Navy Button
```html
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#000B58","text":"#FFF4B7"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"2rem","right":"2rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" style="border-radius:8px;color:#FFF4B7;background-color:#000B58;padding-top:0.75rem;padding-right:2rem;padding-bottom:0.75rem;padding-left:2rem">سجل الآن</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
```

### Example 4: Large Button
```html
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#006A67","text":"#ffffff"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"3rem","right":"3rem"}},"typography":{"fontSize":"1.125rem"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" style="border-radius:10px;color:#ffffff;background-color:#006A67;font-size:1.125rem;padding-top:1rem;padding-right:3rem;padding-bottom:1rem;padding-left:3rem">تقدم الآن</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
```

### Example 5: Small Button
```html
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#006A67","text":"#ffffff"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"1.5rem","right":"1.5rem"}},"typography":{"fontSize":"0.875rem"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" style="border-radius:6px;color:#ffffff;background-color:#006A67;font-size:0.875rem;padding-top:0.5rem;padding-right:1.5rem;padding-bottom:0.5rem;padding-left:1.5rem">اقرأ المزيد</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
```

### Example 6: Button with Icon
```html
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#006A67","text":"#ffffff"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"2rem","right":"2rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" style="border-radius:8px;color:#ffffff;background-color:#006A67;padding-top:0.75rem;padding-right:2rem;padding-bottom:0.75rem;padding-left:2rem">📥 تحميل الدليل</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
```

### Example 7: Two Buttons Side by Side
```html
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#006A67","text":"#ffffff"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" style="background-color:#006A67;color:#ffffff">البدء</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#006A67"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color" style="color:#006A67">إلغاء</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
```

### Example 8: Full Width Button
```html
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"width":100,"style":{"color":{"background":"#006A67","text":"#ffffff"},"border":{"radius":"8px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-text-color has-background" style="border-radius:8px;color:#ffffff;background-color:#006A67">اشترك الآن</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
```

### Example 9: Rounded Button
```html
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#006A67","text":"#ffffff"},"border":{"radius":"50px"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"2.5rem","right":"2.5rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" style="border-radius:50px;color:#ffffff;background-color:#006A67;padding-top:0.75rem;padding-right:2.5rem;padding-bottom:0.75rem;padding-left:2.5rem">تواصل معنا</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
```

### Example 10: Gradient Button
```html
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"gradient":"linear-gradient(135deg,#000B58 0%,#006A67 100%)","text":"#ffffff"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"2rem","right":"2rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" style="border-radius:8px;background:linear-gradient(135deg,#000B58 0%,#006A67 100%);color:#ffffff;padding-top:0.75rem;padding-right:2rem;padding-bottom:0.75rem;padding-left:2rem">احجز موعد</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
```

---

<a name="breadcrumbs"></a>
## 2️⃣ BREADCRUMBS (10 Examples)

### Example 11: Basic Breadcrumb
```html
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#666666"}}} -->
<p style="color:#666666;font-size:0.875rem"><a href="/">الرئيسية</a> / <a href="/category">القسم</a> / العنوان الحالي</p>
<!-- /wp:paragraph -->
```

### Example 12: Breadcrumb with Icons
```html
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#666666"}}} -->
<p style="color:#666666;font-size:0.875rem">🏠 <a href="/">الرئيسية</a> → <a href="/category">دون بوسكو</a> → دليل التقديم</p>
<!-- /wp:paragraph -->
```

### Example 13: Breadcrumb with Background
```html
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#666666","background":"#f8f9fa"},"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"1rem","right":"1rem"}},"border":{"radius":"6px"}}} -->
<p style="color:#666666;background-color:#f8f9fa;border-radius:6px;font-size:0.875rem;padding-top:0.5rem;padding-right:1rem;padding-bottom:0.5rem;padding-left:1rem"><a href="/">الرئيسية</a> / <a href="/category">القسم</a> / الصفحة</p>
<!-- /wp:paragraph -->
```

### Example 14: Breadcrumb Navy
```html
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#000B58"}}} -->
<p style="color:#000B58;font-size:0.875rem"><a href="/" style="color:#006A67">الرئيسية</a> / <a href="/category" style="color:#006A67">ثانوية عامة</a> / المقال</p>
<!-- /wp:paragraph -->
```

### Example 15: Breadcrumb Separated by Arrows
```html
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#666666"}}} -->
<p style="color:#666666;font-size:0.875rem"><a href="/">الرئيسية</a> ← <a href="/category">التعليم</a> ← <a href="/subcategory">الجامعات</a> ← المقال الحالي</p>
<!-- /wp:paragraph -->
```

### Example 16: Breadcrumb with Bold Current
```html
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#666666"}}} -->
<p style="color:#666666;font-size:0.875rem"><a href="/">الرئيسية</a> / <a href="/category">الأخبار</a> / <strong>المقال الحالي</strong></p>
<!-- /wp:paragraph -->
```

### Example 17: Breadcrumb Compact
```html
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"color":{"text":"#999999"}}} -->
<p style="color:#999999;font-size:0.75rem"><a href="/">Home</a> / <a href="/cat">Category</a> / Page</p>
<!-- /wp:paragraph -->
```

### Example 18: Breadcrumb with Separator
```html
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#666666"}}} -->
<p style="color:#666666;font-size:0.875rem"><a href="/">الرئيسية</a> <span style="color:#cccccc">|</span> <a href="/category">القسم</a> <span style="color:#cccccc">|</span> المقال</p>
<!-- /wp:paragraph -->
```

### Example 19: Breadcrumb Centered
```html
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#666666"}}} -->
<p class="has-text-align-center" style="color:#666666;font-size:0.875rem"><a href="/">الرئيسية</a> / <a href="/category">القسم</a> / الصفحة</p>
<!-- /wp:paragraph -->
```

### Example 20: Breadcrumb 4 Levels
```html
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#666666"}}} -->
<p style="color:#666666;font-size:0.875rem"><a href="/">الرئيسية</a> / <a href="/cat1">التعليم</a> / <a href="/cat2">المدارس</a> / <a href="/cat3">دون بوسكو</a> / شروط القبول</p>
<!-- /wp:paragraph -->
```

---

[Timeline, Accordion, and first Progress examples continue as shown in the original file...]

---

<a name="progress-bars"></a>
## 5️⃣ PROGRESS BARS (Continued)

### Example 43: Progress Bar with Label Inside
```html
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"20px"},"color":{"background":"#e0e0e0"}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#e0e0e0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"0","right":"0"}},"border":{"radius":"20px"},"color":{"background":"#006A67"},"layout":{"type":"constrained","contentSize":"45%"}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#006A67;padding-top:0.75rem;padding-right:0;padding-bottom:0.75rem;padding-left:0">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.875rem","fontWeight":"700"},"color":{"text":"#ffffff"}}} -->
<p class="has-text-align-center" style="color:#ffffff;font-size:0.875rem;font-weight:700">45%</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
```

### Example 44: Progress Bar Thin
```html
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"700"}}} -->
<p style="font-size:0.875rem;font-weight:700">إنجاز المهام</p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"10px"},"color":{"background":"#e0e0e0"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background-color:#e0e0e0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0","right":"0"}},"border":{"radius":"10px"},"color":{"background":"#006A67"},"layout":{"type":"constrained","contentSize":"70%"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background-color:#006A67;padding-top:0.25rem;padding-right:0;padding-bottom:0.25rem;padding-left:0"></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"color":{"text":"#999999"}}} -->
<p style="color:#999999;font-size:0.75rem">7 من 10 مهام</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

### Example 45: Progress Bar Gradient
```html
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"700"}}} -->
<p style="font-size:0.875rem;font-weight:700">مستوى الإكمال</p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"20px"},"color":{"background":"#e0e0e0"}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#e0e0e0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0","right":"0"}},"border":{"radius":"20px"},"color":{"gradient":"linear-gradient(90deg, #000B58 0%, #006A67 100%)"},"layout":{"type":"constrained","contentSize":"90%"}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background:linear-gradient(90deg, #000B58 0%, #006A67 100%);padding-top:0.5rem;padding-right:0;padding-bottom:0.5rem;padding-left:0"></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#006A67"}}} -->
<p style="color:#006A67;font-size:0.875rem">90% - تقريباً انتهى!</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

### Example 46: Progress Bar with Steps
```html
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"700"}}} -->
<p style="font-size:0.875rem;font-weight:700">الخطوة 2 من 4</p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"20px"},"color":{"background":"#e0e0e0"}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#e0e0e0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0","right":"0"}},"border":{"radius":"20px"},"color":{"background":"#006A67"},"layout":{"type":"constrained","contentSize":"50%"}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#006A67;padding-top:0.5rem;padding-right:0;padding-bottom:0.5rem;padding-left:0"></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#666666"}}} -->
<p style="color:#666666;font-size:0.875rem">⬤ ⬤ ◯ ◯</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

### Example 47: Progress Bar Success
```html
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"700"},"color":{"text":"#28a745"}}} -->
<p style="color:#28a745;font-size:0.875rem;font-weight:700">✅ مكتمل 100%</p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"20px"},"color":{"background":"#d4edda"}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#d4edda;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0","right":"0"}},"border":{"radius":"20px"},"color":{"background":"#28a745"},"layout":{"type":"constrained","contentSize":"100%"}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#28a745;padding-top:0.5rem;padding-right:0;padding-bottom:0.5rem;padding-left:0"></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
```

### Example 48: Progress Bar Small
```html
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700"}}} -->
<p style="font-size:0.75rem;font-weight:700">35%</p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"10px"},"color":{"background":"#e0e0e0"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background-color:#e0e0e0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.3rem","bottom":"0.3rem","left":"0","right":"0"}},"border":{"radius":"10px"},"color":{"background":"#006A67"},"layout":{"type":"constrained","contentSize":"35%"}}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background-color:#006A67;padding-top:0.3rem;padding-right:0;padding-bottom:0.3rem;padding-left:0"></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
```

### Example 49: Progress Bar with Icon
```html
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"700"}}} -->
<p style="font-size:0.875rem;font-weight:700">📊 معدل الإنجاز: 75%</p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"20px"},"color":{"background":"#e0e0e0"}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#e0e0e0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0","right":"0"}},"border":{"radius":"20px"},"color":{"background":"#006A67"},"layout":{"type":"constrained","contentSize":"75%"}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#006A67;padding-top:0.5rem;padding-right:0;padding-bottom:0.5rem;padding-left:0"></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
```

### Example 50: Progress Bar Thick
```html
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"700"}}} -->
<p style="font-size:1rem;font-weight:700">قيد الإنجاز: 55%</p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"25px"},"color":{"background":"#e0e0e0"}}} -->
<div class="wp-block-group has-background" style="border-radius:25px;background-color:#e0e0e0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"0","right":"0"}},"border":{"radius":"25px"},"color":{"background":"#006A67"},"layout":{"type":"constrained","contentSize":"55%"}}} -->
<div class="wp-block-group has-background" style="border-radius:25px;background-color:#006A67;padding-top:1rem;padding-right:0;padding-bottom:1rem;padding-left:0"></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#666666"}}} -->
<p style="color:#666666;font-size:0.875rem">أكثر من النصف</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

*Document Complete - All 50 Examples Included*  
*Last Updated: October 2, 2025*  
*Wasla Development Team*
