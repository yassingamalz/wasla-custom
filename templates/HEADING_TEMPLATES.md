# 📝 HEADING STYLES REFERENCE - WASLA THEME

**Purpose**: Ready-to-use heading templates for AI-assisted article creation

**Last Updated**: October 2, 2025  
**Total Styles**: 20 (mix of inline styles and CSS classes)

---

## 🎯 **QUICK REFERENCE TABLE**

| # | Style Name | Level | Color | Background | Best For |
|---|---|---|---|---|---|
| 1 | Standard H2 | H2 | Default | None | Main sections |
| 2 | Standard H3 | H3 | Default | None | Sub-sections |
| 3 | Standard H4 | H4 | Default | None | Minor headings |
| 4 | Navy Underline H2 | H2 | #000B58 | None | Important sections |
| 5 | Centered H2 | H2 | Default | None | Featured sections |
| 6 | Large Display H2 | H2 | #000B58 | None | Hero headings |
| 7 | Teal H3 | H3 | #006A67 | None | Highlighted subsections |
| 8 | Numbered H2 | H2 | Default | None | Step-by-step guides |
| 9 | Background H2 | H2 | #000B58 | #f0f8ff | Featured sections |
| 10 | Small H3 | H3 | Default | None | Compact headings |
| 11 | Section Class H2 | H2 | #000B58 | None | Standard sections |
| 12 | Subsection Class H3 | H3 | #003161 | None | Standard subsections |
| 13 | Minor Class H4 | H4 | #003161 | None | Standard minor |
| 14 | Navy Box H2 | H2 | #FFF4B7 | #000B58 | Special sections |
| 15 | Gradient H2 | H2 | White | Gradient | Premium sections |
| 16 | Left Border H2 | H2 | Default | None | Emphasized sections |
| 17 | FAQ H3 | H3 | #000B58 | None | Questions |
| 18 | Step Check H3 | H3 | #006A67 | None | Completed steps |
| 19 | Uppercase H2 | H2 | #000B58 | None | Special emphasis |
| 20 | Highlight H2 | H2 | #000B58 | #FFF4B7 | Featured content |

---

## 📦 **STYLE CATALOG**

### **BASIC HEADINGS (1-3)**

---

#### **Style #1: Standard H2**

**Use**: Main section headings (70% of H2s)

**Template**:
```
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">📚 القسم الرئيسي</h2>
<!-- /wp:heading -->
```

---

#### **Style #2: Standard H3**

**Use**: Sub-section headings (70% of H3s)

**Template**:
```
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">✨ القسم الفرعي</h3>
<!-- /wp:heading -->
```

---

#### **Style #3: Standard H4**

**Use**: Minor headings and sub-points

**Template**:
```
<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">🎯 عنوان صغير</h4>
<!-- /wp:heading -->
```

---

### **STYLED HEADINGS (4-10)**

---

#### **Style #4: Navy Underline H2**

**Use**: Important main sections with visual emphasis

**Template**:
```
<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"},"typography":{"fontSize":"2rem","fontWeight":"700"},"spacing":{"padding":{"bottom":"0.5rem"}}},"className":"has-bottom-border"} -->
<h2 class="wp-block-heading has-bottom-border" style="color:#000B58;font-size:2rem;font-weight:700;padding-bottom:0.5rem;border-bottom:3px solid #006A67">📖 عنوان بخط تحت</h2>
<!-- /wp:heading -->
```

---

#### **Style #5: Centered H2**

**Use**: Featured sections, announcements

**Template**:
```
<!-- wp:heading {"level":2,"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">💡 عنوان وسط</h2>
<!-- /wp:heading -->
```

---

#### **Style #6: Large Display H2**

**Use**: Hero headings, page titles

**Template**:
```
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"},"color":{"text":"#000B58"}}} -->
<h2 class="wp-block-heading" style="color:#000B58;font-size:2.5rem;font-weight:700">🚀 عنوان ضخم</h2>
<!-- /wp:heading -->
```

---

#### **Style #7: Teal H3**

**Use**: Highlighted sub-sections

**Template**:
```
<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"}}} -->
<h3 class="wp-block-heading" style="color:#006A67">🔹 عنوان بلون أخضر مزرق</h3>
<!-- /wp:heading -->
```

---

#### **Style #8: Numbered H2**

**Use**: Step-by-step guides, ordered sections

**Template**:
```
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">1️⃣ الخطوة الأولى</h2>
<!-- /wp:heading -->
```

---

#### **Style #9: Background H2**

**Use**: Featured sections with emphasis

**Template**:
```
<!-- wp:heading {"level":2,"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#f0f8ff","text":"#000B58"},"border":{"radius":"8px"}}} -->
<h2 class="wp-block-heading" style="background-color:#f0f8ff;color:#000B58;border-radius:8px;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">📌 عنوان بخلفية</h2>
<!-- /wp:heading -->
```

---

#### **Style #10: Small H3**

**Use**: Compact sub-headings

**Template**:
```
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.25rem">📍 عنوان صغير</h3>
<!-- /wp:heading -->
```

---

### **CLASS-BASED HEADINGS (11-13)**

---

#### **Style #11: Section Heading (CSS Class)**

**Use**: Standard sections with Wasla branding

**Template**:
```
<!-- wp:heading {"level":2,"className":"wasla-section-heading"} -->
<h2 class="wp-block-heading wasla-section-heading">📚 قسم بكلاس مخصص</h2>
<!-- /wp:heading -->
```

---

#### **Style #12: Subsection Heading (CSS Class)**

**Use**: Standard subsections with Wasla styling

**Template**:
```
<!-- wp:heading {"level":3,"className":"wasla-subsection-heading"} -->
<h3 class="wp-block-heading wasla-subsection-heading">✨ قسم فرعي مخصص</h3>
<!-- /wp:heading -->
```

---

#### **Style #13: Minor Heading (CSS Class)**

**Use**: Small headings with Wasla styling

**Template**:
```
<!-- wp:heading {"level":4,"className":"wasla-minor-heading"} -->
<h4 class="wp-block-heading wasla-minor-heading">🎯 عنوان صغير مخصص</h4>
<!-- /wp:heading -->
```

---

### **PREMIUM HEADINGS (14-20)**

---

#### **Style #14: Navy Box H2**

**Use**: Special sections, important announcements

**Template**:
```
<!-- wp:heading {"level":2,"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"color":{"background":"#000B58","text":"#FFF4B7"},"border":{"radius":"12px"},"typography":{"fontSize":"1.75rem"}}} -->
<h2 class="wp-block-heading" style="background-color:#000B58;color:#FFF4B7;border-radius:12px;font-size:1.75rem;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">🌟 عنوان بخلفية داكنة</h2>
<!-- /wp:heading -->
```

---

#### **Style #15: Gradient H2**

**Use**: Premium sections, hero content

**Template**:
```
<!-- wp:heading {"level":2,"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}},"color":{"text":"#ffffff","gradient":"linear-gradient(135deg, #000B58 0%, #006A67 100%)"},"border":{"radius":"12px"}}} -->
<h2 class="wp-block-heading" style="background:linear-gradient(135deg, #000B58 0%, #006A67 100%);color:#ffffff;border-radius:12px;padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem">✨ عنوان بتدرج لوني</h2>
<!-- /wp:heading -->
```

---

#### **Style #16: Left Border H2**

**Use**: Emphasized sections, quotes

**Template**:
```
<!-- wp:heading {"level":2,"style":{"spacing":{"padding":{"right":"1.5rem"}},"border":{"right":{"color":"#006A67","width":"4px"}}}} -->
<h2 class="wp-block-heading" style="border-right-color:#006A67;border-right-width:4px;padding-right:1.5rem">📋 عنوان بحد جانبي</h2>
<!-- /wp:heading -->
```

---

#### **Style #17: FAQ H3**

**Use**: FAQ sections, questions

**Template**:
```
<!-- wp:heading {"level":3,"style":{"color":{"text":"#000B58"},"typography":{"fontSize":"1.3rem","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="color:#000B58;font-size:1.3rem;font-weight:700">❓ سؤال شائع؟</h3>
<!-- /wp:heading -->
```

---

#### **Style #18: Step Check H3**

**Use**: Completed steps, achievements

**Template**:
```
<!-- wp:heading {"level":3,"style":{"color":{"text":"#006A67"}}} -->
<h3 class="wp-block-heading" style="color:#006A67">✅ خطوة مكتملة</h3>
<!-- /wp:heading -->
```

---

#### **Style #19: Uppercase H2**

**Use**: Special emphasis, categories

**Template**:
```
<!-- wp:heading {"level":2,"style":{"typography":{"textTransform":"uppercase","fontSize":"1.5rem","letterSpacing":"2px"},"color":{"text":"#000B58"}}} -->
<h2 class="wp-block-heading" style="color:#000B58;font-size:1.5rem;text-transform:uppercase;letter-spacing:2px">عنوان بحروف كبيرة</h2>
<!-- /wp:heading -->
```

---

#### **Style #20: Highlight H2**

**Use**: Featured content, special offers

**Template**:
```
<!-- wp:heading {"level":2,"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"1rem","right":"1rem"}},"color":{"background":"#FFF4B7","text":"#000B58"},"border":{"radius":"8px"},"typography":{"fontSize":"1.75rem"}}} -->
<h2 class="wp-block-heading" style="background-color:#FFF4B7;color:#000B58;border-radius:8px;font-size:1.75rem;padding-top:0.5rem;padding-right:1rem;padding-bottom:0.5rem;padding-left:1rem">⭐ عنوان مميز</h2>
<!-- /wp:heading -->
```

---

## 📋 **USAGE GUIDELINES**

### **Heading Hierarchy**

```
H1 (Article Title) - WordPress Auto
↓
Style #1 or #4 (H2) - Main Sections
↓
Style #2 or #7 (H3) - Subsections
↓
Style #3 or #10 (H4) - Minor Points
```

### **Frequency Guidelines**

| Style | Frequency per Article |
|---|---|
| Standard H2 (#1) | 60-70% of H2s |
| Standard H3 (#2) | 60-70% of H3s |
| Standard H4 (#3) | 60-70% of H4s |
| Navy Underline (#4) | 2-3 per article |
| Centered H2 (#5) | 1-2 per article |
| Large Display (#6) | 1 per article (hero) |
| Special Styles (#14-20) | Use sparingly |

### **Decision Tree**

```
Is it a main section?
  YES → H2 (Style #1 or #4)
  NO ↓

Is it a subsection?
  YES → H3 (Style #2 or #7)
  NO ↓

Is it a minor point?
  YES → H4 (Style #3 or #10)
  NO ↓

Is it special content?
  YES ↓
    - FAQ? → Style #17
    - Step? → Style #8 or #18
    - Featured? → Style #14, #15, or #20
  NO ↓

DEFAULT → Style #1 (Standard H2)
```

---

## 🤖 **AI ASSISTANT INSTRUCTIONS**

1. **Use Style #1-3 for 70%** of headings
2. **Add Style #4 for important** sections (2-3 times)
3. **Use Style #8 for step-by-step** guides
4. **Use Style #17 for FAQ** sections
5. **Use emojis** to make headings scannable
6. **Never skip heading levels** (H2 → H4 without H3)
7. **Keep headings short** (5-10 words max)

---

*Document Version: 1.0*  
*Last Updated: October 2, 2025*  
*Wasla Development Team*
