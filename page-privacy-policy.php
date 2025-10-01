<?php
/**
 * Template Name: Privacy Policy Page
 * Description: Privacy Policy page template for Wasla educational site
 * Required for GDPR compliance and Google AdSense approval
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<div class="wasla-privacy-policy-page">
    <!-- Page Hero Section -->
    <section class="legal-hero">
        <div class="wasla-container">
            <!-- Breadcrumb Navigation -->
            <nav class="page-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">الرئيسية</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current">سياسة الخصوصية</span>
            </nav>
            
            <!-- Page Title -->
            <h1 class="legal-title">سياسة الخصوصية</h1>
            <p class="legal-subtitle">
                نحن ملتزمون بحماية خصوصيتك وبياناتك الشخصية
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

    <!-- Privacy Policy Content -->
    <section class="legal-content">
        <div class="wasla-container">
            <div class="legal-layout">
                <!-- Main Content -->
                <main class="legal-main" role="main">
                    <article class="privacy-policy-content">
                        <!-- Introduction -->
                        <section class="policy-section">
                            <h2>مقدمة</h2>
                            <p>
                                يسعدنا أن نرحب بك في موقع "وصلة" (wasla-eg.com). نحن نقدر ثقتك بنا ونلتزم بحماية خصوصيتك وبياناتك الشخصية. 
                                تشرح هذه السياسة كيفية جمع واستخدام وحماية المعلومات التي تقدمها لنا عند استخدام موقعنا الإلكتروني.
                            </p>
                            <p>
                                باستخدامك لموقع وصلة، فإنك توافق على جمع واستخدام المعلومات وفقاً لهذه السياسة. 
                                إذا لم توافق على أي جزء من هذه السياسة، فنرجو منك عدم استخدام موقعنا.
                            </p>
                        </section>

                        <!-- Information Collection -->
                        <section class="policy-section">
                            <h2>المعلومات التي نجمعها</h2>
                            
                            <h3>المعلومات الشخصية</h3>
                            <p>قد نجمع المعلومات التالية عندما تقوم بالتفاعل مع موقعنا:</p>
                            <ul>
                                <li><strong>معلومات الاتصال:</strong> الاسم، البريد الإلكتروني، رقم الهاتف</li>
                                <li><strong>المعلومات التعليمية:</strong> المرحلة الدراسية، التخصص، المدرسة أو الجامعة</li>
                                <li><strong>التفضيلات:</strong> اهتماماتك التعليمية والمواضيع المفضلة</li>
                                <li><strong>التعليقات والمراسلات:</strong> ما ترسله إلينا عبر النماذج أو البريد الإلكتروني</li>
                            </ul>
                            
                            <h3>المعلومات التقنية</h3>
                            <p>نجمع تلقائياً بعض المعلومات التقنية عند زيارتك للموقع:</p>
                            <ul>
                                <li><strong>معلومات الجهاز:</strong> نوع الجهاز، نظام التشغيل، المتصفح</li>
                                <li><strong>معلومات الاستخدام:</strong> الصفحات المزارة، وقت الزيارة، مصدر الزيارة</li>
                                <li><strong>عنوان IP:</strong> لأغراض الأمان وتحليل حركة المرور</li>
                                <li><strong>ملفات تعريف الارتباط:</strong> لتحسين تجربة المستخدم</li>
                            </ul>
                        </section>

                        <!-- How We Use Information -->
                        <section class="policy-section">
                            <h2>كيفية استخدام المعلومات</h2>
                            <p>نستخدم المعلومات المجمعة للأغراض التالية:</p>
                            
                            <h3>تقديم الخدمات التعليمية</h3>
                            <ul>
                                <li>تقديم المحتوى التعليمي المناسب لاحتياجاتك</li>
                                <li>الرد على استفساراتك وطلبات المساعدة</li>
                                <li>تخصيص المحتوى والتوصيات</li>
                                <li>إرسال النشرات الإخبارية والتحديثات التعليمية</li>
                            </ul>
                            
                            <h3>تحسين الموقع والخدمات</h3>
                            <ul>
                                <li>تحليل استخدام الموقع لتحسين الأداء</li>
                                <li>تطوير محتوى تعليمي جديد</li>
                                <li>حل المشاكل التقنية</li>
                                <li>ضمان أمان الموقع</li>
                            </ul>
                            
                            <h3>الأغراض القانونية والأمنية</h3>
                            <ul>
                                <li>الامتثال للقوانين واللوائح</li>
                                <li>حماية حقوقنا والمستخدمين</li>
                                <li>منع الاحتيال والأنشطة الضارة</li>
                            </ul>
                        </section>

                        <!-- Cookies and Tracking -->
                        <section class="policy-section">
                            <h2>ملفات تعريف الارتباط والتتبع</h2>
                            
                            <h3>ما هي ملفات تعريف الارتباط؟</h3>
                            <p>
                                ملفات تعريف الارتباط (Cookies) هي ملفات نصية صغيرة يتم حفظها على جهازك عند زيارة موقعنا. 
                                تساعدنا هذه الملفات في تذكر تفضيلاتك وتحسين تجربة التصفح.
                            </p>
                            
                            <h3>أنواع ملفات تعريف الارتباط التي نستخدمها</h3>
                            <ul>
                                <li><strong>ملفات ضرورية:</strong> مطلوبة لعمل الموقع بشكل صحيح</li>
                                <li><strong>ملفات الأداء:</strong> لتحليل استخدام الموقع وتحسينه</li>
                                <li><strong>ملفات الوظائف:</strong> لتذكر اختياراتك وتفضيلاتك</li>
                                <li><strong>ملفات الإعلانات:</strong> لعرض إعلانات مناسبة (Google AdSense)</li>
                            </ul>
                            
                            <h3>إدارة ملفات تعريف الارتباط</h3>
                            <p>
                                يمكنك التحكم في ملفات تعريف الارتباط من خلال إعدادات متصفحك. 
                                لكن يرجى ملاحظة أن تعطيل بعض الملفات قد يؤثر على وظائف الموقع.
                            </p>
                        </section>

                        <!-- Google Services -->
                        <section class="policy-section">
                            <h2>خدمات Google والشركاء</h2>
                            
                            <h3>Google Analytics</h3>
                            <p>
                                نستخدم Google Analytics لتحليل حركة المرور على موقعنا. 
                                تجمع هذه الخدمة معلومات مجهولة عن كيفية استخدام الزوار للموقع.
                            </p>
                            
                            <h3>Google AdSense</h3>
                            <p>
                                نعرض إعلانات من خلال Google AdSense لدعم المحتوى التعليمي المجاني. 
                                قد تستخدم Google ملفات تعريف الارتباط لعرض إعلانات مناسبة لاهتماماتك.
                            </p>
                            
                            <h3>خدمات أخرى</h3>
                            <ul>
                                <li><strong>Google Fonts:</strong> لعرض الخطوط بشكل أفضل</li>
                                <li><strong>Bootstrap Icons:</strong> للأيقونات والرموز</li>
                                <li><strong>خدمات التواصل الاجتماعي:</strong> للمشاركة والتفاعل</li>
                            </ul>
                        </section>

                        <!-- Data Protection -->
                        <section class="policy-section">
                            <h2>حماية البيانات</h2>
                            
                            <h3>الأمان التقني</h3>
                            <ul>
                                <li>تشفير SSL لحماية البيانات المنقولة</li>
                                <li>خوادم آمنة ومحمية</li>
                                <li>تحديثات أمنية منتظمة</li>
                                <li>مراقبة مستمرة للأنشطة المشبوهة</li>
                            </ul>
                            
                            <h3>الوصول المحدود</h3>
                            <p>
                                يقتصر الوصول لبياناتك الشخصية على فريق العمل المصرح له فقط، 
                                وذلك لأغراض تقديم الخدمة وتحسينها.
                            </p>
                        </section>

                        <!-- User Rights -->
                        <section class="policy-section">
                            <h2>حقوقك</h2>
                            <p>وفقاً لقوانين حماية البيانات، لك الحقوق التالية:</p>
                            
                            <ul>
                                <li><strong>الحق في المعرفة:</strong> معرفة ما نجمعه من بيانات عنك</li>
                                <li><strong>الحق في الوصول:</strong> الحصول على نسخة من بياناتك</li>
                                <li><strong>الحق في التصحيح:</strong> تصحيح البيانات غير الصحيحة</li>
                                <li><strong>الحق في الحذف:</strong> طلب حذف بياناتك الشخصية</li>
                                <li><strong>الحق في النقل:</strong> نقل بياناتك لخدمة أخرى</li>
                                <li><strong>الحق في الاعتراض:</strong> الاعتراض على معالجة بياناتك</li>
                            </ul>
                            
                            <p>
                                لممارسة أي من هذه الحقوق، يرجى التواصل معنا عبر 
                                <a href="<?php echo esc_url( wasla_get_contact_info( 'email_privacy', 'link' ) ); ?>"><?php echo esc_html( wasla_get_contact_info( 'email_privacy' ) ); ?></a>
                            </p>
                        </section>

                        <!-- Children Privacy -->
                        <section class="policy-section">
                            <h2>خصوصية الأطفال</h2>
                            <p>
                                نحن نهتم بشكل خاص بحماية خصوصية الأطفال. موقعنا مناسب للطلاب من جميع الأعمار، 
                                لكننا لا نجمع عمداً معلومات شخصية من الأطفال دون سن 13 عاماً دون موافقة الوالدين.
                            </p>
                            <p>
                                إذا كنت والداً وتعتقد أن طفلك قد قدم معلومات شخصية لنا، 
                                يرجى التواصل معنا فوراً لحذف هذه المعلومات.
                            </p>
                        </section>

                        <!-- International Users -->
                        <section class="policy-section">
                            <h2>المستخدمون الدوليون</h2>
                            <p>
                                موقعنا يستضاف على خوادم قد تكون خارج بلدك. 
                                باستخدام الموقع، فإنك توافق على نقل بياناتك إلى هذه الخوادم وفقاً لهذه السياسة.
                            </p>
                            <p>
                                نحن ملتزمون بحماية بياناتك وفقاً لأعلى المعايير الدولية لحماية الخصوصية.
                            </p>
                        </section>

                        <!-- Policy Updates -->
                        <section class="policy-section">
                            <h2>تحديثات السياسة</h2>
                            <p>
                                قد نحدث هذه السياسة من وقت لآخر لتعكس التغييرات في خدماتنا أو المتطلبات القانونية. 
                                سنقوم بإشعارك بأي تغييرات مهمة من خلال:
                            </p>
                            <ul>
                                <li>نشر النسخة المحدثة على موقعنا</li>
                                <li>إرسال إشعار عبر البريد الإلكتروني</li>
                                <li>عرض إشعار على الموقع</li>
                            </ul>
                            <p>
                                استمرارك في استخدام الموقع بعد التحديثات يعني موافقتك على السياسة المحدثة.
                            </p>
                        </section>

                        <!-- Contact Information -->
                        <section class="policy-section">
                            <h2>تواصل معنا</h2>
                            <p>إذا كان لديك أي أسئلة حول سياسة الخصوصية هذه، يمكنك التواصل معنا عبر:</p>
                            
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
                            <li class="active">
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
                            <li>
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
                            تحتاج مساعدة؟
                        </h3>
                        <p>إذا كان لديك أي استفسار حول خصوصيتك أو بياناتك، لا تتردد في التواصل معنا.</p>
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
                            <li><i class="bi bi-check-circle"></i> نحمي بياناتك الشخصية</li>
                            <li><i class="bi bi-check-circle"></i> نستخدم التشفير الآمن</li>
                            <li><i class="bi bi-check-circle"></i> لك حق الوصول والحذف</li>
                            <li><i class="bi bi-check-circle"></i> نلتزم بقوانين GDPR</li>
                            <li><i class="bi bi-check-circle"></i> شفافية كاملة في الاستخدام</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>