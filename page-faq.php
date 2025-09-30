<?php
/**
 * Template Name: FAQ Page
 * Description: Frequently Asked Questions page for Wasla
 * Provides answers to common questions about the platform
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<div class="wasla-faq-page">
    <!-- Page Hero Section -->
    <section class="legal-hero">
        <div class="wasla-container">
            <!-- Breadcrumb Navigation -->
            <nav class="page-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">الرئيسية</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current">الأسئلة الشائعة</span>
            </nav>
            
            <!-- Page Title -->
            <h1 class="legal-title">الأسئلة الشائعة</h1>
            <p class="legal-subtitle">
                إجابات على أكثر الأسئلة شيوعاً حول منصة وصلة
            </p>
            
            <!-- Last Updated -->
            <div class="legal-meta">
                <span class="last-updated">
                    <i class="bi bi-question-circle"></i>
                    آخر تحديث: <?php echo date('j F Y'); ?>
                </span>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="legal-content">
        <div class="wasla-container">
            <div class="legal-layout">
                <!-- Main Content -->
                <main class="legal-main" role="main">
                    <article class="faq-content">
                        
                        <!-- Introduction -->
                        <section class="policy-section">
                            <p class="faq-intro">
                                نجيب هنا عن الأسئلة الأكثر شيوعاً التي تصلنا من الطلاب وأولياء الأمور. 
                                إذا لم تجد إجابة لسؤالك هنا، لا تتردد في <a href="<?php echo home_url('/contact'); ?>">التواصل معنا</a>.
                            </p>
                        </section>

                        <!-- General Questions -->
                        <section class="policy-section">
                            <h2>أسئلة عامة عن وصلة</h2>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>ما هي منصة وصلة؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        وصلة هي منصة تعليمية مصرية تهدف إلى توفير معلومات واضحة ومباشرة للطلاب وأولياء الأمور 
                                        حول المسارات التعليمية المختلفة في مصر. نقدم أدلة شاملة عن المدارس الفنية، الثانوية العامة، 
                                        التنسيق الجامعي، والتوجيه المهني.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>هل محتوى الموقع مجاني؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        نعم، 100% مجاني! جميع المقالات والأدلة والنصائح المتاحة على منصة وصلة مجانية تماماً. 
                                        هدفنا مساعدة أكبر عدد ممكن من الطلاب وأولياء الأمور في اتخاذ قرارات تعليمية صحيحة.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>من أين تأتي المعلومات المنشورة؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        نحصل على معلوماتنا من مصادر موثوقة متعددة:
                                    </p>
                                    <ul>
                                        <li>المواقع الرسمية للمدارس والمعاهد والجامعات</li>
                                        <li>تجارب حقيقية من طلاب وخريجين</li>
                                        <li>التواصل المباشر مع المؤسسات التعليمية</li>
                                        <li>البحث والتحقق من المعلومات من عدة مصادر</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>هل المعلومات محدثة؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        نعم، نحرص على تحديث محتوانا بشكل منتظم. كل مقال يحتوي على تاريخ آخر تحديث. 
                                        إذا لاحظت معلومة قديمة أو غير صحيحة، يرجى إخبارنا فوراً لتحديثها.
                                    </p>
                                </div>
                            </div>
                        </section>

                        <!-- Don Bosco Questions -->
                        <section class="policy-section">
                            <h2>أسئلة عن مدارس دون بوسكو</h2>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>ما هي شروط القبول في دون بوسكو؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        شروط القبول الأساسية تشمل:
                                    </p>
                                    <ul>
                                        <li>الحصول على الشهادة الإعدادية</li>
                                        <li>مجموع عادة فوق 210 درجة (يختلف حسب التنسيق السنوي)</li>
                                        <li>اجتياز المقابلة الشخصية</li>
                                        <li>استيفاء الأوراق المطلوبة</li>
                                    </ul>
                                    <p>
                                        للتفاصيل الكاملة، راجع دليلنا الشامل عن التقديم في دون بوسكو.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>ما هي الأقسام المتاحة في دون بوسكو؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        معهد دون بوسكو يقدم عدة أقسام فنية متميزة:
                                    </p>
                                    <ul>
                                        <li>قسم الكهرباء والإلكترونيات</li>
                                        <li>قسم الميكاترونكس</li>
                                        <li>قسم الحاسب الآلي والبرمجة</li>
                                        <li>قسم التبريد والتكييف</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- Thanawya Amma Questions -->
                        <section class="policy-section">
                            <h2>أسئلة عن الثانوية العامة</h2>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>كيف أختار بين علمي علوم وعلمي رياضة؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        الاختيار يعتمد على عدة عوامل:
                                    </p>
                                    <ul>
                                        <li><strong>ميولك:</strong> هل تحب البيولوجيا والكيمياء؟ → علمي علوم. تحب الرياضيات والفيزياء؟ → علمي رياضة</li>
                                        <li><strong>هدفك المستقبلي:</strong> طب وصيدلة → علمي علوم. هندسة وحاسبات → علمي رياضة</li>
                                        <li><strong>قدراتك:</strong> ما المواد التي تتفوق فيها؟</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>ما أفضل طريقة للمذاكرة في الثانوية العامة؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        نوصي باتباع استراتيجية منظمة:
                                    </p>
                                    <ul>
                                        <li>وضع جدول مذاكرة واقعي ومتوازن</li>
                                        <li>تقسيم المنهج إلى وحدات صغيرة</li>
                                        <li>المذاكرة بانتظام وليس التكديس</li>
                                        <li>حل امتحانات السنوات السابقة</li>
                                        <li>أخذ فترات راحة منتظمة</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- University Questions -->
                        <section class="policy-section">
                            <h2>أسئلة عن التنسيق والجامعات</h2>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>متى يبدأ تنسيق الجامعات؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        عادة يبدأ تنسيق الجامعات بعد ظهور نتيجة الثانوية العامة مباشرة، في شهر يوليو أو أغسطس. 
                                        يتم الإعلان عن المواعيد الرسمية على موقع التنسيق الإلكتروني. ننصح بمتابعة موقعنا 
                                        للحصول على آخر التحديثات.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>كيف أختار الكلية المناسبة؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        اختيار الكلية قرار مهم جداً. ضع في اعتبارك:
                                    </p>
                                    <ul>
                                        <li>ميولك واهتماماتك الشخصية</li>
                                        <li>فرص العمل المستقبلية للتخصص</li>
                                        <li>مجموعك ومدى توافقه مع الكلية</li>
                                        <li>موقع الجامعة والمصروفات</li>
                                        <li>سمعة الكلية ومستوى التعليم</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- Technical Questions -->
                        <section class="policy-section">
                            <h2>أسئلة تقنية عن الموقع</h2>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>كيف أتابع آخر المقالات؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        يمكنك متابعة آخر المقالات من خلال:
                                    </p>
                                    <ul>
                                        <li>زيارة <a href="<?php echo home_url('/blog'); ?>">صفحة المدونة</a> بانتظام</li>
                                        <li>متابعتنا على وسائل التواصل الاجتماعي</li>
                                        <li>الاشتراك في النشرة البريدية (قريباً)</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>هل يمكنني التعليق على المقالات؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        نعم! نشجعك على التعليق ومشاركة تجربتك. التعليقات متاحة في نهاية كل مقال. 
                                        نرحب بالأسئلة والنقاشات البناءة التي تفيد المجتمع.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="bi bi-question-circle-fill"></i>
                                    <h3>كيف أبحث عن موضوع معين؟</h3>
                                </div>
                                <div class="faq-answer">
                                    <p>
                                        يمكنك استخدام شريط البحث في أعلى الصفحة، أو زيارة <a href="<?php echo home_url('/sitemap'); ?>">خريطة الموقع</a> 
                                        للاطلاع على جميع المقالات والتصنيفات المتاحة.
                                    </p>
                                </div>
                            </div>
                        </section>

                        <!-- Contact CTA -->
                        <section class="cta-box">
                            <h2>
                                <i class="bi bi-chat-dots"></i>
                                لم تجد إجابة لسؤالك؟
                            </h2>
                            <p>
                                نحن هنا لمساعدتك! تواصل معنا وسنجيب على استفسارك في أقرب وقت ممكن.
                            </p>
                            <a href="<?php echo home_url('/contact'); ?>" class="primary-btn">
                                <i class="bi bi-envelope"></i>
                                اتصل بنا الآن
                            </a>
                        </section>

                    </article>
                </main>

                <!-- Sidebar -->
                <aside class="legal-sidebar" role="complementary">
                    <!-- Quick Navigation -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-list-ul"></i>
                            الانتقال السريع
                        </h3>
                        <ul class="summary-list">
                            <li><a href="#general"><i class="bi bi-chevron-left"></i> أسئلة عامة</a></li>
                            <li><a href="#don-bosco"><i class="bi bi-chevron-left"></i> دون بوسكو</a></li>
                            <li><a href="#thanawya"><i class="bi bi-chevron-left"></i> الثانوية العامة</a></li>
                            <li><a href="#university"><i class="bi bi-chevron-left"></i> التنسيق والجامعات</a></li>
                            <li><a href="#technical"><i class="bi bi-chevron-left"></i> أسئلة تقنية</a></li>
                        </ul>
                    </div>

                    <!-- Search Widget -->
                    <div class="sidebar-widget support-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-search"></i>
                            ابحث في الأسئلة
                        </h3>
                        <p>استخدم البحث للعثور على إجابات سريعة</p>
                        <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                            <input type="search" class="search-field" placeholder="اكتب سؤالك..." name="s" />
                            <button type="submit" class="support-btn">
                                <i class="bi bi-search"></i>
                                بحث
                            </button>
                        </form>
                    </div>

                    <!-- Related Pages -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-link-45deg"></i>
                            صفحات ذات صلة
                        </h3>
                        <ul class="summary-list">
                            <li>
                                <a href="<?php echo home_url('/about-us'); ?>">
                                    <i class="bi bi-chevron-left"></i>
                                    من نحن
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/contact'); ?>">
                                    <i class="bi bi-chevron-left"></i>
                                    اتصل بنا
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/sitemap'); ?>">
                                    <i class="bi bi-chevron-left"></i>
                                    خريطة الموقع
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/blog'); ?>">
                                    <i class="bi bi-chevron-left"></i>
                                    جميع المقالات
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact CTA -->
                    <div class="sidebar-widget support-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-headset"></i>
                            محتاج مساعدة إضافية؟
                        </h3>
                        <p>فريقنا جاهز للإجابة على أي استفسارات أخرى</p>
                        <a href="<?php echo home_url('/contact'); ?>" class="support-btn">
                            <i class="bi bi-chat-dots"></i>
                            تواصل معنا
                        </a>
                    </div>

                    <!-- Social Links -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-share"></i>
                            تابعنا
                        </h3>
                        <div class="social-links">
                            <a href="#" class="social-btn facebook" aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="social-btn instagram" aria-label="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="#" class="social-btn twitter" aria-label="Twitter">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="#" class="social-btn youtube" aria-label="YouTube">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
