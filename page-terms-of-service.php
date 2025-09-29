<?php
/**
 * Template Name: Terms of Service Page
 * Description: Terms of Service page template for Wasla educational site
 * Required for legal protection and Google AdSense compliance
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<div class="wasla-terms-page">
    <!-- Page Hero Section -->
    <section class="legal-hero">
        <div class="wasla-container">
            <!-- Breadcrumb Navigation -->
            <nav class="page-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">الرئيسية</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current">شروط الخدمة</span>
            </nav>
            
            <!-- Page Title -->
            <h1 class="legal-title">شروط الخدمة</h1>
            <p class="legal-subtitle">
                القواعد والشروط التي تحكم استخدام موقع وصلة التعليمي
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

    <!-- Terms of Service Content -->
    <section class="legal-content">
        <div class="wasla-container">
            <div class="legal-layout">
                <!-- Main Content -->
                <main class="legal-main" role="main">
                    <article class="terms-content">
                        <!-- Introduction -->
                        <section class="policy-section">
                            <h2>مقدمة</h2>
                            <p>
                                مرحباً بك في موقع "وصلة" (wasla-eg.com)، منصتك التعليمية المتخصصة في تقديم المحتوى التعليمي والإرشاد الأكاديمي. 
                                تحكم هذه الشروط والأحكام استخدامك للموقع وجميع الخدمات المتاحة عليه.
                            </p>
                            <p>
                                باستخدامك لموقع وصلة، فإنك توافق على الالتزام بهذه الشروط والأحكام. 
                                إذا لم توافق على أي جزء من هذه الشروط، فيجب عليك عدم استخدام الموقع.
                            </p>
                        </section>

                        <!-- Website Purpose -->
                        <section class="policy-section">
                            <h2>الغرض من الموقع</h2>
                            <p>موقع وصلة هو منصة تعليمية تهدف إلى:</p>
                            <ul>
                                <li>تقديم المحتوى التعليمي المفيد للطلاب وأولياء الأمور</li>
                                <li>توفير معلومات شاملة عن المسارات التعليمية المختلفة</li>
                                <li>مساعدة الطلاب في اتخاذ القرارات التعليمية الصحيحة</li>
                                <li>تقديم نصائح ودليل إرشادي للدراسة والتحضير للامتحانات</li>
                                <li>خلق مجتمع تعليمي تفاعلي ومفيد</li>
                            </ul>
                        </section>

                        <!-- Acceptable Use -->
                        <section class="policy-section">
                            <h2>الاستخدام المقبول</h2>
                            
                            <h3>يُسمح لك بـ:</h3>
                            <ul>
                                <li>قراءة وتصفح المحتوى التعليمي المتاح على الموقع</li>
                                <li>تحميل المواد التعليمية المخصصة للتحميل</li>
                                <li>مشاركة روابط المقالات والمحتوى مع الآخرين</li>
                                <li>التفاعل مع المحتوى من خلال التعليقات والمشاركات</li>
                                <li>الاستفادة من الخدمات التعليمية المجانية</li>
                                <li>التواصل معنا للحصول على المساعدة والدعم</li>
                            </ul>
                            
                            <h3>يُمنع عليك:</h3>
                            <ul>
                                <li>نسخ أو إعادة نشر المحتوى دون إذن كتابي مسبق</li>
                                <li>استخدام الموقع لأغراض تجارية دون ترخيص</li>
                                <li>نشر محتوى مسيء أو مخالف للآداب العامة</li>
                                <li>محاولة اختراق أو الإضرار بأمان الموقع</li>
                                <li>استخدام برامج آلية لجمع البيانات (web scraping)</li>
                                <li>انتحال شخصية أشخاص آخرين أو نشر معلومات كاذبة</li>
                                <li>إرسال رسائل غير مرغوب فيها (spam) أو محتوى إعلاني</li>
                            </ul>
                        </section>

                        <!-- Intellectual Property -->
                        <section class="policy-section">
                            <h2>الملكية الفكرية</h2>
                            
                            <h3>حقوق الطبع والنشر</h3>
                            <p>
                                جميع المحتويات المتاحة على موقع وصلة، بما في ذلك النصوص والصور والفيديوهات والتصاميم، 
                                محمية بحقوق الطبع والنشر وهي ملكية خاصة لفريق وصلة أو شركائنا المرخص لهم.
                            </p>
                            
                            <h3>الاستخدام العادل</h3>
                            <p>يُسمح بـ:</p>
                            <ul>
                                <li>الاقتباس المحدود لأغراض تعليمية مع ذكر المصدر</li>
                                <li>مشاركة المقاطع القصيرة في وسائل التواصل الاجتماعي</li>
                                <li>استخدام المحتوى للدراسة الشخصية والمراجعة</li>
                            </ul>
                            
                            <h3>المحتوى المرسل من المستخدمين</h3>
                            <p>
                                عند إرسال تعليقات أو مساهمات للموقع، فإنك تمنحنا حق استخدام وعرض وتوزيع هذا المحتوى 
                                على الموقع وفي المواد التسويقية، مع الاحتفاظ بحقوق الطبع والنشر الخاصة بك.
                            </p>
                        </section>

                        <!-- Educational Content Disclaimer -->
                        <section class="policy-section">
                            <h2>إخلاء المسؤولية التعليمية</h2>
                            
                            <h3>طبيعة المحتوى</h3>
                            <p>
                                المحتوى المتاح على موقع وصلة مخصص لأغراض تعليمية وإرشادية فقط. 
                                نحن نسعى لتقديم معلومات دقيقة ومحدثة، لكننا لا نضمن:
                            </p>
                            <ul>
                                <li>دقة جميع المعلومات في جميع الأوقات</li>
                                <li>ملاءمة المحتوى لجميع الحالات الفردية</li>
                                <li>تحقيق نتائج معينة من استخدام المحتوى</li>
                                <li>خلو المحتوى من الأخطاء أو النقص</li>
                            </ul>
                            
                            <h3>القرارات الشخصية</h3>
                            <p>
                                محتوى الموقع لا يُعد نصيحة مهنية أو قانونية أو تعليمية رسمية. 
                                يجب عليك استشارة المتخصصين (مرشدين تعليميين، مستشارين، خبراء) قبل اتخاذ قرارات مهمة 
                                تتعلق بمسارك التعليمي أو المهني.
                            </p>
                            
                            <h3>المسؤولية عن القرارات</h3>
                            <p>
                                أنت وحدك المسؤول عن القرارات التي تتخذها بناءً على المعلومات المتاحة على الموقع. 
                                لا نتحمل أي مسؤولية قانونية عن أي نتائج أو عواقب قد تنتج عن استخدام محتوى الموقع.
                            </p>
                        </section>

                        <!-- Third Party Links -->
                        <section class="policy-section">
                            <h2>الروابط الخارجية</h2>
                            <p>
                                قد يحتوي موقعنا على روابط لمواقع خارجية أو محتوى من طرف ثالث. 
                                هذه الروابط متاحة للراحة فقط، ولا نتحمل أي مسؤولية عن:
                            </p>
                            <ul>
                                <li>محتوى المواقع الخارجية</li>
                                <li>دقة المعلومات على هذه المواقع</li>
                                <li>سياسات الخصوصية أو الأمان الخاصة بها</li>
                                <li>أي ضرر قد ينتج عن زيارة هذه المواقع</li>
                            </ul>
                            <p>
                                ندعوك لمراجعة سياسات الخصوصية وشروط الاستخدام لأي موقع خارجي تقوم بزيارته.
                            </p>
                        </section>

                        <!-- Advertising -->
                        <section class="policy-section">
                            <h2>الإعلانات والمحتوى المدفوع</h2>
                            
                            <h3>Google AdSense</h3>
                            <p>
                                نستخدم خدمة Google AdSense لعرض إعلانات على موقعنا لدعم المحتوى التعليمي المجاني. 
                                هذه الإعلانات قد تستند إلى اهتماماتك وسجل تصفحك.
                            </p>
                            
                            <h3>المحتوى المدعوم</h3>
                            <p>
                                قد ننشر محتوى مدعوم أو مقالات برعاية شركاء تعليميين. 
                                سنوضح دائماً عندما يكون المحتوى مدعوماً أو ممولاً.
                            </p>
                            
                            <h3>الروابط التابعة</h3>
                            <p>
                                قد نستخدم روابط تابعة (Affiliate Links) لبعض المنتجات أو الخدمات التعليمية. 
                                قد نحصل على عمولة إذا قمت بالشراء من خلال هذه الروابط، دون تكلفة إضافية عليك.
                            </p>
                        </section>

                        <!-- Limitation of Liability -->
                        <section class="policy-section">
                            <h2>حدود المسؤولية</h2>
                            <p>
                                في أقصى حد يسمح به القانون، لا نتحمل المسؤولية عن أي أضرار مباشرة أو غير مباشرة 
                                أو عرضية أو تبعية أو خاصة ناتجة عن:
                            </p>
                            <ul>
                                <li>استخدام أو عدم القدرة على استخدام الموقع</li>
                                <li>أي أخطاء أو نقص في المحتوى</li>
                                <li>فقدان البيانات أو الأرباح</li>
                                <li>انقطاع الخدمة أو تعطل الموقع</li>
                                <li>أي فيروسات أو برامج ضارة</li>
                                <li>أفعال أو محتوى مستخدمين آخرين</li>
                            </ul>
                        </section>

                        <!-- Indemnification -->
                        <section class="policy-section">
                            <h2>التعويض</h2>
                            <p>
                                توافق على الدفاع عن وتعويض وحماية موقع وصلة وفريق العمل والشركاء من أي مطالبات 
                                أو أضرار أو خسائر تنشأ عن:
                            </p>
                            <ul>
                                <li>انتهاكك لهذه الشروط والأحكام</li>
                                <li>انتهاكك لأي قوانين أو حقوق طرف ثالث</li>
                                <li>المحتوى الذي تنشره على الموقع</li>
                                <li>استخدامك غير القانوني أو غير المصرح به للموقع</li>
                            </ul>
                        </section>

                        <!-- Account and Security -->
                        <section class="policy-section">
                            <h2>الحسابات والأمان</h2>
                            <p>
                                إذا قمت بإنشاء حساب على موقعنا، فأنت مسؤول عن:
                            </p>
                            <ul>
                                <li>الحفاظ على سرية كلمة المرور الخاصة بك</li>
                                <li>جميع الأنشطة التي تحدث تحت حسابك</li>
                                <li>إخبارنا فوراً بأي استخدام غير مصرح به</li>
                                <li>تقديم معلومات دقيقة وصحيحة</li>
                                <li>تحديث معلومات حسابك عند الحاجة</li>
                            </ul>
                            <p>
                                نحتفظ بالحق في تعليق أو إنهاء حسابك إذا اشتبهنا في نشاط غير قانوني 
                                أو انتهاك لشروط الخدمة.
                            </p>
                        </section>

                        <!-- Service Changes -->
                        <section class="policy-section">
                            <h2>التغييرات في الخدمة</h2>
                            <p>
                                نحتفظ بالحق في:
                            </p>
                            <ul>
                                <li>تعديل أو إيقاف أي جزء من الموقع في أي وقت</li>
                                <li>تغيير الأسعار أو الرسوم (إن وجدت) للخدمات</li>
                                <li>فرض قيود على ميزات معينة</li>
                                <li>رفض الخدمة لأي شخص لأي سبب</li>
                            </ul>
                            <p>
                                لا نتحمل المسؤولية تجاهك أو تجاه أي طرف ثالث عن أي تعديل أو تعليق أو إيقاف للخدمة.
                            </p>
                        </section>

                        <!-- Termination -->
                        <section class="policy-section">
                            <h2>إنهاء الاستخدام</h2>
                            <p>
                                يمكننا إنهاء أو تعليق وصولك إلى الموقع فوراً، دون إشعار مسبق، 
                                إذا اعتقدنا أنك انتهكت هذه الشروط أو القوانين المعمول بها.
                            </p>
                            <p>
                                يمكنك أيضاً إنهاء استخدامك للموقع في أي وقت عن طريق التوقف عن استخدامه 
                                وحذف حسابك إن وجد.
                            </p>
                            <p>
                                تظل الأحكام التالية سارية بعد الإنهاء:
                            </p>
                            <ul>
                                <li>حقوق الملكية الفكرية</li>
                                <li>إخلاء المسؤولية</li>
                                <li>حدود المسؤولية</li>
                                <li>التعويض</li>
                                <li>القانون الحاكم</li>
                            </ul>
                        </section>

                        <!-- Governing Law -->
                        <section class="policy-section">
                            <h2>القانون الحاكم</h2>
                            <p>
                                تخضع هذه الشروط والأحكام وتُفسر وفقاً لقوانين جمهورية مصر العربية. 
                                أي نزاع ينشأ عن هذه الشروط سيخضع للاختصاص الحصري لمحاكم القاهرة، مصر.
                            </p>
                        </section>

                        <!-- Changes to Terms -->
                        <section class="policy-section">
                            <h2>التغييرات على الشروط</h2>
                            <p>
                                نحتفظ بالحق في تحديث أو تعديل هذه الشروط والأحكام في أي وقت دون إشعار مسبق. 
                                التغييرات تدخل حيز التنفيذ فور نشرها على الموقع.
                            </p>
                            <p>
                                استمرارك في استخدام الموقع بعد نشر التغييرات يعني موافقتك على الشروط المحدثة. 
                                ننصحك بمراجعة هذه الصفحة بشكل دوري للبقاء على اطلاع بأي تحديثات.
                            </p>
                        </section>

                        <!-- Contact Information -->
                        <section class="policy-section">
                            <h2>تواصل معنا</h2>
                            <p>إذا كان لديك أي أسئلة حول شروط الخدمة هذه، يمكنك التواصل معنا عبر:</p>
                            
                            <div class="contact-info-grid">
                                <div class="contact-item">
                                    <i class="bi bi-envelope-fill"></i>
                                    <div class="contact-details">
                                        <strong>البريد الإلكتروني:</strong>
                                        <p><a href="mailto:legal@wasla-eg.com">legal@wasla-eg.com</a></p>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <div class="contact-details">
                                        <strong>العنوان:</strong>
                                        <p>القاهرة، جمهورية مصر العربية</p>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <i class="bi bi-telephone-fill"></i>
                                    <div class="contact-details">
                                        <strong>الهاتف:</strong>
                                        <p><a href="tel:+201234567890">+20 123 456 7890</a></p>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <i class="bi bi-clock-fill"></i>
                                    <div class="contact-details">
                                        <strong>ساعات العمل:</strong>
                                        <p>الأحد - الخميس: 9:00 ص - 6:00 م</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Acceptance -->
                        <section class="policy-section acceptance-notice">
                            <div class="notice-box">
                                <i class="bi bi-check-circle-fill"></i>
                                <div class="notice-content">
                                    <h3>قبول الشروط</h3>
                                    <p>
                                        باستخدامك لموقع وصلة، فإنك تقر بأنك قد قرأت وفهمت ووافقت على الالتزام 
                                        بهذه الشروط والأحكام وسياسة الخصوصية الخاصة بنا.
                                    </p>
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
                            <li class="active">
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
                            استفسارات قانونية؟
                        </h3>
                        <p>إذا كان لديك أي استفسار قانوني أو تحتاج للتوضيح، نحن هنا لمساعدتك.</p>
                        <a href="mailto:legal@wasla-eg.com" class="support-btn">
                            <i class="bi bi-envelope"></i>
                            راسل الفريق القانوني
                        </a>
                    </div>
                    
                    <!-- Key Points -->
                    <div class="sidebar-widget summary-widget">
                        <h3 class="widget-title">
                            <i class="bi bi-key"></i>
                            نقاط أساسية
                        </h3>
                        <ul class="summary-list">
                            <li><i class="bi bi-check-circle"></i> محتوى تعليمي وإرشادي</li>
                            <li><i class="bi bi-check-circle"></i> حماية حقوق الملكية الفكرية</li>
                            <li><i class="bi bi-check-circle"></i> استخدام مسؤول ومحترم</li>
                            <li><i class="bi bi-check-circle"></i> إخلاء مسؤولية واضح</li>
                            <li><i class="bi bi-check-circle"></i> حقوق والتزامات محددة</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>