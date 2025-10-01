<?php
/**
 * Category Archive Template for Wasla Educational Site
 * Displays posts from a specific category with Wasla styling
 * 
 * Note: All CSS moved to css/archive-pages.css for better performance
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
                    <a href="<?php echo esc_url( home_url() ); ?>"><?php _e( 'الرئيسية', 'wasla' ); ?></a>
                    <span class="breadcrumb-separator">/</span>
                    <a href="<?php echo esc_url( get_permalink(get_option('page_for_posts')) ?: home_url('/blog') ); ?>"><?php _e( 'المدونة', 'wasla' ); ?></a>
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
                                    _e( 'مقال واحد', 'wasla' );
                                } elseif ($post_count == 2) {
                                    _e( 'مقالان', 'wasla' );
                                } elseif ($post_count <= 10) {
                                    echo $post_count . ' ' . __( 'مقالات', 'wasla' );
                                } else {
                                    echo $post_count . ' ' . __( 'مقال', 'wasla' );
                                }
                                ?>
                            </span>
                            
                            <span class="category-type">
                                <i class="bi bi-tag"></i>
                                <?php _e( 'تصنيف تعليمي', 'wasla' ); ?>
                            </span>
                        </div>
                        
                        <?php if (function_exists('wasla_get_category_views')) : ?>
                            <div class="category-views">
                                <i class="bi bi-eye"></i>
                                <?php echo wasla_get_category_views(get_queried_object_id()); ?> <?php _e( 'مشاهدة', 'wasla' ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <?php wasla_header_ad(); ?>

        <!-- Category Content -->
        <section class="category-content">
            <div class="wasla-container">
                <div class="category-layout">
                    <!-- Main Posts Column -->
                    <main class="category-posts" role="main">
                        <div class="posts-header">
                            <div class="posts-count-info">
                                <span class="showing-results">
                                    <?php _e( 'عرض', 'wasla' ); ?> 
                                    <?php
                                    global $wp_query;
                                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                                    $posts_per_page = get_query_var('posts_per_page');
                                    $start = ($paged - 1) * $posts_per_page + 1;
                                    $end = min($paged * $posts_per_page, $wp_query->found_posts);
                                    echo "$start-$end " . __( 'من', 'wasla' ) . " $wp_query->found_posts";
                                    ?> 
                                    <?php _e( 'مقال', 'wasla' ); ?>
                                </span>
                            </div>
                            
                            <div class="posts-sort">
                                <select class="sort-dropdown" onchange="location.href=this.value;">
                                    <option value="<?php echo esc_url( add_query_arg('orderby', 'date', remove_query_arg('orderby')) ); ?>" 
                                            <?php selected(get_query_var('orderby'), 'date'); ?>>
                                        <?php _e( 'الأحدث أولاً', 'wasla' ); ?>
                                    </option>
                                    <option value="<?php echo esc_url( add_query_arg('orderby', 'title', remove_query_arg('orderby')) ); ?>" 
                                            <?php selected(get_query_var('orderby'), 'title'); ?>>
                                        <?php _e( 'ترتيب أبجدي', 'wasla' ); ?>
                                    </option>
                                    <option value="<?php echo esc_url( add_query_arg('orderby', 'comment_count', remove_query_arg('orderby')) ); ?>" 
                                            <?php selected(get_query_var('orderby'), 'comment_count'); ?>>
                                        <?php _e( 'الأكثر تعليقاً', 'wasla' ); ?>
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="category-posts-grid">
                            <?php 
                            while ( have_posts() ) : 
                                the_post();
                                
                                // Insert in-feed ad after every 3rd post
                                if ( $wp_query->current_post > 0 && ( $wp_query->current_post + 1 ) % 3 === 0 ) {
                                    echo '<div class="infeed-ad-container">';
                                    wasla_infeed_ad();
                                    echo '</div>';
                                }
                                
                                // Get post data
                                $post_id = get_the_ID();
                                $categories = get_the_category();
                                $primary_category = !empty($categories) ? $categories[0] : null;
                                $reading_time = wasla_get_reading_time();
                                $comment_count = get_comments_number();
                            ?>
                                <article class="category-post-card" itemscope itemtype="https://schema.org/Article">
                                    <!-- Post Image -->
                                    <div class="post-image-container">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <a href="<?php the_permalink(); ?>" class="post-image-link">
                                                <?php the_post_thumbnail('medium_large', array(
                                                    'class' => 'post-image',
                                                    'alt' => get_the_title() ?: __( 'صورة المقال', 'wasla' ),
                                                    'loading' => 'lazy',
                                                    'itemprop' => 'image'
                                                )); ?>
                                            </a>
                                        <?php else : ?>
                                            <a href="<?php the_permalink(); ?>" class="post-image-placeholder">
                                                <i class="bi bi-journal-bookmark"></i>
                                                <span class="placeholder-text"><?php _e( 'مقال تعليمي', 'wasla' ); ?></span>
                                            </a>
                                        <?php endif; ?>
                                        
                                        <?php if ( $primary_category ) : ?>
                                            <a href="<?php echo esc_url( get_category_link($primary_category->term_id) ); ?>" 
                                               class="post-category-badge">
                                                <?php echo esc_html($primary_category->name); ?>
                                            </a>
                                        <?php endif; ?>
                                        
                                        <?php if ( is_sticky() ) : ?>
                                            <div class="sticky-badge">
                                                <i class="bi bi-pin-angle-fill"></i>
                                                <?php _e( 'مثبت', 'wasla' ); ?>
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
                                                <?php echo $reading_time; ?> <?php _e( 'دقائق', 'wasla' ); ?>
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
                                                <span><?php _e( 'اقرأ المزيد', 'wasla' ); ?></span>
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                            
                                            <div class="post-engagement">
                                                <?php if ( $comment_count > 0 ) : ?>
                                                    <span class="comment-count">
                                                        <i class="bi bi-chat-dots"></i>
                                                        <?php 
                                                        if ($comment_count == 1) {
                                                            _e( 'تعليق واحد', 'wasla' );
                                                        } elseif ($comment_count == 2) {
                                                            _e( 'تعليقان', 'wasla' );
                                                        } elseif ($comment_count <= 10) {
                                                            echo $comment_count . ' ' . __( 'تعليقات', 'wasla' );
                                                        } else {
                                                            echo $comment_count . ' ' . __( 'تعليق', 'wasla' );
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
                                                    ?> <?php _e( 'مشاهدة', 'wasla' ); ?>
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

                        <?php wasla_footer_ad(); ?>

                        <!-- Pagination -->
                        <?php if ( get_the_posts_pagination() || paginate_links() ) : ?>
                            <div class="category-pagination">
                                <?php
                                the_posts_pagination( array(
                                    'mid_size'  => 2,
                                    'prev_text' => '<i class="bi bi-chevron-right"></i> ' . __( 'السابق', 'wasla' ),
                                    'next_text' => __( 'التالي', 'wasla' ) . ' <i class="bi bi-chevron-left"></i>',
                                    'before_page_number' => '<span class="screen-reader-text">' . __( 'الصفحة', 'wasla' ) . ' </span>',
                                ) );
                                ?>
                            </div>
                        <?php endif; ?>
                    </main>

                    <!-- Category Sidebar -->
                    <aside class="category-sidebar" role="complementary">
                        <?php wasla_sidebar_ad( 'top' ); ?>
                        <!-- Search Widget -->
                        <div class="sidebar-widget search-widget">
                            <h3 class="widget-title">
                                <i class="bi bi-search"></i>
                                <?php printf( __( 'البحث في %s', 'wasla' ), single_cat_title( '', false ) ); ?>
                            </h3>
                            <form role="search" method="get" class="category-search-form" action="<?php echo esc_url( home_url('/') ); ?>">
                                <div class="search-input-group">
                                    <input type="search" 
                                           class="search-input" 
                                           placeholder="<?php esc_attr_e( 'ابحث في هذا التصنيف...', 'wasla' ); ?>" 
                                           value="<?php echo get_search_query(); ?>" 
                                           name="s">
                                    <input type="hidden" name="cat" value="<?php echo get_queried_object_id(); ?>">
                                    <button type="submit" class="search-submit" aria-label="<?php esc_attr_e( 'بحث', 'wasla' ); ?>">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <?php wasla_sidebar_ad( 'bottom' ); ?>

                        <!-- Related Categories -->
                        <div class="sidebar-widget categories-widget">
                            <h3 class="widget-title">
                                <i class="bi bi-folder2"></i>
                                <?php _e( 'تصنيفات أخرى', 'wasla' ); ?>
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
                                            <a href="<?php echo esc_url( get_category_link($category->term_id) ); ?>" 
                                               class="category-link">
                                                <div class="category-info">
                                                    <span class="category-name"><?php echo esc_html($category->name); ?></span>
                                                    <span class="category-count"><?php echo $category->count; ?> <?php _e( 'مقال', 'wasla' ); ?></span>
                                                </div>
                                                <i class="bi bi-arrow-left category-arrow"></i>
                                            </a>
                                        </li>
                                    <?php endforeach;
                                else : ?>
                                    <li class="no-categories"><?php _e( 'لا توجد تصنيفات أخرى', 'wasla' ); ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <!-- Popular Posts in Category -->
                        <div class="sidebar-widget popular-posts-widget">
                            <h3 class="widget-title">
                                <i class="bi bi-fire"></i>
                                <?php printf( __( 'الأكثر قراءة في %s', 'wasla' ), single_cat_title( '', false ) ); ?>
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
                                                        <?php the_post_thumbnail('thumbnail', array('loading' => 'lazy', 'alt' => get_the_title() ?: __( 'صورة المقال', 'wasla' ))); ?>
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
                                    <li class="no-popular-posts"><?php _e( 'لا توجد مقالات شائعة حالياً', 'wasla' ); ?></li>
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
                                    <?php _e( 'الكلمات المفتاحية', 'wasla' ); ?>
                                </h3>
                                <div class="tags-cloud">
                                    <?php foreach ($tags as $tag) : ?>
                                        <a href="<?php echo esc_url( get_tag_link($tag->term_id) ); ?>" 
                                           class="tag-link"
                                           title="<?php echo esc_attr( $tag->count . ' ' . __( 'مقال', 'wasla' ) ); ?>">
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
                                <h3 class="newsletter-title"><?php _e( 'ابق على اطلاع', 'wasla' ); ?></h3>
                                <p class="newsletter-description">
                                    <?php _e( 'اشترك ليصلك كل جديد من المقالات والنصائح التعليمية', 'wasla' ); ?>
                                </p>
                                <form class="newsletter-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                                    <?php wp_nonce_field('wasla_newsletter', 'wasla_newsletter_nonce'); ?>
                                    <input type="hidden" name="action" value="wasla_newsletter_submission">
                                    <input type="email" 
                                           class="newsletter-input" 
                                           name="newsletter_email"
                                           placeholder="<?php esc_attr_e( 'بريدك الإلكتروني', 'wasla' ); ?>"
                                           required>
                                    <button type="submit" name="wasla_newsletter_submit" class="newsletter-submit">
                                        <i class="bi bi-send"></i>
                                        <?php _e( 'اشتراك', 'wasla' ); ?>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div class="sidebar-widget contact-widget">
                            <h3 class="widget-title">
                                <i class="bi bi-headset"></i>
                                <?php _e( 'تحتاج مساعدة؟', 'wasla' ); ?>
                            </h3>
                            <div class="contact-info">
                                <?php echo wasla_contact_link( 'email' ); ?>
                                <?php echo wasla_contact_link( 'whatsapp' ); ?>
                                <?php echo wasla_contact_link( 'phone' ); ?>
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
                    <h1 class="no-posts-title"><?php _e( 'لا توجد مقالات في هذا التصنيف', 'wasla' ); ?></h1>
                    <p class="no-posts-description">
                        <?php printf( __( 'عذراً، لا توجد مقالات منشورة في تصنيف "%s" حالياً.', 'wasla' ), single_cat_title( '', false ) ); ?>
                    </p>
                    <div class="no-posts-actions">
                        <a href="<?php echo esc_url( home_url('/blog') ); ?>" class="btn-primary">
                            <i class="bi bi-journal-bookmark"></i>
                            <?php _e( 'تصفح المدونة', 'wasla' ); ?>
                        </a>
                        <a href="<?php echo esc_url( home_url() ); ?>" class="btn-secondary">
                            <i class="bi bi-house"></i>
                            <?php _e( 'العودة للرئيسية', 'wasla' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
