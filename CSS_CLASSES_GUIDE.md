# 🎨 CSS CLASSES USAGE GUIDE - WASLA COMPONENTS

## 📋 **QUICK REFERENCE**

This guide provides all CSS classes available in `article-components.css` for creating consistent, professional articles without using Gutenberg block patterns.

**Purpose**: Use these classes directly in HTML for ChatGPT/AI-generated articles.

---

## 🎯 **HOW TO USE**

### **For ChatGPT:**
Simply add the class name to your HTML elements:

```html
<div class="wasla-intro-box">
  <h2>مقدمة</h2>
  <p>نص المقدمة...</p>
</div>
```

### **For WordPress Editor:**
In the Code Editor, wrap content with class names.

---

## 📚 **AVAILABLE CLASSES**

### **1. HEADINGS**

#### **Section Heading (H2)**
```html
<h2 class="wasla-section-heading">📖 عنوان القسم</h2>
```
- Navy color (#000B58)
- Teal bottom border
- Large, bold text

#### **Sub-Section Heading (H3)**
```html
<h3 class="wasla-subsection-heading">✨ عنوان فرعي</h3>
```
- Secondary navy color
- Medium size

#### **Minor Heading (H4)**
```html
<h4 class="wasla-minor-heading">🎯 عنوان صغير</h4>
```
- Smaller heading for sub-points

---

### **2. TEXT STYLES**

#### **Lead Text (Intro paragraph)**
```html
<p class="wasla-lead-text">نص افتتاحي كبير وواضح...</p>
```
- Larger font size (1.15rem)
- Better line height

#### **Emphasized Text**
```html
<span class="wasla-emphasis">نص مهم</span>
```
- Bold, navy color

#### **Highlighted Text**
```html
<span class="wasla-highlight">نص مظلل</span>
```
- Cream background highlight

#### **Meta Text (Small info)**
```html
<span class="wasla-meta-text">آخر تحديث: 2025</span>
```
- Small, light gray text

---

### **3. BOXES (Info, Tips, Warnings)**

#### **Introduction Box**
```html
<div class="wasla-intro-box">
  <h2>📖 نظرة عامة</h2>
  <p>مقدمة المقال...</p>
</div>
```
- Light blue gradient background
- Teal right border
- Perfect for article intros

#### **Info Box (Blue)**
```html
<div class="wasla-info-box wasla-box">
  <div class="wasla-box-title">
    <span class="box-icon">ℹ️</span>
    معلومة مفيدة
  </div>
  <div class="wasla-box-content">
    <p>معلومات إضافية...</p>
  </div>
</div>
```

#### **Tip Box (Cream/Yellow)**
```html
<div class="wasla-tip-box wasla-box">
  <div class="wasla-box-title">
    <span class="box-icon">💡</span>
    نصيحة ذهبية
  </div>
  <div class="wasla-box-content">
    <p>نصيحة مفيدة...</p>
  </div>
</div>
```

#### **Warning Box (Orange)**
```html
<div class="wasla-warning-box wasla-box">
  <div class="wasla-box-title">
    <span class="box-icon">⚠️</span>
    تحذير مهم
  </div>
  <div class="wasla-box-content">
    <p>انتبه لهذا...</p>
  </div>
</div>
```

#### **Success Box (Green)**
```html
<div class="wasla-success-box wasla-box">
  <div class="wasla-box-title">
    <span class="box-icon">✅</span>
    نجاح
  </div>
  <div class="wasla-box-content">
    <p>تم بنجاح...</p>
  </div>
</div>
```

#### **Danger Box (Red)**
```html
<div class="wasla-danger-box wasla-box">
  <div class="wasla-box-title">
    <span class="box-icon">🚫</span>
    خطر
  </div>
  <div class="wasla-box-content">
    <p>تجنب هذا...</p>
  </div>
</div>
```

#### **Note Box (Gray)**
```html
<div class="wasla-note-box wasla-box">
  <div class="wasla-box-title">
    <span class="box-icon">📝</span>
    ملاحظة
  </div>
  <div class="wasla-box-content">
    <p>ملاحظة مهمة...</p>
  </div>
</div>
```

---

### **4. CARDS**

#### **Icon Card (3-column grid)**
```html
<div class="wasla-card-grid-3">
  <div class="wasla-card wasla-icon-card">
    <div class="card-icon">🎓</div>
    <h3 class="card-title">العنوان</h3>
    <p class="card-description">الوصف...</p>
  </div>
  
  <div class="wasla-card wasla-icon-card">
    <div class="card-icon">📚</div>
    <h3 class="card-title">العنوان</h3>
    <p class="card-description">الوصف...</p>
  </div>
  
  <div class="wasla-card wasla-icon-card">
    <div class="card-icon">✨</div>
    <h3 class="card-title">العنوان</h3>
    <p class="card-description">الوصف...</p>
  </div>
</div>
```

#### **Numbered Card (Steps)**
```html
<div class="wasla-card-grid-2">
  <div class="wasla-card wasla-numbered-card">
    <div class="card-number">1</div>
    <h3 class="card-title">الخطوة الأولى</h3>
    <p class="card-description">شرح الخطوة...</p>
  </div>
  
  <div class="wasla-card wasla-numbered-card">
    <div class="card-number">2</div>
    <h3 class="card-title">الخطوة الثانية</h3>
    <p class="card-description">شرح الخطوة...</p>
  </div>
</div>
```

#### **Feature Card (Checkmark)**
```html
<div class="wasla-card wasla-feature-card">
  <div class="card-icon">✅</div>
  <h3 class="card-title">ميزة رائعة</h3>
  <p class="card-description">شرح الميزة...</p>
</div>
```

---

### **5. LISTS**

#### **Checkmark List**
```html
<ul class="wasla-checklist">
  <li>النقطة الأولى</li>
  <li>النقطة الثانية</li>
  <li>النقطة الثالثة</li>
</ul>
```
- Green checkmarks automatically

#### **Icon List (Arrows)**
```html
<ul class="wasla-icon-list">
  <li>النقطة الأولى</li>
  <li>النقطة الثانية</li>
  <li>النقطة الثالثة</li>
</ul>
```
- Teal arrows automatically

#### **Styled Numbered List**
```html
<ul class="wasla-numbered-list">
  <li>النقطة الأولى</li>
  <li>النقطة الثانية</li>
  <li>النقطة الثالثة</li>
</ul>
```
- Circular numbered badges

---

### **6. BUTTONS**

#### **Primary Button**
```html
<a href="#" class="wasla-btn-primary">انقر هنا</a>
```
- Navy gradient background
- White text

#### **Secondary Button**
```html
<a href="#" class="wasla-btn-secondary">معرفة المزيد</a>
```
- White background
- Navy border and text

#### **CTA Button (Large)**
```html
<a href="#" class="wasla-btn-cta">ابدأ الآن 🚀</a>
```
- Teal gradient
- Larger size
- Perfect for call-to-action

---

### **7. CALL-TO-ACTION BOX**

```html
<div class="wasla-cta-box">
  <h2>🚀 الخطوة التالية</h2>
  <p>دعوة للعمل...</p>
  <a href="#" class="wasla-btn-cta">ابدأ الآن</a>
</div>
```
- Navy gradient background
- Centered text
- Perfect for article endings

---

### **8. FAQ SECTION**

```html
<div class="wasla-faq-item">
  <h3 class="wasla-faq-question">❓ السؤال هنا؟</h3>
  <p class="wasla-faq-answer">الإجابة هنا...</p>
</div>

<div class="wasla-faq-item">
  <h3 class="wasla-faq-question">❓ سؤال آخر؟</h3>
  <p class="wasla-faq-answer">إجابة أخرى...</p>
</div>
```

---

### **9. STATS/METRICS**

```html
<div class="wasla-stats-grid">
  <div class="wasla-stat-item">
    <span class="wasla-stat-number">500+</span>
    <span class="wasla-stat-label">طالب</span>
  </div>
  
  <div class="wasla-stat-item">
    <span class="wasla-stat-number">95%</span>
    <span class="wasla-stat-label">نسبة النجاح</span>
  </div>
  
  <div class="wasla-stat-item">
    <span class="wasla-stat-number">15</span>
    <span class="wasla-stat-label">عام خبرة</span>
  </div>
</div>
```

---

### **10. TABLES**

#### **Standard Table**
```html
<table class="wasla-table">
  <thead>
    <tr>
      <th>العمود 1</th>
      <th>العمود 2</th>
      <th>العمود 3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>بيانات 1</td>
      <td>بيانات 2</td>
      <td>بيانات 3</td>
    </tr>
  </tbody>
</table>
```

---

### **11. COMPARISON TABLE**

```html
<div class="wasla-comparison-table">
  <div class="wasla-comparison-column">
    <div class="wasla-comparison-header">
      <div class="wasla-comparison-title">الخيار الأول</div>
      <div class="wasla-comparison-price">مجاني</div>
    </div>
    <ul class="wasla-comparison-features">
      <li>ميزة 1</li>
      <li>ميزة 2</li>
      <li>ميزة 3</li>
    </ul>
  </div>
  
  <div class="wasla-comparison-column featured">
    <div class="wasla-comparison-header">
      <div class="wasla-comparison-title">الخيار الثاني</div>
      <div class="wasla-comparison-price">500 جنيه</div>
    </div>
    <ul class="wasla-comparison-features">
      <li>ميزة 1</li>
      <li>ميزة 2</li>
      <li>ميزة 3</li>
    </ul>
  </div>
</div>
```
- Add `featured` class to highlight best option

---

### **12. QUOTE/BLOCKQUOTE**

```html
<div class="wasla-quote">
  <p>نص الاقتباس هنا...</p>
  <span class="wasla-quote-author">اسم المؤلف</span>
</div>
```

---

### **13. STEP-BY-STEP GUIDE**

```html
<div class="wasla-steps-container">
  <div class="wasla-step">
    <div class="wasla-step-number">1</div>
    <div class="wasla-step-content">
      <h3 class="wasla-step-title">الخطوة الأولى</h3>
      <p class="wasla-step-description">شرح الخطوة...</p>
    </div>
  </div>
  
  <div class="wasla-step">
    <div class="wasla-step-number">2</div>
    <div class="wasla-step-content">
      <h3 class="wasla-step-title">الخطوة الثانية</h3>
      <p class="wasla-step-description">شرح الخطوة...</p>
    </div>
  </div>
</div>
```

---

### **14. TIMELINE**

```html
<div class="wasla-timeline">
  <div class="wasla-timeline-item">
    <div class="wasla-timeline-marker"></div>
    <div class="wasla-timeline-content">
      <div class="wasla-timeline-date">2025</div>
      <h3 class="wasla-timeline-title">الحدث</h3>
      <p class="wasla-timeline-description">الوصف...</p>
    </div>
  </div>
  
  <div class="wasla-timeline-item">
    <div class="wasla-timeline-marker"></div>
    <div class="wasla-timeline-content">
      <div class="wasla-timeline-date">2024</div>
      <h3 class="wasla-timeline-title">الحدث</h3>
      <p class="wasla-timeline-description">الوصف...</p>
    </div>
  </div>
</div>
```

---

### **15. ACCORDION/COLLAPSIBLE**

```html
<div class="wasla-accordion-item">
  <div class="wasla-accordion-header">
    <span class="wasla-accordion-title">العنوان القابل للطي</span>
    <span class="wasla-accordion-icon">▼</span>
  </div>
  <div class="wasla-accordion-content">
    <p>المحتوى المخفي...</p>
  </div>
</div>
```

---

### **16. BADGES/TAGS**

```html
<span class="wasla-badge wasla-badge-primary">أساسي</span>
<span class="wasla-badge wasla-badge-secondary">ثانوي</span>
<span class="wasla-badge wasla-badge-success">نجاح</span>
<span class="wasla-badge wasla-badge-warning">تحذير</span>
<span class="wasla-badge wasla-badge-danger">خطر</span>
<span class="wasla-badge wasla-badge-info">معلومات</span>
```

---

### **17. PROGRESS BAR**

```html
<div class="wasla-progress-container">
  <div class="wasla-progress-bar" style="width: 75%;">75%</div>
</div>
```
- Change `width` percentage to show progress

---

### **18. DIVIDERS/SPACERS**

#### **Gradient Divider**
```html
<hr class="wasla-divider">
```

#### **Light Divider**
```html
<hr class="wasla-divider-light">
```

#### **Spacers**
```html
<div class="wasla-spacer-xs"></div>  <!-- 0.5rem -->
<div class="wasla-spacer-sm"></div>  <!-- 1rem -->
<div class="wasla-spacer-md"></div>  <!-- 1.5rem -->
<div class="wasla-spacer-lg"></div>  <!-- 2rem -->
<div class="wasla-spacer-xl"></div>  <!-- 3rem -->
```

---

## 🎨 **GRID LAYOUTS**

### **Auto-fit Grid (Responsive)**
```html
<div class="wasla-card-grid">
  <!-- Cards auto-fit -->
</div>
```

### **2-Column Grid**
```html
<div class="wasla-card-grid-2">
  <!-- Always 2 columns -->
</div>
```

### **3-Column Grid**
```html
<div class="wasla-card-grid-3">
  <!-- Always 3 columns -->
</div>
```

### **4-Column Grid**
```html
<div class="wasla-card-grid-4">
  <!-- Always 4 columns -->
</div>
```

**Note**: All grids become 1 column on mobile automatically.

---

## 📱 **RESPONSIVE UTILITIES**

### **Hide on Mobile**
```html
<div class="wasla-hide-mobile">
  <!-- Hidden on screens < 768px -->
</div>
```

### **Hide on Desktop**
```html
<div class="wasla-hide-desktop">
  <!-- Hidden on screens > 768px -->
</div>
```

---

## 🎯 **ARTICLE TYPE EXAMPLES**

### **Don Bosco Application Guide Article**

```html
<!-- Introduction -->
<div class="wasla-intro-box">
  <h2>📖 نظرة عامة على التقديم في Don Bosco</h2>
  <p class="wasla-lead-text">دليلك الشامل لفهم عملية التقديم خطوة بخطوة...</p>
</div>

<div class="wasla-spacer-lg"></div>

<!-- Requirements -->
<h2 class="wasla-section-heading">📋 المتطلبات الأساسية</h2>
<ul class="wasla-checklist">
  <li>شهادة الإعدادية الأصلية</li>
  <li>صور شخصية 4×6</li>
  <li>بطاقة الرقم القومي</li>
</ul>

<div class="wasla-spacer-md"></div>

<!-- Important Tip -->
<div class="wasla-tip-box wasla-box">
  <div class="wasla-box-title">
    <span class="box-icon">💡</span>
    نصيحة ذهبية
  </div>
  <div class="wasla-box-content">
    <p>قدم مبكراً لضمان مكانك!</p>
  </div>
</div>

<div class="wasla-spacer-lg"></div>

<!-- Steps -->
<h2 class="wasla-section-heading">🎯 خطوات التقديم</h2>

<div class="wasla-steps-container">
  <div class="wasla-step">
    <div class="wasla-step-number">1</div>
    <div class="wasla-step-content">
      <h3 class="wasla-step-title">املأ استمارة التقديم</h3>
      <p class="wasla-step-description">احصل على الاستمارة من المدرسة...</p>
    </div>
  </div>
  
  <div class="wasla-step">
    <div class="wasla-step-number">2</div>
    <div class="wasla-step-content">
      <h3 class="wasla-step-title">قدم المستندات</h3>
      <p class="wasla-step-description">سلّم المستندات المطلوبة...</p>
    </div>
  </div>
</div>

<div class="wasla-spacer-lg"></div>

<!-- Comparison Table -->
<h2 class="wasla-section-heading">💰 المصروفات</h2>

<table class="wasla-table">
  <thead>
    <tr>
      <th>البرنامج</th>
      <th>المصروفات السنوية</th>
      <th>مدة الدراسة</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>الميكاترونكس</td>
      <td>10,000 جنيه</td>
      <td>3 سنوات</td>
    </tr>
    <tr>
      <td>البرمجة</td>
      <td>12,000 جنيه</td>
      <td>3 سنوات</td>
    </tr>
  </tbody>
</table>

<div class="wasla-spacer-lg"></div>

<!-- FAQ -->
<h2 class="wasla-section-heading">❓ الأسئلة الشائعة</h2>

<div class="wasla-faq-item">
  <h3 class="wasla-faq-question">❓ هل التقديم مفتوح طوال العام؟</h3>
  <p class="wasla-faq-answer">لا، التقديم يكون في فترة محددة من يوليو إلى أغسطس.</p>
</div>

<div class="wasla-faq-item">
  <h3 class="wasla-faq-question">❓ ما هو الحد الأدنى من الدرجات؟</h3>
  <p class="wasla-faq-answer">يشترط الحصول على 70% على الأقل في الشهادة الإعدادية.</p>
</div>

<div class="wasla-spacer-xl"></div>

<!-- Call to Action -->
<div class="wasla-cta-box">
  <h2>🚀 هل أنت مستعد للتقديم؟</h2>
  <p>لا تضيع الفرصة! ابدأ رحلتك التعليمية اليوم.</p>
  <a href="#" class="wasla-btn-cta">تقدم الآن</a>
</div>
```

---

### **Thanawya Amma Study Strategy Article**

```html
<!-- Introduction -->
<div class="wasla-intro-box">
  <h2>📖 استراتيجيات المذاكرة الفعالة</h2>
  <p class="wasla-lead-text">طرق مجربة لتحسين نتائجك الدراسية...</p>
</div>

<div class="wasla-spacer-lg"></div>

<!-- Study Methods Cards -->
<h2 class="wasla-section-heading">✨ طرق المذاكرة الأكثر فعالية</h2>

<div class="wasla-card-grid-3">
  <div class="wasla-card wasla-icon-card">
    <div class="card-icon">🧠</div>
    <h3 class="card-title">التعلم النشط</h3>
    <p class="card-description">شارك في المذاكرة بدلاً من القراءة فقط</p>
  </div>
  
  <div class="wasla-card wasla-icon-card">
    <div class="card-icon">📝</div>
    <h3 class="card-title">التلخيص</h3>
    <p class="card-description">اكتب ملخصات بكلماتك الخاصة</p>
  </div>
  
  <div class="wasla-card wasla-icon-card">
    <div class="card-icon">🔄</div>
    <h3 class="card-title">المراجعة المتكررة</h3>
    <p class="card-description">راجع المواد بشكل دوري</p>
  </div>
</div>

<div class="wasla-spacer-lg"></div>

<!-- Warning Box -->
<div class="wasla-warning-box wasla-box">
  <div class="wasla-box-title">
    <span class="box-icon">⚠️</span>
    تجنب هذه الأخطاء
  </div>
  <div class="wasla-box-content">
    <ul class="wasla-icon-list">
      <li>المذاكرة قبل الامتحان بيوم واحد</li>
      <li>الاعتماد على الحفظ فقط</li>
      <li>إهمال النوم والراحة</li>
    </ul>
  </div>
</div>

<div class="wasla-spacer-xl"></div>

<!-- Stats -->
<h2 class="wasla-section-heading">📊 إحصائيات مهمة</h2>

<div class="wasla-stats-grid">
  <div class="wasla-stat-item">
    <span class="wasla-stat-number">95%</span>
    <span class="wasla-stat-label">من الطلاب المنتظمين ينجحون</span>
  </div>
  
  <div class="wasla-stat-item">
    <span class="wasla-stat-number">8</span>
    <span class="wasla-stat-label">ساعات مذاكرة يومياً</span>
  </div>
  
  <div class="wasla-stat-item">
    <span class="wasla-stat-number">3</span>
    <span class="wasla-stat-label">أشهر للتحضير</span>
  </div>
</div>
```

---

## 💡 **CHATGPT PROMPT TEMPLATE**

Use this prompt with ChatGPT to generate articles with these classes:

```
Create an Arabic article about [TOPIC] using these Wasla CSS classes:

**Required Structure:**
1. Start with wasla-intro-box (introduction)
2. Use wasla-section-heading for main sections (H2)
3. Use wasla-subsection-heading for sub-sections (H3)
4. Add wasla-spacer-lg between major sections
5. Include at least one wasla-tip-box or wasla-info-box
6. Use wasla-checklist for bullet points
7. Add wasla-steps-container for step-by-step guides
8. Include wasla-faq-item for FAQ section
9. End with wasla-cta-box

**Available Classes:**
- Boxes: wasla-intro-box, wasla-info-box, wasla-tip-box, wasla-warning-box, wasla-success-box
- Cards: wasla-card, wasla-icon-card, wasla-numbered-card, wasla-feature-card
- Grids: wasla-card-grid-2, wasla-card-grid-3, wasla-card-grid-4
- Lists: wasla-checklist, wasla-icon-list, wasla-numbered-list
- Buttons: wasla-btn-primary, wasla-btn-secondary, wasla-btn-cta
- Others: wasla-stats-grid, wasla-table, wasla-timeline, wasla-quote

**Output:** Pure HTML with these classes (no WordPress blocks).
```

---

## ✅ **CHECKLIST FOR ARTICLE CREATION**

Before publishing, ensure:
- [ ] Used wasla-intro-box for introduction
- [ ] Used wasla-section-heading for all H2
- [ ] Added wasla-spacer-lg between sections
- [ ] Included at least one tip/info box
- [ ] Used wasla-checklist for bullet points
- [ ] Added wasla-cta-box at the end
- [ ] All classes start with `wasla-`
- [ ] Mobile-responsive (auto-handled by classes)
- [ ] Used emojis in headings (📖 ✨ 🎯 💡 ❓ 🚀)

---

*Last Updated: October 1, 2025*  
*Version: 1.0*  
*Wasla Development Team*
