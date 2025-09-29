<?php
/**
 * Archive Template for Wasla Educational Site
 * Handles author archives, date archives, and other archive types
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<div class="wasla-archive-page">
    <!-- Archive Hero Section -->
    <section class="archive-hero">
        <div class="wasla-container">
            <?php if (is_author()) : ?>
                <div class="archive-header author-header">
                    <div class="author-avatar">
                        <?php echo get_avatar(get_the_author_meta('ID'), 120); ?>
                    </div>
                    <div class="author-info">
                        <h1 class="archive-title">مقالات <?php echo get_the_author(); ?></h1>
                        <p class="archive-description">
                            <?php 
                            $author_bio = get_the_author_meta('description');
                            if ($author_bio) {
                                echo esc_html($author_bio);
                            } else {
                                echo 'كاتب في فريق وصلة التعليمي، متخصص في تقديم المحتوى التعليمي المفيد والموثوق.';
                            }
                            ?>
                        </p>
                        <div class="author-stats">
                            <span class="posts-count">
                                <i class="bi bi-journal-text"></i>
                                <?php echo count_user_posts(get_the_author_meta('ID')); ?> مقال
                            </span>
                        </div>
                    </div>
                </div>
            <?php elseif (is_date()) : ?>
                <div class="archive-header date-header">
                    <h1 class="archive-title">
                        <i class="bi bi-calendar3"></i>
                        أرشيف <?php echo get_the_date('F Y'); ?>
                    </h1>
                    <p class="archive-description">
                        جميع المقالات المنشورة في <?php echo get_the_date('F Y'); ?>
                    </p>
                </div>
            <?php else : ?>
                <div class="archive-header generic-header">
                    <h1 class="archive-title">
                        <i class="bi bi-archive"></i>
                        <?php the_archive_title(); ?>
                    </h1>
                    <?php if (get_the_archive_description()) : ?>
                        <div class="archive-description">
                            <?php echo get_the_archive_description(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Archive Content -->
    <section class="archive-content">
        <div class="wasla-container">
            <div class="archive-layout">
                <main class="archive-main" role="main">
                    <?php if (have_posts()) : ?>
                        <div class="archive-posts-grid">
                            <?php while (have_posts()) : the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class('archive-post-card'); ?>>
                                    <!-- Featured Image -->
                                    <div class="archive-post-image">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('medium', array('loading' => 'lazy')); ?>
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
                                    <div class="archive-post-content">
                                        <!-- Post Meta -->
                                        <div class="archive-post-meta">
                                            <span class="post-date">
                                                <i class="bi bi-calendar3"></i>
                                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('j F Y'); ?></time>
                                            </span>
                                            <?php if (!is_author()) : ?>
                                                <span class="post-author">
                                                    <i class="bi bi-person-circle"></i>
                                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                        <?php echo wasla_get_proper_author_name(); ?>
                                                    </a>
                                                </span>
                                            <?php endif; ?>
                                            <span class="post-views">
                                                <i class="bi bi-eye"></i>
                                                <?php echo wasla_get_post_views(get_the_ID()); ?> مشاهدة
                                            </span>
                                        </div>
                                        
                                        <!-- Post Title -->
                                        <h2 class="archive-post-title">
                                            <a href="<?php the_permalink(); ?>" rel="bookmark">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                        
                                        <!-- Post Excerpt -->
                                        <div class="archive-post-excerpt">
                                            <?php 
                                            $excerpt = get_the_excerpt();
                                            if ($excerpt) {
                                                echo wp_trim_words($excerpt, 20, '...');
                                            } else {
                                                echo wp_trim_words(wp_strip_all_tags(get_the_content()), 20, '...');
                                            }
                                            ?>
                                        </div>
                                        
                                        <!-- Post Footer -->
                                        <div class="archive-post-footer">
                                            <a href="<?php the_permalink(); ?>" class="read-more-btn">
                                                <span>اقرأ المزيد</span>
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                            
                                            <!-- Reading Time -->
                                            <span class="reading-time">
                                                <i class="bi bi-clock"></i>
                                                <?php echo max(1, ceil(str_word_count(wp_strip_all_tags(get_the_content())) / 200)); ?> دقائق
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                        
                        <!-- Pagination -->
                        <?php if (get_the_posts_pagination()) : ?>
                            <nav class="archive-pagination" role="navigation" aria-label="تنقل بين صفحات الأرشيف">
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
                                    <i class="bi bi-inbox"></i>
                                </div>
                                <h2 class="no-posts-title">لا توجد مقالات في هذا الأرشيف</h2>
                                <p class="no-posts-description">
                                    <?php if (is_author()) : ?>
                                        لم ينشر هذا الكاتب أي مقالات حتى الآن.
                                    <?php elseif (is_date()) : ?>
                                        لا توجد مقالات منشورة في هذا التاريخ.
                                    <?php else : ?>
                                        لا توجد مقالات في هذا القسم حالياً.
                                    <?php endif; ?>
                                </p>
                                <div class="no-posts-actions">
                                    <a href="<?php echo home_url(); ?>" class="btn-home">
                                        <i class="bi bi-house"></i>
                                        العودة للرئيسية
                                    </a>
                                    <a href="<?php echo home_url('/blog'); ?>" class="btn-blog">
                                        <i class="bi bi-journal-text"></i>
                                        تصفح المدونة
                                    </a>
                                </div>
                            </div>
                        </section>
                    <?php endif; ?>
                </main>
                
                <!-- Archive Sidebar -->
                <aside class="archive-sidebar" role="complementary">
                    <!-- Archive Info Widget -->
                    <div class="sidebar-widget archive-info-widget">
                        <?php if (is_author()) : ?>
                            <h3 class="widget-title">
                                <i class="bi bi-person-badge"></i>
                                معلومات الكاتب
                            </h3>
                            <div class="author-widget-content">
                                <div class="author-avatar-large">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>
                                </div>
                                <h4 class="author-name"><?php echo get_the_author(); ?></h4>
                                <p class="author-posts-count">
                                    نشر <?php echo count_user_posts(get_the_author_meta('ID')); ?> مقال
                                </p>
                                <?php if (get_the_author_meta('user_url')) : ?>
                                    <a href="<?php echo esc_url(get_the_author_meta('user_url')); ?>" 
                                       class="author-website" target="_blank" rel="noopener">
                                        <i class="bi bi-globe"></i> الموقع الشخصي
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php elseif (is_date()) : ?>
                            <h3 class="widget-title">
                                <i class="bi bi-calendar-range"></i>
                                أرشيف التواريخ
                            </h3>
                            <div class="date-archive-nav">
                                <?php wp_get_archives(array(
                                    'type' => 'monthly',
                                    'limit' => 12,
                                    'format' => 'html',
                                    'show_post_count' => true
                                )); ?>
                            </div>
                        <?php endif; ?>
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
                                'number' => 6,
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
                            endif; ?>
                        </ul>
                    </div>
                    
                    <!-- Popular Posts Widget -->
                    <div class="sidebar-widget popular-posts-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-graph-up"></i>
                            الأكثر قراءة
                        </h3>
                        <ul class="popular-posts-list">
                            <?php
                            $popular_posts = new WP_Query(array(
                                'posts_per_page' => 5,
                                'post_status' => 'publish',
                                'meta_key' => '_wasla_view_count',
                                'orderby' => 'meta_value_num',
                                'order' => 'DESC'
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
                                                <h4 class="popular-post-title"><?php echo wp_trim_words(get_the_title(), 5); ?></h4>
                                                <span class="popular-post-views">
                                                    <i class="bi bi-eye"></i>
                                                    <?php echo wasla_get_post_views(get_the_ID()); ?> مشاهدة
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                <?php endwhile;
                                wp_reset_postdata();
                            endif; ?>
                        </ul>
                    </div>
                    
                    <!-- Search Widget -->
                    <div class="sidebar-widget search-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-search"></i>
                            البحث
                        </h3>
                        <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                            <div class="search-input-group">
                                <input type="search" 
                                       class="search-field" 
                                       placeholder="ابحث في الموقع..." 
                                       value="<?php echo get_search_query(); ?>" 
                                       name="s" 
                                       required>
                                <button type="submit" class="search-submit" aria-label="بحث">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>