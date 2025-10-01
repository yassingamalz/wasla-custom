<?php
/**
 * Template Name: About Us Page
 * Description: About Us page template for Wasla educational site
 * Explains mission, vision, team, and educational philosophy
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<div class="wasla-about-page">
    <!-- Page Hero Section -->
    <section class="legal-hero">
        <div class="wasla-container">
            <!-- Breadcrumb Navigation -->
            <nav class="page-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">الرئيسية</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current">من نحن</span>
            </nav>
            
            <!-- Page Title -->
            <h1 class="legal-title">من نحن</h1>
            <p class="legal-subtitle">
                وصلة - رفيقك في رحلة التعليم من غير لف ودوران
            </p>
            
            <!-- Established -->
            <div class="legal-meta">
                <span class="last-updated">
                    <i class="bi bi-calendar3"></i>
                    تأسست في: 2025
                </span>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="legal-content">
        <div class="wasla-container">
            <div class="legal-layout">
                <!-- Main Content -->
                <main class="legal-main" role="main">
                    <article class="about-content">
                        <!-- Our Story -->
                        <section class="policy-section">
                            <h2>قصتنا</h2>
                            <p>
                                بدأت "وصلة" من فكرة بسيطة: كل طالب وولي أمر في مصر يحتاج إلى معلومات تعليمية واضحة وموثوقة، 
                                من غير لف ودوران. رأينا كم من الوقت والجهد يضيع في البحث عن معلومات صحيحة عن المدارس، 
                                المعاهد، الجامعات، والفرص التعليمية المختلفة.
                            </p>
                            <p>
                                في عام 2025، قررنا أن نكون "الوصلة" التي تربط الطلاب وأولياء الأمور بالمعلومات التي يحتاجونها 
                                لاتخاذ قرارات تعليمية صحيحة. نحن منصة تعليمية مصرية تهدف إلى تبسيط رحلة التعليم وتوفير 
                                أدلة شاملة ونصائح عملية.
                            </p>
                        </section>

                        <!-- Mission -->
                        <section class="policy-section">
                            <h2>رسالتنا</h2>
                            <p>
                                توفير محتوى تعليمي عالي الجودة، واضح، وموثوق يساعد الطلاب وأولياء الأمور على اتخاذ 
                                قرارات تعليمية مستنيرة. نؤمن بأن كل طالب يستحق أن يعرف خياراته التعليمية بوضوح، 
                                من غير تعقيد أو معلومات مضللة.
                            </p>
                            
                            <div class="mission-cards">
                                <div class="mission-card">
                                    <div class="card-icon">
                                        <i class="bi bi-lightbulb"></i>
                                    </div>
                                    <h3>الوضوح</h3>
                                    <p>معلومات مباشرة وواضحة من غير لف ودوران</p>
                                </div>
                                
                                <div class="mission-card">
                                    <div class="card-icon">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <h3>الموثوقية</h3>
                                    <p>محتوى دقيق محدث باستمرار من مصادر رسمية</p>
                                </div>
                                
                                <div class="mission-card">
                                    <div class="card-icon">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <h3>المصداقية</h3>
                                    <p>تجارب حقيقية ونصائح عملية من طلاب وخبراء</p>
                                </div>
                            </div>
                        </section>

                        <!-- Vision -->
                        <section class="policy-section">
                            <h2>رؤيتنا</h2>
                            <p>
                                أن نصبح المصدر الأول والأكثر ثقة للمعلومات التعليمية في مصر. نحلم بمستقبل حيث كل طالب 
                                وولي أمر يمكنه الوصول بسهولة إلى المعلومات التي يحتاجها لبناء مسار تعليمي ناجح.
                            </p>
                            <p>
                                نطمح لتوسيع محتوانا ليشمل كل المراحل التعليمية، من المدرسة الابتدائية حتى الدراسات العليا، 
                                ومساعدة ملايين الطلاب المصريين على تحقيق أحلامهم التعليمية والمهنية.
                            </p>
                        </section>

                        <!-- What We Cover -->
                        <section class="policy-section">
                            <h2>ما نغطيه</h2>
                            <p>نقدم محتوى شامل يغطي جميع جوانب الرحلة التعليمية:</p>
                            
                            <h3>التعليم الفني والمهني</h3>
                            <ul>
                                <li><strong>معاهد دون بوسكو:</strong> أدلة شاملة للتقديم، الأقسام، المصروفات، ونصائح النجاح</li>
                                <li><strong>المدارس الفنية:</strong> معلومات عن المدارس الفنية الصناعية والتجارية والزراعية</li>
                                <li><strong>التدريب المهني:</strong> برامج التدريب، الشهادات المعتمدة، فرص العمل</li>
                            </ul>
                            
                            <h3>التعليم الثانوي</h3>
                            <ul>
                                <li><strong>الثانوية العامة:</strong> استراتيجيات المذاكرة، خطط دراسية، نصائح الامتحانات</li>
                                <li><strong>اختيار الشعبة:</strong> أدلة مفصلة للاختيار بين علمي علوم، رياضة، وأدبي</li>
                                <li><strong>التنسيق الجامعي:</strong> كل ما تحتاجه عن الكليات، التخصصات، والمستقبل المهني</li>
                            </ul>
                            
                            <h3>التعليم الجامعي</h3>
                            <ul>
                                <li><strong>دليل الكليات:</strong> معلومات عن الكليات، التخصصات، فرص العمل</li>
                                <li><strong>مقارنات الجامعات:</strong> مقارنات شاملة بين الجامعات الحكومية والخاصة</li>
                                <li><strong>الدراسات العليا:</strong> معلومات عن الماجستير والدكتوراه</li>
                            </ul>
                            
                            <h3>الإرشاد المهني</h3>
                            <ul>
                                <li><strong>المسارات المهنية:</strong> أدلة لمختلف المهن والتخصصات</li>
                                <li><strong>سوق العمل:</strong> معلومات عن الوظائف الأكثر طلباً</li>
                                <li><strong>تطوير المهارات:</strong> نصائح لتطوير المهارات الشخصية والمهنية</li>
                            </ul>
                        </section>

                        <!-- Our Approach -->
                        <section class="policy-section">
                            <h2>منهجنا في العمل</h2>
                            
                            <h3>البحث والتحقق</h3>
                            <p>
                                كل معلومة نقدمها تمر بعملية بحث وتحقق دقيقة. نعتمد على المصادر الرسمية، 
                                نتواصل مع المؤسسات التعليمية، ونجمع تجارب حقيقية من الطلاب وأولياء الأمور.
                            </p>
                            
                            <h3>التحديث المستمر</h3>
                            <p>
                                النظام التعليمي يتغير باستمرار. نحن نحدث محتوانا بشكل منتظم لضمان حصولك 
                                على أحدث المعلومات والتطورات في المجال التعليمي.
                            </p>
                            
                            <h3>المحتوى العملي</h3>
                            <p>
                                نركز على المعلومات العملية التي يمكنك تطبيقها فوراً. أدلة خطوة بخطوة، 
                                قوائم مرجعية، نماذج، ونصائح من تجارب واقعية.
                            </p>
                            
                            <h3>اللغة الواضحة</h3>
                            <p>
                                نكتب بلغة بسيطة وواضحة يفهمها الجميع. من غير مصطلحات معقدة أو لغة أكاديمية صعبة. 
                                هدفنا أن يفهم الجميع المعلومات بسهولة.
                            </p>
                        </section>

                        <!-- Our Values -->
                        <section class="policy-section">
                            <h2>قيمنا</h2>
                            
                            <div class="values-grid">
                                <div class="value-item">
                                    <div class="value-icon">
                                        <i class="bi bi-heart"></i>
                                    </div>
                                    <h3>الأمانة</h3>
                                    <p>نقدم معلومات صادقة وموضوعية، حتى لو كانت غير مريحة</p>
                                </div>
                                
                                <div class="value-item">
                                    <div class="value-icon">
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <h3>الجودة</h3>
                                    <p>نركز على الجودة قبل الكمية في كل محتوى نقدمه</p>
                                </div>
                                
                                <div class="value-item">
                                    <div class="value-icon">
                                        <i class="bi bi-compass"></i>
                                    </div>
                                    <h3>الاستقلالية</h3>
                                    <p>غير تابعين لأي مؤسسة تعليمية، نصائحنا محايدة</p>
                                </div>
                                
                                <div class="value-item">
                                    <div class="value-icon">
                                        <i class="bi bi-graph-up"></i>
                                    </div>
                                    <h3>التطوير</h3>
                                    <p>نسعى دائماً لتحسين محتوانا وخدماتنا</p>
                                </div>
                                
                                <div class="value-item">
                                    <div class="value-icon">
                                        <i class="bi bi-chat-dots"></i>
                                    </div>
                                    <h3>التواصل</h3>
                                    <p>نستمع لمجتمعنا ونستجيب لاحتياجاتهم</p>
                                </div>
                                
                                <div class="value-item">
                                    <div class="value-icon">
                                        <i class="bi bi-shield"></i>
                                    </div>
                                    <h3>الخصوصية</h3>
                                    <p>نحترم خصوصيتك ونحمي بياناتك الشخصية</p>
                                </div>
                            </div>
                        </section>

                        <!-- Why Trust Us -->
                        <section class="policy-section">
                            <h2>لماذا تثق بنا؟</h2>
                            
                            <div class="trust-reasons">
                                <div class="reason-item">
                                    <span class="reason-number">1</span>
                                    <div class="reason-content">
                                        <h3>خبرة تعليمية حقيقية</h3>
                                        <p>فريقنا يضم خريجين من مختلف المسارات التعليمية في مصر، عاشوا التجربة بأنفسهم</p>
                                    </div>
                                </div>
                                
                                <div class="reason-item">
                                    <span class="reason-number">2</span>
                                    <div class="reason-content">
                                        <h3>بحث متعمق ودقيق</h3>
                                        <p>كل مقال يخضع لعملية بحث شاملة ومراجعة من خبراء في المجال</p>
                                    </div>
                                </div>
                                
                                <div class="reason-item">
                                    <span class="reason-number">3</span>
                                    <div class="reason-content">
                                        <h3>تجارب حقيقية</h3>
                                        <p>نجمع تجارب طلاب حقيقيين ونقدم نصائح عملية مجربة</p>
                                    </div>
                                </div>
                                
                                <div class="reason-item">
                                    <span class="reason-number">4</span>
                                    <div class="reason-content">
                                        <h3>تحديثات مستمرة</h3>
                                        <p>نراقب التغييرات في النظام التعليمي ونحدث المحتوى باستمرار</p>
                                    </div>
                                </div>
                                
                                <div class="reason-item">
                                    <span class="reason-number">5</span>
                                    <div class="reason-content">
                                        <h3>مجتمع داعم</h3>
                                        <p>نبني مجتمعاً من الطلاب وأولياء الأمور يتشاركون الخبرات والنصائح</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Our Team -->
                        <section class="policy-section">
                            <h2>فريق العمل</h2>
                            <p>
                                فريق "وصلة" يتكون من شباب مصري متحمس للتعليم، عاش تحديات النظام التعليمي 
                                ويفهم احتياجات الطلاب وأولياء الأمور. نحن مزيج من:
                            </p>
                            
                            <ul>
                                <li><strong>خريجين:</strong> من مختلف المسارات التعليمية (جامعات، معاهد فنية، مدارس ثانوية)</li>
                                <li><strong>باحثين:</strong> متخصصين في جمع وتحليل المعلومات التعليمية</li>
                                <li><strong>كتّاب محتوى:</strong> محترفين في تبسيط المعلومات وتقديمها بشكل واضح</li>
                                <li><strong>مطورين:</strong> يحافظون على الموقع سريعاً وسهل الاستخدام</li>
                            </ul>
                            
                            <p>
                                كلنا هنا لهدف واحد: مساعدتك على اتخاذ أفضل القرارات التعليمية لمستقبلك أو مستقبل أبنائك.
                            </p>
                        </section>

                        <!-- Community -->
                        <section class="policy-section">
                            <h2>مجتمعنا</h2>
                            <p>
                                "وصلة" أكثر من مجرد موقع، إحنا مجتمع من الطلاب وأولياء الأمور والمعلمين 
                                والخبراء يتشاركون المعرفة والخبرات.
                            </p>
                            
                            <h3>انضم لمجتمعنا</h3>
                            <ul>
                                <li>شارك تجربتك التعليمية واستفد من تجارب الآخرين</li>
                                <li>اسأل واحصل على إجابات من خبراء وطلاب مروا بنفس التجربة</li>
                                <li>ابقَ على اطلاع بآخر التحديثات والفرص التعليمية</li>
                                <li>ساعد غيرك بمشاركة خبراتك ونصائحك</li>
                            </ul>
                        </section>

                        <!-- Future Plans -->
                        <section class="policy-section">
                            <h2>خططنا المستقبلية</h2>
                            <p>نحن في بداية الرحلة، وعندنا خطط كبيرة للمستقبل:</p>
                            
                            <ul>
                                <li><strong>توسيع المحتوى:</strong> تغطية كل المراحل التعليمية من الابتدائي للدراسات العليا</li>
                                <li><strong>أدوات تفاعلية:</strong> حاسبات التنسيق، اختبارات الميول المهنية، خطط دراسية مخصصة</li>
                                <li><strong>فيديوهات تعليمية:</strong> محتوى بصري يشرح المواضيع المعقدة بطريقة بسيطة</li>
                                <li><strong>منصة للأسئلة:</strong> مكان يسأل فيه الطلاب ويجاوبون بعض</li>
                                <li><strong>تطبيق موبايل:</strong> لسهولة الوصول للمحتوى في أي وقت</li>
                                <li><strong>شراكات:</strong> التعاون مع مؤسسات تعليمية لتوفير محتوى حصري</li>
                            </ul>
                        </section>

                        <!-- Contact CTA -->
                        <section class="policy-section">
                            <h2>تواصل معنا</h2>
                            <p>
                                عندك سؤال؟ محتاج مساعدة؟ عايز تشارك تجربتك؟ أو عندك اقتراح لتحسين الموقع؟ 
                                نحب نسمع منك!
                            </p>
                            
                            <div class="contact-info-grid">
                                <div class="contact-item">
                                    <i class="bi bi-envelope-fill"></i>
                                    <div class="contact-details">
                                        <strong>البريد الإلكتروني:</strong>
                                        <p><a href="mailto:info@wasla-eg.com">info@wasla-eg.com</a></p>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <i class="bi bi-telephone-fill"></i>
                                    <div class="contact-details">
                                        <strong>الهاتف:</strong>
                                        <p><?php 
                                        $phone = wasla_get_contact_info( 'phone' );
                                        if ( $phone ) {
                                            echo '<a href="' . esc_url( wasla_get_contact_info( 'phone', 'link' ) ) . '">' . esc_html( $phone ) . '</a>';
                                        } else {
                                            echo 'غير متوفر حالياً';
                                        }
                                        ?></p>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <i class="bi bi-facebook"></i>
                                    <div class="contact-details">
                                        <strong>فيسبوك:</strong>
                                        <p><a href="#" target="_blank">@WaslaEducation</a></p>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <i class="bi bi-instagram"></i>
                                    <div class="contact-details">
                                        <strong>إنستجرام:</strong>
                                        <p><a href="#" target="_blank">@wasla.education</a></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="cta-box">
                                <p>يمكنك أيضاً زيارة صفحة الاتصال للحصول على المزيد من الخيارات</p>
                                <a href="<?php echo home_url('/contact'); ?>" class="primary-btn">
                                    <i class="bi bi-chat-dots"></i>
                                    تواصل معنا
                                </a>
                            </div>
                        </section>
                    </article>
                </main>

                <!-- Sidebar -->
                <aside class="legal-sidebar" role="complementary">
                    <!-- Quick Facts -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-info-circle"></i>
                            حقائق سريعة
                        </h3>
                        <ul class="summary-list">
                            <li><i class="bi bi-check-circle"></i> منصة تعليمية مصرية 100%</li>
                            <li><i class="bi bi-check-circle"></i> محتوى محدث باستمرار</li>
                            <li><i class="bi bi-check-circle"></i> مجاني بالكامل</li>
                            <li><i class="bi bi-check-circle"></i> معلومات موثوقة ودقيقة</li>
                            <li><i class="bi bi-check-circle"></i> نصائح من تجارب حقيقية</li>
                        </ul>
                    </div>
                    
                    <!-- Our Focus -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-bullseye"></i>
                            مجالات تركيزنا
                        </h3>
                        <ul class="legal-links-list">
                            <li>
                                <a href="#">
                                    <i class="bi bi-tools"></i>
                                    التعليم الفني والمهني
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bi bi-book"></i>
                                    الثانوية العامة
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bi bi-mortarboard"></i>
                                    التنسيق الجامعي
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bi bi-briefcase"></i>
                                    التوجيه المهني
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Join Community -->
                    <div class="sidebar-widget support-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-people"></i>
                            انضم لمجتمعنا
                        </h3>
                        <p>تابعنا على وسائل التواصل الاجتماعي للحصول على آخر التحديثات والنصائح التعليمية</p>
                        <div class="social-links">
                            <a href="#" class="social-btn facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="social-btn instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="#" class="social-btn twitter">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="#" class="social-btn youtube">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Need Help -->
                    <div class="sidebar-widget summary-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-question-circle"></i>
                            محتاج مساعدة؟
                        </h3>
                        <p>إذا كان لديك أي سؤال أو استفسار، فريقنا جاهز لمساعدتك</p>
                        <a href="<?php echo home_url('/contact'); ?>" class="support-btn">
                            <i class="bi bi-headset"></i>
                            تواصل معنا
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
