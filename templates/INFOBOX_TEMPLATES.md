# 📝 INFO BOX STYLES REFERENCE - WASLA THEME

**Purpose**: Ready-to-use info box templates for AI-assisted article creation

**Last Updated**: October 2, 2025  
**Total Styles**: 20 (mix of component-based and inline styles)

---

## 🎯 **QUICK REFERENCE TABLE**

| # | Style Name | Type | Color | Icon | Best For |
|---|---|---|---|---|---|
| 1 | Tip Box | Component | Cream | 💡 | Helpful advice |
| 2 | Warning Box | Component | Yellow | ⚠️ | Alerts |
| 3 | Success Box | Component | Green | ✅ | Achievements |
| 4 | Info Box | Component | Blue | ℹ️ | Information |
| 5 | Note Box | Component | Gray | 📝 | Notes |
| 6 | Danger Box | Component | Red | 🚫 | Serious warnings |
| 7 | Intro Box | Component | Light Blue | 📖 | Article intro |
| 8 | Question Box | Component | Gray | ❓ | FAQs |
| 9 | Inline Tip | Inline | Cream | 💡 | Quick tips |
| 10 | Inline Warning | Inline | Yellow | ⚠️ | Quick alerts |
| 11 | Inline Success | Inline | Green | ✅ | Quick wins |
| 12 | Inline Info | Inline | Blue | ℹ️ | Quick info |
| 13 | Tip with List | Component | Cream | 💡 | Multiple tips |
| 14 | Warning with List | Component | Yellow | ⚠️ | Multiple alerts |
| 15 | Requirements | Component | Cream | 📋 | Checklists |
| 16 | Steps Box | Component | Blue | 📝 | Procedures |
| 17 | Key Points | Component | Gray | 🔑 | Main points |
| 18 | Pro Tip | Component | Cream | ⭐ | Expert advice |
| 19 | Important Dates | Component | Yellow | 📅 | Timelines |
| 20 | Did You Know | Component | Blue | 💭 | Fun facts |

---

## 📦 **STYLE CATALOG**

### **BASIC INFO BOXES (1-8)**

---

#### **Style #1: Tip Box**

**Use**: Helpful advice, recommendations (most common)

**Template**:
```
<!-- wp:group {"className":"wasla-tip-box wasla-box"} -->
<div class="wp-block-group wasla-tip-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">💡</span> نصيحة ذهبية</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">نصيحة مفيدة للقارئ...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #2: Warning Box**

**Use**: Important alerts, cautions

**Template**:
```
<!-- wp:group {"className":"wasla-warning-box wasla-box"} -->
<div class="wp-block-group wasla-warning-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">⚠️</span> تحذير مهم</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">تحذير يجب الانتباه له...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #3: Success Box**

**Use**: Achievements, positive outcomes

**Template**:
```
<!-- wp:group {"className":"wasla-success-box wasla-box"} -->
<div class="wp-block-group wasla-success-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">✅</span> قصة نجاح</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">إنجاز أو نتيجة إيجابية...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #4: Info Box**

**Use**: General information, facts

**Template**:
```
<!-- wp:group {"className":"wasla-info-box wasla-box"} -->
<div class="wp-block-group wasla-info-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">ℹ️</span> معلومة مفيدة</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">معلومات عامة مهمة...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #5: Note Box**

**Use**: Additional notes, remarks

**Template**:
```
<!-- wp:group {"className":"wasla-note-box wasla-box"} -->
<div class="wp-block-group wasla-note-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">📝</span> ملاحظة</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">ملاحظة إضافية...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #6: Danger Box**

**Use**: Serious warnings, critical alerts

**Template**:
```
<!-- wp:group {"className":"wasla-danger-box wasla-box"} -->
<div class="wp-block-group wasla-danger-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">🚫</span> خطر</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">تحذير خطير يجب تجنبه...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #7: Introduction Box**

**Use**: Article overview, summary

**Template**:
```
<!-- wp:group {"className":"wasla-intro-box"} -->
<div class="wp-block-group wasla-intro-box">
<!-- wp:heading {"level":2} -->
<h2>📖 نظرة عامة</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>مقدمة شاملة للمقال...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #8: Question Box**

**Use**: FAQ-style questions

**Template**:
```
<!-- wp:group {"className":"wasla-note-box wasla-box"} -->
<div class="wp-block-group wasla-note-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">❓</span> سؤال شائع</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">إجابة على السؤال...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

### **INLINE INFO BOXES (9-12)**

---

#### **Style #9: Inline Tip**

**Use**: Quick tip without title

**Template**:
```
<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#FFF4B7"},"border":{"radius":"12px"}}} -->
<p style="background-color:#FFF4B7;border-radius:12px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">💡 نصيحة سريعة بدون عنوان</p>
<!-- /wp:paragraph -->
```

---

#### **Style #10: Inline Warning**

**Use**: Quick alert without title

**Template**:
```
<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#fff3cd"},"border":{"radius":"12px"}}} -->
<p style="background-color:#fff3cd;border-radius:12px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">⚠️ تحذير بسيط بدون عنوان</p>
<!-- /wp:paragraph -->
```

---

#### **Style #11: Inline Success**

**Use**: Quick success note

**Template**:
```
<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#d4edda"},"border":{"radius":"12px"}}} -->
<p style="background-color:#d4edda;border-radius:12px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">✅ تم بنجاح</p>
<!-- /wp:paragraph -->
```

---

#### **Style #12: Inline Info**

**Use**: Quick information note

**Template**:
```
<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#e3f2fd"},"border":{"radius":"12px"}}} -->
<p style="background-color:#e3f2fd;border-radius:12px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">ℹ️ معلومة بسيطة</p>
<!-- /wp:paragraph -->
```

---

### **ADVANCED INFO BOXES (13-20)**

---

#### **Style #13: Tip Box with List**

**Use**: Multiple tips at once

**Template**:
```
<!-- wp:group {"className":"wasla-tip-box wasla-box"} -->
<div class="wp-block-group wasla-tip-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">💡</span> نصائح متعددة</p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"wasla-box-content"} -->
<ul class="wasla-box-content">
<li>نصيحة أولى</li>
<li>نصيحة ثانية</li>
<li>نصيحة ثالثة</li>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
```

---

#### **Style #14: Warning Box with List**

**Use**: Multiple warnings

**Template**:
```
<!-- wp:group {"className":"wasla-warning-box wasla-box"} -->
<div class="wp-block-group wasla-warning-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">⚠️</span> تحذيرات مهمة</p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"wasla-box-content"} -->
<ul class="wasla-box-content">
<li>تحذير أول</li>
<li>تحذير ثاني</li>
<li>تحذير ثالث</li>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
```

---

#### **Style #15: Requirements Box**

**Use**: Checklists, required items

**Template**:
```
<!-- wp:group {"className":"wasla-tip-box wasla-box"} -->
<div class="wp-block-group wasla-tip-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">📋</span> المتطلبات</p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"wasla-checklist wasla-box-content"} -->
<ul class="wasla-checklist wasla-box-content">
<li>متطلب أول</li>
<li>متطلب ثاني</li>
<li>متطلب ثالث</li>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
```

---

#### **Style #16: Steps Box**

**Use**: Numbered procedures

**Template**:
```
<!-- wp:group {"className":"wasla-info-box wasla-box"} -->
<div class="wp-block-group wasla-info-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">📝</span> الخطوات</p>
<!-- /wp:paragraph -->
<!-- wp:list {"ordered":true,"className":"wasla-box-content"} -->
<ol class="wasla-box-content">
<li>الخطوة الأولى</li>
<li>الخطوة الثانية</li>
<li>الخطوة الثالثة</li>
</ol>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
```

---

#### **Style #17: Key Points Box**

**Use**: Main takeaways

**Template**:
```
<!-- wp:group {"className":"wasla-note-box wasla-box"} -->
<div class="wp-block-group wasla-note-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">🔑</span> نقاط رئيسية</p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"wasla-icon-list wasla-box-content"} -->
<ul class="wasla-icon-list wasla-box-content">
<li>نقطة مهمة</li>
<li>نقطة مهمة</li>
<li>نقطة مهمة</li>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
```

---

#### **Style #18: Pro Tip Box**

**Use**: Expert/advanced tips

**Template**:
```
<!-- wp:group {"className":"wasla-tip-box wasla-box"} -->
<div class="wp-block-group wasla-tip-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">⭐</span> نصيحة احترافية</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">نصيحة متقدمة للخبراء...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

#### **Style #19: Important Dates Box**

**Use**: Timelines, schedules

**Template**:
```
<!-- wp:group {"className":"wasla-warning-box wasla-box"} -->
<div class="wp-block-group wasla-warning-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">📅</span> مواعيد مهمة</p>
<!-- /wp:paragraph -->
<!-- wp:list {"ordered":true,"className":"wasla-box-content"} -->
<ol class="wasla-box-content">
<li><strong>يوليو 2025:</strong> بداية التقديم</li>
<li><strong>أغسطس 2025:</strong> نهاية التقديم</li>
<li><strong>سبتمبر 2025:</strong> إعلان النتائج</li>
</ol>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
```

---

#### **Style #20: Did You Know Box**

**Use**: Fun facts, interesting information

**Template**:
```
<!-- wp:group {"className":"wasla-info-box wasla-box"} -->
<div class="wp-block-group wasla-info-box wasla-box">
<!-- wp:paragraph {"className":"wasla-box-title"} -->
<p class="wasla-box-title"><span class="box-icon">💭</span> هل تعلم؟</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"wasla-box-content"} -->
<p class="wasla-box-content">معلومة مثيرة أو حقيقة غريبة...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

## 📋 **USAGE GUIDELINES**

### **Color System**

| Box Type | Background | Use Case |
|---|---|---|
| Tip (Cream) | #FFF4B7 | Positive advice |
| Warning (Yellow) | #fff3cd | Caution |
| Success (Green) | #d4edda | Achievements |
| Info (Blue) | #e3f2fd | Information |
| Note (Gray) | #f8f9fa | Neutral notes |
| Danger (Red) | #f8d7da | Critical alerts |

### **Frequency Guidelines**

| Style | Frequency per Article |
|---|---|
| Tip Box (#1) | 2-4 per article |
| Warning Box (#2) | 1-2 per article |
| Info Box (#4) | 2-3 per article |
| Inline Boxes (#9-12) | 1-3 per article |
| Advanced (#13-20) | 0-2 per article |

### **Decision Tree**

```
Need to highlight info?
  YES ↓

Is it advice/recommendation?
  YES → Style #1 (Tip Box)
  NO ↓

Is it a warning/caution?
  YES → Style #2 (Warning Box)
  NO ↓

Is it success/achievement?
  YES → Style #3 (Success Box)
  NO ↓

Is it general information?
  YES → Style #4 (Info Box)
  NO ↓

Is it critical/dangerous?
  YES → Style #6 (Danger Box)
  NO ↓

DEFAULT → Style #5 (Note Box)
```

---

## 🤖 **AI ASSISTANT INSTRUCTIONS**

1. **Use Tip Box (#1) for 60%** of info boxes
2. **Use Warning Box (#2)** for important alerts
3. **Use inline styles (#9-12)** for quick notes
4. **Add icons** to make boxes scannable
5. **Keep content concise** (2-4 sentences)
6. **Use lists (#13-14)** for multiple points
7. **Match box type to content** tone

---

*Document Version: 1.0*  
*Last Updated: October 2, 2025*  
*Wasla Development Team*
