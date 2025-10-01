# 🎨 WASLA COMPONENTS & PATTERNS EXTRACTION PLAN

## 📋 **OVERVIEW**

This document outlines the extraction of reusable components and patterns from existing policy pages (About Us, Privacy Policy, Cookie Policy) to create a standardized design system for article creation.

**Purpose**: Enable consistent, professional article creation using any AI tool (ChatGPT, Claude, etc.)

---

## 🎯 **EXTRACTION SOURCES**

### **Reference Pages** ✅
- `page-about-us.php` - Rich content structure
- `page-privacy-policy.php` - Legal formatting
- `page-cookie-policy.php` - Complex nested elements

### **CSS Files** ✅
- `css/legal-pages.css` - Existing styling for policy pages

---

## 🧱 **COMPONENT HIERARCHY**

```
Level 1: ATOMIC COMPONENTS (Smallest units)
├── Typography
│   ├── Heading H2 (Section)
│   ├── Heading H3 (Sub-section)
│   ├── Paragraph
│   ├── List (Unordered)
│   ├── List (Ordered)
│   └── Link (Internal/External)
│
├── UI Elements
│   ├── Icon
│   ├── Badge/Tag
│   ├── Button (Primary/Secondary)
│   ├── Separator/Spacer
│   └── Breadcrumb
│
└── Content Blocks
    ├── Text Block
    ├── Quote/Note
    └── Highlight

Level 2: MOLECULAR COMPONENTS (Combined atoms)
├── Cards
│   ├── Icon Card (icon + title + description)
│   ├── Numbered Card (number + title + description)
│   ├── Feature Card (checkmark + title + description)
│   └── Service Card (icon + name + link)
│
├── Lists
│   ├── Icon List (icon + text items)
│   ├── Checkmark List (checkmarks + items)
│   ├── Numbered Steps (numbers + items)
│   └── Feature List (icons + titles + descriptions)
│
└── Info Boxes
    ├── Info Box (blue)
    ├── Warning Box (yellow)
    ├── Success Box (green)
    └── Note Box (gray)

Level 3: ORGANISM PATTERNS (Complete sections)
├── Hero Section
│   ├── Breadcrumb
│   ├── Title + Subtitle
│   └── Meta Info
│
├── Content Grids
│   ├── 2-Column Grid
│   ├── 3-Column Grid
│   └── 4-Column Grid
│
├── Special Sections
│   ├── Contact Grid (2x2 contact methods)
│   ├── CTA Box (call-to-action)
│   ├── FAQ Item
│   └── Cookie Type Block
│
└── Sidebar Widgets
    ├── Quick Links Widget
    ├── Contact Support Widget
    └── Summary Widget
```

---

## 📦 **COMPONENTS TO CREATE**

### **1. ATOMIC COMPONENTS** (20 components)

#### **Typography Components**
- [ ] `heading-h2.php` - Section heading with optional icon
- [ ] `heading-h3.php` - Sub-section heading with optional icon
- [ ] `paragraph.php` - Standard paragraph block
- [ ] `list-unordered.php` - Bullet list
- [ ] `list-ordered.php` - Numbered list
- [ ] `link-internal.php` - Styled internal link
- [ ] `link-external.php` - Styled external link with icon

#### **UI Elements**
- [ ] `icon.php` - Bootstrap icon wrapper
- [ ] `badge.php` - Tag/badge (required, optional, etc.)
- [ ] `button-primary.php` - Primary action button
- [ ] `button-secondary.php` - Secondary action button
- [ ] `separator.php` - Visual separator line
- [ ] `spacer.php` - Vertical spacing block
- [ ] `breadcrumb.php` - Navigation breadcrumb

#### **Content Blocks**
- [ ] `text-block.php` - Rich text container
- [ ] `quote-block.php` - Blockquote styling
- [ ] `note-block.php` - Inline note/callout
- [ ] `highlight-text.php` - Text highlight
- [ ] `emphasis-text.php` - Bold/emphasized text
- [ ] `meta-info.php` - Date/author/update info

---

### **2. MOLECULAR COMPONENTS** (25 components)

#### **Card Components**
- [ ] `card-icon.php` - Icon + title + description card
  - Used in: Mission cards, Purpose cards
  - Structure: Circle icon, H3 title, paragraph
  
- [ ] `card-numbered.php` - Number + title + description
  - Used in: Trust reasons, Steps
  - Structure: Large number, H3 title, paragraph
  
- [ ] `card-feature.php` - Checkmark + title + description
  - Used in: Feature lists, Benefits
  - Structure: Checkmark icon, H3 title, paragraph
  
- [ ] `card-service.php` - Service name + description + link
  - Used in: Third-party services
  - Structure: Icon, name, description, external link
  
- [ ] `card-contact.php` - Contact method display
  - Used in: Contact grids
  - Structure: Icon, label, value/link

#### **List Components**
- [ ] `list-icon.php` - List with icons before each item
- [ ] `list-checkmark.php` - List with checkmarks
- [ ] `list-numbered-styled.php` - Styled numbered list
- [ ] `list-feature.php` - Icon + title + description list
- [ ] `list-nested.php` - Multi-level list

#### **Info Box Components**
- [ ] `box-info.php` - Blue info box (i icon)
- [ ] `box-warning.php` - Yellow warning box (! icon)
- [ ] `box-success.php` - Green success box (✓ icon)
- [ ] `box-note.php` - Gray note box (note icon)
- [ ] `box-tip.php` - Cream tip box (💡 icon) [already exists]
- [ ] `box-question.php` - FAQ style box (? icon)

#### **Grid Components**
- [ ] `grid-2col.php` - Two-column grid
- [ ] `grid-3col.php` - Three-column grid
- [ ] `grid-4col.php` - Four-column grid
- [ ] `grid-auto.php` - Auto-fit grid

#### **Special Components**
- [ ] `accordion-item.php` - Collapsible section
- [ ] `tab-section.php` - Tabbed content
- [ ] `progress-bar.php` - Progress indicator
- [ ] `rating-display.php` - Star rating
- [ ] `timeline-item.php` - Timeline point

---

### **3. ORGANISM PATTERNS** (15 patterns)

#### **Hero Sections**
- [ ] `hero-page.php` - Standard page hero
  - Breadcrumb + Title + Subtitle + Meta
  - Gradient background
  - Full-width container
  
- [ ] `hero-article.php` - Article page hero
  - Category + Title + Excerpt + Meta
  - Author + Date + Reading time

#### **Content Section Patterns**
- [ ] `section-standard.php` - Standard content section
  - H2 heading + paragraphs + optional lists
  
- [ ] `section-with-sidebar.php` - Two-column layout
  - Main content + sidebar
  - Responsive stacking
  
- [ ] `section-grid-cards.php` - Card grid section
  - H2 heading + card grid (2/3/4 columns)
  - Auto-responsive

#### **Special Sections**
- [ ] `contact-grid.php` - 2x2 contact methods
  - 4 contact items in grid
  - Icons + labels + values
  
- [ ] `cta-box.php` - Call-to-action box
  - Centered content
  - Navy background
  - Button
  
- [ ] `faq-section.php` - FAQ block
  - Questions + answers
  - Expandable/collapsible
  
- [ ] `cookie-type.php` - Cookie description block
  - Header + badge + description + list
  
- [ ] `third-party-services.php` - External services list
  - Service cards with links
  - Icon + name + description

#### **Sidebar Widgets**
- [ ] `widget-quick-links.php` - Navigation links
  - Title + icon list
  
- [ ] `widget-contact-support.php` - Support CTA
  - Title + description + button
  
- [ ] `widget-summary.php` - Key points summary
  - Checkmark list of highlights
  
- [ ] `widget-related-content.php` - Related articles
  - Thumbnails + titles + excerpts
  
- [ ] `widget-share.php` - Social sharing
  - Share buttons for social media

---

## 🎨 **STYLING CONSIDERATIONS**

### **Brand Colors** (From existing policy pages)
```css
:root {
  /* Primary Colors */
  --wasla-primary: #000B58;   /* Deep Navy */
  --wasla-secondary: #003161; /* Secondary Navy */
  --wasla-tertiary: #006A67;  /* Teal */
  --wasla-accent: #FFF4B7;    /* Cream */
  
  /* Background Colors */
  --bg-light-blue: #f0f8ff;
  --bg-light-gray: #f8f9fa;
  --bg-white: #ffffff;
  
  /* Text Colors */
  --text-dark: #2c3e50;
  --text-gray: #555;
  --text-light: #777;
  
  /* Border Colors */
  --border-light: #e0e0e0;
  --border-medium: #ccc;
  
  /* Status Colors */
  --success: #28a745;
  --warning: #ffc107;
  --danger: #dc3545;
  --info: #17a2b8;
}
```

### **Typography Scale**
```css
/* From existing legal pages */
h1: 2.5rem (40px) - Page titles
h2: 2rem (32px) - Section headings
h3: 1.5rem (24px) - Sub-sections
h4: 1.25rem (20px) - Card titles
p: 1rem (16px) - Body text
small: 0.875rem (14px) - Meta info
```

### **Spacing System**
```css
/* Consistent spacing from policy pages */
--spacing-xs: 0.5rem (8px)
--spacing-sm: 1rem (16px)
--spacing-md: 1.5rem (24px)
--spacing-lg: 2rem (32px)
--spacing-xl: 3rem (48px)
--spacing-xxl: 4rem (64px)
```

### **Border Radius**
```css
--radius-sm: 8px   /* Small elements */
--radius-md: 12px  /* Cards, boxes */
--radius-lg: 16px  /* Large sections */
```

---

## 📁 **FILE STRUCTURE**

```
inc/
├── components/
│   ├── atoms/               [NEW]
│   │   ├── heading-h2.php
│   │   ├── heading-h3.php
│   │   ├── paragraph.php
│   │   ├── list-unordered.php
│   │   ├── list-ordered.php
│   │   ├── link-internal.php
│   │   ├── link-external.php
│   │   ├── icon.php
│   │   ├── badge.php
│   │   ├── button-primary.php
│   │   ├── button-secondary.php
│   │   ├── separator.php
│   │   ├── spacer.php
│   │   ├── breadcrumb.php
│   │   ├── text-block.php
│   │   ├── quote-block.php
│   │   ├── note-block.php
│   │   ├── highlight-text.php
│   │   ├── emphasis-text.php
│   │   └── meta-info.php
│   │
│   ├── molecules/           [NEW]
│   │   ├── card-icon.php
│   │   ├── card-numbered.php
│   │   ├── card-feature.php
│   │   ├── card-service.php
│   │   ├── card-contact.php
│   │   ├── list-icon.php
│   │   ├── list-checkmark.php
│   │   ├── list-numbered-styled.php
│   │   ├── list-feature.php
│   │   ├── list-nested.php
│   │   ├── box-info.php
│   │   ├── box-warning.php
│   │   ├── box-success.php
│   │   ├── box-note.php
│   │   ├── box-question.php
│   │   ├── grid-2col.php
│   │   ├── grid-3col.php
│   │   ├── grid-4col.php
│   │   ├── grid-auto.php
│   │   ├── accordion-item.php
│   │   ├── tab-section.php
│   │   ├── progress-bar.php
│   │   ├── rating-display.php
│   │   └── timeline-item.php
│   │
│   ├── organisms/           [NEW]
│   │   ├── hero-page.php
│   │   ├── hero-article.php
│   │   ├── section-standard.php
│   │   ├── section-with-sidebar.php
│   │   ├── section-grid-cards.php
│   │   ├── contact-grid.php
│   │   ├── cta-box.php
│   │   ├── faq-section.php
│   │   ├── cookie-type.php
│   │   ├── third-party-services.php
│   │   ├── widget-quick-links.php
│   │   ├── widget-contact-support.php
│   │   ├── widget-summary.php
│   │   ├── widget-related-content.php
│   │   └── widget-share.php
│   │
│   └── [existing components]
│       ├── checklist.php
│       ├── feature-list.php
│       ├── info-box.php
│       ├── introduction-box.php
│       ├── quote-highlight.php
│       ├── stats-grid.php
│       ├── success-box.php
│       ├── tip-box.php
│       ├── tutorial-walkthrough.php
│       └── warning-box.php
│
└── patterns/
    └── [existing patterns - no changes]
        ├── case-study.php
        ├── comparison-article.php
        ├── complete-article.php
        ├── qa-interview.php
        ├── quick-tips.php
        ├── resources-list.php
        ├── step-by-step-guide.php
        └── timeline-article.php
```

---

## 🔄 **COMPONENT NAMING CONVENTION**

### **File Naming**
```
[type]-[name].php

Types:
- atoms/: heading-, list-, button-, icon-, etc.
- molecules/: card-, box-, grid-, etc.
- organisms/: hero-, section-, widget-, etc.
```

### **Pattern Naming**
```
wasla_[component]_[variant]

Examples:
- wasla_heading_h2()
- wasla_card_icon()
- wasla_box_warning()
- wasla_hero_page()
```

### **CSS Class Naming**
```
.wasla-[component]-[variant]

Examples:
- .wasla-heading-section
- .wasla-card-icon
- .wasla-box-warning
- .wasla-hero-page
```

---

## 📝 **COMPONENT TEMPLATE STRUCTURE**

### **Standard Component PHP File**
```php
<?php
/**
 * Component: [Component Name]
 * Description: [What this component does]
 * 
 * @package Wasla
 * @subpackage Components/[Atoms|Molecules|Organisms]
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render [Component Name]
 *
 * @param array $args Component arguments
 * @return string HTML output
 */
function wasla_component_name( $args = array() ) {
    $defaults = array(
        // Default parameters
    );
    
    $args = wp_parse_args( $args, $defaults );
    
    ob_start();
    ?>
    <!-- Component HTML here -->
    <?php
    return ob_get_clean();
}

/**
 * Register block pattern for [Component Name]
 */
register_block_pattern(
    'wasla/component-name',
    array(
        'title'       => __( 'Component Name', 'wasla' ),
        'description' => __( 'Component description', 'wasla' ),
        'categories'  => array( 'wasla-components' ),
        'content'     => '<!-- Gutenberg blocks here -->',
    )
);
```

---

## 🎯 **IMPLEMENTATION PRIORITY**

### **Phase 1: Most Used (Priority 1)** 🔴
Essential components needed immediately for article creation:

1. **Atoms** (10 components)
   - heading-h2.php
   - heading-h3.php
   - paragraph.php
   - list-unordered.php
   - list-ordered.php
   - icon.php
   - spacer.php
   - link-internal.php
   - button-primary.php
   - meta-info.php

2. **Molecules** (8 components)
   - card-icon.php
   - list-checkmark.php
   - box-info.php
   - box-warning.php
   - grid-2col.php
   - grid-3col.php
   - card-numbered.php
   - card-feature.php

3. **Organisms** (5 patterns)
   - section-standard.php
   - hero-article.php
   - section-grid-cards.php
   - cta-box.php
   - faq-section.php

**Total Phase 1**: 23 components

---

### **Phase 2: Commonly Used (Priority 2)** 🟡
Useful components for variety:

1. **Atoms** (7 components)
   - badge.php
   - separator.php
   - breadcrumb.php
   - quote-block.php
   - note-block.php
   - link-external.php
   - button-secondary.php

2. **Molecules** (10 components)
   - box-success.php
   - box-note.php
   - box-question.php
   - grid-4col.php
   - grid-auto.php
   - card-service.php
   - card-contact.php
   - list-icon.php
   - list-feature.php
   - accordion-item.php

3. **Organisms** (6 patterns)
   - hero-page.php
   - section-with-sidebar.php
   - contact-grid.php
   - widget-quick-links.php
   - widget-summary.php
   - widget-share.php

**Total Phase 2**: 23 components

---

### **Phase 3: Special Purpose (Priority 3)** 🟢
Nice-to-have components:

1. **Atoms** (3 components)
   - text-block.php
   - highlight-text.php
   - emphasis-text.php

2. **Molecules** (7 components)
   - list-numbered-styled.php
   - list-nested.php
   - tab-section.php
   - progress-bar.php
   - rating-display.php
   - timeline-item.php

3. **Organisms** (4 patterns)
   - cookie-type.php
   - third-party-services.php
   - widget-contact-support.php
   - widget-related-content.php

**Total Phase 3**: 14 components

---

## 📊 **SUMMARY STATISTICS**

| Category | Phase 1 | Phase 2 | Phase 3 | Total |
|---|---|---|---|---|
| **Atoms** | 10 | 7 | 3 | 20 |
| **Molecules** | 8 | 10 | 7 | 25 |
| **Organisms** | 5 | 6 | 4 | 15 |
| **TOTAL** | **23** | **23** | **14** | **60** |

---

## 🚀 **NEXT STEPS**

1. ✅ **Confirm Plan** - Review and approve this extraction plan
2. ⏭️ **Phase 1 Implementation** - Create 23 priority components
3. ⏭️ **Update README** - Document new structure
4. ⏭️ **Update ChatGPT Guide** - Add component usage examples
5. ⏭️ **Test Components** - Create sample article using new components
6. ⏭️ **Phase 2 Implementation** - Create 23 common components
7. ⏭️ **Phase 3 Implementation** - Create 14 special components

---

## 📋 **ARTICLE TYPES & COMPONENT USAGE**

### **Don Bosco Application Guide**
Uses:
- hero-article
- section-standard
- card-numbered (steps)
- list-checkmark (requirements)
- box-info (important notes)
- box-warning (deadlines)
- cta-box (apply now)
- faq-section

### **Thanawya Amma Study Strategy**
Uses:
- hero-article
- section-grid-cards (strategies)
- card-icon (study methods)
- list-ordered (priorities)
- box-tip (study tips)
- box-success (achievements)
- progress-bar (study plan)

### **School Comparison Article**
Uses:
- hero-article
- grid-2col (comparison)
- card-feature (pros/cons)
- list-checkmark (criteria)
- rating-display (ratings)
- section-with-sidebar

### **Career Guidance Article**
Uses:
- hero-article
- section-grid-cards (career paths)
- card-icon (skills needed)
- timeline-item (career progression)
- box-info (industry insights)
- list-feature (opportunities)

---

*Last Updated: October 1, 2025 (Night)*  
*Status: PLAN APPROVED - READY FOR IMPLEMENTATION*  
*Wasla Development Team*
