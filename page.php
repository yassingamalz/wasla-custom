<?php
/**
 * Generic Page Template for Wasla Educational Site
 * Fallback template for pages without specific templates
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<div class="wasla-generic-page">
    <?php while (have_posts()) : the_post(); ?>
        <!-- Page Hero Section -->
        <section class="page-hero">
            <div class="wasla-container">
                <!-- Breadcrumb Navigation -->
                <nav class="page-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo home_url(); ?>">الرئيسية</a>
                    <span class="breadcrumb-separator">/</span>
                    <span class="breadcrumb-current"><?php the_title(); ?></span>
                </nav>
                
                <!-- Page Title -->
                <h1 class="page-title"><?php the_title(); ?></h1>
                
                <!-- Page Meta Information -->
                <div class="page-meta">
                    <span class="page-date">
                        <i class="bi bi-calendar3"></i>
                        <time datetime="<?php echo get_the_date('c'); ?>">آخر تحديث: <?php echo get_the_modified_date('j F Y'); ?></time>
                    </span>
                    <?php if (get_the_author()) : ?>
                        <span class="page-author">
                            <i class="bi bi-person-circle"></i>
                            <span><?php echo wasla_get_proper_author_name(); ?></span>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- Page Content -->
        <section class="page-content">
            <div class="wasla-container">
                <div class="page-layout">
                    <!-- Main Content -->
                    <main class="page-main" role="main">
                        <!-- Featured Image Section -->
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="page-featured-image">
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
                        <?php endif; ?>

                        <!-- Page Content Body -->
                        <article class="page-body" itemscope itemtype="https://schema.org/WebPage">
                            <!-- Schema.org structured data -->
                            <meta itemprop="name" content="<?php echo esc_attr(get_the_title()); ?>">
                            <meta itemprop="datePublished" content="<?php echo get_the_date('c'); ?>">
                            <meta itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">
                            
                            <div itemprop="mainContentOfPage">
                                <?php 
                                the_content();
                                
                                // Handle paginated content
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

                        <!-- Page Footer -->
                        <footer class="page-footer">
                            <?php if (has_tag()) : ?>
                                <!-- Tags Section -->
                                <div class="page-tags">
                                    <h3 class="tags-title">
                                        <i class="bi bi-tags"></i>
                                        الكلمات المفتاحية:
                                    </h3>
                                    <div class="tags-list">
                                        <?php the_tags('', ' ', ''); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Page Actions -->
                            <div class="page-actions">
                                <div class="page-share">
                                    <h4 class="share-title">
                                        <i class="bi bi-share"></i>
                                        شارك هذه الصفحة:
                                    </h4>
                                    <div class="social-share-buttons">
                                        <?php 
                                        $page_url = urlencode(get_permalink());
                                        $page_title = urlencode(get_the_title());
                                        ?>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page_url; ?>" 
                                           target="_blank" class="share-btn share-facebook" 
                                           aria-label="مشاركة على فيسبوك" rel="noopener">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                        <a href="https://twitter.com/intent/tweet?url=<?php echo $page_url; ?>&text=<?php echo $page_title; ?>" 
                                           target="_blank" class="share-btn share-twitter" 
                                           aria-label="مشاركة على تويتر" rel="noopener">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                        <a href="https://wa.me/?text=<?php echo $page_title . ' - ' . $page_url; ?>" 
                                           target="_blank" class="share-btn share-whatsapp" 
                                           aria-label="مشاركة على واتساب" rel="noopener">
                                            <i class="bi bi-whatsapp"></i>
                                        </a>
                                        <button class="share-btn share-copy" onclick="copyToClipboard('<?php echo get_permalink(); ?>')" 
                                                aria-label="نسخ الرابط">
                                            <i class="bi bi-link-45deg"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Edit Link for Admins -->
                                <?php edit_post_link(
                                    '<i class="bi bi-pencil"></i> تحرير الصفحة',
                                    '<div class="edit-link">',
                                    '</div>'
                                ); ?>
                            </div>
                        </footer>

                        <!-- Comments Section -->
                        <?php 
                        // Load comments template if comments are open or we have at least one comment
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif; 
                        ?>
                    </main>

                    <!-- Page Sidebar -->
                    <aside class="page-sidebar" role="complementary">
                        <!-- Page Navigation -->
                        <div class="sidebar-widget page-nav-widget">
                            <h3 class="widget-title">
                                <i class="bi bi-list-ul"></i>
                                محتويات الصفحة
                            </h3>
                            <div id="page-table-of-contents">
                                <!-- Will be populated by JavaScript -->
                                <p class="toc-placeholder">جاري تحميل قائمة المحتويات...</p>
                            </div>
                        </div>

                        <!-- Related Pages -->
                        <div class="sidebar-widget related-pages-widget">
                            <h3 class="widget-title">
                                <i class="bi bi-files"></i>
                                صفحات ذات صلة
                            </h3>
                            <ul class="related-pages-list">
                                <?php
                                // Get pages from same parent or sibling pages
                                $current_page_id = get_the_ID();
                                $parent_id = wp_get_post_parent_id($current_page_id);
                                
                                if ($parent_id) {
                                    // Get sibling pages
                                    $related_pages = get_pages(array(
                                        'parent' => $parent_id,
                                        'exclude' => $current_page_id,
                                        'number' => 5,
                                        'sort_column' => 'menu_order, post_title'
                                    ));
                                } else {
                                    // Get child pages
                                    $related_pages = get_pages(array(
                                        'parent' => $current_page_id,
                                        'number' => 5,
                                        'sort_column' => 'menu_order, post_title'
                                    ));
                                }
                                
                                if ($related_pages) :
                                    foreach ($related_pages as $page) : ?>
                                        <li class="related-page-item">
                                            <a href="<?php echo get_permalink($page->ID); ?>" class="related-page-link">
                                                <i class="bi bi-arrow-left"></i>
                                                <span class="related-page-title"><?php echo esc_html($page->post_title); ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach;
                                else : ?>
                                    <li class="no-related">لا توجد صفحات ذات صلة</li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        
                        <!-- Quick Links -->
                        <div class="sidebar-widget quick-links-widget">
                            <h3 class="widget-title">
                                <i class="bi bi-lightning"></i>
                                روابط سريعة
                            </h3>
                            <ul class="quick-links-list">
                                <li><a href="<?php echo home_url(); ?>"><i class="bi bi-house"></i> الرئيسية</a></li>
                                <li><a href="<?php echo home_url('/blog'); ?>"><i class="bi bi-journal-text"></i> المدونة</a></li>
                                <li><a href="<?php echo home_url('/contact'); ?>"><i class="bi bi-envelope"></i> اتصل بنا</a></li>
                                <?php
                                // Get main menu items
                                $menu_items = wp_get_nav_menu_items('wasla-main-menu');
                                if ($menu_items) :
                                    $count = 0;
                                    foreach ($menu_items as $item) :
                                        if ($count >= 3) break; // Limit to 3 additional items
                                        if ($item->menu_item_parent == 0) : // Top level items only
                                            $count++;
                                ?>
                                            <li><a href="<?php echo $item->url; ?>"><i class="bi bi-arrow-right"></i> <?php echo $item->title; ?></a></li>
                                <?php 
                                        endif;
                                    endforeach;
                                endif; ?>
                            </ul>
                        </div>

                        <!-- Contact Widget -->
                        <div class="sidebar-widget contact-widget">
                            <h3 class="widget-title">
                                <i class="bi bi-headset"></i>
                                تحتاج مساعدة؟
                            </h3>
                            <div class="contact-info">
                                <a href="mailto:info@wasla-eg.com" class="contact-item">
                                    <i class="bi bi-envelope-fill"></i>
                                    <span>info@wasla-eg.com</span>
                                </a>
                                <a href="tel:+201234567890" class="contact-item">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span>+20 123 456 7890</span>
                                </a>
                                <a href="https://wa.me/201234567890" target="_blank" class="contact-item" rel="noopener">
                                    <i class="bi bi-whatsapp"></i>
                                    <span>واتساب وصلة</span>
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</div>

<script>
// Copy to clipboard function
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        // Show success message
        const button = event.target.closest('.share-copy');
        const originalContent = button.innerHTML;
        button.innerHTML = '<i class="bi bi-check"></i>';
        button.style.background = '#28a745';
        
        setTimeout(() => {
            button.innerHTML = originalContent;
            button.style.background = '';
        }, 2000);
    }).catch(function(err) {
        console.error('Could not copy text: ', err);
    });
}

// Generate table of contents
document.addEventListener('DOMContentLoaded', function() {
    const tocContainer = document.getElementById('page-table-of-contents');
    const headings = document.querySelectorAll('.page-body h2, .page-body h3, .page-body h4');
    
    if (headings.length > 0) {
        let tocHTML = '<ul class="toc-list">';
        
        headings.forEach((heading, index) => {
            // Create unique ID for heading
            const headingId = 'heading-' + index;
            heading.id = headingId;
            
            // Determine heading level
            const level = heading.tagName.toLowerCase();
            const indent = level === 'h2' ? '' : (level === 'h3' ? 'toc-indent-1' : 'toc-indent-2');
            
            tocHTML += `<li class="toc-item ${indent}">
                <a href="#${headingId}" class="toc-link">${heading.textContent}</a>
            </li>`;
        });
        
        tocHTML += '</ul>';
        tocContainer.innerHTML = tocHTML;
        
        // Smooth scroll for TOC links
        tocContainer.querySelectorAll('.toc-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    } else {
        tocContainer.innerHTML = '<p class="no-toc">لا توجد عناوين فرعية في هذه الصفحة</p>';
    }
});
</script>

<?php get_footer(); ?>