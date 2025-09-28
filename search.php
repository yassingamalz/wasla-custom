<?php
/**
 * Search Results Template for Wasla Educational Site
 * Displays search results with beautiful Wasla styling
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<style>
/* Search Results Page Styles */
.wasla-search-page {
    direction: rtl;
    font-family: 'Cairo', 'Tajawal', Arial, sans-serif;
    margin: 0;
    padding: 0;
    width: 100%;
    background: #ffffff;
    min-height: 100vh;
}

/* Search Hero Section */
.search-hero {
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    color: white;
    padding: 140px 0 80px; /* Top padding for fixed header */
    margin: 0;
    width: 100%;
    position: relative;
    overflow: hidden;
    text-align: center;
}

.search-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 70%, rgba(255, 244, 183, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.search-hero .wasla-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 30px;
    position: relative;
    z-index: 2;
}

/* Breadcrumb Navigation */
.search-breadcrumb {
    margin-bottom: 2rem;
    font-size: 0.9rem;
}

.search-breadcrumb a {
    color: rgba(255, 244, 183, 0.9);
    text-decoration: none;
    transition: color 0.3s ease;
}

.search-breadcrumb a:hover {
    color: #FFF4B7;
}

.breadcrumb-separator {
    margin: 0 0.5rem;
    color: rgba(255, 244, 183, 0.6);
}

.breadcrumb-current {
    color: #FFF4B7;
}

/* Search Header */
.search-header h1 {
    font-size: 2.8rem;
    margin-bottom: 1rem;
    font-weight: 700;
    line-height: 1.2;
    font-family: 'Cairo', sans-serif;
    color: #ffffff;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.search-query {
    color: #FFF4B7;
    font-weight: 800;
}

.search-description {
    font-size: 1.2rem;
    opacity: 0.9;
    margin-bottom: 2rem;
    font-family: 'Tajawal', sans-serif;
}

/* Enhanced Search Form */
.enhanced-search-form {
    max-width: 600px;
    margin: 0 auto;
    position: relative;
}

.search-input-container {
    position: relative;
    display: flex;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 244, 183, 0.3);
    border-radius: 50px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.search-input-container:hover {
    border-color: rgba(255, 244, 183, 0.6);
    background: rgba(255, 255, 255, 0.2);
}

.search-input-container input {
    flex: 1;
    padding: 1rem 1.5rem;
    border: none;
    background: transparent;
    color: white;
    font-size: 1.1rem;
    font-family: 'Tajawal', sans-serif;
}

.search-input-container input::placeholder {
    color: rgba(255, 244, 183, 0.8);
}

.search-input-container input:focus {
    outline: none;
}

.search-input-container button {
    padding: 1rem 2rem;
    background: #FFF4B7;
    color: #000B58;
    border: none;
    font-weight: 600;
    font-family: 'Cairo', sans-serif;
    cursor: pointer;
    transition: all 0.3s ease;
}

.search-input-container button:hover {
    background: #ffffff;
    transform: translateY(-2px);
}

/* Search Results Section */
.search-results {
    padding: 80px 0;
    background: #ffffff;
    width: 100%;
    margin: 0;
}

.search-main-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 30px;
}

/* Results Header */
.results-header {
    margin-bottom: 3rem;
    text-align: center;
    padding: 2rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    border-radius: 15px;
    border: 1px solid #e9ecef;
}

.results-header h2 {
    font-size: 1.8rem;
    color: #000B58;
    margin-bottom: 0.5rem;
    font-family: 'Cairo', sans-serif;
    font-weight: 700;
}

.results-meta {
    color: #666;
    font-size: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
}

.results-count {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    background: #006A67;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: 600;
}

/* Search Results Grid */
.search-results-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.search-result-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 11, 88, 0.05);
    overflow: hidden;
    transition: all 0.3s ease;
    border: 1px solid #f0f0f0;
}

.search-result-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 11, 88, 0.15);
    border-color: #006A67;
}

.result-thumbnail {
    position: relative;
    height: 200px;
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.result-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.result-thumbnail .post-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    color: rgba(255, 244, 183, 0.8);
    font-size: 3rem;
    text-decoration: none;
}

.search-result-card:hover .result-thumbnail img {
    transform: scale(1.05);
}

.result-category {
    position: absolute;
    top: 15px;
    right: 15px;
    background: rgba(255, 244, 183, 0.9);
    color: #000B58;
    padding: 0.3rem 0.8rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.result-content {
    padding: 1.5rem;
}

.result-meta {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
    font-size: 0.9rem;
    color: #666;
}

.result-meta-item {
    display: flex;
    align-items: center;
    gap: 0.3rem;
}

.result-meta-item i {
    color: #006A67;
    font-size: 0.8rem;
}

.result-title {
    margin: 0 0 1rem 0;
    font-size: 1.3rem;
    font-weight: 700;
    line-height: 1.4;
    font-family: 'Cairo', sans-serif;
}

.result-title a {
    color: #000B58;
    text-decoration: none;
    transition: color 0.3s ease;
}

.result-title a:hover {
    color: #006A67;
}

.result-excerpt {
    color: #555;
    line-height: 1.6;
    margin-bottom: 1rem;
    font-family: 'Tajawal', sans-serif;
}

.result-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 1rem;
    border-top: 1px solid #f0f0f0;
}

.read-more-btn {
    background: linear-gradient(135deg, #006A67 0%, #000B58 100%);
    color: white;
    padding: 0.6rem 1.2rem;
    border-radius: 20px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.read-more-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 106, 103, 0.3);
    color: white;
}

/* No Results Section */
.no-results {
    text-align: center;
    padding: 4rem 2rem;
    background: #f8f9fa;
    border-radius: 15px;
    margin: 2rem 0;
}

.no-results-icon {
    font-size: 4rem;
    color: #006A67;
    margin-bottom: 1.5rem;
}

.no-results h2 {
    font-size: 2rem;
    color: #000B58;
    margin-bottom: 1rem;
    font-family: 'Cairo', sans-serif;
}

.no-results p {
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 2rem;
    font-family: 'Tajawal', sans-serif;
}

.search-suggestions {
    background: white;
    padding: 2rem;
    border-radius: 10px;
    margin-top: 2rem;
    border: 1px solid #e9ecef;
}

.search-suggestions h3 {
    color: #000B58;
    margin-bottom: 1rem;
    font-family: 'Cairo', sans-serif;
}

.suggestion-list {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
    justify-content: center;
}

.suggestion-item {
    background: #f8f9fa;
    color: #006A67;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    text-decoration: none;
    transition: all 0.3s ease;
    font-weight: 600;
}

.suggestion-item:hover {
    background: #006A67;
    color: white;
}

/* Pagination */
.search-pagination {
    margin-top: 3rem;
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.search-pagination a,
.search-pagination span {
    padding: 0.8rem 1.2rem;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: 2px solid #e9ecef;
}

.search-pagination a {
    background: white;
    color: #000B58;
}

.search-pagination a:hover {
    background: #006A67;
    color: white;
    border-color: #006A67;
}

.search-pagination .current {
    background: linear-gradient(135deg, #006A67 0%, #000B58 100%);
    color: white;
    border-color: transparent;
}

/* Responsive Design */
@media (max-width: 768px) {
    .search-hero {
        padding: 120px 0 60px;
    }
    
    .search-hero .wasla-container {
        padding: 0 20px;
    }
    
    .search-header h1 {
        font-size: 2.2rem;
    }
    
    .search-results-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .search-main-container {
        padding: 0 20px;
    }
    
    .search-input-container input {
        font-size: 1rem;
        padding: 0.8rem 1.2rem;
    }
    
    .search-input-container button {
        padding: 0.8rem 1.5rem;
        font-size: 0.9rem;
    }
    
    .results-meta {
        flex-direction: column;
        gap: 0.5rem;
    }
}

@media (max-width: 480px) {
    .search-header h1 {
        font-size: 1.8rem;
    }
    
    .search-description {
        font-size: 1rem;
    }
    
    .result-content {
        padding: 1rem;
    }
    
    .result-title {
        font-size: 1.1rem;
    }
}
</style>

<div class="wasla-search-page">
    <!-- Search Hero Section -->
    <section class="search-hero">
        <div class="wasla-container">
            <!-- Breadcrumb Navigation -->
            <nav class="search-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">الرئيسية</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current">نتائج البحث</span>
            </nav>
            
            <!-- Search Header -->
            <div class="search-header">
                <h1>
                    نتائج البحث عن: <span class="search-query">"<?php echo get_search_query(); ?>"</span>
                </h1>
                <p class="search-description">
                    البحث في محتوى وصلة التعليمي للعثور على أفضل النصائح والإرشادات
                </p>
                
                <!-- Enhanced Search Form -->
                <form class="enhanced-search-form" method="get" action="<?php echo home_url('/'); ?>">
                    <div class="search-input-container">
                        <input type="search" 
                               name="s" 
                               value="<?php echo get_search_query(); ?>" 
                               placeholder="ابحث عن المسار التعليمي المناسب..."
                               required>
                        <button type="submit">
                            <i class="bi bi-search"></i>
                            بحث
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Search Results Section -->
    <section class="search-results">
        <div class="search-main-container">
            <?php if (have_posts()) : ?>
                
                <!-- Results Header -->
                <div class="results-header">
                    <h2>وجدنا النتائج التالية لك</h2>
                    <div class="results-meta">
                        <div class="results-count">
                            <i class="bi bi-journal-text"></i>
                            <?php
                            global $wp_query;
                            $total_results = $wp_query->found_posts;
                            if ($total_results == 1) {
                                echo 'نتيجة واحدة';
                            } elseif ($total_results == 2) {
                                echo 'نتيجتان';
                            } elseif ($total_results <= 10) {
                                echo $total_results . ' نتائج';
                            } else {
                                echo $total_results . ' نتيجة';
                            }
                            ?>
                        </div>
                        <span>في جميع أقسام الموقع</span>
                    </div>
                </div>

                <!-- Search Results Grid -->
                <div class="search-results-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="search-result-card">
                            <div class="result-thumbnail">
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
                                    <span class="result-category"><?php echo esc_html($categories[0]->name); ?></span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="result-content">
                                <div class="result-meta">
                                    <div class="result-meta-item">
                                        <i class="bi bi-calendar3"></i>
                                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('j F Y'); ?></time>
                                    </div>
                                    <div class="result-meta-item">
                                        <i class="bi bi-person-circle"></i>
                                        <span><?php echo wasla_get_proper_author_name(); ?></span>
                                    </div>
                                </div>
                                
                                <h3 class="result-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                
                                <p class="result-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt() ?: get_the_content(), 25, '...'); ?>
                                </p>
                                
                                <div class="result-footer">
                                    <a href="<?php the_permalink(); ?>" class="read-more-btn">
                                        اقرأ المقال
                                        <i class="bi bi-arrow-left"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div class="search-pagination">
                    <?php
                    echo paginate_links(array(
                        'total' => $wp_query->max_num_pages,
                        'prev_text' => '<i class="bi bi-chevron-right"></i> السابق',
                        'next_text' => 'التالي <i class="bi bi-chevron-left"></i>',
                        'type' => 'list',
                    ));
                    ?>
                </div>

            <?php else : ?>
                
                <!-- No Results Section -->
                <div class="no-results">
                    <div class="no-results-icon">
                        <i class="bi bi-search-heart"></i>
                    </div>
                    <h2>لم نجد نتائج لبحثك</h2>
                    <p>عذراً، لم نتمكن من العثور على أي محتوى يطابق كلمة البحث "<strong><?php echo get_search_query(); ?></strong>"</p>
                    
                    <div class="search-suggestions">
                        <h3>جرب البحث عن:</h3>
                        <div class="suggestion-list">
                            <a href="<?php echo home_url('?s=دون+بوسكو'); ?>" class="suggestion-item">دون بوسكو</a>
                            <a href="<?php echo home_url('?s=الثانوية+العامة'); ?>" class="suggestion-item">الثانوية العامة</a>
                            <a href="<?php echo home_url('?s=التنسيق'); ?>" class="suggestion-item">التنسيق</a>
                            <a href="<?php echo home_url('?s=الجامعات'); ?>" class="suggestion-item">الجامعات</a>
                            <a href="<?php echo home_url('?s=المدارس'); ?>" class="suggestion-item">المدارس</a>
                        </div>
                    </div>
                </div>

            <?php endif; ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>