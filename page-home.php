<?php
/**
 * Template Name: Wasla Homepage
 * Description: Modern full-width homepage template for Wasla educational site
 * Uses standard WordPress header/footer structure
 */

get_header(); ?>

<style>
/* Homepage-specific styles */
.wasla-homepage {
    direction: rtl;
    font-family: 'Cairo', 'Tajawal', Arial, sans-serif;
    margin: 0;
    padding: 0;
    width: 100%;
    background: #ffffff;
}

/* Hero Section */
.wasla-hero {
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    color: white;
    padding: 120px 0;
    margin: 0;
    width: 100%;
    position: relative;
    overflow: hidden;
}

.wasla-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 70%, rgba(255, 244, 183, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.hero-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    pointer-events: none;
}

.hero-shapes::before {
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

.hero-shapes::after {
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

.wasla-hero h1 {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    font-weight: 700;
    line-height: 1.2;
    text-align: center;
    font-family: 'Cairo', sans-serif;
    color: white;
}

.wasla-hero .subtitle {
    font-size: 1.6rem;
    margin-bottom: 2.5rem;
    opacity: 0.95;
    font-weight: 400;
    text-align: center;
    font-family: 'Tajawal', sans-serif;
}

.hero-cta-container {
    text-align: center;
}

.wasla-cta {
    display: inline-block;
    background: #FFF4B7;
    color: #000B58;
    padding: 18px 40px;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1.2rem;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    border: none;
    font-family: 'Cairo', sans-serif;
}

.wasla-cta:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(0, 106, 103, 0.25);
    color: #000B58;
    text-decoration: none;
    background: white;
}

/* Features Section */
.wasla-features {
    padding: 100px 0;
    background: #ffffff;
    width: 100%;
    margin: 0;
    position: relative;
}

.wasla-features h2 {
    text-align: center;
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #000B58;
    font-weight: 700;
    font-family: 'Cairo', sans-serif;
}

.section-subtitle {
    text-align: center;
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 4rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    font-family: 'Tajawal', sans-serif;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.feature-card {
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

.feature-card::before {
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

.feature-card:hover::before {
    transform: scaleX(1);
}

.feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0, 11, 88, 0.12);
}

.feature-icon {
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

.feature-card:hover .feature-icon {
    background: #006A67;
    transform: scale(1.1);
}

.feature-icon i {
    font-size: 2rem;
    color: #000B58;
    transition: color 0.3s ease;
}

.feature-card:hover .feature-icon i {
    color: white;
}

.feature-card h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #2c2c2c;
    font-weight: 600;
    font-family: 'Cairo', sans-serif;
}

.feature-card p {
    color: #666;
    line-height: 1.7;
    font-size: 1rem;
    font-family: 'Tajawal', sans-serif;
}

/* Stats Section */
.wasla-stats {
    background: #000B58;
    padding: 80px 0;
    color: white;
    text-align: center;
    position: relative;
}

.wasla-stats::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(0, 106, 103, 0.1) 0%, transparent 100%);
    pointer-events: none;
}

.wasla-stats h2 {
    color: white;
    margin-bottom: 3rem;
    font-size: 2.8rem;
    font-weight: 700;
    position: relative;
    z-index: 2;
    font-family: 'Cairo', sans-serif;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
    position: relative;
    z-index: 2;
}

.stat-item {
    text-align: center;
    padding: 1rem;
}

.stat-number {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
    color: #FFF4B7;
    font-family: 'Cairo', sans-serif;
    line-height: 1;
}

.stat-label {
    font-size: 1.1rem;
    opacity: 0.9;
    color: white;
    font-family: 'Tajawal', sans-serif;
}

/* Content Preview */
.wasla-content-preview {
    padding: 100px 0;
    background: #f8f9fa;
    width: 100%;
    margin: 0;
}

.wasla-content-preview h2 {
    text-align: center;
    margin-bottom: 1rem;
    color: #000B58;
    font-size: 3rem;
    font-weight: 700;
    font-family: 'Cairo', sans-serif;
}

.content-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2.5rem;
    margin-top: 3rem;
}

.content-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0, 11, 88, 0.08);
    transition: all 0.3s ease;
    border: 1px solid #f5f5f5;
}

.content-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 11, 88, 0.12);
}

.content-card-image {
    width: 100%;
    height: 220px;
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFF4B7;
    font-size: 3.5rem;
    position: relative;
}

.content-card-body {
    padding: 2rem;
}

.content-tag {
    background: #FFF4B7;
    color: #000B58;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    display: inline-block;
    margin-bottom: 1rem;
    font-weight: 600;
    border: 1px solid #006A67;
    font-family: 'Cairo', sans-serif;
}

.content-card h3 {
    color: #2c2c2c;
    margin-bottom: 1rem;
    font-size: 1.3rem;
    font-weight: 600;
    line-height: 1.4;
    font-family: 'Cairo', sans-serif;
}

.content-card p {
    color: #666;
    line-height: 1.6;
    font-size: 1rem;
    font-family: 'Tajawal', sans-serif;
}

.content-card-footer {
    padding: 0 2rem 2rem;
    margin-top: 1rem;
}

.read-more {
    color: #006A67;
    text-decoration: none;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
    font-family: 'Cairo', sans-serif;
}

.read-more:hover {
    color: #000B58;
}

/* Final CTA */
.wasla-final-cta {
    background: #FFF4B7;
    padding: 100px 0;
    text-align: center;
    width: 100%;
    margin: 0;
}

.cta-content {
    max-width: 700px;
    margin: 0 auto;
}

.wasla-final-cta h3 {
    font-size: 2.8rem;
    margin-bottom: 1.5rem;
    font-weight: 700;
    color: #000B58;
    font-family: 'Cairo', sans-serif;
}

.wasla-final-cta p {
    font-size: 1.3rem;
    margin-bottom: 2.5rem;
    color: #666;
    line-height: 1.7;
    font-family: 'Tajawal', sans-serif;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-primary {
    background: #000B58;
    color: white;
    padding: 16px 32px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    box-shadow: 0 6px 20px rgba(0, 11, 88, 0.25);
    font-family: 'Cairo', sans-serif;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 11, 88, 0.35);
    color: white;
    text-decoration: none;
    background: #006A67;
}

.btn-secondary {
    background: transparent;
    color: #000B58;
    padding: 16px 32px;
    border: 2px solid #000B58;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    font-family: 'Cairo', sans-serif;
}

.btn-secondary:hover {
    background: #006A67;
    color: white;
    text-decoration: none;
    transform: translateY(-2px);
    border-color: #006A67;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .wasla-hero {
        padding: 80px 0;
    }
    
    .wasla-hero h1 {
        font-size: 2.8rem;
    }
    
    .wasla-hero .subtitle {
        font-size: 1.3rem;
    }
    
    .wasla-features, .wasla-content-preview, .wasla-final-cta {
        padding: 70px 0;
    }
    
    .wasla-features h2, .wasla-content-preview h2 {
        font-size: 2.3rem;
    }
    
    .wasla-final-cta h3 {
        font-size: 2.3rem;
    }
    
    .features-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .content-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    .stat-number {
        font-size: 2.5rem;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
        gap: 1rem;
    }
    
    .btn-primary, .btn-secondary {
        width: 100%;
        max-width: 280px;
    }
}

@media (max-width: 480px) {
    .wasla-hero h1 {
        font-size: 2.2rem;
    }
    
    .wasla-hero .subtitle {
        font-size: 1.1rem;
    }
    
    .wasla-features h2, .wasla-content-preview h2 {
        font-size: 2rem;
    }
    
    .wasla-final-cta h3 {
        font-size: 2rem;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .content-card-image {
        height: 180px;
        font-size: 3rem;
    }
    
    .feature-card {
        padding: 2rem 1.5rem;
    }
}
</style>

<div class="wasla-homepage">
    <!-- Hero Section -->
    <section class="wasla-hero">
        <div class="hero-shapes"></div>
        <div class="wasla-container">
            <h1>وصلة - دليلك التعليمي</h1>
            <p class="subtitle">من غير لف ودوران... نوصلك لمسارك التعليمي الصح</p>
            <div class="hero-cta-container">
                <a href="#features" class="wasla-cta">ابدأ رحلتك التعليمية الآن</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="wasla-features" id="features">
        <div class="wasla-container">
            <h2>ليه تختار وصلة؟</h2>
            <p class="section-subtitle">نوفر لك كل ما تحتاجه لاتخاذ القرار الصحيح في رحلتك التعليمية</p>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <h3>شرح مبسط وواضح</h3>
                    <p>كل المعلومات اللي محتاجها عن المدارس والجامعات مشروحة بطريقة سهلة ومفهومة للطلاب وأولياء الأمور</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-journal-bookmark"></i>
                    </div>
                    <h3>خطط دراسة متقدمة</h3>
                    <p>خطط مذاكرة منظمة وملخصات شاملة مصممة خصيصاً لتساعدك تحقق أفضل النتائج في المراحل التعليمية</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-arrow-clockwise"></i>
                    </div>
                    <h3>معلومات محدثة يومياً</h3>
                    <p>كل المعلومات عن إجراءات التقديم والمواعيد والتنسيق الجامعي محدثة من المصادر الرسمية المعتمدة</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <h3>استشارات تعليمية مجانية</h3>
                    <p>فريق من الخبراء المتخصصين متاح لمساعدتك في اتخاذ القرار المناسب لمستقبلك التعليمي</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="wasla-stats">
        <div class="wasla-container">
            <h2>أرقام تتكلم عن نجاحنا</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">15000+</div>
                    <div class="stat-label">طالب استفاد من خدماتنا</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">دليل ومقال تعليمي</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">مؤسسة تعليمية نغطيها</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">دعم متواصل</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Preview -->
    <section class="wasla-content-preview">
        <div class="wasla-container">
            <h2>أحدث المقالات والأدلة التعليمية</h2>
            <p class="section-subtitle">مصادر موثوقة وشاملة لكل ما يخص رحلتك التعليمية</p>
            <div class="content-grid">
                <article class="content-card">
                    <div class="content-card-image">
                        <i class="bi bi-building"></i>
                    </div>
                    <div class="content-card-body">
                        <span class="content-tag">دون بوسكو</span>
                        <h3>دليل التقديم الشامل في مدرسة دون بوسكو</h3>
                        <p>كل ما تحتاج معرفته عن إجراءات التقديم والأوراق المطلوبة والمواعيد المهمة مع نصائح عملية للنجاح</p>
                    </div>
                    <div class="content-card-footer">
                        <a href="<?php echo home_url('/don-bosco-guide'); ?>" class="read-more">
                            اقرأ المزيد <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                </article>
                <article class="content-card">
                    <div class="content-card-image">
                        <i class="bi bi-book"></i>
                    </div>
                    <div class="content-card-body">
                        <span class="content-tag">الثانوية العامة</span>
                        <h3>استراتيجيات المذاكرة الفعالة للثانوية العامة</h3>
                        <p>نصائح وتقنيات مذاكرة مجربة من خبراء التعليم تساعدك على تحقيق أعلى الدرجات</p>
                    </div>
                    <div class="content-card-footer">
                        <a href="<?php echo home_url('/study-strategies'); ?>" class="read-more">
                            اقرأ المزيد <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                </article>
                <article class="content-card">
                    <div class="content-card-image">
                        <i class="bi bi-bank2"></i>
                    </div>
                    <div class="content-card-body">
                        <span class="content-tag">التنسيق الجامعي</span>
                        <h3>دليل التنسيق الجامعي المحدث لعام 2025</h3>
                        <p>معلومات شاملة عن تنسيق الجامعات مع نصائح لاختيار التخصص المناسب لميولك</p>
                    </div>
                    <div class="content-card-footer">
                        <a href="<?php echo home_url('/university-coordination'); ?>" class="read-more">
                            اقرأ المزيد <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Final Call to Action -->
    <section class="wasla-final-cta">
        <div class="wasla-container">
            <div class="cta-content">
                <h3>مستعد لبدء رحلتك التعليمية؟</h3>
                <p>انضم إلى أكثر من 15 ألف طالب وثقوا في وصلة واختاروا مسارهم التعليمي الصحيح</p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">ابدأ الآن مجاناً</a>
                    <a href="<?php echo home_url('/about'); ?>" class="btn-secondary">تعرف أكثر عنا</a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
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
    document.querySelectorAll('.feature-card, .content-card, .stat-item').forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
        observer.observe(element);
    });

    // Counter animation
    const counters = document.querySelectorAll('.stat-number');
    const animateCounters = () => {
        counters.forEach(counter => {
            const text = counter.textContent;
            if (text === '24/7') return; // Skip 24/7
            
            const target = parseInt(text.replace(/[^\d]/g, ''));
            const suffix = text.replace(/[\d]/g, '');
            let current = 0;
            const increment = target / 30;
            
            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = Math.floor(current) + suffix;
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target + suffix;
                }
            };
            updateCounter();
        });
    };

    // Stats animation observer
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                statsObserver.unobserve(entry.target);
            }
        });
    });

    const statsSection = document.querySelector('.wasla-stats');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }
});
</script>

<?php get_footer(); ?>