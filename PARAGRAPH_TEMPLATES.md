# 📝 PARAGRAPH STYLES REFERENCE - WASLA THEME

**Purpose**: Ready-to-use paragraph templates for AI-assisted article creation

**Last Updated**: October 2, 2025  
**Total Styles**: 20 (10 inline + 10 component-based)

---

## 📚 **TABLE OF CONTENTS**

1. [Quick Reference Table](#quick-reference-table)
2. [Style Catalog](#style-catalog)
3. [Usage Guidelines](#usage-guidelines)
4. [Article Structure Examples](#article-structure-examples)

---

## 🎯 **QUICK REFERENCE TABLE**

| # | Style Name | Type | Background | Text Color | Best For |
|---|---|---|---|---|---|
| **1** | Standard | Inline | None | #2c3e50 | Body text (80%) |
| **2** | Large Lead | Inline | None | #555 | Opening paragraphs |
| **3** | Highlighted | Inline | #f0f8ff | Default | Important facts |
| **4** | Left Border | Inline | #f8f9fa | Default | Key points/dates |
| **5** | Emphasized | Inline | None | #000B58 | Requirements (bold) |
| **6** | Centered Quote | Inline | None | #555 | Quotes (italic) |
| **7** | Cream Box | Inline | #FFF4B7 | Default | Quick tips |
| **8** | Small Meta | Inline | None | #777 | Dates/updates |
| **9** | Navy Box | Inline | #000B58 | White | Instructions |
| **10** | Gradient Box | Inline | Gradient | White | Special info |
| **11** | Intro Box | Component | Light blue | Default | Article intro |
| **12** | Info Box | Component | Blue | Default | Information |
| **13** | Tip Box | Component | Cream | Default | Helpful tips |
| **14** | Warning Box | Component | Yellow | Default | Alerts |
| **15** | Success Box | Component | Green | Default | Achievements |
| **16** | Note Box | Component | Gray | Default | Additional notes |
| **17** | Quote Box | Component | Gray | Default | Blockquotes |
| **18** | CTA Box | Component | Navy | Cream | Call-to-action |
| **19** | FAQ Item | Component | Gray | Default | Q&A sections |
| **20** | Checklist | Component | None | Default | Lists/requirements |

---

## 📦 **STYLE CATALOG**

### **INLINE STYLES (1-10)**

#### **Style #1: Standard Paragraph**
```html
<!-- wp:paragraph -->
<p>النص العادي للمقال يوضع هنا...</p>
<!-- /wp:paragraph -->
```
**Use**: 70-80% of article content

---

#### **Style #2: Large Lead Paragraph**
```html
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"#555"}}} -->
<p style="font-size:1.125rem;color:#555">فقرة افتتاحية كبيرة...</p>
<!-- /wp:paragraph -->
```
**Use**: First paragraph after title

---

#### **Style #3: Highlighted Paragraph**
```html
<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#f0f8ff"},"border":{"radius":"8px"}}} -->
<p style="background-color:#f0f8ff;border-radius:8px;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">معلومة مهمة...</p>
<!-- /wp:paragraph -->
```
**Use**: Important standalone facts

---

#### **Style #4: Left Border Paragraph**
```html
<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#f8f9fa"},"border":{"left":{"color":"#006A67","width":"4px"},"radius":"8px"}}} -->
<p style="background-color:#f8f9fa;border-left-color:#006A67;border-left-width:4px;border-radius:8px;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">معلومة مهمة: التواريخ والمواعيد...</p>
<!-- /wp:paragraph -->
```
**Use**: Dates, deadlines, key points

---

#### **Style #5: Emphasized Paragraph**
```html
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"1.0625rem"},"color":{"text":"#000B58"}}} -->
<p style="font-weight:700;font-size:1.0625rem;color:#000B58">شروط مهمة: يجب توفر...</p>
<!-- /wp:paragraph -->
```
**Use**: Rules, requirements, conditions

---

#### **Style #6: Centered Quote**
```html
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem","fontStyle":"italic"},"color":{"text":"#555"}}} -->
<p class="has-text-align-center" style="font-size:1.125rem;font-style:italic;color:#555">"اقتباس ملهم أو قول مأثور"</p>
<!-- /wp:paragraph -->
```
**Use**: Quotes, inspirational text

---

#### **Style #7: Cream Box Paragraph**
```html
<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#FFF4B7"},"border":{"radius":"12px"}}} -->
<p style="background-color:#FFF4B7;border-radius:12px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">نصيحة سريعة...</p>
<!-- /wp:paragraph -->
```
**Use**: Quick tips without icon

---

#### **Style #8: Small Meta Paragraph**
```html
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#777"}}} -->
<p style="font-size:0.875rem;color:#777">ملاحظة: آخر تحديث...</p>
<!-- /wp:paragraph -->
```
**Use**: Updates, dates, small notes

---

#### **Style #9: Navy Box Paragraph**
```html
<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"color":{"background":"#000B58","text":"#ffffff"},"border":{"radius":"12px"},"typography":{"fontSize":"1.0625rem"}}} -->
<p style="background-color:#000B58;color:#ffffff;border-radius:12px;font-size:1.0625rem;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">تعليمات مهمة...</p>
<!-- /wp:paragraph -->
```
**Use**: Important instructions, step summaries

---

#### **Style #10: Gradient Paragraph**
```html
<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"color":{"text":"#ffffff","gradient":"linear-gradient(135deg, #000B58 0%, #006A67 100%)"},"border":{"radius":"12px"},"typography":{"fontSize":"1.0625rem","fontWeight":"500"}}} -->
<p style="background:linear-gradient(135deg, #000B58 0%, #006A67 100%);color:#ffffff;border-radius:12px;font-size:1.0625rem;font-weight:500;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">معلومة مميزة...</p>
<!-- /wp:paragraph -->
```
**Use**: Premium/featured content only

---

### **COMPONENT STYLES (11-20)**

#### **Style #11: Intro Box**
```html
<!-- wp:group {"className":"wasla-intro-box"} -->
<div class="wp-block-group wasla-intro-box">
<!-- wp:heading {"level":2} -->
<h2>📖 نظرة عامة</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>المقدمة الشاملة للمقال...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```
**Use**: Article introduction section

---

#### **Style #12: Info Box**
```html
<!-- wp:group {"className":"wasla-info-box wasla-box"} -->
<div class="wp-block-group wasla-info-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">ℹ️</span> معلومة مفيدة</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">محتوى المعلومة...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```
**Use**: General information blocks

---

#### **Style #13: Tip Box**
```html
<!-- wp:group {"className":"wasla-tip-box wasla-box"} -->
<div class="wp-block-group wasla-tip-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">💡</span> نصيحة ذهبية</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">النصيحة المفيدة...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```
**Use**: Helpful tips and advice

---

#### **Style #14: Warning Box**
```html
<!-- wp:group {"className":"wasla-warning-box wasla-box"} -->
<div class="wp-block-group wasla-warning-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">⚠️</span> تحذير مهم</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">التحذير...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```
**Use**: Important warnings and alerts

---

#### **Style #15: Success Box**
```html
<!-- wp:group {"className":"wasla-success-box wasla-box"} -->
<div class="wp-block-group wasla-success-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">✅</span> قصة نجاح</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">الإنجاز...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```
**Use**: Success stories, achievements

---

#### **Style #16: Note Box**
```html
<!-- wp:group {"className":"wasla-note-box wasla-box"} -->
<div class="wp-block-group wasla-note-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">📝</span> ملاحظة</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">الملاحظة...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```
**Use**: Additional notes and remarks

---

#### **Style #17: Quote Box**
```html
<!-- wp:group {"className":"wasla-quote"} -->
<div class="wp-block-group wasla-quote">
<!-- wp:paragraph -->
<p>الاقتباس الكامل هنا...</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-quote-author"} -->
<p class="wasla-quote-author">اسم المؤلف</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```
**Use**: Long quotes with attribution

---

#### **Style #18: CTA Box**
```html
<!-- wp:group {"className":"wasla-cta-box"} -->
<div class="wp-block-group wasla-cta-box">
<!-- wp:heading {"level":2,"textAlign":"center"} -->
<h2 class="has-text-align-center">هل أنت مستعد للبدء؟</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">دعوة للعمل...</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"wasla-btn-cta"} -->
<div class="wp-block-button wasla-btn-cta"><a class="wp-block-button__link wp-element-button" href="#">تقدم الآن</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
```
**Use**: Article ending, call-to-action

---

#### **Style #19: FAQ Item**
```html
<!-- wp:group {"className":"wasla-faq-item"} -->
<div class="wp-block-group wasla-faq-item">
<!-- wp:heading {"level":3,"className":"wasla-faq-question"} -->
<h3 class="wasla-faq-question">❓ السؤال؟</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"wasla-faq-answer"} -->
<p class="wasla-faq-answer">الإجابة...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```
**Use**: FAQ sections

---

#### **Style #20: Checklist**
```html
<!-- wp:list {"className":"wasla-checklist"} -->
<ul class="wasla-checklist">
<li>العنصر الأول</li>
<li>العنصر الثاني</li>
<li>العنصر الثالث</li>
</ul>
<!-- /wp:list -->
```
**Use**: Requirements, steps, checklists

---

## 📋 **USAGE GUIDELINES**

### **Article Structure Template**

```
[Title]
↓
Style #2 (Large Lead) - Opening paragraph
↓
Style #11 (Intro Box) - Article overview
↓
Style #1 (Standard) × 3-5 - Main content
↓
Style #13 (Tip Box) - Helpful advice
↓
Style #1 (Standard) × 2-3 - More content
↓
Style #4 (Left Border) - Important deadline
↓
Style #1 (Standard) × 2-3 - Explanation
↓
Style #20 (Checklist) - Requirements
↓
Style #19 (FAQ Item) × 3-5 - Common questions
↓
Style #18 (CTA Box) - Call to action
↓
Style #8 (Small Meta) - Last update info
```

### **Frequency Guidelines**

| Style | Frequency per Article |
|---|---|
| **Standard (#1)** | 60-80% of paragraphs |
| **Large Lead (#2)** | 1 time (opening) |
| **Intro Box (#11)** | 1 time (after title) |
| **Tip Box (#13)** | 1-3 times |
| **Warning Box (#14)** | 0-2 times |
| **Checklist (#20)** | 1-3 times |
| **FAQ (#19)** | 3-10 items |
| **CTA Box (#18)** | 1 time (ending) |
| **Small Meta (#8)** | 1 time (footer) |

### **Decision Tree**

```
Is it the opening paragraph?
  YES → Use Style #2 or #11
  NO ↓

Does it need special attention?
  YES ↓
    - Important info? → Style #3 or #12
    - Helpful tip? → Style #7 or #13
    - Warning? → Style #14
    - Success story? → Style #15
    - Quote? → Style #6 or #17
  NO ↓

Is it a deadline/date?
  YES → Style #4
  NO ↓

Is it the article end?
  YES → Style #18 (CTA)
  NO ↓

Is it meta information?
  YES → Style #8
  NO ↓

DEFAULT → Style #1 (Standard)
```

---

## 📝 **ARTICLE STRUCTURE EXAMPLES**

### **Example 1: Application Guide**

```html
<!-- Title (H1) -->
<h1>كيفية التقديم في Don Bosco 2026</h1>

<!-- Opening (Style #2) -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"#555"}}} -->
<p style="font-size:1.125rem;color:#555">معهد السالزيان من أفضل المعاهد الفنية...</p>
<!-- /wp:paragraph -->

<!-- Introduction (Style #11) -->
<!-- wp:group {"className":"wasla-intro-box"} -->
<div class="wp-block-group wasla-intro-box">
<h2>📖 نظرة عامة</h2>
<p>في هذا الدليل الشامل...</p>
</div>
<!-- /wp:group -->

<!-- Body Content (Style #1) × 3 -->
<!-- wp:paragraph -->
<p>معهد السالزيان يقدم...</p>
<!-- /wp:paragraph -->

<!-- Tip (Style #13) -->
<!-- wp:group {"className":"wasla-tip-box wasla-box"} -->
...
<!-- /wp:group -->

<!-- Requirements (Style #20) -->
<!-- wp:list {"className":"wasla-checklist"} -->
<ul class="wasla-checklist">
<li>شهادة الميلاد</li>
<li>الشهادة الإعدادية</li>
</ul>
<!-- /wp:list -->

<!-- FAQ (Style #19) × 3 -->
<!-- wp:group {"className":"wasla-faq-item"} -->
...
<!-- /wp:group -->

<!-- CTA (Style #18) -->
<!-- wp:group {"className":"wasla-cta-box"} -->
...
<!-- /wp:group -->

<!-- Meta (Style #8) -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"color":{"text":"#777"}}} -->
<p style="font-size:0.875rem;color:#777">آخر تحديث: أكتوبر 2025</p>
<!-- /wp:paragraph -->
```

---

### **Example 2: Study Strategy Article**

```html
<!-- Title -->
<h1>استراتيجيات النجاح في الثانوية العامة</h1>

<!-- Opening + Intro -->
Style #2 + Style #11

<!-- Main Content with Tips -->
Style #1 × 2
Style #13 (Tip Box)
Style #1 × 2
Style #14 (Warning Box)
Style #1 × 3

<!-- Success Stories -->
Style #15 (Success Box) × 2

<!-- Checklist -->
Style #20 (Study Plan Checklist)

<!-- FAQ -->
Style #19 × 5

<!-- CTA + Meta -->
Style #18 + Style #8
```

---

## 🤖 **AI ASSISTANT INSTRUCTIONS**

When creating articles, follow these rules:

1. **Always start with Style #2 or #11** for the introduction
2. **Use Style #1 for 70-80%** of body paragraphs
3. **Add 2-4 special boxes** (Styles #12-#17) throughout the article
4. **Include 1 checklist** (Style #20) for requirements/steps
5. **Add FAQ section** (Style #19 × 3-10) before ending
6. **End with CTA** (Style #18) + meta info (Style #8)
7. **Add spacers** between major sections
8. **Never use emojis in Style #18** (CTA Box)

---

*Document Version: 2.0*  
*Last Updated: October 2, 2025*  
*Wasla Development Team*
