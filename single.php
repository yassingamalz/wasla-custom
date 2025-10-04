<?php
/**
 * Single Post Template for Wasla Educational Site
 * Template for displaying individual blog posts/articles
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<div class="wasla-single-article">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <!-- Article Hero Section -->
    <section class="article-hero">
        <div class="wasla-container">
            <!-- Breadcrumb Navigation -->
            <nav class="article-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">الرئيسية</a>
                <span class="breadcrumb-separator">/</span>
                <a href="<?php echo get_permalink(get_option('page_for_posts')) ?: home_url('/blog'); ?>">المدونة</a>
                <?php 
                $categories = get_the_category();
                if (!empty($categories)) : ?>
                    <span class="breadcrumb-separator">/</span>
                    <a href="<?php echo get_category_link($categories[0]->term_id); ?>"><?php echo esc_html($categories[0]->name); ?></a>
                <?php endif; ?>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current"><?php echo wp_trim_words(get_the_title(), 5); ?></span>
            </nav>
            
            <!-- Article Title -->
            <h1 class="article-title"><?php the_title(); ?></h1>
            
            <!-- Article Meta Information -->
            <div class="article-meta">
                <?php if (!empty($categories)) : ?>
                    <div class="article-meta-item article-category">
                        <i class="bi bi-folder"></i>
                        <span><?php echo esc_html($categories[0]->name); ?></span>
                    </div>
                <?php endif; ?>

                <div class="article-meta-item">
                    <i class="bi bi-person-circle"></i>
                    <span><?php echo wasla_get_proper_author_name(); ?></span>
                </div>
                
                <div class="article-meta-item">
                    <i class="bi bi-calendar3"></i>
                    <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('j F Y'); ?></time>
                </div>

                <div class="article-meta-item">
                    <i class="bi bi-clock"></i>
                    <span><?php echo wasla_get_reading_time(); ?> دقائق قراءة</span>
                </div>

                <div class="article-meta-item">
                    <i class="bi bi-eye"></i>
                    <span><?php echo wasla_get_post_views(get_the_ID()); ?> مشاهدة</span>
                </div>

            </div>
        </div>
    </section>

    <!-- Main Article Content -->
    <section class="article-content">
        <div class="wasla-container">
            <div class="article-layout">
                <!-- Main Article Column -->
                <main class="article-main" role="main">
                    <!-- Featured Image Section -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="article-featured-image">
                            <?php 
                            the_post_thumbnail('large', array(
                                'class' => 'featured-img',
                                'alt' => get_the_title(),
                                'loading' => 'eager'
                            )); 
                            ?>
                            <?php if (get_the_post_thumbnail_caption()) : ?>
                                <figcaption class="image-caption"><?php echo get_the_post_thumbnail_caption(); ?></figcaption>
                            <?php endif; ?>
                        </div>
                    <?php else : ?>
                        <div class="article-featured-image placeholder">
                            <i class="bi bi-journal-text"></i>
                            <span class="placeholder-text">مقال تعليمي</span>
                        </div>
                    <?php endif; ?>

                    <?php wasla_header_ad(); ?>

                    <!-- Article Content Body -->
                    <article class="article-body" itemscope itemtype="https://schema.org/Article">
                        <!-- Schema.org structured data -->
                        <meta itemprop="headline" content="<?php echo esc_attr(get_the_title()); ?>">
                        <meta itemprop="datePublished" content="<?php echo get_the_date('c'); ?>">
                        <meta itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">
                        <meta itemprop="author" content="<?php echo esc_attr(wasla_get_proper_author_name()); ?>">
                        
                        <div itemprop="articleBody">
                            <?php 
                            the_content();
                            
                            // Handle paginated posts
                            wp_link_pages(array(
                                'before' => '<div class="page-navigation"><span class="page-links-title">الصفحات: </span>',
                                'after' => '</div>',
                                'link_before' => '<span class="page-number">',
                                'link_after' => '</span>',
                                'next_or_number' => 'number',
                                'separator' => ' ',
                            ));
                            ?>
                        </div>
                    </article>

                    <!-- Article Footer: Tags & Sharing -->
                    <footer class="article-footer">
                        <!-- Tags Section -->
                        <?php $tags = get_the_tags(); ?>
                        <?php if ($tags && !is_wp_error($tags)) : ?>
                            <div class="article-tags">
                                <h3 class="tags-title">
                                    <i class="bi bi-tags"></i>
                                    الكلمات المفتاحية:
                                </h3>
                                <div class="tags-list">
                                    <?php foreach($tags as $tag) : ?>
                                        <a href="<?php echo get_tag_link($tag->term_id); ?>" 
                                           class="tag-item" 
                                           rel="tag"><?php echo esc_html($tag->name); ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Social Sharing Section -->
                        <div class="article-sharing">
                            <h3 class="sharing-title">
                                <i class="bi bi-share"></i>
                                شارك هذا المقال:
                            </h3>
                            <div class="social-share-buttons">
                                <?php 
                                $post_url = urlencode(get_permalink());
                                $post_title = urlencode(get_the_title());
                                $post_excerpt = urlencode(wp_trim_words(get_the_excerpt() ?: wp_strip_all_tags(get_the_content()), 20));
                                ?>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" 
                                   target="_blank" class="share-btn share-facebook" 
                                   aria-label="مشاركة على فيسبوك" rel="noopener">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" 
                                   target="_blank" class="share-btn share-twitter" 
                                   aria-label="مشاركة على تويتر" rel="noopener">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="https://wa.me/?text=<?php echo $post_title . ' - ' . $post_url; ?>" 
                                   target="_blank" class="share-btn share-whatsapp" 
                                   aria-label="مشاركة على واتساب" rel="noopener">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                                <a href="https://t.me/share/url?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" 
                                   target="_blank" class="share-btn share-telegram" 
                                   aria-label="مشاركة على تليجرام" rel="noopener">
                                    <i class="bi bi-telegram"></i>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $post_url; ?>&title=<?php echo $post_title; ?>&summary=<?php echo $post_excerpt; ?>" 
                                   target="_blank" class="share-btn share-linkedin" 
                                   aria-label="مشاركة على لينكد إن" rel="noopener">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <button class="share-btn share-copy" onclick="copyToClipboard('<?php echo get_permalink(); ?>')" 
                                        aria-label="نسخ الرابط">
                                    <i class="bi bi-link-45deg"></i>
                                </button>
                            </div>
                        </div>
                    </footer>

                    <!-- Author Information Box -->
                    <?php $author_id = get_the_author_meta('ID'); ?>
                    <div class="author-box">
                        <div class="author-avatar">
                            <?php if (get_avatar($author_id)) : ?>
                                <?php echo get_avatar($author_id, 80, '', wasla_get_proper_author_name() . ' avatar', array('class' => 'author-img')); ?>
                            <?php else : ?>
                                <i class="bi bi-person-circle"></i>
                            <?php endif; ?>
                        </div>
                        <div class="author-info">
                            <h3 class="author-name"><?php echo wasla_get_proper_author_name(); ?></h3>
                            <p class="author-bio">
                                <?php 
                                $author_bio = get_the_author_meta('description');
                                if ($author_bio) {
                                    echo esc_html($author_bio);
                                } else {
                                    echo 'نحن فريق من الخبراء المتخصصين في التعليم والتوجيه الأكاديمي، نعمل على تقديم المحتوى التعليمي الأفضل والأكثر دقة لمساعدة الطلاب وأولياء الأمور في اتخاذ القرارات التعليمية الصحيحة.';
                                }
                                ?>
                            </p>
                            <?php if (get_the_author_meta('user_url')) : ?>
                                <a href="<?php echo esc_url(get_the_author_meta('user_url')); ?>" 
                                   class="author-website" target="_blank" rel="noopener">
                                    <i class="bi bi-globe"></i> الموقع الشخصي
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Post Navigation -->
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    if ($prev_post || $next_post) : ?>
                        <nav class="post-navigation" role="navigation" aria-label="تنقل بين المقالات">
                            <h2 class="screen-reader-text">تنقل بين المقالات</h2>
                            
                            <?php if ($prev_post) : ?>
                                <div class="nav-previous">
                                    <a href="<?php echo get_permalink($prev_post->ID); ?>" rel="prev" class="nav-post">
                                        <div class="nav-direction">
                                            <i class="bi bi-chevron-right"></i>
                                            <span>المقال السابق</span>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($next_post) : ?>
                                <div class="nav-next">
                                    <a href="<?php echo get_permalink($next_post->ID); ?>" rel="next" class="nav-post">
                                        <div class="nav-direction">
                                            <span>المقال التالي</span>
                                            <i class="bi bi-chevron-left"></i>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </nav>
                    <?php endif; ?>

                    <?php wasla_content_ad(); ?>

                    <!-- Comments Section -->
                    <?php 
                    // Load comments template if comments are open or we have at least one comment
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif; 
                    ?>
                </main>

                <!-- Article Sidebar -->
                <aside class="article-sidebar" role="complementary">
                    <?php wasla_sidebar_ad( 'top' ); ?>
                    <!-- Quick Navigation -->
                    <div class="sidebar-widget sidebar-toc">
                        <h3><i class="bi bi-list-ul"></i> محتويات المقال</h3>
                        <div id="table-of-contents">
                            <!-- Will be populated by JavaScript -->
                            <p class="toc-placeholder">جاري تحميل قائمة المحتويات...</p>
                        </div>
                    </div>

                    <?php wasla_sidebar_ad( 'mid' ); ?>

                    <!-- Related Posts -->
                    <div class="sidebar-widget sidebar-related">
                        <h3><i class="bi bi-collection"></i> مقالات ذات صلة</h3>
                        <ul class="related-posts-list">
                            <?php
                            $related_posts = new WP_Query(array(
                                'category__in' => wp_get_post_categories(get_the_ID()),
                                'post__not_in' => array(get_the_ID()),
                                'posts_per_page' => 5,
                                'post_status' => 'publish',
                                'orderby' => 'rand'
                            ));
                            
                            if ($related_posts->have_posts()) :
                                while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                                    <li class="related-post-item">
                                        <a href="<?php the_permalink(); ?>" class="related-post-link">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="related-post-thumb">
                                                    <?php the_post_thumbnail('thumbnail', array('loading' => 'lazy')); ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="related-post-content">
                                                <h4 class="related-post-title"><?php echo wp_trim_words(get_the_title(), 6); ?></h4>
                                                <span class="related-post-date"><?php echo get_the_date('j M Y'); ?></span>
                                            </div>
                                        </a>
                                    </li>
                                <?php endwhile;
                                wp_reset_postdata();
                            else : ?>
                                <li class="no-related">لا توجد مقالات ذات صلة</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    
                    <?php wasla_sidebar_ad( 'bottom' ); ?>

                    <!-- Categories -->
                    <div class="sidebar-widget sidebar-categories">
                        <h3><i class="bi bi-folder"></i> التصنيفات</h3>
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
                                <li><a href="#"><i class="bi bi-folder2"></i> دون بوسكو</a></li>
                                <li><a href="#"><i class="bi bi-folder2"></i> الثانوية العامة</a></li>
                                <li><a href="#"><i class="bi bi-folder2"></i> الجامعات</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <!-- Contact Widget -->
                    <div class="sidebar-widget sidebar-contact">
                        <h3><i class="bi bi-envelope"></i> تواصل معنا</h3>
                        <div class="contact-info">
                            <?php echo wasla_contact_link( 'email' ); ?>
                            <?php echo wasla_contact_link( 'phone' ); ?>
                            <?php echo wasla_contact_link( 'whatsapp' ); ?>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <?php wasla_footer_ad(); ?>

    <!-- Related Articles Section -->
    <section class="related-articles">
        <div class="wasla-container">
            <h2 class="section-title">
                <i class="bi bi-bookmark-star"></i>
                مقالات قد تهمك أيضاً
            </h2>
            
            <div class="related-articles-grid">
                <?php
                // Get more related posts for bottom section
                $more_related = new WP_Query(array(
                    'category__in' => wp_get_post_categories(get_the_ID()),
                    'post__not_in' => array(get_the_ID()),
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'meta_query' => array(
                        'relation' => 'OR',
                        array(
                            'key' => '_thumbnail_id',
                            'compare' => 'EXISTS'
                        ),
                        array(
                            'key' => '_thumbnail_id',
                            'compare' => 'NOT EXISTS'
                        )
                    )
                ));
                
                if ($more_related->have_posts()) :
                    while ($more_related->have_posts()) : $more_related->the_post(); ?>
                        <article class="related-article-card">
                            <div class="related-article-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', array('loading' => 'lazy')); ?>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php the_permalink(); ?>" class="placeholder-link">
                                        <i class="bi bi-journal-bookmark"></i>
                                    </a>
                                <?php endif; ?>
                                
                                <?php $post_categories = get_the_category(); ?>
                                <?php if (!empty($post_categories)) : ?>
                                    <span class="article-category-badge"><?php echo esc_html($post_categories[0]->name); ?></span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="related-article-content">
                                <h3 class="related-article-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p class="related-article-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt() ?: wp_strip_all_tags(get_the_content()), 15, '...'); ?>
                                </p>
                                <div class="related-article-meta">
                                    <span class="article-date">
                                        <i class="bi bi-calendar3"></i>
                                        <?php echo get_the_date('j M Y'); ?>
                                    </span>
                                    <span class="article-read-time">
                                        <i class="bi bi-clock"></i>
                                        <?php echo wasla_get_reading_time(); ?> دقائق
                                    </span>
                                </div>
                            </div>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                else :
                    // Fallback content if no related posts
                    for ($i = 1; $i <= 3; $i++) : ?>
                        <article class="related-article-card placeholder">
                            <div class="related-article-image">
                                <div class="placeholder-link">
                                    <i class="bi bi-journal-plus"></i>
                                </div>
                                <span class="article-category-badge">قريباً</span>
                            </div>
                            <div class="related-article-content">
                                <h3 class="related-article-title">
                                    <a href="#">مقال تعليمي جديد <?php echo $i; ?></a>
                                </h3>
                                <p class="related-article-excerpt">
                                    محتوى تعليمي مفيد قريباً... تابعونا لمزيد من المقالات والنصائح التعليمية المفيدة.
                                </p>
                                <div class="related-article-meta">
                                    <span class="article-date">
                                        <i class="bi bi-calendar3"></i>
                                        قريباً
                                    </span>
                                    <span class="article-read-time">
                                        <i class="bi bi-clock"></i>
                                        5 دقائق
                                    </span>
                                </div>
                            </div>
                        </article>
                    <?php endfor;
                endif; ?>
            </div>
        </div>
    </section>

    <?php endwhile; else : ?>
        <!-- No Post Found -->
        <section class="no-content">
            <div class="wasla-container">
                <div class="no-content-message">
                    <i class="bi bi-exclamation-triangle"></i>
                    <h2>المحتوى غير متوفر</h2>
                    <p>عذراً، لم يتم العثور على المحتوى المطلوب.</p>
                    <a href="<?php echo home_url(); ?>" class="btn-home">
                        <i class="bi bi-house"></i>
                        العودة للرئيسية
                    </a>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>

<?php get_footer(); ?>