<?php
/**
 * Template Name: Wasla Blog Page
 * Description: Blog page template for Wasla educational site
 * Uses standard WordPress header/footer structure
 */

get_header(); ?>

<style>
/* Blog Page Specific Styles */
.wasla-blog-page {
    direction: rtl;
    font-family: 'Cairo', 'Tajawal', Arial, sans-serif;
    margin: 0;
    padding: 0;
    width: 100%;
    background: #ffffff;
    min-height: 100vh;
}

/* Blog Hero Section */
.blog-hero {
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    color: white;
    padding: 140px 0 80px; /* Increased top padding for fixed header */
    margin: 0;
    width: 100%;
    position: relative;
    overflow: hidden;
    text-align: center;
}

.blog-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 70%, rgba(255, 244, 183, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.blog-hero h1 {
    font-size: 3.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
    line-height: 1.2;
    font-family: 'Cairo', sans-serif;
    color: #ffffff;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.blog-hero p {
    font-size: 1.4rem;
    opacity: 0.95;
    font-weight: 400;
    font-family: 'Tajawal', sans-serif;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Blog Content Section */
.blog-content {
    padding: 80px 0;
    background: #ffffff;
    width: 100%;
    margin: 0;
    clear: both;
}

.blog-main-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 30px;
}

.blog-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 4rem;
    align-items: start;
    margin: 0;
    padding: 0;
}

/* Blog Posts Column */
.blog-posts {
    display: flex;
    flex-direction: column;
    gap: 3rem;
    width: 100%;
}

.blog-post-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0, 11, 88, 0.08);
    transition: all 0.3s ease;
    border: 1px solid #f5f5f5;
    width: 100%;
}

.blog-post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 11, 88, 0.12);
}

.blog-post-image {
    width: 100%;
    height: 250px;
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFF4B7;
    font-size: 3rem;
    position: relative;
    overflow: hidden;
}

.blog-post-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.blog-post-content {
    padding: 2rem;
}

.blog-post-meta {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
    font-size: 0.9rem;
    color: #666;
    font-family: 'Tajawal', sans-serif;
    align-items: center;
    flex-wrap: wrap;
}

.blog-post-category {
    background: #FFF4B7;
    color: #000B58;
    padding: 0.4rem 0.8rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
    font-family: 'Cairo', sans-serif;
}

.blog-post-date {
    display: flex;
    align-items: center;
    gap: 0.3rem;
}

.blog-post-title {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    font-weight: 600;
    line-height: 1.4;
    font-family: 'Cairo', sans-serif;
}

.blog-post-title a {
    color: #2c2c2c;
    text-decoration: none;
    transition: color 0.3s ease;
}

.blog-post-title a:hover {
    color: #006A67;
}

.blog-post-excerpt {
    color: #666;
    line-height: 1.7;
    font-size: 1rem;
    font-family: 'Tajawal', sans-serif;
    margin-bottom: 1.5rem;
}

.blog-post-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 1rem;
    border-top: 1px solid #f0f0f0;
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
    transform: translateX(5px);
}

.post-views {
    color: #999;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 0.3rem;
}

/* Sidebar */
.blog-sidebar {
    background: #f8f9fa;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 5px 25px rgba(0, 11, 88, 0.08);
    border: 1px solid #f0f0f0;
    width: 100%;
    height: fit-content;
    position: sticky;
    top: 120px;
}

.sidebar-widget {
    margin-bottom: 2.5rem;
}

.sidebar-widget:last-child {
    margin-bottom: 0;
}

.sidebar-widget h3 {
    font-size: 1.3rem;
    margin-bottom: 1.5rem;
    font-weight: 600;
    color: #000B58;
    font-family: 'Cairo', sans-serif;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #FFF4B7;
}

.sidebar-categories ul,
.sidebar-recent ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar-categories li,
.sidebar-recent li {
    margin-bottom: 0.8rem;
    padding-bottom: 0.8rem;
    border-bottom: 1px solid #e9ecef;
}

.sidebar-categories li:last-child,
.sidebar-recent li:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.sidebar-categories a,
.sidebar-recent a {
    color: #666;
    text-decoration: none;
    font-size: 1rem;
    font-family: 'Tajawal', sans-serif;
    transition: color 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.sidebar-categories a:hover,
.sidebar-recent a:hover {
    color: #006A67;
}

/* Pagination */
.blog-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    margin-top: 3rem;
    padding: 2rem 0;
    width: 100%;
}

.pagination-link {
    padding: 12px 20px;
    border-radius: 25px;
    background: white;
    border: 2px solid #e9ecef;
    color: #666;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    font-family: 'Cairo', sans-serif;
}

.pagination-link:hover,
.pagination-link.active {
    background: #006A67;
    border-color: #006A67;
    color: white;
}

/* No Posts Message */
.no-posts {
    text-align: center;
    padding: 4rem 2rem;
    color: #666;
    font-size: 1.2rem;
    font-family: 'Tajawal', sans-serif;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .blog-hero {
        padding: 100px 0 60px;
    }
    
    .blog-hero h1 {
        font-size: 2.5rem;
    }
    
    .blog-hero p {
        font-size: 1.2rem;
    }
    
    .blog-main-container {
        padding: 0 20px;
    }
    
    .blog-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .blog-sidebar {
        position: relative;
        top: auto;
        order: -1; /* Show sidebar first on mobile */
    }
    
    .blog-post-footer {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .blog-hero h1 {
        font-size: 2rem;
    }
    
    .blog-hero p {
        font-size: 1.1rem;
    }
    
    .blog-post-content {
        padding: 1.5rem;
    }
    
    .blog-sidebar {
        padding: 1.5rem;
    }
}
</style>

<div class="wasla-blog-page">
    <!-- Blog Hero Section -->
    <section class="blog-hero">
        <div class="wasla-container">
            <h1>مدونة وصلة</h1>
            <p>مقالات ونصائح تعليمية لمساعدتك في رحلتك الدراسية</p>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="blog-content">
        <div class="blog-main-container">
            <div class="blog-grid">
                <main class="blog-posts">
                    <?php
                    // Query for blog posts
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $blog_query = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'paged' => $paged
                    ));

                    if ($blog_query->have_posts()) :
                        while ($blog_query->have_posts()) : $blog_query->the_post();
                    ?>
                        <article class="blog-post-card">
                            <div class="blog-post-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else : ?>
                                    <i class="bi bi-journal-text"></i>
                                <?php endif; ?>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <?php 
                                    $categories = get_the_category();
                                    if (!empty($categories)) :
                                    ?>
                                        <span class="blog-post-category"><?php echo esc_html($categories[0]->name); ?></span>
                                    <?php endif; ?>
                                    <span class="blog-post-date">
                                        <i class="bi bi-calendar"></i>
                                        <?php echo get_the_date('j F Y'); ?>
                                    </span>
                                </div>
                                <h2 class="blog-post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="blog-post-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                                </div>
                                <div class="blog-post-footer">
                                    <a href="<?php the_permalink(); ?>" class="read-more">
                                        اقرأ المزيد <i class="bi bi-arrow-left"></i>
                                    </a>
                                    <span class="post-views">
                                        <i class="bi bi-eye"></i>
                                        <?php echo wasla_get_post_views(get_the_ID()); ?> مشاهدة
                                    </span>
                                </div>
                            </div>
                        </article>
                    <?php 
                        endwhile;
                        
                        // Pagination
                        if ($blog_query->max_num_pages > 1) :
                    ?>
                        <div class="blog-pagination">
                            <?php
                            echo paginate_links(array(
                                'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                                'total' => $blog_query->max_num_pages,
                                'current' => max(1, get_query_var('paged')),
                                'format' => '?paged=%#%',
                                'show_all' => false,
                                'type' => 'plain',
                                'end_size' => 2,
                                'mid_size' => 1,
                                'prev_text' => '<i class="bi bi-chevron-right"></i> السابق',
                                'next_text' => 'التالي <i class="bi bi-chevron-left"></i>',
                                'add_args' => false,
                                'add_fragment' => '',
                            ));
                            ?>
                        </div>
                    <?php 
                        endif;
                    else :
                    ?>
                        <div class="no-posts">
                            <p>لا توجد مقالات في الوقت الحالي.</p>
                        </div>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </main>

                <!-- Sidebar -->
                <aside class="blog-sidebar">
                    <div class="sidebar-widget sidebar-categories">
                        <h3>التصنيفات</h3>
                        <ul>
                            <?php
                            $categories = get_categories(array(
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'hide_empty' => true
                            ));
                            
                            if ($categories) :
                                foreach ($categories as $category) :
                            ?>
                                <li>
                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                        <i class="bi bi-folder"></i> <?php echo esc_html($category->name); ?>
                                    </a>
                                </li>
                            <?php 
                                endforeach;
                            endif;
                            ?>
                        </ul>
                    </div>
                    
                    <div class="sidebar-widget sidebar-recent">
                        <h3>أحدث المقالات</h3>
                        <ul>
                            <?php
                            $recent_posts = new WP_Query(array(
                                'posts_per_page' => 5,
                                'post_status' => 'publish'
                            ));
                            if ($recent_posts->have_posts()) :
                                while ($recent_posts->have_posts()) : $recent_posts->the_post();
                            ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <i class="bi bi-arrow-left"></i>
                                        <?php echo wp_trim_words(get_the_title(), 8); ?>
                                    </a>
                                </li>
                            <?php 
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Blog card animations
    const blogCards = document.querySelectorAll('.blog-post-card');
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

    blogCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
        observer.observe(card);
    });
});
</script>

<?php get_footer(); ?>