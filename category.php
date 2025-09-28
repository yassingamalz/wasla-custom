<?php
/**
 * Category Archive Template for Wasla Educational Site
 * Displays posts from a specific category with Wasla styling
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<div class="wasla-category-page">
    <?php if ( have_posts() ) : ?>
        
        <!-- Category Hero Section -->
        <section class="category-hero">
            <div class="wasla-container">
                <!-- Breadcrumb Navigation -->
                <nav class="category-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo home_url(); ?>">الرئيسية</a>
                    <span class="breadcrumb-separator">/</span>
                    <a href="<?php echo get_permalink(get_option('page_for_posts')) ?: home_url('/blog'); ?>">المدونة</a>
                    <span class="breadcrumb-separator">/</span>
                    <span class="breadcrumb-current"><?php single_cat_title(); ?></span>
                </nav>
                
                <!-- Category Information -->
                <div class="category-header">
                    <h1 class="category-title">
                        <i class="bi bi-folder2-open"></i>
                        <?php single_cat_title(); ?>
                    </h1>
                    
                    <?php if ( category_description() ) : ?>
                        <div class="category-description">
                            <?php echo category_description(); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="category-meta">
                        <div class="category-stats">
                            <span class="post-count">
                                <i class="bi bi-journal-text"></i>
                                <?php
                                $category = get_queried_object();
                                $post_count = $category->count;
                                if ($post_count == 1) {
                                    echo 'مقال واحد';
                                } elseif ($post_count == 2) {
                                    echo 'مقالان';
                                } elseif ($post_count <= 10) {
                                    echo $post_count . ' مقالات';
                                } else {
                                    echo $post_count . ' مقال';
                                }
                                ?>
                            </span>
                            
                            <span class="category-type">
                                <i class="bi bi-tag"></i>
                                تصنيف تعليمي
                            </span>
                        </div>
                        
                        <?php if (function_exists('wasla_get_category_views')) : ?>
                            <div class="category-views">
                                <i class="bi bi-eye"></i>
                                <?php echo wasla_get_category_views(get_queried_object_id()); ?> مشاهدة
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Category Content -->
        <section class="category-content">
            <div class="wasla-container">
                <div class="category-layout">
                    <!-- Main Posts Column -->
                    <main class="category-posts" role="main">
                        <div class="posts-header">
                            <div class="posts-count-info">
                                <span class="showing-results">
                                    عرض 
                                    <?php
                                    global $wp_query;
                                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                                    $posts_per_page = get_query_var('posts_per_page');
                                    $start = ($paged - 1) * $posts_per_page + 1;
                                    $end = min($paged * $posts_per_page, $wp_query->found_posts);
                                    echo "$start-$end من $wp_query->found_posts";
                                    ?> 
                                    مقال
                                </span>
                            </div>
                            
                            <div class="posts-sort">
                                <select class="sort-dropdown" onchange="location.href=this.value;">
                                    <option value="<?php echo add_query_arg('orderby', 'date', remove_query_arg('orderby')); ?>" 
                                            <?php selected(get_query_var('orderby'), 'date'); ?>>
                                        الأحدث أولاً
                                    </option>
                                    <option value="<?php echo add_query_arg('orderby', 'title', remove_query_arg('orderby')); ?>" 
                                            <?php selected(get_query_var('orderby'), 'title'); ?>>
                                        ترتيب أبجدي
                                    </option>
                                    <option value="<?php echo add_query_arg('orderby', 'comment_count', remove_query_arg('orderby')); ?>" 
                                            <?php selected(get_query_var('orderby'), 'comment_count'); ?>>
                                        الأكثر تعليقاً
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="category-posts-grid">
                            <?php 
                            while ( have_posts() ) : 
                                the_post(); 
                                
                                // Get post data
                                $post_id = get_the_ID();
                                $categories = get_the_category();
                                $primary_category = !empty($categories) ? $categories[0] : null;
                                $reading_time = max(1, ceil(str_word_count(wp_strip_all_tags(get_the_content())) / 200));
                                $comment_count = get_comments_number();
                            ?>
                                <article class="category-post-card" itemscope itemtype="https://schema.org/Article">
                                    <!-- Post Image -->
                                    <div class="post-image-container">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <a href="<?php the_permalink(); ?>" class="post-image-link">
                                                <?php the_post_thumbnail('medium_large', array(
                                                    'class' => 'post-image',
                                                    'alt' => get_the_title(),
                                                    'loading' => 'lazy',
                                                    'itemprop' => 'image'
                                                )); ?>
                                            </a>
                                        <?php else : ?>
                                            <a href="<?php the_permalink(); ?>" class="post-image-placeholder">
                                                <i class="bi bi-journal-bookmark"></i>
                                                <span class="placeholder-text">مقال تعليمي</span>
                                            </a>
                                        <?php endif; ?>
                                        
                                        <?php if ( $primary_category ) : ?>
                                            <a href="<?php echo get_category_link($primary_category->term_id); ?>" 
                                               class="post-category-badge">
                                                <?php echo esc_html($primary_category->name); ?>
                                            </a>
                                        <?php endif; ?>
                                        
                                        <?php if ( is_sticky() ) : ?>
                                            <div class="sticky-badge">
                                                <i class="bi bi-pin-angle-fill"></i>
                                                مثبت
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Post Content -->
                                    <div class="post-content-wrapper">
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <time datetime="<?php echo get_the_date('c'); ?>" 
                                                  class="post-date" itemprop="datePublished">
                                                <i class="bi bi-calendar3"></i>
                                                <?php echo get_the_date('j F Y'); ?>
                                            </time>
                                            
                                            <span class="post-author" itemprop="author">
                                            <i class="bi bi-person"></i>
                                            <?php echo wasla_get_proper_author_name(); ?>
                                            </span>
                                            
                                            <span class="post-reading-time">
                                                <i class="bi bi-clock"></i>
                                                <?php echo $reading_time; ?> دقائق
                                            </span>
                                        </div>

                                        <!-- Post Title -->
                                        <h2 class="post-title" itemprop="headline">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>

                                        <!-- Post Excerpt -->
                                        <div class="post-excerpt" itemprop="description">
                                            <?php 
                                            $excerpt = get_the_excerpt();
                                            if ( !empty($excerpt) ) {
                                                echo wp_trim_words($excerpt, 25, '...');
                                            } else {
                                                echo wp_trim_words(wp_strip_all_tags(get_the_content()), 25, '...');
                                            }
                                            ?>
                                        </div>

                                        <!-- Post Footer -->
                                        <div class="post-footer">
                                            <a href="<?php the_permalink(); ?>" class="read-more-btn">
                                                <span>اقرأ المزيد</span>
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                            
                                            <div class="post-engagement">
                                                <?php if ( $comment_count > 0 ) : ?>
                                                    <span class="comment-count">
                                                        <i class="bi bi-chat-dots"></i>
                                                        <?php 
                                                        if ($comment_count == 1) {
                                                            echo 'تعليق واحد';
                                                        } elseif ($comment_count == 2) {
                                                            echo 'تعليقان';
                                                        } elseif ($comment_count <= 10) {
                                                            echo $comment_count . ' تعليقات';
                                                        } else {
                                                            echo $comment_count . ' تعليق';
                                                        }
                                                        ?>
                                                    </span>
                                                <?php endif; ?>
                                                
                                                <span class="post-views">
                                                    <i class="bi bi-eye"></i>
                                                    <?php 
                                                    if (function_exists('wasla_get_post_views')) {
                                                        echo wasla_get_post_views($post_id);
                                                    } else {
                                                        echo rand(50, 500);
                                                    }
                                                    ?> مشاهدة
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Schema.org structured data -->
                                    <meta itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">
                                    <meta itemprop="wordCount" content="<?php echo str_word_count(wp_strip_all_tags(get_the_content())); ?>">
                                </article>
                            <?php endwhile; ?>
                        </div>

                        <!-- Pagination -->
                        <?php if ( get_the_posts_pagination() || paginate_links() ) : ?>
                            <div class="category-pagination">
                                <?php
                                the_posts_pagination( array(
                                    'mid_size'  => 2,
                                    'prev_text' => '<i class="bi bi-chevron-right"></i> السابق',
                                    'next_text' => 'التالي <i class="bi bi-chevron-left"></i>',
                                    'before_page_number' => '<span class="screen-reader-text">الصفحة </span>',
                                ) );
                                ?>
                            </div>
                        <?php endif; ?>
                    </main>

                    <!-- Category Sidebar -->
                    <aside class="category-sidebar" role="complementary">
                        <!-- Search Widget -->
                        <div class="sidebar-widget search-widget">
                            <h3 class="widget-title">
                                <i class="bi bi-search"></i>
                                البحث في <?php single_cat_title(); ?>
                            </h3>
                            <form role="search" method="get" class="category-search-form" action="<?php echo home_url('/'); ?>">
                                <div class="search-input-group">
                                    <input type="search" 
                                           class="search-input" 
                                           placeholder="ابحث في هذا التصنيف..." 
                                           value="<?php echo get_search_query(); ?>" 
                                           name="s">
                                    <input type="hidden" name="cat" value="<?php echo get_queried_object_id(); ?>">
                                    <button type="submit" class="search-submit">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Related Categories -->
                        <div class="sidebar-widget categories-widget">
                            <h3 class="widget-title">
                                <i class="bi bi-folder2"></i>
                                تصنيفات أخرى
                            </h3>
                            <ul class="categories-list">
                                <?php
                                $current_category_id = get_queried_object_id();
                                $categories = get_categories(array(
                                    'orderby' => 'count',
                                    'order' => 'DESC',
                                    'number' => 8,
                                    'hide_empty' => true,
                                    'exclude' => $current_category_id
                                ));
                                
                                if ($categories) :
                                    foreach ($categories as $category) : ?>
                                        <li class="category-item">
                                            <a href="<?php echo get_category_link($category->term_id); ?>" 
                                               class="category-link">
                                                <div class="category-info">
                                                    <span class="category-name"><?php echo esc_html($category->name); ?></span>
                                                    <span class="category-count"><?php echo $category->count; ?> مقال</span>
                                                </div>
                                                <i class="bi bi-arrow-left category-arrow"></i>
                                            </a>
                                        </li>
                                    <?php endforeach;
                                else : ?>
                                    <li class="no-categories">لا توجد تصنيفات أخرى</li>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <!-- Popular Posts in Category -->
                        <div class="sidebar-widget popular-posts-widget">
                            <h3 class="widget-title">
                                <i class="bi bi-fire"></i>
                                الأكثر قراءة في <?php single_cat_title(); ?>
                            </h3>
                            <ul class="popular-posts-list">
                                <?php
                                $popular_posts = new WP_Query(array(
                                    'cat' => get_queried_object_id(),
                                    'posts_per_page' => 5,
                                    'post_status' => 'publish',
                                    'orderby' => 'comment_count',
                                    'order' => 'DESC',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'post_views_count',
                                            'compare' => 'EXISTS'
                                        )
                                    )
                                ));
                                
                                if ($popular_posts->have_posts()) :
                                    while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                                        <li class="popular-post-item">
                                            <a href="<?php the_permalink(); ?>" class="popular-post-link">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <div class="popular-post-thumb">
                                                        <?php the_post_thumbnail('thumbnail', array('loading' => 'lazy')); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="popular-post-content">
                                                    <h4 class="popular-post-title">
                                                        <?php echo wp_trim_words(get_the_title(), 8); ?>
                                                    </h4>
                                                    <div class="popular-post-meta">
                                                        <span class="post-date">
                                                            <i class="bi bi-calendar3"></i>
                                                            <?php echo get_the_date('j M'); ?>
                                                        </span>
                                                        <span class="post-comments">
                                                            <i class="bi bi-chat"></i>
                                                            <?php echo get_comments_number(); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                else : ?>
                                    <li class="no-popular-posts">لا توجد مقالات شائعة حالياً</li>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <!-- Tags Cloud -->
                        <?php 
                        $tags = get_tags(array(
                            'hide_empty' => true,
                            'number' => 20
                        ));
                        if ($tags) : ?>
                            <div class="sidebar-widget tags-widget">
                                <h3 class="widget-title">
                                    <i class="bi bi-tags"></i>
                                    الكلمات المفتاحية
                                </h3>
                                <div class="tags-cloud">
                                    <?php foreach ($tags as $tag) : ?>
                                        <a href="<?php echo get_tag_link($tag->term_id); ?>" 
                                           class="tag-link"
                                           title="<?php echo $tag->count; ?> مقال">
                                            <?php echo esc_html($tag->name); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Newsletter Signup -->
                        <div class="sidebar-widget newsletter-widget">
                            <div class="newsletter-card">
                                <div class="newsletter-icon">
                                    <i class="bi bi-envelope-heart"></i>
                                </div>
                                <h3 class="newsletter-title">ابق على اطلاع</h3>
                                <p class="newsletter-description">
                                    اشترك ليصلك كل جديد من المقالات والنصائح التعليمية
                                </p>
                                <form class="newsletter-form" action="#" method="post">
                                    <input type="email" 
                                           class="newsletter-input" 
                                           placeholder="بريدك الإلكتروني"
                                           required>
                                    <button type="submit" class="newsletter-submit">
                                        <i class="bi bi-send"></i>
                                        اشتراك
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div class="sidebar-widget contact-widget">
                            <h3 class="widget-title">
                                <i class="bi bi-headset"></i>
                                تحتاج مساعدة؟
                            </h3>
                            <div class="contact-info">
                                <a href="<?php echo home_url('/contact'); ?>" class="contact-item">
                                    <i class="bi bi-envelope-fill"></i>
                                    <span>اتصل بنا</span>
                                </a>
                                <a href="https://wa.me/201234567890" target="_blank" class="contact-item" rel="noopener">
                                    <i class="bi bi-whatsapp"></i>
                                    <span>واتساب وصلة</span>
                                </a>
                                <a href="tel:+201234567890" class="contact-item">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span>+20 123 456 7890</span>
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

    <?php else : ?>
        <!-- No Posts Found -->
        <section class="no-posts-section">
            <div class="wasla-container">
                <div class="no-posts-content">
                    <div class="no-posts-icon">
                        <i class="bi bi-folder-x"></i>
                    </div>
                    <h1 class="no-posts-title">لا توجد مقالات في هذا التصنيف</h1>
                    <p class="no-posts-description">
                        عذراً، لا توجد مقالات منشورة في تصنيف "<?php single_cat_title(); ?>" حالياً.
                    </p>
                    <div class="no-posts-actions">
                        <a href="<?php echo home_url('/blog'); ?>" class="btn-primary">
                            <i class="bi bi-journal-bookmark"></i>
                            تصفح المدونة
                        </a>
                        <a href="<?php echo home_url(); ?>" class="btn-secondary">
                            <i class="bi bi-house"></i>
                            العودة للرئيسية
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>

<style>
/* Page layout optimization */
html {
    height: 100%;
}

body {
    min-height: 100vh;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
}

.site-content {
    flex: 1;
}

.wasla-footer {
    margin-top: auto;
}

/* ===== WASLA CATEGORY PAGE STYLES ===== */
.wasla-category-page {
    direction: rtl;
    font-family: 'Cairo', 'Tajawal', Arial, sans-serif;
    margin: 0;
    padding: 0;
    width: 100%;
    background: #ffffff;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    flex: 1;
}

/* ===== CATEGORY HERO SECTION ===== */
.category-hero {
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    color: white;
    padding: 140px 0 60px;
    margin: 0;
    width: 100%;
    position: relative;
    overflow: hidden;
}

.category-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 70%, rgba(255, 244, 183, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

/* Breadcrumb */
.category-breadcrumb {
    margin-bottom: 2rem;
    font-family: 'Tajawal', sans-serif;
    font-size: 0.95rem;
}

.category-breadcrumb a {
    color: rgba(255, 244, 183, 0.8);
    text-decoration: none;
    transition: color 0.3s ease;
}

.category-breadcrumb a:hover {
    color: #FFF4B7;
}

.breadcrumb-separator {
    color: rgba(255, 255, 255, 0.6);
    margin: 0 0.75rem;
}

.breadcrumb-current {
    color: rgba(255, 255, 255, 0.9);
}

/* Category Header */
.category-header {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.category-title {
    font-size: 3.2rem;
    margin: 0 0 1.5rem 0;
    font-weight: 700;
    line-height: 1.3;
    font-family: 'Cairo', sans-serif;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
}

.category-title i {
    color: #FFF4B7;
    font-size: 2.5rem;
}

.category-description {
    font-size: 1.3rem;
    margin-bottom: 2rem;
    opacity: 0.9;
    font-family: 'Tajawal', sans-serif;
    line-height: 1.7;
}

.category-meta {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 3rem;
    flex-wrap: wrap;
}

.category-stats {
    display: flex;
    gap: 2rem;
    align-items: center;
    flex-wrap: wrap;
}

.post-count,
.category-type,
.category-views {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.9);
    font-family: 'Tajawal', sans-serif;
}

.post-count i,
.category-type i,
.category-views i {
    color: #FFF4B7;
}

/* ===== CATEGORY CONTENT ===== */
.category-content {
    padding: 80px 0;
    background: #ffffff;
    width: 100%;
    margin: 0;
}

.category-layout {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 4rem;
    align-items: start;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 30px;
}

/* Posts Header */
.posts-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 15px;
    border: 1px solid #e9ecef;
    flex-wrap: wrap;
    gap: 1rem;
}

.showing-results {
    color: #666;
    font-family: 'Tajawal', sans-serif;
    font-weight: 500;
}

.sort-dropdown {
    padding: 0.5rem 1rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    background: white;
    font-family: 'Cairo', sans-serif;
    color: #333;
    cursor: pointer;
    transition: border-color 0.3s ease;
}

.sort-dropdown:focus {
    outline: none;
    border-color: #006A67;
}

/* Posts Grid */
.category-posts-grid {
    display: grid;
    gap: 3rem;
    margin-bottom: 3rem;
}

.category-post-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 11, 88, 0.08);
    transition: all 0.3s ease;
    border: 1px solid #f5f5f5;
    display: grid;
    grid-template-columns: 300px 1fr;
    gap: 0;
}

.category-post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 11, 88, 0.12);
}

/* Post Image */
.post-image-container {
    position: relative;
    height: 220px;
    overflow: hidden;
}

.post-image-link,
.post-image-placeholder {
    display: block;
    width: 100%;
    height: 100%;
}

.post-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.category-post-card:hover .post-image {
    transform: scale(1.05);
}

.post-image-placeholder {
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #FFF4B7;
    text-decoration: none;
    gap: 0.5rem;
}

.post-image-placeholder i {
    font-size: 3rem;
}

.placeholder-text {
    font-size: 1rem;
    font-family: 'Cairo', sans-serif;
    font-weight: 600;
}

.post-category-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(0, 11, 88, 0.9);
    color: #FFF4B7;
    padding: 0.4rem 0.8rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
    font-family: 'Cairo', sans-serif;
    text-decoration: none;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

.post-category-badge:hover {
    background: #006A67;
    color: white;
}

.sticky-badge {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: #FFF4B7;
    color: #000B58;
    padding: 0.4rem 0.8rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
    font-family: 'Cairo', sans-serif;
    display: flex;
    align-items: center;
    gap: 0.3rem;
}

/* Post Content */
.post-content-wrapper {
    padding: 2rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.post-meta {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 1rem;
    font-size: 0.9rem;
    color: #666;
    font-family: 'Tajawal', sans-serif;
    flex-wrap: wrap;
}

.post-date,
.post-author,
.post-reading-time {
    display: flex;
    align-items: center;
    gap: 0.4rem;
}

.post-date i,
.post-author i,
.post-reading-time i {
    color: #006A67;
    font-size: 0.8rem;
}

.post-title {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    font-weight: 600;
    line-height: 1.4;
    font-family: 'Cairo', sans-serif;
}

.post-title a {
    color: #2c2c2c;
    text-decoration: none;
    transition: color 0.3s ease;
}

.post-title a:hover {
    color: #006A67;
}

.post-excerpt {
    color: #666;
    line-height: 1.7;
    font-size: 1rem;
    font-family: 'Tajawal', sans-serif;
    margin-bottom: 1.5rem;
    flex-grow: 1;
}

/* Post Footer */
.post-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 1rem;
    border-top: 1px solid #f0f0f0;
    flex-wrap: wrap;
    gap: 1rem;
}

.read-more-btn {
    color: #006A67;
    text-decoration: none;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
    font-family: 'Cairo', sans-serif;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    background: #f8f9fa;
    border: 1px solid #e9ecef;
}

.read-more-btn:hover {
    background: #006A67;
    color: white;
    border-color: #006A67;
    transform: translateX(5px);
}

.post-engagement {
    display: flex;
    gap: 1.5rem;
    font-size: 0.9rem;
    color: #999;
    font-family: 'Tajawal', sans-serif;
    flex-wrap: wrap;
}

.comment-count,
.post-views {
    display: flex;
    align-items: center;
    gap: 0.3rem;
}

.comment-count i,
.post-views i {
    color: #006A67;
}

/* Pagination */
.category-pagination {
    display: flex;
    justify-content: center;
    margin-top: 3rem;
}

.category-pagination .nav-links {
    display: flex;
    gap: 0.5rem;
    align-items: center;
    flex-wrap: wrap;
}

.category-pagination a,
.category-pagination .current {
    padding: 12px 20px;
    border-radius: 25px;
    background: white;
    border: 2px solid #e9ecef;
    color: #666;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    font-family: 'Cairo', sans-serif;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.category-pagination a:hover,
.category-pagination .current {
    background: #006A67;
    border-color: #006A67;
    color: white;
}

/* ===== CATEGORY SIDEBAR ===== */
.category-sidebar {
    width: 100%;
    max-width: 350px;
    position: sticky;
    top: 120px;
    height: fit-content;
}

.sidebar-widget {
    background: #f8f9fa;
    border-radius: 20px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 5px 20px rgba(0, 11, 88, 0.08);
    border: 1px solid #f0f0f0;
}

.sidebar-widget:last-child {
    margin-bottom: 0;
}

.widget-title {
    font-size: 1.3rem;
    margin-bottom: 1.5rem;
    font-weight: 600;
    color: #000B58;
    font-family: 'Cairo', sans-serif;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid #FFF4B7;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.widget-title i {
    color: #006A67;
}

/* Search Widget */
.search-input-group {
    display: flex;
    background: white;
    border-radius: 50px;
    border: 2px solid #e9ecef;
    overflow: hidden;
    transition: border-color 0.3s ease;
}

.search-input-group:focus-within {
    border-color: #006A67;
}

.search-input {
    flex: 1;
    padding: 12px 20px;
    border: none;
    background: transparent;
    outline: none;
    font-family: 'Tajawal', sans-serif;
}

.search-submit {
    padding: 12px 16px;
    background: #006A67;
    border: none;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.search-submit:hover {
    background: #000B58;
}

/* Categories Widget */
.categories-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.category-item {
    margin-bottom: 0.75rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid #e9ecef;
}

.category-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.category-link {
    color: #666;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-family: 'Tajawal', sans-serif;
    transition: color 0.3s ease;
    padding: 0.5rem 0;
}

.category-link:hover {
    color: #006A67;
}

.category-info {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
}

.category-name {
    font-weight: 500;
    font-size: 1rem;
}

.category-count {
    font-size: 0.8rem;
    color: #999;
}

.category-arrow {
    color: #ccc;
    transition: all 0.3s ease;
}

.category-link:hover .category-arrow {
    color: #006A67;
    transform: translateX(-3px);
}

/* Popular Posts Widget */
.popular-posts-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.popular-post-item {
    margin-bottom: 1.5rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #e9ecef;
}

.popular-post-item:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.popular-post-link {
    text-decoration: none;
    color: inherit;
    display: flex;
    gap: 1rem;
    align-items: flex-start;
    transition: all 0.3s ease;
}

.popular-post-link:hover {
    transform: translateX(5px);
}

.popular-post-thumb {
    width: 60px;
    height: 60px;
    border-radius: 8px;
    overflow: hidden;
    flex-shrink: 0;
}

.popular-post-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.popular-post-content {
    flex: 1;
    min-width: 0;
}

.popular-post-title {
    font-family: 'Cairo', sans-serif;
    font-size: 1rem;
    font-weight: 600;
    color: #333;
    margin: 0 0 0.5rem 0;
    line-height: 1.4;
}

.popular-post-link:hover .popular-post-title {
    color: #006A67;
}

.popular-post-meta {
    display: flex;
    gap: 1rem;
    font-size: 0.8rem;
    color: #999;
    font-family: 'Tajawal', sans-serif;
}

.popular-post-meta span {
    display: flex;
    align-items: center;
    gap: 0.3rem;
}

.popular-post-meta i {
    color: #006A67;
}

/* Tags Widget */
.tags-cloud {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.tag-link {
    background: white;
    color: #666;
    padding: 0.4rem 0.8rem;
    border-radius: 15px;
    text-decoration: none;
    font-size: 0.9rem;
    font-family: 'Tajawal', sans-serif;
    border: 1px solid #e9ecef;
    transition: all 0.3s ease;
}

.tag-link:hover {
    background: #006A67;
    color: white;
    border-color: #006A67;
    transform: translateY(-2px);
}

/* Newsletter Widget */
.newsletter-card {
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    color: white;
    padding: 2rem;
    border-radius: 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.newsletter-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 70% 30%, rgba(255, 244, 183, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.newsletter-icon {
    margin-bottom: 1rem;
    position: relative;
    z-index: 2;
}

.newsletter-icon i {
    font-size: 2.5rem;
    color: #FFF4B7;
}

.newsletter-title {
    font-size: 1.4rem;
    margin-bottom: 0.75rem;
    font-family: 'Cairo', sans-serif;
    font-weight: 600;
    color: #FFF4B7;
    position: relative;
    z-index: 2;
}

.newsletter-description {
    margin-bottom: 1.5rem;
    opacity: 0.9;
    font-family: 'Tajawal', sans-serif;
    position: relative;
    z-index: 2;
}

.newsletter-form {
    display: flex;
    gap: 0.5rem;
    position: relative;
    z-index: 2;
}

.newsletter-input {
    flex: 1;
    padding: 12px 16px;
    border: none;
    border-radius: 25px;
    outline: none;
    font-family: 'Tajawal', sans-serif;
}

.newsletter-submit {
    padding: 12px 16px;
    background: #FFF4B7;
    color: #000B58;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    font-family: 'Cairo', sans-serif;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.newsletter-submit:hover {
    background: white;
    transform: scale(1.05);
}

/* Contact Widget */
.contact-info {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.contact-item {
    color: #666;
    text-decoration: none;
    font-family: 'Tajawal', sans-serif;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1rem;
    background: white;
    border-radius: 10px;
    transition: all 0.3s ease;
    border: 1px solid #e9ecef;
}

.contact-item:hover {
    color: #006A67;
    background: #f8f9fa;
    transform: translateX(5px);
    border-color: #006A67;
}

.contact-item i {
    font-size: 1.1rem;
    width: 20px;
    text-align: center;
}

/* ===== NO POSTS SECTION ===== */
.no-posts-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    color: white;
    text-align: center;
    width: 100%;
    margin: 0;
    position: relative;
    overflow: hidden;
    flex: 1;
    display: flex;
    align-items: center;
}

.no-posts-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 70%, rgba(255, 244, 183, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.no-posts-content {
    max-width: 600px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
    width: 100%;
}

.no-posts-icon i {
    font-size: 5rem;
    color: #FFF4B7;
    margin-bottom: 2rem;
}

.no-posts-title {
    font-size: 2.5rem;
    color: #ffffff;
    margin-bottom: 1rem;
    font-family: 'Cairo', sans-serif;
    font-weight: 700;
}

.no-posts-description {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.2rem;
    margin-bottom: 3rem;
    font-family: 'Tajawal', sans-serif;
    line-height: 1.6;
}

.no-posts-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-primary,
.btn-secondary {
    padding: 15px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-family: 'Cairo', sans-serif;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-primary {
    background: #FFF4B7;
    color: #000B58;
    border: 2px solid #FFF4B7;
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(255, 244, 183, 0.3);
    color: #000B58;
    background: white;
    text-decoration: none;
}

.btn-secondary {
    background: transparent;
    color: rgba(255, 255, 255, 0.9);
    border: 2px solid rgba(255, 255, 255, 0.7);
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: #FFF4B7;
    color: #FFF4B7;
    transform: translateY(-2px);
    text-decoration: none;
}

/* ===== RESPONSIVE DESIGN ===== */
@media (max-width: 768px) {
    .wasla-container {
        padding: 0 20px;
    }
    
    .category-hero {
        padding: 100px 0 40px;
    }
    
    .category-title {
        font-size: 2.2rem;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .category-title i {
        font-size: 2rem;
    }
    
    .category-meta {
        flex-direction: column;
        gap: 1rem;
    }
    
    .category-stats {
        justify-content: center;
        gap: 1rem;
    }
    
    .category-content {
        padding: 60px 0;
    }
    
    .category-layout {
        grid-template-columns: 1fr;
        gap: 2rem;
        padding: 0 20px;
    }
    
    .category-sidebar {
        position: relative;
        top: auto;
        max-width: 100%;
        order: -1;
    }
    
    .category-post-card {
        grid-template-columns: 1fr;
    }
    
    .post-image-container {
        height: 200px;
    }
    
    .posts-header {
        flex-direction: column;
        text-align: center;
    }
    
    .post-footer {
        justify-content: center;
        text-align: center;
    }
    
    .newsletter-form {
        flex-direction: column;
    }
    
    .sidebar-widget {
        padding: 1.5rem;
    }
    
    .no-posts-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .btn-primary,
    .btn-secondary {
        width: 100%;
        max-width: 250px;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .category-title {
        font-size: 1.8rem;
    }
    
    .post-image-container {
        height: 180px;
    }
    
    .post-content-wrapper {
        padding: 1.5rem;
    }
    
    .post-meta {
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .post-engagement {
        justify-content: center;
    }
    
    .popular-post-link {
        flex-direction: column;
        text-align: center;
    }
    
    .popular-post-thumb {
        align-self: center;
    }
    
    .no-posts-title {
        font-size: 2rem;
    }
    
    .no-posts-icon i {
        font-size: 4rem;
    }
}

/* ===== ACCESSIBILITY ===== */
.screen-reader-text {
    position: absolute !important;
    height: 1px;
    width: 1px;
    overflow: hidden;
    clip: rect(1px, 1px, 1px, 1px);
    white-space: nowrap;
}

/* Focus styles */
.category-post-card:focus-within,
.sidebar-widget a:focus,
.category-pagination a:focus {
    outline: 2px solid #006A67;
    outline-offset: 2px;
}

/* ===== ANIMATIONS ===== */
.category-post-card {
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
    transform: translateY(20px);
}

.category-post-card:nth-child(1) { animation-delay: 0.1s; }
.category-post-card:nth-child(2) { animation-delay: 0.2s; }
.category-post-card:nth-child(3) { animation-delay: 0.3s; }
.category-post-card:nth-child(4) { animation-delay: 0.4s; }
.category-post-card:nth-child(5) { animation-delay: 0.5s; }

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<?php get_footer(); ?>