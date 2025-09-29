<?php
/**
 * Main Index Template for Wasla Educational Site
 * WordPress fallback template - displays latest posts
 * This is the REQUIRED WordPress fallback template
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<div class="wasla-blog-index">
    <!-- Blog Hero Section -->
    <section class="blog-hero">
        <div class="wasla-container">
            <h1>مدونة وصلة</h1>
            <p>مقالات ونصائح تعليمية لمساعدتك في رحلتك الدراسية</p>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="blog-content">
        <div class="wasla-container">
            <div class="blog-layout">
                <main class="blog-main" role="main">
                    <?php if (have_posts()) : ?>
                        <div class="blog-posts-grid">
                            <?php while (have_posts()) : the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post-card'); ?>>
                                    <!-- Featured Image -->
                                    <div class="blog-post-image">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('large', array('loading' => 'lazy')); ?>
                                            </a>
                                        <?php else : ?>
                                            <a href="<?php the_permalink(); ?>" class="placeholder-link">
                                                <i class="bi bi-journal-text"></i>
                                            </a>
                                        <?php endif; ?>
                                        
                                        <!-- Category Badge -->
                                        <?php 
                                        $categories = get_the_category();
                                        if (!empty($categories)) : ?>
                                            <span class="post-category-badge">
                                                <?php echo esc_html($categories[0]->name); ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <!-- Post Content -->
                                    <div class="blog-post-content">
                                        <!-- Post Meta -->
                                        <div class="blog-post-meta">
                                            <span class="post-date">
                                                <i class="bi bi-calendar3"></i>
                                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('j F Y'); ?></time>
                                            </span>
                                            <span class="post-author">
                                                <i class="bi bi-person-circle"></i>
                                                <?php echo wasla_get_proper_author_name(); ?>
                                            </span>
                                            <span class="post-views">
                                                <i class="bi bi-eye"></i>
                                                <?php echo wasla_get_post_views(get_the_ID()); ?> مشاهدة
                                            </span>
                                        </div>
                                        
                                        <!-- Post Title -->
                                        <h2 class="blog-post-title">
                                            <a href="<?php the_permalink(); ?>" rel="bookmark">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                        
                                        <!-- Post Excerpt -->
                                        <div class="blog-post-excerpt">
                                            <?php 
                                            $excerpt = get_the_excerpt();
                                            if ($excerpt) {
                                                echo wp_trim_words($excerpt, 25, '...');
                                            } else {
                                                echo wp_trim_words(wp_strip_all_tags(get_the_content()), 25, '...');
                                            }
                                            ?>
                                        </div>
                                        
                                        <!-- Post Footer -->
                                        <div class="blog-post-footer">
                                            <a href="<?php the_permalink(); ?>" class="read-more-btn">
                                                <span>اقرأ المزيد</span>
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                            
                                            <!-- Reading Time -->
                                            <span class="reading-time">
                                                <i class="bi bi-clock"></i>
                                                <?php echo max(1, ceil(str_word_count(wp_strip_all_tags(get_the_content())) / 200)); ?> دقائق قراءة
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                        
                        <!-- Pagination -->
                        <?php if (get_the_posts_pagination()) : ?>
                            <nav class="blog-pagination" role="navigation" aria-label="تنقل بين صفحات المدونة">
                                <?php
                                the_posts_pagination(array(
                                    'mid_size' => 2,
                                    'prev_text' => '<i class="bi bi-chevron-right"></i> السابق',
                                    'next_text' => 'التالي <i class="bi bi-chevron-left"></i>',
                                    'before_page_number' => '<span class="screen-reader-text">الصفحة </span>',
                                ));
                                ?>
                            </nav>
                        <?php endif; ?>
                        
                    <?php else : ?>
                        <!-- No Posts Found -->
                        <section class="no-posts-section">
                            <div class="no-posts-content">
                                <div class="no-posts-icon">
                                    <i class="bi bi-journal-x"></i>
                                </div>
                                <h1 class="no-posts-title">لا توجد مقالات منشورة</h1>
                                <p class="no-posts-description">
                                    عذراً، لا توجد مقالات منشورة في الوقت الحالي. تابعونا قريباً لمزيد من المحتوى التعليمي المفيد.
                                </p>
                                <div class="no-posts-actions">
                                    <a href="<?php echo home_url(); ?>" class="btn-home">
                                        <i class="bi bi-house"></i>
                                        العودة للرئيسية
                                    </a>
                                    <?php if (get_option('users_can_register')) : ?>
                                        <a href="<?php echo home_url('/contact'); ?>" class="btn-contact">
                                            <i class="bi bi-envelope"></i>
                                            اتصل بنا
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </section>
                    <?php endif; ?>
                </main>
                
                <!-- Sidebar -->
                <aside class="blog-sidebar" role="complementary">
                    <!-- Search Widget -->
                    <div class="sidebar-widget search-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-search"></i>
                            البحث في المدونة
                        </h3>
                        <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                            <div class="search-input-group">
                                <input type="search" 
                                       class="search-field" 
                                       placeholder="ابحث عن مقال..." 
                                       value="<?php echo get_search_query(); ?>" 
                                       name="s" 
                                       required>
                                <button type="submit" class="search-submit" aria-label="بحث">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Categories Widget -->
                    <div class="sidebar-widget categories-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-folder"></i>
                            التصنيفات
                        </h3>
                        <ul class="categories-list">
                            <?php
                            $categories = get_categories(array(
                                'orderby' => 'count',
                                'order' => 'DESC',
                                'number' => 8,
                                'hide_empty' => true,
                            ));
                            
                            if ($categories) :
                                foreach ($categories as $category) : ?>
                                    <li>
                                        <a href="<?php echo get_category_link($category->term_id); ?>" class="category-link">
                                            <i class="bi bi-folder2"></i>
                                            <span class="category-name"><?php echo esc_html($category->name); ?></span>
                                            <span class="category-count"><?php echo $category->count; ?></span>
                                        </a>
                                    </li>
                                <?php endforeach;
                            else : ?>
                                <li><a href="#"><i class="bi bi-folder2"></i> دون بوسكو <span>5</span></a></li>
                                <li><a href="#"><i class="bi bi-folder2"></i> الثانوية العامة <span>8</span></a></li>
                                <li><a href="#"><i class="bi bi-folder2"></i> الجامعات <span>12</span></a></li>
                                <li><a href="#"><i class="bi bi-folder2"></i> نصائح المذاكرة <span>6</span></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    
                    <!-- Recent Posts Widget -->
                    <div class="sidebar-widget recent-posts-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-clock-history"></i>
                            أحدث المقالات
                        </h3>
                        <ul class="recent-posts-list">
                            <?php
                            $recent_posts = new WP_Query(array(
                                'posts_per_page' => 5,
                                'post_status' => 'publish',
                                'post__not_in' => array(get_the_ID())
                            ));
                            
                            if ($recent_posts->have_posts()) :
                                while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                                    <li class="recent-post-item">
                                        <a href="<?php the_permalink(); ?>" class="recent-post-link">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="recent-post-thumb">
                                                    <?php the_post_thumbnail('thumbnail', array('loading' => 'lazy')); ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="recent-post-content">
                                                <h4 class="recent-post-title"><?php echo wp_trim_words(get_the_title(), 6); ?></h4>
                                                <span class="recent-post-date"><?php echo get_the_date('j M Y'); ?></span>
                                            </div>
                                        </a>
                                    </li>
                                <?php endwhile;
                                wp_reset_postdata();
                            else : ?>
                                <li class="no-recent">لا توجد مقالات حديثة</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    
                    <!-- Newsletter Widget -->
                    <div class="sidebar-widget newsletter-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-envelope-heart"></i>
                            اشترك في النشرة الإخبارية
                        </h3>
                        <p class="newsletter-description">
                            احصل على أحدث المقالات والنصائح التعليمية مباشرة في بريدك الإلكتروني
                        </p>
                        <form class="newsletter-form" method="post" action="#" onsubmit="return false;">
                            <div class="newsletter-input-group">
                                <input type="email" 
                                       class="newsletter-input" 
                                       placeholder="بريدك الإلكتروني"
                                       required>
                                <button type="submit" class="newsletter-submit">
                                    <i class="bi bi-send"></i>
                                    اشتراك
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Contact Widget -->
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
</div>

<?php get_footer(); ?>