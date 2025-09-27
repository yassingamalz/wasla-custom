<?php
/**
 * The footer for Wasla Theme (Child of Astra)
 *
 * Contains the closing of the #content div, beautiful Wasla footer, and all content after.
 * Includes the gorgeous 4-column footer with social icons and proper WordPress hooks.
 *
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
		<?php astra_content_bottom(); ?>
		</div> <!-- .ast-container -->
	</div><!-- #content -->
	
	<?php astra_content_after(); ?>
	
	<?php astra_footer_before(); ?>
	
	<!-- ===== WASLA CUSTOM FOOTER - BEAUTIFUL 4-COLUMN DESIGN ===== -->
	<footer class="wasla-footer">
		<div class="footer-content">
			<div class="footer-brand">
				<h3>وصلة</h3>
				<p>دليلك التعليمي الموثوق... من غير لف ودوران نوصلك لمسارك التعليمي الصح بأبسط الطرق وأوضح المعلومات.</p>
				<div class="footer-social">
					<a href="#" class="social-link facebook" aria-label="فيسبوك">
						<i class="bi bi-facebook"></i>
					</a>
					<a href="#" class="social-link instagram" aria-label="انستجرام">
						<i class="bi bi-instagram"></i>
					</a>
					<a href="#" class="social-link whatsapp" aria-label="واتساب">
						<i class="bi bi-whatsapp"></i>
					</a>
					<a href="#" class="social-link youtube" aria-label="يوتيوب">
						<i class="bi bi-youtube"></i>
					</a>
					<a href="#" class="social-link twitter" aria-label="تويتر">
						<i class="bi bi-twitter"></i>
					</a>
				</div>
			</div>
			
			<div class="footer-section">
				<h4>روابط سريعة</h4>
				<ul>
					<li><a href="<?php echo home_url(); ?>">الرئيسية</a></li>
					<li><a href="<?php echo home_url('/about'); ?>">عن وصلة</a></li>
					<li><a href="<?php echo home_url('/blog'); ?>">المدونة</a></li>
					<li><a href="<?php echo home_url('/contact'); ?>">اتصل بنا</a></li>
				</ul>
			</div>
			
			<div class="footer-section">
				<h4>المسارات التعليمية</h4>
				<ul>
					<li><a href="<?php echo home_url('/don-bosco'); ?>">دون بوسكو</a></li>
					<li><a href="<?php echo home_url('/thanawya'); ?>">الثانوية العامة</a></li>
					<li><a href="<?php echo home_url('/universities'); ?>">التنسيق الجامعي</a></li>
					<li><a href="<?php echo home_url('/schools'); ?>">المدارس الخاصة</a></li>
				</ul>
			</div>
			
			<div class="footer-section">
				<h4>تواصل معنا</h4>
				<ul>
					<li><a href="mailto:info@wasla-eg.com">info@wasla-eg.com</a></li>
					<li><a href="tel:+201234567890">+20 123 456 7890</a></li>
					<li><a href="#">الجيزة، مصر</a></li>
				</ul>
			</div>
		</div>
		
		<div class="footer-bottom">
			<p>&copy; <?php echo date('Y'); ?> وصلة - جميع الحقوق محفوظة | تم التطوير بواسطة فريق وصلة</p>
		</div>
	</footer>

	<?php astra_footer_after(); ?>

</div><!-- #page -->

<?php astra_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>