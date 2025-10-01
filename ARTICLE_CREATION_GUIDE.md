# 📝 WASLA ARTICLE CREATION GUIDE

## 🎯 **PURPOSE**
Convert any educational content into professional WordPress articles using Wasla block patterns.

---

## 🤖 **CHATGPT PROMPT TEMPLATE**

Copy this prompt to ChatGPT with your content:

```
I need you to convert the following content into a WordPress Gutenberg article using Wasla block patterns.

**ARTICLE CONTENT:**
[PASTE YOUR CONTENT HERE]

**OUTPUT REQUIREMENTS:**

1. **Format**: WordPress Gutenberg blocks (HTML comments format)
2. **Style**: Use Wasla brand colors:
   - Primary: #000B58 (Deep Navy)
   - Secondary: #006A67 (Teal)
   - Accent: #FFF4B7 (Cream)
   - Background: #f0f8ff (Light Blue)

3. **Structure**:
   - Introduction box (with 📖 icon)
   - Main headings with H2 (with emojis like ✨, 📊, 🎯)
   - Sub-headings with H3 (with emojis)
   - Tip boxes (💡) with cream background (#FFF4B7)
   - Images with captions (use placeholder: https://placehold.co/1200x600/000B58/FFF4B7?text=)
   - FAQ section (❓) with questions
   - Call-to-action box at end (🚀) with navy background
   - Keywords section at very end (🏷️)

4. **Components to Use**:
   - Article introduction group (rounded, light blue background)
   - Tip boxes (left border teal, cream background)
   - FAQ items (gray background, rounded)
   - Action box (navy background, white text, centered)
   - Images (wide alignment with captions)
   - Lists (ordered and unordered)
   - Tables for comparisons (if needed)

5. **Block Pattern Format**:
```html
<!-- wp:group {"className":"article-introduction","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group article-introduction has-background" style="border-radius:12px;background-color:#f0f8ff;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">📖 نظرة عامة</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Introduction text here...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

6. **Important Rules**:
   - All text in Arabic RTL
   - Use emojis in headings
   - Add spacers between sections (1-2rem)
   - Images must have alt text and captions
   - FAQ must have question/answer format
   - End with action box and keywords
   - Use semantic HTML
   - Mobile-responsive styling

**EXAMPLE OUTPUT FORMAT:**

[Show the complete Gutenberg blocks HTML that I can copy directly into WordPress editor]

**CONTENT STRUCTURE:**
- Introduction (📖)
- Main sections (✨, 📊, 🎯)
- Sub-sections with details
- Visual elements (images, tables)
- Tip boxes (💡) where helpful
- FAQ section (❓)
- Call-to-action (🚀)
- Keywords (🏷️)

Convert the content above following these exact specifications.
```

---

## 📋 **STEP-BY-STEP PROCESS**

### **Step 1: Prepare Your Content**
- Write or collect your article content
- Organize into sections
- Identify key points for tip boxes
- Note FAQ questions

### **Step 2: Use ChatGPT**
1. Copy the prompt template above
2. Replace `[PASTE YOUR CONTENT HERE]` with your content
3. Send to ChatGPT
4. Get formatted WordPress blocks

### **Step 3: Add to WordPress**
1. Go to Posts → Add New
2. Title your article
3. Click the "⋮" menu → Code editor
4. Paste the entire ChatGPT output
5. Switch back to Visual editor
6. Preview and adjust

### **Step 4: Finalize**
1. Add featured image
2. Set category
3. Add tags
4. Set SEO settings (Yoast/RankMath)
5. Publish!

---

## 🎨 **WASLA BLOCK PATTERNS REFERENCE**

### **1. Introduction Box**
```html
<!-- wp:group {"className":"article-introduction","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#f0f8ff"}}} -->
<div class="wp-block-group article-introduction has-background" style="border-radius:12px;background-color:#f0f8ff;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":2,"style":{"color":{"text":"#000B58"}}} -->
<h2 style="color:#000B58">📖 نظرة عامة</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Your introduction text here...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

### **2. Tip Box**
```html
<!-- wp:group {"className":"wasla-tip-box","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","left":{"color":"#006A67","width":"4px"}},"color":{"background":"#FFF4B7"}}} -->
<div class="wp-block-group wasla-tip-box has-background" style="border-radius:8px;border-left-color:#006A67;border-left-width:4px;background-color:#FFF4B7;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:paragraph {"className":"tip-icon-text","style":{"typography":{"fontWeight":"700"}}} -->
<p class="tip-icon-text" style="font-weight:700">💡 نصيحة ذهبية:</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Your tip text here...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

### **3. FAQ Item**
```html
<!-- wp:group {"className":"wasla-faq-item","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"},"color":{"background":"#f8f9fa"}}} -->
<div class="wp-block-group wasla-faq-item has-background" style="border-radius:8px;background-color:#f8f9fa;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"className":"faq-question","style":{"color":{"text":"#000B58"},"typography":{"fontSize":"1.2rem"}}} -->
<h3 class="faq-question" style="color:#000B58;font-size:1.2rem">🔸 السؤال هنا؟</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"faq-answer"} -->
<p class="faq-answer">الإجابة هنا...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

### **4. Action Box (Call-to-Action)**
```html
<!-- wp:group {"className":"wasla-action-box","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"12px"},"color":{"background":"#000B58"}}} -->
<div class="wp-block-group wasla-action-box has-background" style="border-radius:12px;background-color:#000B58;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"level":3,"textAlign":"center","style":{"color":{"text":"#FFF4B7"}}} -->
<h3 class="has-text-align-center" style="color:#FFF4B7">🚀 الخطوة التالية</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#ffffff"}}} -->
<p class="has-text-align-center" style="color:#ffffff">دعوة للعمل...</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

### **5. Image with Caption**
```html
<!-- wp:image {"align":"wide","className":"wasla-article-image"} -->
<figure class="wp-block-image alignwide wasla-article-image">
<img src="https://placehold.co/1200x600/000B58/FFF4B7?text=صورة+توضيحية" alt="Alt text"/>
<figcaption>صورة توضيحية تشرح الموضوع</figcaption>
</figure>
<!-- /wp:image -->
```

### **6. Spacer**
```html
<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
```

---

## 💡 **TIPS FOR BEST RESULTS**

### **Content Quality**
- Write clear, engaging Arabic text
- Use bullet points for easy scanning
- Add relevant examples
- Include statistics or data
- Address common questions

### **SEO Optimization**
- Use keyword in first paragraph
- Add keyword variations throughout
- Optimize image alt text
- Add internal links to related articles
- Write compelling meta description

### **Visual Appeal**
- Use emojis in headings (📖 ✨ 🎯 💡 ❓ 🚀)
- Break long paragraphs into shorter ones
- Add images every 3-4 paragraphs
- Use tip boxes for important points
- Include tables for comparisons

### **User Experience**
- Start with clear introduction
- Use descriptive sub-headings
- Provide actionable advice
- End with clear call-to-action
- Add FAQ section

---

## 🎯 **EXAMPLE: DON BOSCO ARTICLE**

**Input Content:**
```
Title: طريقة التقديم في Don Bosco خطوة بخطوة 2026

Content:
- مقدمة عن معهد السالزيان
- شروط التقديم
- الأوراق المطلوبة
- خطوات التقديم
- الأسئلة الشائعة
```

**ChatGPT Output:**
[Complete Gutenberg blocks formatted for WordPress]

---

## 📊 **QUALITY CHECKLIST**

Before publishing, verify:

- [ ] Introduction box at top
- [ ] All headings have emojis
- [ ] Images have alt text and captions
- [ ] Tip boxes used appropriately
- [ ] FAQ section included
- [ ] Call-to-action at end
- [ ] Keywords listed at bottom
- [ ] Proper spacing between sections
- [ ] Wasla brand colors used
- [ ] Mobile-responsive (preview on phone)
- [ ] SEO optimized (title, meta, keywords)
- [ ] Internal links added
- [ ] Featured image set
- [ ] Category and tags assigned

---

## 🚀 **PRODUCTION WORKFLOW**

### **Daily Content Creation**
1. Morning: Research and outline (1 hour)
2. Writing: Create content (2 hours)
3. ChatGPT: Convert to WordPress (10 minutes)
4. WordPress: Add and format (20 minutes)
5. Review: Check and publish (10 minutes)

**Total**: ~3.5 hours per article

### **Batch Processing**
1. Write 5-10 articles in advance
2. Convert all at once using ChatGPT
3. Schedule publishing over 2-3 weeks
4. Monitor performance and adjust

### **Quality Control**
- Review every 5th article thoroughly
- A/B test different structures
- Track engagement metrics
- Adjust based on feedback

---

## 📖 **ADDITIONAL RESOURCES**

### **WordPress Gutenberg Blocks**
- [Official Gutenberg Handbook](https://developer.wordpress.org/block-editor/)
- [Block Pattern Directory](https://wordpress.org/patterns/)

### **SEO Best Practices**
- Use Yoast SEO or Rank Math plugin
- Target 1-2 focus keywords per article
- Write 800-1500 word articles
- Add meta descriptions (155 characters)
- Use schema markup

### **Content Ideas**
- Don Bosco application guides
- Thanawya Amma study tips
- University coordination processes
- Career guidance articles
- School comparisons
- Student success stories

---

## ⚠️ **IMPORTANT NOTES**

1. **Always preview** before publishing
2. **Test on mobile** (50%+ of traffic)
3. **Add internal links** to related articles
4. **Update old articles** as needed
5. **Monitor analytics** (Google Analytics)
6. **Engage with comments** (respond within 24h)
7. **Backup regularly** (daily automated backups)

---

## 🎉 **SUCCESS METRICS**

Track these KPIs:
- Articles published per week (target: 2-3)
- Average word count (target: 800-1500)
- Time to publish (target: <4 hours)
- Engagement rate (target: >2 minutes)
- Bounce rate (target: <60%)
- Internal link clicks (target: >10%)

---

*Last Updated: October 1, 2025*  
*Version: 1.0*  
*Wasla Content Team*
