# 📝 GRID LAYOUT STYLES REFERENCE - WASLA THEME

**Purpose**: Ready-to-use grid templates for AI-assisted article creation

**Last Updated**: October 2, 2025  
**Total Styles**: 20 (column-based layouts with cards)

---

## 🎯 **QUICK REFERENCE TABLE**

| # | Style Name | Columns | Content Type | Best For |
|---|---|---|---|---|
| 1 | Basic 2-Col | 2 | Text | Simple layouts |
| 2 | Basic 3-Col | 3 | Text | Feature lists |
| 3 | Basic 4-Col | 4 | Text | Compact info |
| 4 | 2-Col Icon Cards | 2 | Cards | Comparisons |
| 5 | 3-Col Icon Cards | 3 | Cards | Features |
| 6 | 4-Col Numbered | 4 | Cards | Steps |
| 7 | Asymmetric 33/67 | 2 | Mixed | Sidebar layout |
| 8 | Asymmetric 40/60 | 2 | Image+Text | Visual content |
| 9 | 3-Col Stats | 3 | Numbers | Statistics |
| 10 | 2-Col Comparison | 2 | Lists | Compare options |
| 11 | 4-Col Features | 4 | Cards | Feature grid |
| 12 | 3-Col Pricing | 3 | Price Cards | Pricing tiers |
| 13 | 2-Col Image+Text | 2 | Image+Text | Content blocks |
| 14 | 3-Col Timeline | 3 | Timeline Cards | Events |
| 15 | 4-Col Categories | 4 | Category Cards | Topics |
| 16 | 2-Col Testimonials | 2 | Testimonials | Reviews |
| 17 | 3-Col Team | 3 | Profile Cards | Team members |
| 18 | 4-Col Services | 4 | Icons+Text | Services |
| 19 | 2-Col FAQ | 2 | FAQ Boxes | Questions |
| 20 | 3-Col Resources | 3 | Resource Cards | Downloads |

---

## 📦 **STYLE CATALOG**

### **BASIC GRIDS (1-3)**

---

#### **Style #1: Basic Two-Column Grid**

**Use**: Simple side-by-side content

**Template**:
```
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph -->
<p>محتوى العمود الأول</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph -->
<p>محتوى العمود الثاني</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
```

---

#### **Style #2: Basic Three-Column Grid**

**Use**: Feature lists, benefits

**Template**:
```
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph -->
<p>العمود الأول</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph -->
<p>العمود الثاني</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph -->
<p>العمود الثالث</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
```

---

#### **Style #3: Basic Four-Column Grid**

**Use**: Compact information display

**Template**:
```
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column --><div class="wp-block-column"><p>العمود 1</p></div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column"><p>العمود 2</p></div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column"><p>العمود 3</p></div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column"><p>العمود 4</p></div><!-- /wp:column -->
</div>
<!-- /wp:columns -->
```

---

### **CARD GRIDS (4-6)**

---

#### **Style #4: Two-Column Icon Cards Grid**

**Use**: Feature comparisons (most common)

**Template**: See full example in main list above

---

#### **Style #5: Three-Column Icon Cards Grid**

**Use**: Features, benefits, services (most popular)

**Template**: See full example in main list above

---

#### **Style #6: Four-Column Numbered Cards Grid**

**Use**: Step-by-step processes

**Template**: See full example in main list above

---

### **ASYMMETRIC GRIDS (7-8)**

---

#### **Style #7: Asymmetric 33/67 Grid**

**Use**: Sidebar layouts, small image + text

**Template**:
```
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%">
<p>عمود صغير (33%)</p>
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%">
<p>عمود كبير (67%)</p>
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
```

---

#### **Style #8: Asymmetric 40/60 Grid**

**Use**: Image + description layouts

**Template**: See full example in main list above

---

### **SPECIALIZED GRIDS (9-14)**

---

#### **Style #9: Three-Column Stats Grid**

**Use**: Display statistics, metrics

**Template**: See full example in main list above

---

#### **Style #10: Two-Column Comparison Grid**

**Use**: Compare two options/plans

**Template**: See full example in main list above

---

#### **Style #11: Four-Column Features Grid**

**Use**: Product/service features

**Template**: See full example in main list above

---

#### **Style #12: Three-Column Pricing Grid**

**Use**: Pricing tiers, packages

**Template**: See full example in main list above

---

#### **Style #13: Two-Column Image+Text Grid**

**Use**: Content with visual support

**Template**: See full example in main list above

---

#### **Style #14: Three-Column Timeline Grid**

**Use**: Events, milestones, schedules

**Template**: See full example in main list above

---

### **CONTENT GRIDS (15-20)**

---

#### **Style #15: Four-Column Categories Grid**

**Use**: Content categories, topics

**Template**: See full example in main list above

---

#### **Style #16: Two-Column Testimonials Grid**

**Use**: Customer reviews, testimonials

**Template**: See full example in main list above

---

#### **Style #17: Three-Column Team Grid**

**Use**: Team members, experts

**Template**: See full example in main list above

---

#### **Style #18: Four-Column Services Grid**

**Use**: Services, offerings

**Template**: See full example in main list above

---

#### **Style #19: Two-Column FAQ Grid**

**Use**: Questions and answers

**Template**: See full example in main list above

---

#### **Style #20: Three-Column Resources Grid**

**Use**: Downloadable resources

**Template**: See full example in main list above

---

## 📋 **USAGE GUIDELINES**

### **Column Count Selection**

| Columns | Best For | Mobile Behavior |
|---|---|---|
| 2 | Comparisons, text+image | Stack vertically |
| 3 | Features, services | Stack vertically |
| 4 | Icons, categories | 2x2 grid on mobile |

### **Frequency Guidelines**

| Grid Type | Frequency per Article |
|---|---|
| 3-Col Icon Cards (#5) | 1-2 (most common) |
| 2-Col Comparison (#10) | 1 per article |
| 4-Col Features (#11) | 1 per article |
| 2-Col Image+Text (#13) | 2-3 per article |
| Stats Grid (#9) | 1 per article |

### **Decision Tree**

```
Need to display multiple items?
  YES ↓

How many items (3-6)?
  3 items → 3-Column Grid (#5)
  4 items → 4-Column Grid (#6 or #11)
  2 items → 2-Column Grid (#4 or #10)
  6 items → 3-Column Grid x2 rows

What type of content?
  Cards → Use card grids (#4-6, #11-12, #14-15, #17, #20)
  Text only → Use basic grids (#1-3)
  Image+Text → Use asymmetric (#7-8, #13)
  Statistics → Use stats grid (#9)
  
DEFAULT → 3-Column Icon Cards (#5)
```

---

## 🤖 **AI ASSISTANT INSTRUCTIONS**

1. **Use 3-Column Icon Cards (#5) for 60%** of grids
2. **Always include cards** in grids (not just text)
3. **Keep consistent spacing** between columns
4. **Use asymmetric grids (#7-8)** for image+text
5. **Mobile-first thinking**: 4-col becomes 2x2 on mobile
6. **Match grid to content**: steps=numbered, features=icons
7. **Add section heading** above each grid

### **Grid Combination Patterns**

Common article patterns:
1. **Feature Article**: Intro → 3-Col Icon Cards (#5) → 2-Col Image+Text (#13) → FAQ Grid (#19)
2. **Comparison Article**: Intro → 2-Col Comparison (#10) → 3-Col Stats (#9)
3. **Process Guide**: Intro → 4-Col Numbered (#6) → 2-Col Image+Text (#13)
4. **Service Page**: Intro → 4-Col Services (#18) → 3-Col Pricing (#12) → 2-Col Testimonials (#16)

---

*Document Version: 1.0*  
*Last Updated: October 2, 2025*  
*Wasla Development Team*
