<?php
/**
 * 404 Error Page Template for Wasla Educational Site
 * Custom error page with Wasla styling and helpful navigation
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<div class="wasla-404-page">
    <!-- 404 Hero Section -->
    <section class="error-hero">
        <div class="wasla-container">
            <div class="error-content">
                <div class="error-illustration">
                    <div class="error-number">404</div>
                    <div class="error-graphics">
                        <div class="floating-shape shape-1"></div>
                        <div class="floating-shape shape-2"></div>
                        <div class="floating-shape shape-3"></div>
                        <i class="bi bi-search error-icon"></i>
                    </div>
                </div>
                
                <div class="error-message">
                    <h1 class="error-title">الصفحة غير موجودة</h1>
                    <p class="error-subtitle">
                        عذراً، لم نتمكن من العثور على الصفحة التي تبحث عنها. 
                        قد تكون الصفحة قد انتقلت أو لم تعد متاحة.
                    </p>
                    <p class="error-help">
                        لا تقلق! يمكنك استخدام الخيارات التالية للعثور على ما تبحث عنه.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Search and Navigation Section -->
    <section class="error-solutions">
        <div class="wasla-container">
            <!-- Search Section -->
            <div class="search-section">
                <h2 class="section-title">
                    <i class="bi bi-search"></i>
                    ابحث عن المحتوى
                </h2>
                <p class="section-subtitle">جرب البحث عن الموضوع الذي تريده</p>
                
                <div class="search-form-container">
                    <form role="search" method="get" class="wasla-search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="search-input-wrapper">
                            <input type="search" 
                                   class="search-field" 
                                   placeholder="ابحث عن المقالات، الأدلة، النصائح..." 
                                   value="<?php echo get_search_query(); ?>" 
                                   name="s" 
                                   autocomplete="off">
                            <button type="submit" class="search-button" aria-label="بحث">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                    
                    <div class="search-suggestions">
                        <span class="suggestions-label">اقتراحات البحث:</span>
                        <div class="suggestion-tags">
                            <a href="<?php echo home_url('/don-bosco'); ?>" class="suggestion-tag">دون بوسكو</a>
                            <a href="<?php echo home_url('/thanawya'); ?>" class="suggestion-tag">الثانوية العامة</a>
                            <a href="<?php echo home_url('/universities'); ?>" class="suggestion-tag">الجامعات</a>
                            <a href="<?php echo home_url('/blog'); ?>" class="suggestion-tag">نصائح الدراسة</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Navigation -->
            <div class="quick-navigation">
                <h2 class="section-title">
                    <i class="bi bi-compass"></i>
                    الصفحات الأكثر زيارة
                </h2>
                
                <div class="navigation-grid">
                    <a href="<?php echo home_url(); ?>" class="nav-card">
                        <div class="nav-icon">
                            <i class="bi bi-house-door"></i>
                        </div>
                        <h3>الصفحة الرئيسية</h3>
                        <p>ابدأ من هنا لاستكشاف جميع خدماتنا التعليمية</p>
                    </a>
                    
                    <a href="<?php echo home_url('/don-bosco'); ?>" class="nav-card">
                        <div class="nav-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h3>دون بوسكو</h3>
                        <p>دليل شامل للتقديم والدراسة في مدرسة دون بوسكو</p>
                    </a>
                    
                    <a href="<?php echo home_url('/thanawya'); ?>" class="nav-card">
                        <div class="nav-icon">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <h3>الثانوية العامة</h3>
                        <p>استراتيجيات المذاكرة ونصائح لتحقيق أعلى الدرجات</p>
                    </a>
                    
                    <a href="<?php echo home_url('/universities'); ?>" class="nav-card">
                        <div class="nav-icon">
                            <i class="bi bi-bank"></i>
                        </div>
                        <h3>التنسيق الجامعي</h3>
                        <p>دليل التنسيق واختيار الكلية المناسبة لمستقبلك</p>
                    </a>
                    
                    <a href="<?php echo get_permalink(get_option('page_for_posts')) ?: home_url('/blog'); ?>" class="nav-card">
                        <div class="nav-icon">
                            <i class="bi bi-journal-bookmark"></i>
                        </div>
                        <h3>المدونة</h3>
                        <p>مقالات ونصائح تعليمية لمساعدتك في رحلتك الدراسية</p>
                    </a>
                    
                    <a href="<?php echo home_url('/contact'); ?>" class="nav-card">
                        <div class="nav-icon">
                            <i class="bi bi-envelope-heart"></i>
                        </div>
                        <h3>اتصل بنا</h3>
                        <p>هل تحتاج مساعدة؟ فريقنا جاهز للإجابة على استفساراتك</p>
                    </a>
                </div>
            </div>

            <!-- Recent Posts Section -->
            <div class="recent-content">
                <h2 class="section-title">
                    <i class="bi bi-clock-history"></i>
                    أحدث المقالات
                </h2>
                
                <div class="recent-posts-grid">
                    <?php
                    $recent_posts = new WP_Query(array(
                        'posts_per_page' => 6,
                        'post_status' => 'publish',
                        'ignore_sticky_posts' => true
                    ));
                    
                    if ($recent_posts->have_posts()) :
                        while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                            <article class="recent-post-card">
                                <div class="post-thumbnail">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium', array('loading' => 'lazy')); ?>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?php the_permalink(); ?>" class="post-placeholder">
                                            <i class="bi bi-journal-text"></i>
                                        </a>
                                    <?php endif; ?>
                                    
                                    <?php 
                                    $categories = get_the_category();
                                    if (!empty($categories)) : ?>
                                        <span class="post-category"><?php echo esc_html($categories[0]->name); ?></span>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <p class="post-excerpt">
                                        <?php echo wp_trim_words(get_the_excerpt() ?: wp_strip_all_tags(get_the_content()), 12, '...'); ?>
                                    </p>
                                    <div class="post-meta">
                                        <span class="post-date">
                                            <i class="bi bi-calendar3"></i>
                                            <?php echo get_the_date('j M Y'); ?>
                                        </span>
                                        <span class="read-time">
                                            <i class="bi bi-clock"></i>
                                            <?php echo max(1, ceil(str_word_count(wp_strip_all_tags(get_the_content())) / 200)); ?> دقائق
                                        </span>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <div class="no-posts-message">
                            <i class="bi bi-journal-x"></i>
                            <p>لا توجد مقالات منشورة حالياً. ترقبوا المحتوى الجديد قريباً!</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Help Section -->
            <div class="help-section">
                <div class="help-card">
                    <div class="help-icon">
                        <i class="bi bi-question-circle"></i>
                    </div>
                    <div class="help-content">
                        <h3>هل تحتاج مساعدة؟</h3>
                        <p>إذا كنت تواجه مشكلة أو لديك استفسار، فريق وصلة جاهز لمساعدتك.</p>
                        <div class="help-actions">
                            <a href="<?php echo home_url('/contact'); ?>" class="help-btn primary">
                                <i class="bi bi-envelope"></i>
                                تواصل معنا
                            </a>
                            <a href="https://wa.me/201234567890" target="_blank" class="help-btn secondary" rel="noopener">
                                <i class="bi bi-whatsapp"></i>
                                واتساب
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* ===== WASLA 404 PAGE STYLES ===== */
.wasla-404-page {
    direction: rtl;
    font-family: 'Cairo', 'Tajawal', Arial, sans-serif;
    margin: 0;
    padding: 0;
    width: 100%;
    background: #ffffff;
    min-height: 100vh;
}

/* ===== ERROR HERO SECTION ===== */
.error-hero {
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    color: white;
    padding: 140px 0 80px;
    margin: 0;
    width: 100%;
    position: relative;
    overflow: hidden;
    text-align: center;
}

.error-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 70%, rgba(255, 244, 183, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.error-content {
    max-width: 800px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.error-illustration {
    margin-bottom: 3rem;
    position: relative;
}

.error-number {
    font-size: 12rem;
    font-weight: 800;
    color: rgba(255, 244, 183, 0.3);
    font-family: 'Cairo', sans-serif;
    line-height: 1;
    margin-bottom: 2rem;
    text-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.error-graphics {
    position: relative;
    display: inline-block;
}

.error-icon {
    font-size: 6rem;
    color: #FFF4B7;
    margin-bottom: 2rem;
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-10px); }
    60% { transform: translateY(-5px); }
}

.floating-shape {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 244, 183, 0.1);
    animation: float 6s ease-in-out infinite;
}

.shape-1 {
    width: 80px;
    height: 80px;
    top: -40px;
    right: -60px;
    animation-delay: 0s;
}

.shape-2 {
    width: 60px;
    height: 60px;
    bottom: -30px;
    left: -50px;
    animation-delay: 2s;
}

.shape-3 {
    width: 100px;
    height: 100px;
    top: -20px;
    left: -80px;
    animation-delay: 4s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    33% { transform: translateY(-15px) rotate(5deg); }
    66% { transform: translateY(-10px) rotate(-3deg); }
}

.error-title {
    font-size: 3.5rem;
    margin-bottom: 1.5rem;
    font-weight: 700;
    font-family: 'Cairo', sans-serif;
    color: #FFF4B7;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.error-subtitle {
    font-size: 1.4rem;
    margin-bottom: 1.5rem;
    opacity: 0.9;
    font-family: 'Tajawal', sans-serif;
    line-height: 1.7;
}

.error-help {
    font-size: 1.2rem;
    opacity: 0.8;
    font-family: 'Tajawal', sans-serif;
    margin-bottom: 0;
}

/* ===== SOLUTIONS SECTION ===== */
.error-solutions {
    padding: 80px 0;
    background: #f8f9fa;
    width: 100%;
}

.section-title {
    font-size: 2.2rem;
    margin-bottom: 1rem;
    color: #000B58;
    font-weight: 700;
    font-family: 'Cairo', sans-serif;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
}

.section-title i {
    color: #006A67;
}

.section-subtitle {
    text-align: center;
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 3rem;
    font-family: 'Tajawal', sans-serif;
}

/* Search Section */
.search-section {
    margin-bottom: 4rem;
    text-align: center;
}

.search-form-container {
    max-width: 600px;
    margin: 0 auto;
}

.search-input-wrapper {
    position: relative;
    display: flex;
    align-items: center;
    background: white;
    border-radius: 50px;
    box-shadow: 0 8px 25px rgba(0, 11, 88, 0.1);
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
    overflow: hidden;
}

.search-input-wrapper:focus-within {
    border-color: #006A67;
    box-shadow: 0 12px 35px rgba(0, 106, 103, 0.15);
    transform: translateY(-2px);
}

.search-field {
    flex: 1;
    padding: 20px 30px;
    border: none;
    background: transparent;
    font-size: 1.1rem;
    font-family: 'Tajawal', sans-serif;
    outline: none;
    color: #333;
}

.search-field::placeholder {
    color: #999;
}

.search-button {
    padding: 20px 25px;
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    border: none;
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 1.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.search-button:hover {
    background: linear-gradient(135deg, #006A67 0%, #000B58 100%);
    transform: scale(1.05);
}

.search-suggestions {
    margin-top: 2rem;
    text-align: center;
}

.suggestions-label {
    font-family: 'Cairo', sans-serif;
    font-weight: 600;
    color: #666;
    margin-left: 1rem;
}

.suggestion-tags {
    display: inline-flex;
    gap: 0.75rem;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 0.5rem;
}

.suggestion-tag {
    background: white;
    color: #666;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    text-decoration: none;
    font-size: 0.9rem;
    font-family: 'Tajawal', sans-serif;
    border: 1px solid #e9ecef;
    transition: all 0.3s ease;
}

.suggestion-tag:hover {
    background: #006A67;
    color: white;
    border-color: #006A67;
    transform: translateY(-2px);
}

/* Navigation Grid */
.quick-navigation {
    margin-bottom: 4rem;
}

.navigation-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.nav-card {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    text-decoration: none;
    color: inherit;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0, 11, 88, 0.08);
    border: 1px solid #f5f5f5;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.nav-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #000B58, #006A67);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.nav-card:hover::before {
    transform: scaleX(1);
}

.nav-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0, 11, 88, 0.15);
}

.nav-icon {
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

.nav-card:hover .nav-icon {
    background: #006A67;
    transform: scale(1.1);
}

.nav-icon i {
    font-size: 2rem;
    color: #000B58;
    transition: color 0.3s ease;
}

.nav-card:hover .nav-icon i {
    color: white;
}

.nav-card h3 {
    font-size: 1.4rem;
    margin-bottom: 1rem;
    color: #000B58;
    font-weight: 600;
    font-family: 'Cairo', sans-serif;
}

.nav-card p {
    color: #666;
    line-height: 1.6;
    margin: 0;
    font-family: 'Tajawal', sans-serif;
}

/* Recent Posts */
.recent-content {
    margin-bottom: 4rem;
}

.recent-posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.recent-post-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 11, 88, 0.08);
    border: 1px solid #f5f5f5;
    transition: all 0.3s ease;
}

.recent-post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 11, 88, 0.12);
}

.post-thumbnail {
    width: 100%;
    height: 180px;
    position: relative;
    overflow: hidden;
}

.post-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.recent-post-card:hover .post-thumbnail img {
    transform: scale(1.05);
}

.post-placeholder {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFF4B7;
    font-size: 3rem;
    text-decoration: none;
}

.post-category {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(0, 11, 88, 0.9);
    color: #FFF4B7;
    padding: 0.3rem 0.7rem;
    border-radius: 12px;
    font-size: 0.8rem;
    font-weight: 600;
    font-family: 'Cairo', sans-serif;
}

.post-content {
    padding: 1.5rem;
}

.post-title {
    font-size: 1.2rem;
    margin-bottom: 0.75rem;
    font-weight: 600;
    line-height: 1.4;
    font-family: 'Cairo', sans-serif;
}

.post-title a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.post-title a:hover {
    color: #006A67;
}

.post-excerpt {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1rem;
    font-family: 'Tajawal', sans-serif;
    font-size: 0.95rem;
}

.post-meta {
    display: flex;
    gap: 1.5rem;
    font-size: 0.85rem;
    color: #999;
    font-family: 'Tajawal', sans-serif;
}

.post-date,
.read-time {
    display: flex;
    align-items: center;
    gap: 0.4rem;
}

.post-date i,
.read-time i {
    color: #006A67;
    font-size: 0.8rem;
}

.no-posts-message {
    grid-column: 1 / -1;
    text-align: center;
    padding: 3rem;
    color: #666;
}

.no-posts-message i {
    font-size: 4rem;
    color: #006A67;
    margin-bottom: 1rem;
}

/* Help Section */
.help-section {
    text-align: center;
}

.help-card {
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    color: white;
    padding: 3rem 2rem;
    border-radius: 25px;
    max-width: 600px;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
}

.help-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 70% 30%, rgba(255, 244, 183, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.help-icon {
    margin-bottom: 1.5rem;
    position: relative;
    z-index: 2;
}

.help-icon i {
    font-size: 3rem;
    color: #FFF4B7;
}

.help-content {
    position: relative;
    z-index: 2;
}

.help-content h3 {
    font-size: 2rem;
    margin-bottom: 1rem;
    font-family: 'Cairo', sans-serif;
    font-weight: 700;
    color: #FFF4B7;
}

.help-content p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    opacity: 0.9;
    font-family: 'Tajawal', sans-serif;
    line-height: 1.6;
}

.help-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.help-btn {
    padding: 15px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-family: 'Cairo', sans-serif;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1rem;
}

.help-btn.primary {
    background: #FFF4B7;
    color: #000B58;
    border: 2px solid #FFF4B7;
}

.help-btn.primary:hover {
    background: white;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(255, 244, 183, 0.3);
}

.help-btn.secondary {
    background: transparent;
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.3);
}

.help-btn.secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    transform: translateY(-3px);
}

/* ===== RESPONSIVE DESIGN ===== */
@media (max-width: 768px) {
    .wasla-container {
        padding: 0 20px;
    }
    
    .error-hero {
        padding: 100px 0 60px;
    }
    
    .error-number {
        font-size: 8rem;
    }
    
    .error-title {
        font-size: 2.5rem;
    }
    
    .error-icon {
        font-size: 4rem;
    }
    
    .error-subtitle {
        font-size: 1.2rem;
    }
    
    .section-title {
        font-size: 1.8rem;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .navigation-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .recent-posts-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .search-input-wrapper {
        flex-direction: column;
        border-radius: 20px;
    }
    
    .search-field {
        padding: 15px 20px;
        border-bottom: 1px solid #e9ecef;
    }
    
    .search-button {
        padding: 15px;
        border-radius: 0 0 18px 18px;
        width: 100%;
    }
    
    .suggestion-tags {
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
    }
    
    .help-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .help-btn {
        width: 100%;
        max-width: 250px;
        justify-content: center;
    }
    
    .floating-shape {
        display: none;
    }
}

@media (max-width: 480px) {
    .error-number {
        font-size: 6rem;
    }
    
    .error-title {
        font-size: 2rem;
    }
    
    .error-subtitle {
        font-size: 1.1rem;
    }
    
    .nav-card {
        padding: 1.5rem;
    }
    
    .nav-icon {
        width: 60px;
        height: 60px;
    }
    
    .nav-icon i {
        font-size: 1.5rem;
    }
    
    .help-card {
        padding: 2rem 1.5rem;
        margin: 0 1rem;
    }
    
    .recent-post-card {
        margin: 0 -10px;
    }
}

/* ===== ANIMATIONS ===== */
.nav-card,
.recent-post-card {
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
    transform: translateY(20px);
}

.nav-card:nth-child(1) { animation-delay: 0.1s; }
.nav-card:nth-child(2) { animation-delay: 0.2s; }
.nav-card:nth-child(3) { animation-delay: 0.3s; }
.nav-card:nth-child(4) { animation-delay: 0.4s; }
.nav-card:nth-child(5) { animation-delay: 0.5s; }
.nav-card:nth-child(6) { animation-delay: 0.6s; }

.recent-post-card:nth-child(1) { animation-delay: 0.1s; }
.recent-post-card:nth-child(2) { animation-delay: 0.2s; }
.recent-post-card:nth-child(3) { animation-delay: 0.3s; }
.recent-post-card:nth-child(4) { animation-delay: 0.4s; }
.recent-post-card:nth-child(5) { animation-delay: 0.5s; }
.recent-post-card:nth-child(6) { animation-delay: 0.6s; }

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<?php get_footer(); ?>