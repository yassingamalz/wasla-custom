<?php
/**
 * Template Name: Wasla Contact Page
 * Description: Custom contact page template for Wasla educational site
 * Uses standard WordPress header/footer structure
 */

get_header(); ?>

<style>
/* Contact Page Specific Styles */
.wasla-contact-page {
    direction: rtl;
    font-family: 'Cairo', 'Tajawal', Arial, sans-serif;
    margin: 0;
    padding: 0;
    width: 100%;
    background: #ffffff;
}

/* Contact Hero Section */
.contact-hero {
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    color: white;
    padding: 140px 0 80px; /* Increased top padding for fixed header */
    margin: 0;
    width: 100%;
    position: relative;
    overflow: hidden;
    text-align: center;
}

.contact-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 70%, rgba(255, 244, 183, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.contact-hero-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    pointer-events: none;
}

.contact-hero-shapes::before {
    content: '';
    position: absolute;
    top: 20%;
    right: 10%;
    width: 120px;
    height: 120px;
    background: rgba(255, 244, 183, 0.08);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
}

.contact-hero-shapes::after {
    content: '';
    position: absolute;
    bottom: 30%;
    left: 15%;
    width: 80px;
    height: 80px;
    background: rgba(255, 244, 183, 0.06);
    border-radius: 20px;
    transform: rotate(45deg);
    animation: float 8s ease-in-out infinite reverse;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-15px); }
}

.contact-hero h1 {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    font-weight: 700;
    line-height: 1.2;
    font-family: 'Cairo', sans-serif;
    color: #ffffff;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.contact-hero p {
    font-size: 1.6rem;
    opacity: 0.95;
    font-weight: 400;
    font-family: 'Tajawal', sans-serif;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.7;
}

/* Contact Methods Section */
.contact-methods {
    padding: 100px 0;
    background: #ffffff;
    width: 100%;
    margin: 0;
}

.contact-methods h2 {
    text-align: center;
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #000B58;
    font-weight: 700;
    font-family: 'Cairo', sans-serif;
}

.contact-methods-subtitle {
    text-align: center;
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 4rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    font-family: 'Tajawal', sans-serif;
}

.contact-methods-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.contact-method-card {
    background: white;
    padding: 2.5rem 2rem;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 5px 25px rgba(0, 11, 88, 0.08);
    transition: all 0.3s ease;
    border: 1px solid #f5f5f5;
    position: relative;
    overflow: hidden;
}

.contact-method-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: #006A67;
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.contact-method-card:hover::before {
    transform: scaleX(1);
}

.contact-method-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0, 11, 88, 0.12);
}

.contact-method-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 1.5rem;
    background: rgba(0, 106, 103, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.contact-method-card:hover .contact-method-icon {
    background: #006A67;
    transform: scale(1.1);
}

.contact-method-icon i {
    font-size: 2rem;
    color: #000B58;
    transition: color 0.3s ease;
}

.contact-method-card:hover .contact-method-icon i {
    color: white;
}

.contact-method-card h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #2c2c2c;
    font-weight: 600;
    font-family: 'Cairo', sans-serif;
}

.contact-method-card p {
    color: #666;
    line-height: 1.7;
    font-size: 1rem;
    font-family: 'Tajawal', sans-serif;
    margin-bottom: 1.5rem;
}

.contact-method-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: #006A67;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    font-family: 'Cairo', sans-serif;
}

.contact-method-link:hover {
    color: #000B58;
    transform: translateX(5px);
}

/* Contact Form Section */
.contact-form-section {
    padding: 60px 0;
    background: white;
    width: 100%;
    margin: 0;
}

.contact-form-container {
    max-width: 800px;
    margin: 0 auto;
    background: white;
    padding: 2rem;
    border-radius: 25px;
    box-shadow: 0 10px 40px rgba(0, 11, 88, 0.1);
    border: 1px solid #f0f0f0;
}

.contact-form-section h2 {
    text-align: center;
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #000B58;
    font-weight: 700;
    font-family: 'Cairo', sans-serif;
}

.contact-form-subtitle {
    text-align: center;
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 3rem;
    font-family: 'Tajawal', sans-serif;
}

.contact-form {
    display: grid;
    gap: 1.5rem;
}

.form-group {
    position: relative;
}

.form-group.half {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #333;
    font-family: 'Cairo', sans-serif;
    font-size: 1rem;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 15px 20px;
    border: 2px solid #e9ecef;
    border-radius: 15px;
    font-size: 1rem;
    font-family: 'Tajawal', sans-serif;
    transition: all 0.3s ease;
    background: #fafafa;
    outline: none;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    border-color: #006A67;
    background: white;
    box-shadow: 0 0 0 3px rgba(0, 106, 103, 0.1);
    transform: translateY(-2px);
}

.form-group textarea {
    resize: vertical;
    min-height: 120px;
    line-height: 1.6;
}

.form-group select {
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23666' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
    background-position: left 20px center;
    background-repeat: no-repeat;
    background-size: 16px 12px;
    padding-left: 50px;
}

.form-submit {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 2rem;
}

.btn-submit {
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    color: white;
    padding: 18px 40px;
    border: none;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(0, 11, 88, 0.25);
    font-family: 'Cairo', sans-serif;
    min-width: 200px;
}

.btn-submit:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(0, 11, 88, 0.35);
}

.btn-submit:active {
    transform: translateY(0);
}

.btn-reset {
    background: transparent;
    color: #666;
    padding: 18px 40px;
    border: 2px solid #ddd;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: 'Cairo', sans-serif;
    min-width: 200px;
}

.btn-reset:hover {
    background: #f8f9fa;
    border-color: #006A67;
    color: #006A67;
    transform: translateY(-2px);
}

/* FAQ Section */
.faq-section {
    padding: 100px 0;
    background: white;
    width: 100%;
    margin: 0;
}

.faq-section h2 {
    text-align: center;
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #000B58;
    font-weight: 700;
    font-family: 'Cairo', sans-serif;
}

.faq-subtitle {
    text-align: center;
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 4rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    font-family: 'Tajawal', sans-serif;
}

.faq-container {
    max-width: 900px;
    margin: 0 auto;
}

.faq-item {
    background: white;
    margin-bottom: 1.5rem;
    border-radius: 15px;
    box-shadow: 0 3px 15px rgba(0, 11, 88, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
    border: 1px solid #f5f5f5;
}

.faq-item:hover {
    box-shadow: 0 8px 25px rgba(0, 11, 88, 0.15);
}

.faq-question {
    padding: 2rem;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: white;
    border: none;
    width: 100%;
    text-align: right;
    font-size: 1.2rem;
    font-weight: 600;
    color: #333;
    font-family: 'Cairo', sans-serif;
    transition: all 0.3s ease;
}

.faq-question:hover {
    background: #f8f9fa;
    color: #006A67;
}

.faq-question.active {
    background: #FFF4B7;
    color: #000B58;
}

.faq-icon {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #006A67;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    flex-shrink: 0;
    margin-left: 1rem;
}

.faq-question.active .faq-icon {
    background: #000B58;
    transform: rotate(180deg);
}

.faq-icon i {
    color: white;
    font-size: 0.9rem;
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: all 0.4s ease;
}

.faq-answer.active {
    max-height: 200px;
}

.faq-answer-content {
    padding: 0 2rem 2rem;
    color: #666;
    line-height: 1.7;
    font-size: 1rem;
    font-family: 'Tajawal', sans-serif;
}

/* Success/Error Messages */
.form-message {
    padding: 1rem 1.5rem;
    border-radius: 10px;
    margin-bottom: 1.5rem;
    font-family: 'Tajawal', sans-serif;
    font-weight: 500;
}

.form-message.success {
    background: #d4edda;
    border: 1px solid #c3e6cb;
    color: #155724;
}

.form-message.error {
    background: #f8d7da;
    border: 1px solid #f5c6cb;
    color: #721c24;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .contact-hero {
        padding: 100px 0 60px;
    }
    
    .contact-hero h1 {
        font-size: 2.8rem;
    }
    
    .contact-hero p {
        font-size: 1.3rem;
    }
    
    .contact-methods,
    .contact-form-section,
    .faq-section {
        padding: 40px 0;
    }
    
    .contact-methods h2,
    .contact-form-section h2,
    .faq-section h2 {
        font-size: 2.3rem;
    }
    
    .contact-methods-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .contact-form-container {
        padding: 1.5rem 1rem;
        margin: 0 1rem;
    }
    
    .form-group.half {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .form-submit {
        flex-direction: column;
        align-items: center;
    }
    
    .btn-submit,
    .btn-reset {
        width: 100%;
        max-width: 300px;
    }
    
    .faq-question {
        padding: 1.5rem;
        font-size: 1.1rem;
    }
    
    .faq-answer-content {
        padding: 0 1.5rem 1.5rem;
    }
}

@media (max-width: 480px) {
    .contact-hero h1 {
        font-size: 2.2rem;
    }
    
    .contact-hero p {
        font-size: 1.1rem;
    }
    
    .contact-methods h2,
    .contact-form-section h2,
    .faq-section h2 {
        font-size: 2rem;
    }
    
    .contact-method-card {
        padding: 1.5rem 1rem;
    }
    
    .contact-form-container {
        padding: 1rem 0.75rem;
    }
    
    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 12px 15px;
    }
    
    .form-group select {
        padding-left: 40px;
    }
}
</style>

<div class="wasla-contact-page">
    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="contact-hero-shapes"></div>
        <div class="wasla-container">
            <h1>تواصل معنا</h1>
            <p>نحن هنا لمساعدتك في كل خطوة من رحلتك التعليمية. تواصل معنا بأي طريقة تناسبك وسنرد عليك في أسرع وقت ممكن.</p>
        </div>
    </section>

    <!-- Contact Methods Section -->
    <section class="contact-methods">
        <div class="wasla-container">
            <h2>طرق التواصل المختلفة</h2>
            <p class="contact-methods-subtitle">اختر الطريقة الأنسب لك للتواصل مع فريق وصلة</p>
            <div class="contact-methods-grid">
                <div class="contact-method-card">
                    <div class="contact-method-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h3>البريد الإلكتروني</h3>
                    <p>راسلنا على بريدنا الإلكتروني وسنرد عليك خلال 24 ساعة</p>
                    <a href="mailto:info@wasla-eg.com" class="contact-method-link">
                        info@wasla-eg.com <i class="bi bi-arrow-left"></i>
                    </a>
                </div>
                <div class="contact-method-card">
                    <div class="contact-method-icon">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <h3>واتساب</h3>
                    <p>تواصل معنا مباشرة عبر الواتساب للاستشارات السريعة</p>
                    <a href="https://wa.me/201234567890" target="_blank" class="contact-method-link">
                        +20 123 456 7890 <i class="bi bi-arrow-left"></i>
                    </a>
                </div>
                <div class="contact-method-card">
                    <div class="contact-method-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h3>الهاتف</h3>
                    <p>اتصل بنا مباشرة من السبت للخميس من 9 صباحاً حتى 6 مساءً</p>
                    <a href="tel:+201234567890" class="contact-method-link">
                        +20 123 456 7890 <i class="bi bi-arrow-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="wasla-container">
            <div class="contact-form-container">
                <h2>أرسل لنا رسالة</h2>
                <p class="contact-form-subtitle">املأ النموذج التالي وسنتواصل معك في أقرب وقت ممكن</p>
                
                <form class="contact-form" method="post" action="">
                    <?php 
                    // Display any form messages
                    echo wasla_get_contact_form_message();
                    
                    // Add nonce for security
                    wp_nonce_field('wasla_contact_form', 'wasla_contact_nonce');
                    ?>
                    
                    <div class="form-group half">
                        <div>
                            <label for="name">الاسم الكامل *</label>
                            <input type="text" id="name" name="name" required 
                                   placeholder="اكتب اسمك الكامل" 
                                   value="<?php echo wasla_get_contact_form_value('name'); ?>">
                        </div>
                        <div>
                            <label for="email">البريد الإلكتروني *</label>
                            <input type="email" id="email" name="email" required 
                                   placeholder="example@email.com"
                                   value="<?php echo wasla_get_contact_form_value('email'); ?>">
                        </div>
                    </div>
                    
                    <div class="form-group half">
                        <div>
                            <label for="phone">رقم الهاتف</label>
                            <input type="tel" id="phone" name="phone" 
                                   placeholder="+20 123 456 7890"
                                   value="<?php echo wasla_get_contact_form_value('phone'); ?>">
                        </div>
                        <div>
                            <label for="inquiry_type">نوع الاستفسار</label>
                            <select id="inquiry_type" name="inquiry_type">
                                <option value="">اختر نوع الاستفسار</option>
                                <option value="don_bosco" <?php selected(wasla_get_contact_form_value('inquiry_type'), 'don_bosco'); ?>>دون بوسكو</option>
                                <option value="thanawya" <?php selected(wasla_get_contact_form_value('inquiry_type'), 'thanawya'); ?>>الثانوية العامة</option>
                                <option value="universities" <?php selected(wasla_get_contact_form_value('inquiry_type'), 'universities'); ?>>الجامعات</option>
                                <option value="consultation" <?php selected(wasla_get_contact_form_value('inquiry_type'), 'consultation'); ?>>استشارة تعليمية</option>
                                <option value="technical" <?php selected(wasla_get_contact_form_value('inquiry_type'), 'technical'); ?>>مشكلة تقنية</option>
                                <option value="other" <?php selected(wasla_get_contact_form_value('inquiry_type'), 'other'); ?>>أخرى</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">موضوع الرسالة *</label>
                        <input type="text" id="subject" name="subject" required 
                               placeholder="اكتب موضوع رسالتك"
                               value="<?php echo wasla_get_contact_form_value('subject'); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">الرسالة *</label>
                        <textarea id="message" name="message" required 
                                  placeholder="اكتب رسالتك هنا... كن مفصلاً قدر الإمكان لنتمكن من مساعدتك بأفضل شكل"><?php echo wasla_get_contact_form_value('message'); ?></textarea>
                    </div>
                    
                    <div class="form-submit">
                        <button type="submit" name="wasla_contact_submit" class="btn-submit">
                            <i class="bi bi-send"></i> إرسال الرسالة
                        </button>
                        <button type="reset" class="btn-reset">
                            <i class="bi bi-arrow-clockwise"></i> مسح البيانات
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="wasla-container">
            <h2>الأسئلة الشائعة</h2>
            <p class="faq-subtitle">إجابات على أكثر الأسئلة التي يطرحها الطلاب وأولياء الأمور</p>
            <div class="faq-container">
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        <span>كيف يمكنني الحصول على استشارة تعليمية مجانية؟</span>
                        <div class="faq-icon">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            يمكنك التواصل معنا عبر أي من الطرق المتاحة (البريد الإلكتروني، الواتساب، أو الهاتف) وطلب استشارة مجانية. سيقوم أحد خبرائنا بالتواصل معك لتحديد موعد مناسب للاستشارة.
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        <span>هل المعلومات الموجودة على موقع وصلة محدثة؟</span>
                        <div class="faq-icon">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            نعم، نحن نحرص على تحديث جميع المعلومات بشكل دوري من المصادر الرسمية المعتمدة. كما نقوم بمراجعة المحتوى بانتظام للتأكد من دقته وحداثته.
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        <span>كم يستغرق الرد على استفساراتي؟</span>
                        <div class="faq-icon">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            نحن نحرص على الرد على جميع الاستفسارات خلال 24 ساعة كحد أقصى. في حالة الاستشارات العاجلة، يمكنك التواصل معنا عبر الواتساب للحصول على رد أسرع.
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        <span>هل يمكنني طلب مقال عن موضوع معين؟</span>
                        <div class="faq-icon">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            بالطبع! نرحب بطلبات المحتوى من زوارنا. أرسل لنا اقتراحك للموضوع وسنعمل على إعداد محتوى شامل ومفيد حوله في أقرب وقت ممكن.
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFAQ(this)">
                        <span>هل خدمات وصلة مجانية بالكامل؟</span>
                        <div class="faq-icon">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            جميع المحتوى والاستشارات الأساسية على موقع وصلة مجانية تماماً. هدفنا هو مساعدة أكبر عدد من الطلاب وأولياء الأمور في اتخاذ القرارات التعليمية الصحيحة.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form validation and enhancements
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const requiredFields = contactForm.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = '#dc3545';
                    isValid = false;
                } else {
                    field.style.borderColor = '#e9ecef';
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('يرجى ملء جميع الحقول المطلوبة');
            }
        });
    }
    
    // Form field enhancements
    const formInputs = document.querySelectorAll('.contact-form input, .contact-form select, .contact-form textarea');
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
    });
    
    // Scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, observerOptions);

    // Observe elements
    document.querySelectorAll('.contact-method-card, .faq-item').forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
        observer.observe(element);
    });
});

// FAQ Toggle Function
function toggleFAQ(button) {
    const faqItem = button.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    const isActive = button.classList.contains('active');
    
    // Close all other FAQs
    document.querySelectorAll('.faq-question.active').forEach(activeQuestion => {
        if (activeQuestion !== button) {
            activeQuestion.classList.remove('active');
            activeQuestion.parentElement.querySelector('.faq-answer').classList.remove('active');
        }
    });
    
    // Toggle current FAQ
    if (isActive) {
        button.classList.remove('active');
        answer.classList.remove('active');
    } else {
        button.classList.add('active');
        answer.classList.add('active');
    }
}
</script>

<?php get_footer(); ?>