# 📝 LIST STYLES REFERENCE - WASLA THEME

**Purpose**: Ready-to-use list templates for AI-assisted article creation

**Last Updated**: October 2, 2025  
**Total Styles**: 20 (mix of inline styles and CSS classes)

---

## 🎯 **QUICK REFERENCE TABLE**

| # | Style Name | Type | Icon/Marker | Best For |
|---|---|---|---|---|
| 1 | Standard UL | Default | Bullet | Basic lists |
| 2 | Standard OL | Default | Numbers | Ordered steps |
| 3 | Checklist | Class | Green ✓ | Requirements |
| 4 | Icon List | Class | Teal → | Key points |
| 5 | Numbered Circles | Class | Circles | Styled steps |
| 6 | Navy Checks | Inline | Navy ✓ | Completions |
| 7 | Star List | Inline | ⭐ | Featured items |
| 8 | Two-Column | Inline | Bullet | Compact display |
| 9 | Large Spaced | Inline | Bullet | Detailed items |
| 10 | Bold Items | Default | Bullet | Definitions |
| 11 | Nested List | Default | Bullet | Hierarchical |
| 12 | Highlighted BG | Inline | Bullet | Important lists |
| 13 | Emoji Numbers | Default | 1️⃣2️⃣3️⃣ | Fun steps |
| 14 | Cream Box | Inline | Bullet | Requirements |
| 15 | Process Steps | Default | 📝💳✅ | Procedures |
| 16 | Compact | Inline | Bullet | Small text |
| 17 | Pros | Default | ✅ | Advantages |
| 18 | Cons | Default | ❌ | Disadvantages |
| 19 | Features | Default | 🔹 | Feature list |
| 20 | Timeline | Default | Dates | Events |

---

## 📦 **STYLE CATALOG**

### **BASIC LISTS (1-5)**

---

#### **Style #1: Standard Unordered List**

**Use**: Basic bullet lists (60% of lists)

**Template**:
```
<!-- wp:list -->
<ul>
<li>العنصر الأول</li>
<li>العنصر الثاني</li>
<li>العنصر الثالث</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #2: Standard Ordered List**

**Use**: Numbered sequences, steps

**Template**:
```
<!-- wp:list {"ordered":true} -->
<ol>
<li>الخطوة الأولى</li>
<li>الخطوة الثانية</li>
<li>الخطوة الثالثة</li>
</ol>
<!-- /wp:list -->
```

---

#### **Style #3: Checklist (CSS Class)**

**Use**: Requirements, completed items

**Template**:
```
<!-- wp:list {"className":"wasla-checklist"} -->
<ul class="wasla-checklist">
<li>متطلب مكتمل</li>
<li>متطلب مكتمل</li>
<li>متطلب مكتمل</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #4: Icon List (CSS Class)**

**Use**: Key points, important items

**Template**:
```
<!-- wp:list {"className":"wasla-icon-list"} -->
<ul class="wasla-icon-list">
<li>نقطة مهمة</li>
<li>نقطة مهمة</li>
<li>نقطة مهمة</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #5: Numbered Circles (CSS Class)**

**Use**: Styled steps, procedures

**Template**:
```
<!-- wp:list {"className":"wasla-numbered-list"} -->
<ul class="wasla-numbered-list">
<li>الخطوة الأولى</li>
<li>الخطوة الثانية</li>
<li>الخطوة الثالثة</li>
</ul>
<!-- /wp:list -->
```

---

### **STYLED LISTS (6-10)**

---

#### **Style #6: Navy Checkmarks**

**Use**: Premium completions, verified items

**Template**:
```
<!-- wp:list {"style":{"spacing":{"padding":{"right":"2rem"}}},"className":"custom-check-navy"} -->
<ul class="custom-check-navy" style="padding-right:2rem">
<li style="position:relative;margin-bottom:0.75rem"><span style="position:absolute;right:0;color:#000B58;font-weight:700;font-size:1.2rem">✓</span>عنصر بعلامة صح</li>
<li style="position:relative;margin-bottom:0.75rem"><span style="position:absolute;right:0;color:#000B58;font-weight:700;font-size:1.2rem">✓</span>عنصر بعلامة صح</li>
<li style="position:relative;margin-bottom:0.75rem"><span style="position:absolute;right:0;color:#000B58;font-weight:700;font-size:1.2rem">✓</span>عنصر بعلامة صح</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #7: Star List**

**Use**: Featured items, premium content

**Template**:
```
<!-- wp:list {"style":{"spacing":{"padding":{"right":"2rem"}}}} -->
<ul style="padding-right:2rem">
<li style="position:relative;margin-bottom:0.75rem"><span style="position:absolute;right:0;color:#FFF4B7;font-size:1.2rem">⭐</span>عنصر مميز</li>
<li style="position:relative;margin-bottom:0.75rem"><span style="position:absolute;right:0;color:#FFF4B7;font-size:1.2rem">⭐</span>عنصر مميز</li>
<li style="position:relative;margin-bottom:0.75rem"><span style="position:absolute;right:0;color:#FFF4B7;font-size:1.2rem">⭐</span>عنصر مميز</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #8: Two-Column List**

**Use**: Compact display, side-by-side items

**Template**:
```
<!-- wp:list {"style":{"columns":2}} -->
<ul style="column-count:2;column-gap:2rem">
<li>العنصر الأول</li>
<li>العنصر الثاني</li>
<li>العنصر الثالث</li>
<li>العنصر الرابع</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #9: Large Spaced List**

**Use**: Detailed items, important points

**Template**:
```
<!-- wp:list {"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
<ul style="margin-top:1.5rem">
<li style="margin-bottom:1.5rem;line-height:1.8">عنصر بمسافة كبيرة</li>
<li style="margin-bottom:1.5rem;line-height:1.8">عنصر بمسافة كبيرة</li>
<li style="margin-bottom:1.5rem;line-height:1.8">عنصر بمسافة كبيرة</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #10: Bold Items**

**Use**: Definitions, key-value pairs

**Template**:
```
<!-- wp:list -->
<ul>
<li><strong>عنصر مهم:</strong> وصف العنصر</li>
<li><strong>عنصر مهم:</strong> وصف العنصر</li>
<li><strong>عنصر مهم:</strong> وصف العنصر</li>
</ul>
<!-- /wp:list -->
```

---

### **ADVANCED LISTS (11-15)**

---

#### **Style #11: Nested List**

**Use**: Hierarchical information

**Template**:
```
<!-- wp:list -->
<ul>
<li>العنصر الرئيسي الأول
<ul>
<li>عنصر فرعي</li>
<li>عنصر فرعي</li>
</ul>
</li>
<li>العنصر الرئيسي الثاني
<ul>
<li>عنصر فرعي</li>
<li>عنصر فرعي</li>
</ul>
</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #12: Highlighted Background**

**Use**: Important lists, featured content

**Template**:
```
<!-- wp:list {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#f0f8ff"},"border":{"radius":"8px"}}} -->
<ul style="background-color:#f0f8ff;border-radius:8px;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<li>عنصر بخلفية مضيئة</li>
<li>عنصر بخلفية مضيئة</li>
<li>عنصر بخلفية مضيئة</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #13: Emoji Numbered**

**Use**: Fun steps, casual guides

**Template**:
```
<!-- wp:list {"ordered":true} -->
<ol>
<li>1️⃣ الخطوة الأولى</li>
<li>2️⃣ الخطوة الثانية</li>
<li>3️⃣ الخطوة الثالثة</li>
</ol>
<!-- /wp:list -->
```

---

#### **Style #14: Requirements (Cream Box)**

**Use**: Required documents, must-haves

**Template**:
```
<!-- wp:list {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#FFF4B7"},"border":{"radius":"12px"}}} -->
<ul style="background-color:#FFF4B7;border-radius:12px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<li>المستند الأول مطلوب</li>
<li>المستند الثاني مطلوب</li>
<li>المستند الثالث مطلوب</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #15: Process Steps (Icons)**

**Use**: Step-by-step procedures

**Template**:
```
<!-- wp:list {"ordered":true} -->
<ol>
<li>📝 املأ الاستمارة</li>
<li>📋 قدم المستندات</li>
<li>💳 ادفع الرسوم</li>
<li>✅ احصل على التأكيد</li>
</ol>
<!-- /wp:list -->
```

---

### **SPECIAL PURPOSE (16-20)**

---

#### **Style #16: Compact List**

**Use**: Small text, secondary information

**Template**:
```
<!-- wp:list {"style":{"typography":{"fontSize":"0.875rem"}}} -->
<ul style="font-size:0.875rem">
<li>عنصر صغير</li>
<li>عنصر صغير</li>
<li>عنصر صغير</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #17: Pros List**

**Use**: Advantages, benefits

**Template**:
```
<!-- wp:list -->
<ul>
<li>✅ ميزة إيجابية</li>
<li>✅ ميزة إيجابية</li>
<li>✅ ميزة إيجابية</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #18: Cons List**

**Use**: Disadvantages, drawbacks

**Template**:
```
<!-- wp:list -->
<ul>
<li>❌ عيب سلبي</li>
<li>❌ عيب سلبي</li>
<li>❌ عيب سلبي</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #19: Feature List**

**Use**: Product/service features

**Template**:
```
<!-- wp:list -->
<ul>
<li><strong style="color:#006A67">🔹 الميزة الأولى:</strong> شرح مفصل عن هذه الميزة وفوائدها</li>
<li><strong style="color:#006A67">🔹 الميزة الثانية:</strong> شرح مفصل عن هذه الميزة وفوائدها</li>
<li><strong style="color:#006A67">🔹 الميزة الثالثة:</strong> شرح مفصل عن هذه الميزة وفوائدها</li>
</ul>
<!-- /wp:list -->
```

---

#### **Style #20: Timeline List**

**Use**: Events, schedules, dates

**Template**:
```
<!-- wp:list {"ordered":true} -->
<ol>
<li><strong>يوليو 2025:</strong> فتح باب التقديم</li>
<li><strong>أغسطس 2025:</strong> إجراء المقابلات</li>
<li><strong>سبتمبر 2025:</strong> إعلان النتائج</li>
<li><strong>أكتوبر 2025:</strong> بداية الدراسة</li>
</ol>
<!-- /wp:list -->
```

---

## 📋 **USAGE GUIDELINES**

### **Frequency Guidelines**

| Style | Frequency per Article |
|---|---|
| Standard UL/OL (#1-2) | 60-70% of lists |
| Checklist (#3) | 1-3 per article |
| Icon List (#4) | 1-2 per article |
| Pros/Cons (#17-18) | 1 pair per comparison |
| Features (#19) | 1-2 per product/service |
| Timeline (#20) | 1 per schedule |

### **Decision Tree**

```
Do you need a list?
  YES ↓

Is it ordered/sequential?
  YES → Style #2 (Ordered)
  NO ↓

Is it requirements/checklist?
  YES → Style #3 (Checklist)
  NO ↓

Is it pros/cons?
  YES → Style #17 or #18
  NO ↓

Is it features?
  YES → Style #19
  NO ↓

Is it timeline/dates?
  YES → Style #20
  NO ↓

DEFAULT → Style #1 (Standard UL)
```

---

## 🤖 **AI ASSISTANT INSTRUCTIONS**

1. **Use Style #1 for 60-70%** of lists
2. **Use Style #3 for requirements** and checklists
3. **Use Style #17-18 for comparisons** (pros/cons)
4. **Use Style #15 or #20** for step-by-step guides
5. **Keep list items concise** (1-2 sentences max)
6. **Use parallel structure** (same grammatical form)
7. **Limit to 3-7 items** per list (ideal: 5)

---

*Document Version: 1.0*  
*Last Updated: October 2, 2025*  
*Wasla Development Team*
