# 📖 WASLA ARTICLE COMPONENTS USAGE GUIDE

## 🎯 **PURPOSE**
Complete reference for all Wasla components and patterns available for article creation using ChatGPT or any AI tool.

---

## 🤖 **CHATGPT PROMPT TEMPLATE**

Copy this prompt to ChatGPT with your content:

```
Create a professional Arabic article about [TOPIC] using Wasla WordPress block patterns.

**ARTICLE CONTENT:**
[PASTE YOUR CONTENT HERE]

**AVAILABLE COMPONENTS:**

1. **HERO SECTION** (wasla/hero-article)
   - Article introduction with title, category, date, reading time
   - Use at the very beginning of the article

2. **INTRODUCTION BOX** (wasla/introduction-box)
   - Overview section with key points
   - Use after hero or at article start

3. **STANDARD SECTION** (wasla/section-standard)
   - Regular content section with H2 heading and paragraphs
   - Use for main content sections

4. **CARD COMPONENTS:**
   - **Icon Cards** (wasla/card-icon): Icon + title + description
   - **Numbered Cards** (wasla/card-numbered): Number + title + description
   - **Feature Cards** (wasla/card-feature): Checkmark + title + description
   
5. **GRID LAYOUTS:**
   - **2 Columns** (wasla/grid-2col): For comparisons
   - **3 Columns** (wasla/grid-3col): For features/services
   - **4 Columns** (wasla/grid-4col): For compact info
   
6. **SECTION WITH CARDS** (wasla/section-grid-cards)
   - Complete section with heading + 3 icon cards
   - Perfect for features, benefits, methods

7. **INFO BOXES:**
   - **Info Box** (wasla/info-box): Blue - general information
   - **Tip Box** (wasla/tip-box): Cream - helpful tips
   - **Warning Box** (wasla/warning-box): Yellow - important warnings
   - **Success Box** (wasla/success-box): Green - achievements
   - **Question Box** (wasla/box-question): FAQ style

8. **FAQ SECTION** (wasla/faq-section)
   - Complete FAQ section with multiple Q&A pairs
   - Use near the end of article

9. **LISTS:**
   - **Checklist** (wasla/checklist): Green checkmarks
   - **Feature List** (wasla/feature-list): Detailed features
   
10. **SPECIAL ELEMENTS:**
    - **Stats Grid** (wasla/stats-grid): Statistics display
    - **Quote Highlight** (wasla/quote-highlight): Blockquote
    - **Tutorial Walkthrough** (wasla/tutorial-walkthrough): Step-by-step

**STRUCTURE REQUIREMENTS:**
1. Start with hero-article OR introduction-box
2. Use section-standard for main content
3. Add info boxes (tip/warning/info) for important points
4. Use section-grid-cards for features/benefits
5. Include faq-section near the end
6. Add spacers between sections (2rem)

**OUTPUT FORMAT:**
Generate complete WordPress Gutenberg blocks (HTML comment format) ready to paste into WordPress Code Editor.

**EXAMPLE STRUCTURE:**
```html
<!-- Hero -->
<!-- Introduction Box -->
<!-- Section Standard -->
<!-- Tip Box -->
<!-- Section with Cards -->
<!-- FAQ Section -->
<!-- Spacer -->
```

Convert the content above into a complete article following these specifications.
```

---

## 📚 **COMPLETE COMPONENT REFERENCE**

### **1. HERO ARTICLE** 🎯
**Pattern Name:** `wasla/hero-article`  
**Category:** wasla-patterns  
**Use For:** Article introduction section

**Structure:**
- Meta information (category, date, reading time)
- H1 article title
- Lead paragraph (summary)
- Divider

**Example:**
```html
<!-- wp:group {"className":"article-hero"} -->
<div class="wp-block-group article-hero">
<!-- wp:paragraph {"className":"wasla-meta-text"} -->
<p class="wasla-meta-text">📚 التعليم • 📅 1 أكتوبر 2025 • ⏱️ 5 دقائق</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1>عنوان المقال الرئيسي</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wasla-lead-text"} -->
<p class="wasla-lead-text">ملخص المقال هنا...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

### **2. INTRODUCTION BOX** 📖
**Pattern Name:** `wasla/introduction-box`  
**Category:** wasla-components  
**Use For:** Article overview with key points

**Structure:**
- "في هذا المقال" heading
- Lead paragraph
- Checklist of key points

**When to Use:**
- After hero section
- As first section if no hero
- To summarize article content

---

### **3. STANDARD SECTION** ✨
**Pattern Name:** `wasla/section-standard`  
**Category:** wasla-patterns  
**Use For:** Regular content sections

**Structure:**
- H2 section heading with emoji
- Lead paragraph
- Body paragraphs
- Spacer at end

**When to Use:**
- Main content sections
- Explanatory sections
- Detailed information

---

### **4. CARD COMPONENTS** 🃏

#### **A) ICON CARD**
**Pattern Name:** `wasla/card-icon`  
**Category:** wasla-components  
**Structure:** Icon + Title + Description

**Best For:**
- Features
- Services
- Benefits
- Methods

**Usage:** Combine 3 cards in `wasla-card-grid-3`

---

#### **B) NUMBERED CARD**
**Pattern Name:** `wasla/card-numbered`  
**Category:** wasla-components  
**Structure:** Large Number + Title + Description

**Best For:**
- Steps
- Process stages
- Priorities
- Rankings

**Usage:** Use in sequence (1, 2, 3...)

---

#### **C) FEATURE CARD**
**Pattern Name:** `wasla/card-feature`  
**Category:** wasla-components  
**Structure:** Checkmark + Title + Description

**Best For:**
- Advantages
- Included features
- Benefits
- Completed items

---

### **5. GRID LAYOUTS** 📐

#### **A) TWO-COLUMN GRID**
**Pattern Name:** `wasla/grid-2col`  
**Category:** wasla-components  
**Best For:** Comparisons, Before/After, Pros/Cons

---

#### **B) THREE-COLUMN GRID**
**Pattern Name:** `wasla/grid-3col`  
**Category:** wasla-components  
**Best For:** Features, Services, Categories

---

#### **C) FOUR-COLUMN GRID**
**Pattern Name:** `wasla/grid-4col`  
**Category:** wasla-components  
**Best For:** Compact info, Icons, Statistics

---

### **6. SECTION WITH CARD GRID** 🎯
**Pattern Name:** `wasla/section-grid-cards`  
**Category:** wasla-patterns  
**Use For:** Complete section with heading + 3 icon cards

**Structure:**
- H2 section heading
- Lead paragraph
- 3-column grid with icon cards
- Spacer

**When to Use:**
- Features section
- Benefits section
- Methods section
- Services section

**Perfect For:**
- "أهم الميزات" (Key Features)
- "الفوائد الرئيسية" (Main Benefits)
- "طرق المذاكرة" (Study Methods)

---

### **7. INFO BOXES** 💬

#### **A) INFO BOX (Blue)**
**Pattern Name:** `wasla/info-box`  
**Icon:** ℹ️  
**Use For:** General information, notes, additional context

---

#### **B) TIP BOX (Cream)**
**Pattern Name:** `wasla/tip-box`  
**Icon:** 💡  
**Use For:** Helpful tips, recommendations, best practices

---

#### **C) WARNING BOX (Yellow)**
**Pattern Name:** `wasla/warning-box`  
**Icon:** ⚠️  
**Use For:** Important warnings, cautions, things to avoid

---

#### **D) SUCCESS BOX (Green)**
**Pattern Name:** `wasla/success-box`  
**Icon:** ✅  
**Use For:** Achievements, successes, positive outcomes

---

#### **E) QUESTION BOX (FAQ)**
**Pattern Name:** `wasla/box-question`  
**Icon:** ❓  
**Use For:** Single FAQ item (question + answer)

---

### **8. FAQ SECTION** ❓
**Pattern Name:** `wasla/faq-section`  
**Category:** wasla-patterns  
**Use For:** Complete FAQ section with multiple Q&A pairs

**Structure:**
- H2 "الأسئلة الشائعة" heading
- 3 FAQ items (question + answer)
- Spacer

**When to Use:**
- Near end of article (before CTA)
- After main content
- To address common questions

---

### **9. LISTS** 📝

#### **A) CHECKLIST**
**Pattern Name:** `wasla/checklist`  
**Style:** Green checkmarks  
**Use For:** Requirements, completed items, to-do lists

---

#### **B) FEATURE LIST**
**Pattern Name:** `wasla/feature-list`  
**Style:** Icon + description  
**Use For:** Detailed features, capabilities

---

### **10. SPECIAL ELEMENTS** ⭐

#### **A) STATS GRID**
**Pattern Name:** `wasla/stats-grid`  
**Use For:** Statistics, metrics, numbers

**Structure:**
- 3-4 stat items
- Large number + label
- Auto-responsive grid

---

#### **B) QUOTE HIGHLIGHT**
**Pattern Name:** `wasla/quote-highlight`  
**Use For:** Important quotes, testimonials

---

#### **C) TUTORIAL WALKTHROUGH**
**Pattern Name:** `wasla/tutorial-walkthrough`  
**Use For:** Step-by-step guides, procedures

---

## 📋 **ARTICLE TYPE TEMPLATES**

### **Template 1: Application Guide** 📝
**Example:** Don Bosco Application Process

```
1. Hero Article (title, meta)
2. Introduction Box (overview)
3. Standard Section (requirements)
4. Tip Box (important advice)
5. Section with Cards (steps/stages)
6. Warning Box (deadlines)
7. FAQ Section
8. Spacer
```

---

### **Template 2: Study Strategy** 📚
**Example:** Thanawya Amma Study Methods

```
1. Hero Article
2. Introduction Box
3. Section Grid Cards (study methods)
4. Tip Box (golden tips)
5. Standard Section (schedule)
6. Stats Grid (statistics)
7. Warning Box (mistakes to avoid)
8. FAQ Section
9. Spacer
```

---

### **Template 3: School Comparison** ⚖️
**Example:** Comparing Educational Institutions

```
1. Hero Article
2. Introduction Box
3. Two-Column Grid (comparison)
4. Section Grid Cards (criteria)
5. Info Box (important notes)
6. Stats Grid (statistics)
7. FAQ Section
8. Spacer
```

---

### **Template 4: Career Guide** 💼
**Example:** Career Paths After Thanawya

```
1. Hero Article
2. Introduction Box
3. Section Grid Cards (career options)
4. Numbered Cards (steps to follow)
5. Tip Box (career advice)
6. Success Box (success stories)
7. FAQ Section
8. Spacer
```

---

## 🎨 **DESIGN PRINCIPLES**

### **Color Usage:**
- **Navy (#000B58):** Headings, important text
- **Teal (#006A67):** Accents, icons, borders
- **Cream (#FFF4B7):** Tip boxes, highlights
- **Light Blue (#f0f8ff):** Intro boxes, backgrounds

### **Typography:**
- **H1:** 2.5rem, bold, navy
- **H2:** 2rem, bold, navy, teal border
- **H3:** 1.5rem, semi-bold, secondary navy
- **Body:** 1rem, regular, dark gray
- **Lead:** 1.15rem, regular, dark

### **Spacing:**
- Between sections: 2rem (wasla-spacer-lg)
- Within sections: 1.5rem
- Around boxes: 1.5rem padding
- Card gaps: 1.5rem

### **Icons:**
Use emojis in headings:
- 📖 Overview/Introduction
- ✨ Features/Benefits
- 🎯 Goals/Objectives
- 💡 Tips
- ⚠️ Warnings
- ✅ Success/Completion
- ❓ Questions
- 📊 Statistics
- 🚀 Action/Next Steps
- 🏷️ Keywords/Tags

---

## ✅ **ARTICLE CREATION CHECKLIST**

Before publishing, ensure:
- [ ] Used hero-article OR introduction-box at start
- [ ] All H2 headings use wasla-section-heading class
- [ ] Added emojis to all headings
- [ ] Included at least one info box (tip/warning/info)
- [ ] Used section-grid-cards for features/benefits
- [ ] Added FAQ section near end
- [ ] Spacers (2rem) between major sections
- [ ] All patterns from wasla categories
- [ ] Mobile-responsive (auto-handled)
- [ ] Consistent Wasla branding

---

## 🚀 **QUICK START EXAMPLE**

**Complete Don Bosco Article Structure:**

```html
<!-- 1. HERO -->
<!-- wp:group {"className":"article-hero"} -->
...hero content...
<!-- /wp:group -->

<!-- 2. INTRODUCTION -->
<!-- wp:group {"className":"wasla-intro-box"} -->
...introduction with key points...
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- 3. REQUIREMENTS SECTION -->
<!-- wp:heading {"level":2,"className":"wasla-section-heading"} -->
<h2 class="wasla-section-heading">📋 المتطلبات الأساسية</h2>
<!-- /wp:heading -->
...content...

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- 4. TIP BOX -->
<!-- wp:group {"className":"wasla-tip-box wasla-box"} -->
...tip content...
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- 5. STEPS SECTION WITH CARDS -->
<!-- wp:heading {"level":2,"className":"wasla-section-heading"} -->
<h2 class="wasla-section-heading">🎯 خطوات التقديم</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"wasla-card-grid-3"} -->
...3 numbered cards...
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- 6. FAQ SECTION -->
<!-- wp:heading {"level":2,"className":"wasla-section-heading"} -->
<h2 class="wasla-section-heading">❓ الأسئلة الشائعة</h2>
<!-- /wp:heading -->

...3 FAQ items...

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
```

---

## 📊 **COMPONENT SUMMARY**

| Component | Pattern Name | Category | Best Use |
|---|---|---|---|
| Hero Article | wasla/hero-article | patterns | Article start |
| Introduction Box | wasla/introduction-box | components | Overview |
| Standard Section | wasla/section-standard | patterns | Main content |
| Icon Card | wasla/card-icon | components | Features |
| Numbered Card | wasla/card-numbered | components | Steps |
| Feature Card | wasla/card-feature | components | Benefits |
| 2-Col Grid | wasla/grid-2col | components | Comparison |
| 3-Col Grid | wasla/grid-3col | components | Features |
| 4-Col Grid | wasla/grid-4col | components | Compact info |
| Section + Cards | wasla/section-grid-cards | patterns | Complete section |
| Info Box | wasla/info-box | components | Information |
| Tip Box | wasla/tip-box | components | Tips |
| Warning Box | wasla/warning-box | components | Warnings |
| Success Box | wasla/success-box | components | Achievements |
| Question Box | wasla/box-question | components | Single FAQ |
| FAQ Section | wasla/faq-section | patterns | Multiple FAQs |
| Checklist | wasla/checklist | components | Requirements |
| Feature List | wasla/feature-list | components | Detailed features |
| Stats Grid | wasla/stats-grid | components | Statistics |
| Quote | wasla/quote-highlight | components | Quotes |
| Tutorial | wasla/tutorial-walkthrough | components | Step-by-step |

**Total Components: 21** ✅

---

## 💡 **PRO TIPS**

1. **Always start with hero OR intro box** - Sets article context
2. **Use spacers generously** - Improves readability
3. **Mix card types** - Numbered for steps, icon for features, feature for benefits
4. **One tip/warning per article minimum** - Adds value
5. **End with FAQ** - Addresses reader questions
6. **Use emojis consistently** - Enhances visual appeal
7. **Keep sections focused** - One topic per section
8. **Test on mobile** - All components are responsive

---

*Last Updated: October 1, 2025*  
*Version: 2.0*  
*Components: 21 patterns ready for use*  
*Wasla Development Team*
