<?php
/**
 * Custom Sidebar for Wasla Theme
 * Displays sidebar content with WordPress widget compatibility
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$astra_sidebar = apply_filters( 'astra_get_sidebar', 'sidebar-1' );
?>

<div <?php
echo wp_kses_post(
    astra_attr(
        'sidebar',
        array(
            'id'    => 'secondary',
            'class' => join( ' ', astra_get_secondary_class() ) . ' article-sidebar',
        )
    )
);
?>>
    <div class="sidebar-main" <?php echo apply_filters( 'astra_sidebar_data_attrs', '', $astra_sidebar ); ?>>
        <?php astra_sidebars_before(); ?>

        <!-- Table of Contents Widget -->
        <div class="sidebar-widget sidebar-toc">
            <h3><i class="bi bi-list-ul"></i> محتويات المقال</h3>
            <div id="table-of-contents">
                <p class="toc-placeholder">سيتم إنشاء فهرس المحتويات تلقائياً من عناوين المقال</p>
            </div>
        </div>

        <!-- Related Posts Widget -->
        <div class="sidebar-widget sidebar-related">
            <h3><i class="bi bi-bookmark-heart"></i> مقالات ذات صلة</h3>
            <?php
            $related_posts = new WP_Query(array(
                'posts_per_page' => 4,
                'post__not_in' => array(get_the_ID()),
                'category__in' => wp_get_post_categories(get_the_ID()),
                'orderby' => 'rand'
            ));
            
            if ($related_posts->have_posts()) : ?>
                <ul class="related-posts-list">
                    <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                        <li class="related-post-item">
                            <a href="<?php the_permalink(); ?>" class="related-post-link">
                                <div class="related-post-thumb">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    <?php else : ?>
                                        <div class="post-thumb-placeholder">
                                            <i class="bi bi-journal-text"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="related-post-content">
                                    <h4 class="related-post-title"><?php the_title(); ?></h4>
                                    <span class="related-post-date"><?php echo get_the_date('j F Y'); ?></span>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; 
            wp_reset_postdata(); ?>
        </div>

        <!-- Categories Widget -->
        <div class="sidebar-widget sidebar-categories">
            <h3><i class="bi bi-folder"></i> التصنيفات</h3>
            <?php
            $categories = get_categories(array(
                'orderby' => 'count',
                'order'   => 'DESC',
                'number'  => 5,
                'hide_empty' => true,
            ));
            if ($categories) : ?>
                <ul>
                    <?php foreach ($categories as $category) : ?>
                        <li>
                            <a href="<?php echo get_category_link($category->term_id); ?>">
                                <i class="bi bi-arrow-left-short"></i>
                                <?php echo $category->name; ?>
                                <span class="cat-count">(<?php echo $category->count; ?>)</span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>

        <!-- Contact Info Widget -->
        <div class="sidebar-widget sidebar-contact">
            <h3><i class="bi bi-envelope-heart"></i> تواصل معنا</h3>
            <div class="contact-methods">
                <a href="mailto:info@wasla-eg.com" class="contact-item">
                    <i class="bi bi-envelope"></i>
                    <span>info@wasla-eg.com</span>
                </a>
                <a href="tel:+201234567890" class="contact-item">
                    <i class="bi bi-telephone"></i>
                    <span>123 456 7890</span>
                </a>
                <a href="https://wa.me/201234567890" class="contact-item whatsapp">
                    <i class="bi bi-whatsapp"></i>
                    <span>واتساب وصلة</span>
                </a>
            </div>
        </div>

        <?php
        // Load WordPress sidebar widgets if active
        if ( is_active_sidebar( $astra_sidebar ) ) {
            dynamic_sidebar( $astra_sidebar );
        }
        
        astra_sidebars_after();
        ?>
    </div>
</div>