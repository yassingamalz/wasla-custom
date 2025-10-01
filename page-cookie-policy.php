<?php
/**
 * Template Name: Cookie Policy Page
 * Description: Cookie Policy page template for Wasla educational site
 * Required for GDPR compliance and Google AdSense approval
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<div class="wasla-cookie-policy-page">
    <!-- Page Hero Section -->
    <section class="legal-hero">
        <div class="wasla-container">
            <!-- Breadcrumb Navigation -->
            <nav class="page-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">الرئيسية</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current">سياسة ملفات تعريف الارتباط</span>
            </nav>
            
            <!-- Page Title -->
            <h1 class="legal-title">سياسة ملفات تعريف الارتباط</h1>
            <p class="legal-subtitle">
                كل ما تحتاج معرفته عن ملفات الكوكيز المستخدمة في موقعنا
            </p>
            
            <!-- Last Updated -->
            <div class="legal-meta">
                <span class="last-updated">
                    <i class="bi bi-calendar3"></i>
                    آخر تحديث: <?php echo date('j F Y'); ?>
                </span>
            </div>
        </div>
    </section>

    <!-- Cookie Policy Content -->
    <section class="legal-content">
        <div class="wasla-container">
            <div class="legal-layout">
                <!-- Main Content -->
                <main class="legal-main" role="main">
                    <article class="cookie-policy-content">
                        <!-- Introduction -->
                        <section class="policy-section">
                            <h2>ما هي ملفات تعريف الارتباط؟</h2>
                            <p>
                                ملفات تعريف الارتباط (Cookies) هي ملفات نصية صغيرة جداً يتم تخزينها على جهازك 
                                (الكمبيوتر، الهاتف الذكي، أو الجهاز اللوحي) عند زيارتك لموقعنا الإلكتروني. 
                                هذه الملفات تساعدنا على تحسين تجربتك وتقديم خدمات أفضل.
                            </p>
                            <p>
                                تحتوي ملفات الكوكيز على معلومات مثل تفضيلات اللغة، إعدادات العرض، 
                                والصفحات التي زرتها، مما يسمح لنا بتذكر اختياراتك عند زيارتك القادمة.
                            </p>
                        </section>

                        <!-- Why We Use Cookies -->
                        <section class="policy-section">
                            <h2>لماذا نستخدم ملفات تعريف الارتباط؟</h2>
                            <p>نستخدم ملفات الكوكيز لعدة أغراض مهمة:</p>
                            
                            <div class="cookie-purposes">
                                <div class="purpose-item">
                                    <i class="bi bi-speedometer2"></i>
                                    <h3>تحسين الأداء</h3>
                                    <p>لتسريع تحميل الصفحات وجعل تصفحك أكثر سلاسة</p>
                                </div>
                                
                                <div class="purpose-item">
                                    <i class="bi bi-person-check"></i>
                                    <h3>تخصيص التجربة</h3>
                                    <p>لتذكر تفضيلاتك وتقديم محتوى مناسب لاهتماماتك</p>
                                </div>
                                
                                <div class="purpose-item">
                                    <i class="bi bi-graph-up"></i>
                                    <h3>تحليل الاستخدام</h3>
                                    <p>لفهم كيفية استخدام الزوار للموقع وتحسين المحتوى</p>
                                </div>
                                
                                <div class="purpose-item">
                                    <i class="bi bi-shield-check"></i>
                                    <h3>الأمان والحماية</h3>
                                    <p>لحماية موقعنا من الأنشطة الضارة والاحتيال</p>
                                </div>
                            </div>
                        </section>

                        <!-- Types of Cookies -->
                        <section class="policy-section">
                            <h2>أنواع ملفات تعريف الارتباط التي نستخدمها</h2>
                            
                            <!-- Essential Cookies -->
                            <div class="cookie-type">
                                <div class="cookie-type-header">
                                    <i class="bi bi-star-fill"></i>
                                    <h3>ملفات ضرورية (Essential Cookies)</h3>
                                    <span class="cookie-badge required">مطلوبة</span>
                                </div>
                                <p>
                                    هذه الملفات ضرورية لعمل الموقع بشكل صحيح ولا يمكن تعطيلها. 
                                    بدونها، لن تتمكن من استخدام بعض الوظائف الأساسية للموقع.
                                </p>
                                <ul>
                                    <li><strong>ملفات الجلسة (Session Cookies):</strong> تحفظ جلستك أثناء التصفح</li>
                                    <li><strong>ملفات الأمان:</strong> تحمي من الهجمات الإلكترونية</li>
                                    <li><strong>ملفات التحميل:</strong> توزيع الحمل على الخوادم</li>
                                    <li><strong>ملفات النماذج:</strong> لإرسال النماذج بشكل آمن</li>
                                </ul>
                            </div>

                            <!-- Functional Cookies -->
                            <div class="cookie-type">
                                <div class="cookie-type-header">
                                    <i class="bi bi-sliders"></i>
                                    <h3>ملفات الوظائف (Functional Cookies)</h3>
                                    <span class="cookie-badge optional">اختيارية</span>
                                </div>
                                <p>
                                    تساعد هذه الملفات في تذكر اختياراتك وتفضيلاتك لتوفير تجربة أفضل وأكثر تخصيصاً.
                                </p>
                                <ul>
                                    <li><strong>تفضيلات اللغة:</strong> تذكر اللغة التي اخترتها</li>
                                    <li><strong>إعدادات العرض:</strong> حجم الخط، وضع القراءة، إلخ</li>
                                    <li><strong>المحتوى المفضل:</strong> تذكر المواضيع التي تهمك</li>
                                    <li><strong>آخر صفحة زرتها:</strong> للعودة إلى حيث توقفت</li>
                                </ul>
                            </div>

                            <!-- Analytics Cookies -->
                            <div class="cookie-type">
                                <div class="cookie-type-header">
                                    <i class="bi bi-bar-chart-fill"></i>
                                    <h3>ملفات التحليل (Analytics Cookies)</h3>
                                    <span class="cookie-badge optional">اختيارية</span>
                                </div>
                                <p>
                                    تساعدنا في فهم كيفية تفاعل الزوار مع الموقع لتحسين المحتوى والخدمات.
                                </p>
                                <ul>
                                    <li><strong>Google Analytics:</strong> إحصائيات مفصلة عن الزيارات</li>
                                    <li><strong>عدد الزيارات:</strong> قياس عدد الزوار والصفحات المشاهدة</li>
                                    <li><strong>مصدر الزيارة:</strong> من أين جاء الزوار (بحث، وسائل تواصل، إلخ)</li>
                                    <li><strong>مدة الزيارة:</strong> كم من الوقت يقضي الزوار على الموقع</li>
                                    <li><strong>معدل الارتداد:</strong> الزوار الذين يغادرون بسرعة</li>
                                </ul>
                                <div class="cookie-note">
                                    <i class="bi bi-info-circle"></i>
                                    <p>جميع البيانات التي يتم جمعها هي مجهولة المصدر ولا تحدد هويتك الشخصية.</p>
                                </div>
                            </div>

                            <!-- Advertising Cookies -->
                            <div class="cookie-type">
                                <div class="cookie-type-header">
                                    <i class="bi bi-badge-ad-fill"></i>
                                    <h3>ملفات الإعلانات (Advertising Cookies)</h3>
                                    <span class="cookie-badge optional">اختيارية</span>
                                </div>
                                <p>
                                    تُستخدم لعرض إعلانات ذات صلة باهتماماتك ودعم المحتوى التعليمي المجاني.
                                </p>
                                <ul>
                                    <li><strong>Google AdSense:</strong> شبكة الإعلانات الرئيسية لدينا</li>
                                    <li><strong>إعلانات مخصصة:</strong> عرض إعلانات تناسب اهتماماتك</li>
                                    <li><strong>تتبع التحويلات:</strong> قياس فعالية الإعلانات</li>
                                    <li><strong>منع التكرار:</strong> عدم عرض نفس الإعلان كثيراً</li>
                                </ul>
                                <div class="cookie-note">
                                    <i class="bi bi-info-circle"></i>
                                    <p>تساعد الإعلانات في دعم موقعنا وتقديم محتوى تعليمي مجاني عالي الجودة.</p>
                                </div>
                            </div>

                            <!-- Social Media Cookies -->
                            <div class="cookie-type">
                                <div class="cookie-type-header">
                                    <i class="bi bi-share-fill"></i>
                                    <h3>ملفات وسائل التواصل الاجتماعي</h3>
                                    <span class="cookie-badge optional">اختيارية</span>
                                </div>
                                <p>
                                    تسمح لك بمشاركة المحتوى على منصات التواصل الاجتماعي مثل فيسبوك وتويتر.
                                </p>
                                <ul>
                                    <li><strong>أزرار المشاركة:</strong> لمشاركة المقالات بسهولة</li>
                                    <li><strong>التعليقات الاجتماعية:</strong> للتعليق باستخدام حسابك الاجتماعي</li>
                                    <li><strong>تتبع المشاركات:</strong> لمعرفة أي محتوى يتم مشاركته أكثر</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Third Party Cookies -->
                        <section class="policy-section">
                            <h2>ملفات الطرف الثالث</h2>
                            <p>
                                بالإضافة إلى ملفاتنا الخاصة، نستخدم خدمات طرف ثالث قد تضع ملفات كوكيز على جهازك:
                            </p>
                            
                            <div class="third-party-list">
                                <div class="third-party-item">
                                    <div class="third-party-icon">🔍</div>
                                    <div class="third-party-info">
                                        <h4>Google Analytics</h4>
                                        <p>لتحليل حركة المرور والإحصائيات</p>
                                        <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">
                                            سياسة خصوصية Google
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="third-party-item">
                                    <div class="third-party-icon">📢</div>
                                    <div class="third-party-info">
                                        <h4>Google AdSense</h4>
                                        <p>لعرض الإعلانات المناسبة</p>
                                        <a href="https://policies.google.com/technologies/ads" target="_blank" rel="noopener">
                                            سياسة إعلانات Google
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="third-party-item">
                                    <div class="third-party-icon">🔤</div>
                                    <div class="third-party-info">
                                        <h4>Google Fonts</h4>
                                        <p>لعرض الخطوط العربية بشكل جميل</p>
                                        <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">
                                            سياسة خصوصية Google Fonts
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="third-party-item">
                                    <div class="third-party-icon">📱</div>
                                    <div class="third-party-info">
                                        <h4>منصات التواصل الاجتماعي</h4>
                                        <p>فيسبوك، تويتر، إنستغرام للمشاركة</p>
                                        <a href="https://www.facebook.com/privacy" target="_blank" rel="noopener">
                                            سياسات الخصوصية
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- How to Control Cookies -->
                        <section class="policy-section">
                            <h2>كيفية التحكم في ملفات تعريف الارتباط</h2>
                            
                            <h3>من خلال متصفح الإنترنت</h3>
                            <p>
                                معظم المتصفحات تسمح لك بالتحكم في ملفات الكوكيز من خلال الإعدادات. 
                                يمكنك اختيار:
                            </p>
                            <ul>
                                <li>قبول جميع ملفات الكوكيز</li>
                                <li>رفض جميع ملفات الكوكيز</li>
                                <li>السماح ببعض الملفات ورفض الأخرى</li>
                                <li>حذف ملفات الكوكيز الموجودة حالياً</li>
                                <li>الحصول على تنبيه عند إرسال كوكيز جديدة</li>
                            </ul>
                            
                            <h3>إعدادات المتصفحات الشائعة</h3>
                            <div class="browser-guides">
                                <div class="browser-guide">
                                    <i class="bi bi-google"></i>
                                    <h4>Google Chrome</h4>
                                    <p>الإعدادات > الخصوصية والأمان > ملفات تعريف الارتباط</p>
                                    <a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">
                                        دليل مفصل
                                    </a>
                                </div>
                                
                                <div class="browser-guide">
                                    <i class="bi bi-browser-firefox"></i>
                                    <h4>Mozilla Firefox</h4>
                                    <p>التفضيلات > الخصوصية والأمان > ملفات تعريف الارتباط</p>
                                    <a href="https://support.mozilla.org/ar/kb/cookies" target="_blank" rel="noopener">
                                        دليل مفصل
                                    </a>
                                </div>
                                
                                <div class="browser-guide">
                                    <i class="bi bi-browser-safari"></i>
                                    <h4>Safari</h4>
                                    <p>التفضيلات > الخصوصية > إدارة بيانات الموقع</p>
                                    <a href="https://support.apple.com/ar-sa/HT201265" target="_blank" rel="noopener">
                                        دليل مفصل
                                    </a>
                                </div>
                                
                                <div class="browser-guide">
                                    <i class="bi bi-microsoft"></i>
                                    <h4>Microsoft Edge</h4>
                                    <p>الإعدادات > ملفات تعريف الارتباط والأذونات</p>
                                    <a href="https://support.microsoft.com/ar-sa/microsoft-edge" target="_blank" rel="noopener">
                                        دليل مفصل
                                    </a>
                                </div>
                            </div>
                            
                            <h3>إلغاء الاشتراك في الإعلانات المخصصة</h3>
                            <p>يمكنك إلغاء الاشتراك في الإعلانات المخصصة من Google:</p>
                            <ul>
                                <li><a href="https://www.google.com/settings/ads" target="_blank" rel="noopener">إعدادات إعلانات Google</a></li>
                                <li><a href="https://optout.aboutads.info/" target="_blank" rel="noopener">Digital Advertising Alliance</a></li>
                                <li><a href="https://www.youronlinechoices.com/" target="_blank" rel="noopener">Your Online Choices</a></li>
                            </ul>
                        </section>

                        <!-- Impact of Disabling Cookies -->
                        <section class="policy-section">
                            <h2>تأثير تعطيل ملفات تعريف الارتباط</h2>
                            <div class="impact-warning">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                                <div class="impact-content">
                                    <h3>تنبيه مهم</h3>
                                    <p>
                                        إذا اخترت تعطيل أو حذف ملفات الكوكيز، قد تواجه بعض المشاكل في استخدام الموقع:
                                    </p>
                                    <ul>
                                        <li>عدم تذكر تفضيلاتك وإعداداتك</li>
                                        <li>قد تحتاج لتسجيل الدخول في كل زيارة</li>
                                        <li>بعض الوظائف قد لا تعمل بشكل صحيح</li>
                                        <li>قد تشاهد محتوى غير مخصص لاهتماماتك</li>
                                        <li>تجربة تصفح أقل سلاسة</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- Contact Information -->
                        <section class="policy-section">
                            <h2>تواصل معنا</h2>
                            <p>
                                إذا كان لديك أي أسئلة أو استفسارات حول سياسة ملفات تعريف الارتباط، 
                                يسعدنا التواصل معك:
                            </p>
                            
                            <div class="contact-info-grid">
                                <div class="contact-item">
                                    <i class="bi bi-envelope-fill"></i>
                                    <div class="contact-details">
                                        <strong>البريد الإلكتروني:</strong>
                                        <p><a href="<?php echo esc_url( wasla_get_contact_info( 'email_privacy', 'link' ) ); ?>"><?php echo esc_html( wasla_get_contact_info( 'email_privacy' ) ); ?></a></p>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <div class="contact-details">
                                        <strong>العنوان:</strong>
                                        <p><?php echo esc_html( wasla_get_contact_info( 'location' ) ); ?></p>
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
                                    <i class="bi bi-clock-fill"></i>
                                    <div class="contact-details">
                                        <strong>ساعات الرد:</strong>
                                        <p><?php echo esc_html( wasla_get_contact_info( 'hours' ) ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </article>
                </main>

                <!-- Legal Sidebar -->
                <aside class="legal-sidebar" role="complementary">
                    <!-- Quick Links -->
                    <div class="sidebar-widget legal-links-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-shield-check"></i>
                            المستندات القانونية
                        </h3>
                        <ul class="legal-links-list">
                            <li>
                                <a href="<?php echo home_url('/privacy-policy'); ?>">
                                    <i class="bi bi-shield-lock"></i>
                                    سياسة الخصوصية
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/terms-of-service'); ?>">
                                    <i class="bi bi-file-text"></i>
                                    شروط الخدمة
                                </a>
                            </li>
                            <li class="active">
                                <a href="<?php echo home_url('/cookie-policy'); ?>">
                                    <i class="bi bi-archive"></i>
                                    سياسة ملفات تعريف الارتباط
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Contact Support -->
                    <div class="sidebar-widget support-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-headset"></i>
                            استفسارات عن الكوكيز؟
                        </h3>
                        <p>إذا كان لديك أي استفسار حول ملفات تعريف الارتباط، نحن هنا لمساعدتك.</p>
                        <a href="<?php echo esc_url( wasla_get_contact_info( 'email_privacy', 'link' ) ); ?>" class="support-btn">
                            <i class="bi bi-envelope"></i>
                            راسلنا
                        </a>
                    </div>
                    
                    <!-- Quick Summary -->
                    <div class="sidebar-widget summary-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-list-check"></i>
                            ملخص سريع
                        </h3>
                        <ul class="summary-list">
                            <li><i class="bi bi-check-circle"></i> ملفات صغيرة تحسن تجربتك</li>
                            <li><i class="bi bi-check-circle"></i> يمكنك التحكم بها بسهولة</li>
                            <li><i class="bi bi-check-circle"></i> بعضها ضروري لعمل الموقع</li>
                            <li><i class="bi bi-check-circle"></i> الإعلانات تدعم المحتوى المجاني</li>
                            <li><i class="bi bi-check-circle"></i> خصوصيتك مهمة لنا</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
