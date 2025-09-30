<?php
/**
 * Template Name: Sitemap Page
 * Description: Sitemap page for Wasla educational site
 * Provides complete site navigation and content overview
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<div class="wasla-sitemap-page">
    <!-- Page Hero Section -->
    <section class="legal-hero">
        <div class="wasla-container">
            <!-- Breadcrumb Navigation -->
            <nav class="page-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">الرئيسية</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current">خريطة الموقع</span>
            </nav>
            
            <!-- Page Title -->
            <h1 class="legal-title">خريطة الموقع</h1>
            <p class="legal-subtitle">
                دليل شامل لجميع صفحات ومحتويات موقع وصلة
            </p>
            
            <!-- Last Updated -->
            <div class="legal-meta">
                <span class="last-updated">
                    <i class="bi bi-map"></i>
                    آخر تحديث: <?php echo date('j F Y'); ?>
                </span>
            </div>
        </div>
    </section>

    <!-- Sitemap Content -->
    <section class="legal-content">
        <div class="wasla-container">
            <div class="legal-layout">
                <!-- Main Content -->
                <main class="legal-main" role="main">
                    <article class="sitemap-content">
                        
                        <!-- Main Pages Section -->
                        <section class="sitemap-section">
                            <h2><i class="bi bi-house-door"></i> الصفحات الرئيسية</h2>
                            <ul class="sitemap-list">
                                <li>
                                    <a href="<?php echo home_url(); ?>">
                                        <i class="bi bi-chevron-left"></i>
                                        الصفحة الرئيسية
                                    </a>
                                    <span class="page-description">صفحة البداية والترحيب بالزوار</span>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('/blog'); ?>">
                                        <i class="bi bi-chevron-left"></i>
                                        المدونة
                                    </a>
                                    <span class="page-description">جميع المقالات التعليمية</span>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('/about-us'); ?>">
                                        <i class="bi bi-chevron-left"></i>
                                        من نحن
                                    </a>
                                    <span class="page-description">معلومات عن منصة وصلة ورسالتنا</span>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('/contact'); ?>">
                                        <i class="bi bi-chevron-left"></i>
                                        اتصل بنا
                                    </a>
                                    <span class="page-description">طرق التواصل معنا</span>
                                </li>
                            </ul>
                        </section>

                        <!-- Categories Section -->
                        <section class="sitemap-section">
                            <h2><i class="bi bi-folder"></i> التصنيفات</h2>
                            <?php
                            $categories = get_categories(array(
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'hide_empty' => false
                            ));
                            
                            if ($categories) :
                            ?>
                                <ul class="sitemap-list categories-list">
                                    <?php foreach ($categories as $category) : ?>
                                        <li>
                                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                                <i class="bi bi-chevron-left"></i>
                                                <?php echo esc_html($category->name); ?>
                                            </a>
                                            <span class="page-description">
                                                <?php echo $category->count; ?> <?php echo $category->count == 1 ? 'مقال' : 'مقالات'; ?>
                                            </span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else : ?>
                                <p>لا توجد تصنيفات متاحة حالياً.</p>
                            <?php endif; ?>
                        </section>

                        <!-- Recent Posts Section -->
                        <section class="sitemap-section">
                            <h2><i class="bi bi-file-text"></i> أحدث المقالات</h2>
                            <?php
                            $recent_posts = get_posts(array(
                                'numberposts' => 20,
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'DESC'
                            ));
                            
                            if ($recent_posts) :
                            ?>
                                <ul class="sitemap-list posts-list">
                                    <?php foreach ($recent_posts as $post) : ?>
                                        <li>
                                            <a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
                                                <i class="bi bi-chevron-left"></i>
                                                <?php echo esc_html($post->post_title); ?>
                                            </a>
                                            <span class="page-description">
                                                <?php echo get_the_date('j F Y', $post->ID); ?>
                                            </span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <div class="view-all-link">
                                    <a href="<?php echo home_url('/blog'); ?>" class="primary-btn">
                                        <i class="bi bi-arrow-left"></i>
                                        عرض جميع المقالات
                                    </a>
                                </div>
                            <?php else : ?>
                                <p>لا توجد مقالات متاحة حالياً.</p>
                            <?php endif; ?>
                        </section>

                        <!-- Tags Section -->
                        <section class="sitemap-section">
                            <h2><i class="bi bi-tags"></i> الوسوم</h2>
                            <?php
                            $tags = get_tags(array(
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'hide_empty' => false,
                                'number' => 30
                            ));
                            
                            if ($tags) :
                            ?>
                                <div class="tags-cloud">
                                    <?php foreach ($tags as $tag) : ?>
                                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="tag-item">
                                            <?php echo esc_html($tag->name); ?>
                                            <span class="tag-count"><?php echo $tag->count; ?></span>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php else : ?>
                                <p>لا توجد وسوم متاحة حالياً.</p>
                            <?php endif; ?>
                        </section>

                        <!-- Legal Pages Section -->
                        <section class="sitemap-section">
                            <h2><i class="bi bi-shield-check"></i> الصفحات القانونية</h2>
                            <ul class="sitemap-list">
                                <li>
                                    <a href="<?php echo home_url('/privacy-policy'); ?>">
                                        <i class="bi bi-chevron-left"></i>
                                        سياسة الخصوصية
                                    </a>
                                    <span class="page-description">كيف نحمي بياناتك الشخصية</span>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('/terms-of-service'); ?>">
                                        <i class="bi bi-chevron-left"></i>
                                        شروط الخدمة
                                    </a>
                                    <span class="page-description">قواعد استخدام الموقع</span>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('/cookie-policy'); ?>">
                                        <i class="bi bi-chevron-left"></i>
                                        سياسة ملفات تعريف الارتباط
                                    </a>
                                    <span class="page-description">كيف نستخدم ملفات الكوكيز</span>
                                </li>
                            </ul>
                        </section>

                        <!-- Archives Section -->
                        <section class="sitemap-section">
                            <h2><i class="bi bi-calendar3"></i> الأرشيف الشهري</h2>
                            <?php
                            $archives = wp_get_archives(array(
                                'type' => 'monthly',
                                'format' => 'custom',
                                'show_post_count' => true,
                                'echo' => 0,
                                'limit' => 12
                            ));
                            
                            if ($archives) :
                            ?>
                                <ul class="sitemap-list archives-list">
                                    <?php
                                    // Process archives output
                                    $archives_array = explode('</li>', $archives);
                                    foreach ($archives_array as $archive) {
                                        if (!empty(trim($archive))) {
                                            echo '<li><i class="bi bi-chevron-left"></i>' . $archive . '</li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            <?php else : ?>
                                <p>لا يوجد أرشيف متاح حالياً.</p>
                            <?php endif; ?>
                        </section>

                    </article>
                </main>

                <!-- Sidebar -->
                <aside class="legal-sidebar" role="complementary">
                    <!-- Quick Navigation -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-compass"></i>
                            التنقل السريع
                        </h3>
                        <ul class="summary-list">
                            <li><a href="#main-pages"><i class="bi bi-chevron-left"></i> الصفحات الرئيسية</a></li>
                            <li><a href="#categories"><i class="bi bi-chevron-left"></i> التصنيفات</a></li>
                            <li><a href="#recent-posts"><i class="bi bi-chevron-left"></i> أحدث المقالات</a></li>
                            <li><a href="#tags"><i class="bi bi-chevron-left"></i> الوسوم</a></li>
                            <li><a href="#legal"><i class="bi bi-chevron-left"></i> الصفحات القانونية</a></li>
                            <li><a href="#archives"><i class="bi bi-chevron-left"></i> الأرشيف</a></li>
                        </ul>
                    </div>

                    <!-- Statistics -->
                    <div class="sidebar-widget summary-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-bar-chart"></i>
                            إحصائيات الموقع
                        </h3>
                        <ul class="summary-list">
                            <li>
                                <i class="bi bi-file-text"></i>
                                <?php
                                $post_count = wp_count_posts()->publish;
                                echo $post_count . ' ' . ($post_count == 1 ? 'مقال' : 'مقالات');
                                ?>
                            </li>
                            <li>
                                <i class="bi bi-folder"></i>
                                <?php
                                $cat_count = wp_count_terms('category');
                                echo $cat_count . ' ' . ($cat_count == 1 ? 'تصنيف' : 'تصنيفات');
                                ?>
                            </li>
                            <li>
                                <i class="bi bi-tags"></i>
                                <?php
                                $tag_count = wp_count_terms('post_tag');
                                echo $tag_count . ' ' . ($tag_count == 1 ? 'وسم' : 'وسوم');
                                ?>
                            </li>
                        </ul>
                    </div>

                    <!-- Search Widget -->
                    <div class="sidebar-widget support-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-search"></i>
                            البحث في الموقع
                        </h3>
                        <p>لم تجد ما تبحث عنه في خريطة الموقع؟</p>
                        <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                            <input type="search" class="search-field" placeholder="ابحث في الموقع..." name="s" />
                            <button type="submit" class="support-btn">
                                <i class="bi bi-search"></i>
                                بحث
                            </button>
                        </form>
                    </div>

                    <!-- Help Widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-question-circle"></i>
                            محتاج مساعدة؟
                        </h3>
                        <p>إذا لم تجد ما تبحث عنه، تواصل معنا وسنساعدك</p>
                        <a href="<?php echo home_url('/contact'); ?>" class="support-btn">
                            <i class="bi bi-chat-dots"></i>
                            اتصل بنا
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
