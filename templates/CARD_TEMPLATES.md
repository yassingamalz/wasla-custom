# 📝 CARD STYLES REFERENCE - WASLA THEME

**Purpose**: Ready-to-use card templates for AI-assisted article creation

**Last Updated**: October 2, 2025  
**Total Styles**: 20 (mix of component-based and inline styles)

---

## 🎯 **QUICK REFERENCE TABLE**

| # | Style Name | Type | Icon | Best For |
|---|---|---|---|---|
| 1 | Icon Card | Component | Custom | Features, services |
| 2 | Numbered Card | Component | Numbers | Steps, sequences |
| 3 | Feature Card | Component | ✓ | Product features |
| 4 | Simple Card | Inline | None | Basic content |
| 5 | Icon Card + Link | Component | Custom | Clickable content |
| 6 | Stat Card | Inline | None | Statistics |
| 7 | Image Card | Inline | Image | Visual content |
| 8 | Highlight Card | Inline | ⭐ | Important content |
| 9 | Service Card | Component | Custom | Services list |
| 10 | Price Card | Inline | None | Pricing tiers |
| 11 | Testimonial Card | Inline | " | Reviews |
| 12 | Timeline Card | Component | Date | Events timeline |
| 13 | Profile Card | Inline | Avatar | Team members |
| 14 | CTA Card | Inline | None | Call to action |
| 15 | Category Card | Component | Custom | Categories |
| 16 | Quick Fact Card | Inline | 💡 | Fun facts |
| 17 | Comparison Card | Inline | ✅❌ | Comparisons |
| 18 | Resource Card | Component | 📄 | Downloads |
| 19 | Event Card | Inline | 📅 | Events |
| 20 | Alert Card | Inline | ⚠️ | Urgent notices |

---

## 📦 **STYLE CATALOG**

### **BASIC CARDS (1-5)**

---

#### **Style #1: Icon Card**

**Use**: Features, services, benefits (most common)

**Template**:
```
<!-- wp:group {"className":"wasla-card wasla-icon-card"} -->
<div class="wp-block-group wasla-card wasla-icon-card">
<!-- wp:paragraph {"className":"card-icon"} -->
<p class="card-icon">📚</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">عنوان البطاقة</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">وصف مختصر للبطاقة</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #2: Numbered Card**

**Use**: Steps, sequences, procedures

**Template**:
```
<!-- wp:group {"className":"wasla-card wasla-numbered-card"} -->
<div class="wp-block-group wasla-card wasla-numbered-card">
<!-- wp:paragraph {"className":"card-number"} -->
<p class="card-number">01</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">الخطوة الأولى</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">شرح الخطوة الأولى</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #3: Feature Card**

**Use**: Product/service features

**Template**:
```
<!-- wp:group {"className":"wasla-card wasla-feature-card"} -->
<div class="wp-block-group wasla-card wasla-feature-card">
<!-- wp:paragraph {"className":"card-icon"} -->
<p class="card-icon">✓</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">ميزة رئيسية</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">وصف الميزة بالتفصيل</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #4: Simple Card**

**Use**: Basic content, text only

**Template**:
```
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px","width":"1px"},"color":{"background":"#ffffff"}},"borderColor":"#e0e0e0","className":"wasla-simple-card"} -->
<div class="wp-block-group wasla-simple-card has-border-color has-background" style="border-color:#e0e0e0;border-width:1px;border-radius:12px;background-color:#ffffff;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3} -->
<h3>عنوان بسيط</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>محتوى البطاقة البسيطة</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #5: Icon Card with Link**

**Use**: Clickable content, guides

**Template**:
```
<!-- wp:group {"className":"wasla-card wasla-icon-card"} -->
<div class="wp-block-group wasla-card wasla-icon-card">
<!-- wp:paragraph {"className":"card-icon"} -->
<p class="card-icon">🎓</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">دليل التقديم</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">دليل شامل لعملية التقديم</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="#">اقرأ المزيد ←</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

### **SPECIALIZED CARDS (6-10)**

---

#### **Style #6: Stat Card**

**Use**: Statistics, numbers, metrics

**Template**:
```
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#f0f8ff"}},"className":"wasla-stat-card"} -->
<div class="wp-block-group wasla-stat-card has-background" style="background-color:#f0f8ff;border-radius:12px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">85%</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>نسبة النجاح</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #7: Image Card**

**Use**: Visual content, portfolios

**Template**:
```
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#ffffff"}},"className":"wasla-image-card"} -->
<div class="wp-block-group wasla-image-card has-background" style="background-color:#ffffff;border-radius:12px;padding-top:0;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:image {"style":{"border":{"radius":"12px 12px 0 0"}}} -->
<figure class="wp-block-image" style="border-radius:12px 12px 0 0"><img src="image.jpg" alt=""/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3} -->
<h3>عنوان مع صورة</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>وصف البطاقة</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #8: Highlight Card**

**Use**: Featured content, special offers

**Template**:
```
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#FFF4B7"}},"className":"wasla-highlight-card"} -->
<div class="wp-block-group wasla-highlight-card has-background" style="background-color:#FFF4B7;border-radius:12px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"}}} -->
<h3 style="color:#000B58">⭐ بطاقة مميزة</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>محتوى مهم يستحق التمييز</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #9: Service Card**

**Use**: Services with features list

**Template**:
```
<!-- wp:group {"className":"wasla-card wasla-service-card"} -->
<div class="wp-block-group wasla-card wasla-service-card">
<!-- wp:paragraph {"className":"card-icon","style":{"typography":{"fontSize":"3rem"}}} -->
<p class="card-icon" style="font-size:3rem">💼</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">الخدمة الأولى</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">وصف الخدمة المقدمة بالتفصيل</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul>
<li>ميزة أولى</li>
<li>ميزة ثانية</li>
<li>ميزة ثالثة</li>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
```

---

#### **Style #10: Price Card**

**Use**: Pricing tiers, packages

**Template**:
```
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px","width":"2px"},"color":{"background":"#ffffff"}},"borderColor":"#006A67","className":"wasla-price-card"} -->
<div class="wp-block-group wasla-price-card has-border-color has-background" style="border-color:#006A67;border-width:2px;border-radius:12px;background-color:#ffffff;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"textAlign":"center"} -->
<h3 class="has-text-align-center">الباقة الأساسية</h3>
<!-- /wp:heading -->
<!-- wp:heading {"level":2,"textAlign":"center","style":{"color":{"text":"#006A67"}}} -->
<h2 class="has-text-align-center" style="color:#006A67">500 جنيه</h2>
<!-- /wp:heading -->
<!-- wp:list {"className":"wasla-checklist"} -->
<ul class="wasla-checklist">
<li>ميزة أولى</li>
<li>ميزة ثانية</li>
<li>ميزة ثالثة</li>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
```

---

### **SOCIAL PROOF CARDS (11-13)**

---

#### **Style #11: Testimonial Card**

**Use**: Customer reviews, testimonials

**Template**:
```
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#f8f9fa"}},"className":"wasla-testimonial-card"} -->
<div class="wp-block-group wasla-testimonial-card has-background" style="background-color:#f8f9fa;border-radius:12px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem"}}} -->
<p style="font-size:1.1rem">"شهادة العميل أو الطالب..."</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"color":{"text":"#666666"}}} -->
<p style="color:#666666"><strong>أحمد محمد</strong> - طالب ثانوي</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #12: Timeline Card**

**Use**: Events timeline, milestones

**Template**:
```
<!-- wp:group {"className":"wasla-card wasla-timeline-card"} -->
<div class="wp-block-group wasla-card wasla-timeline-card">
<!-- wp:paragraph {"className":"card-date","style":{"color":{"text":"#006A67"},"typography":{"fontSize":"0.875rem","fontWeight":"700"}}} -->
<p class="card-date" style="color:#006A67;font-size:0.875rem;font-weight:700">يوليو 2025</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">بداية التقديم</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">تفاصيل المرحلة</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #13: Profile Card**

**Use**: Team members, experts

**Template**:
```
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#ffffff"}},"className":"wasla-profile-card"} -->
<div class="wp-block-group wasla-profile-card has-background" style="background-color:#ffffff;border-radius:12px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:image {"width":80,"height":80,"style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image" style="width:80px;height:80px;border-radius:50%"><img src="avatar.jpg" alt=""/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"textAlign":"center"} -->
<h3 class="has-text-align-center">د. أحمد علي</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textAlign":"center"} -->
<p class="has-text-align-center">مستشار تعليمي</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

### **ADVANCED CARDS (14-20)**

---

#### **Style #14: CTA Card**

**Use**: Call to action, conversions

**Template**:
```
<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"linear-gradient(135deg, #000B58 0%, #006A67 100%)"}},"className":"wasla-cta-card"} -->
<div class="wp-block-group wasla-cta-card has-background" style="background:linear-gradient(135deg, #000B58 0%, #006A67 100%);border-radius:12px;padding-top:3rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem">
<!-- wp:heading {"level":2,"textAlign":"center","style":{"color":{"text":"#ffffff"}}} -->
<h2 class="has-text-align-center" style="color:#ffffff">ابدأ رحلتك التعليمية</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#FFF4B7"}}} -->
<p class="has-text-align-center" style="color:#FFF4B7">احصل على استشارة مجانية</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"accent","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-accent-background-color has-text-color has-background">احجز الآن</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
```

---

#### **Style #15: Category Card**

**Use**: Article categories, topics

**Template**:
```
<!-- wp:group {"className":"wasla-card wasla-category-card"} -->
<div class="wp-block-group wasla-card wasla-category-card">
<!-- wp:paragraph {"className":"card-icon","style":{"typography":{"fontSize":"2.5rem"}}} -->
<p class="card-icon" style="font-size:2.5rem">🏫</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">دون بوسكو</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"card-count","style":{"color":{"text":"#666666"}}} -->
<p class="card-count" style="color:#666666">15 مقال</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #16: Quick Fact Card**

**Use**: Fun facts, quick information

**Template**:
```
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"},"color":{"background":"#e3f2fd"}},"className":"wasla-fact-card"} -->
<div class="wp-block-group wasla-fact-card has-background" style="background-color:#e3f2fd;border-radius:8px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"color":{"text":"#000B58"}}} -->
<p style="color:#000B58;font-weight:700">💡 حقيقة سريعة</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>معلومة مثيرة ومفيدة</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #17: Comparison Card**

**Use**: Compare options, pros/cons

**Template**:
```
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px","width":"1px"},"color":{"background":"#ffffff"}},"borderColor":"#e0e0e0","className":"wasla-comparison-card"} -->
<div class="wp-block-group wasla-comparison-card has-border-color has-background" style="border-color:#e0e0e0;border-width:1px;border-radius:12px;background-color:#ffffff;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3} -->
<h3>الخيار أ</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul>
<li>✅ ميزة أولى</li>
<li>✅ ميزة ثانية</li>
<li>❌ ميزة غير متاحة</li>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
```

---

#### **Style #18: Resource Card**

**Use**: Downloadable content, PDFs

**Template**:
```
<!-- wp:group {"className":"wasla-card wasla-resource-card"} -->
<div class="wp-block-group wasla-card wasla-resource-card">
<!-- wp:paragraph {"className":"card-icon"} -->
<p class="card-icon">📄</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"card-title"} -->
<h3 class="card-title">دليل PDF</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"card-description"} -->
<p class="card-description">دليل شامل للتحميل</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">تحميل ⬇</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
```

---

#### **Style #19: Event Card**

**Use**: Events, dates, schedules

**Template**:
```
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px","leftWidth":"4px"},"color":{"background":"#ffffff"}},"borderColor":"#006A67","className":"wasla-event-card"} -->
<div class="wp-block-group wasla-event-card has-border-color has-background" style="border-color:#006A67;border-left-width:4px;border-radius:12px;background-color:#ffffff;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3} -->
<h3>ندوة تعليمية</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#666666"}}} -->
<p style="color:#666666">📅 15 أكتوبر 2025</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"color":{"text":"#666666"}}} -->
<p style="color:#666666">🕐 5:00 مساءً</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #20: Alert Card**

**Use**: Urgent notices, deadlines

**Template**:
```
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"},"color":{"background":"#fff3cd"}},"className":"wasla-alert-card"} -->
<div class="wp-block-group wasla-alert-card has-background" style="background-color:#fff3cd;border-radius:8px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"color":{"text":"#856404"}}} -->
<p style="color:#856404;font-weight:700">⚠️ تنبيه مهم</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>آخر موعد للتقديم: 30 يوليو</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

## 📋 **USAGE GUIDELINES**

### **Card Grid Layouts**

Cards work best in grids. Use these structures:

**2-Column Grid:**
```
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
[Card 1]
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
[Card 2]
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
```

**3-Column Grid:**
```
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">[Card 1]</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">[Card 2]</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">[Card 3]</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
```

### **Frequency Guidelines**

| Style | Frequency per Article |
|---|---|
| Icon Card (#1) | 3-6 in grid |
| Numbered Card (#2) | 3-5 for steps |
| Feature Card (#3) | 3-4 for features |
| CTA Card (#14) | 1 per article |
| Highlight Card (#8) | 1-2 per article |

### **Decision Tree**

```
Need to display multiple items?
  YES ↓

Is it steps/sequence?
  YES → Style #2 (Numbered Card)
  NO ↓

Is it features/benefits?
  YES → Style #1 or #3
  NO ↓

Is it statistics?
  YES → Style #6 (Stat Card)
  NO ↓

Is it testimonials?
  YES → Style #11
  NO ↓

DEFAULT → Style #1 (Icon Card)
```

---

## 🤖 **AI ASSISTANT INSTRUCTIONS**

1. **Use Icon Cards (#1) for 70%** of card layouts
2. **Always use grids** (2-col, 3-col, 4-col)
3. **Add icons** to make cards scannable
4. **Keep descriptions short** (2-3 sentences)
5. **Use CTA Card (#14)** at article end
6. **Match card type** to content purpose
7. **Maintain visual hierarchy** with headings

---

*Document Version: 1.0*  
*Last Updated: October 2, 2025*  
*Wasla Development Team*
