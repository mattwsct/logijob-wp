<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<footer class="py-5 wrapper container-fluid bg-primary text-center" id="wrapper-footer">
	<section class="site-footer container bg-primary text-white text-center" id="colophon">
		<div class="site-info row mt-4 pt-3">
			<div class="col mb-4">
				<h3 class="logo-font footer-title"><a href="<?php echo get_home_url(); ?>">Logijob</a></h3>
				<!-- <img class="logo" src="<?php echo get_template_directory_uri(); ?>-child/images/logo-color.svg"> -->
			</div>
		</div><!-- .site-info -->
		<div class="row text-center mt-5 footer-links">
			<div class="col-auto mx-auto">
				<a href="<?php echo get_home_url(); ?>/features">
					<p>主な機能</p>
				</a>
			</div>
			<div class="col-auto mx-auto">
				<a href="<?php echo get_home_url(); ?>/user-voice">
					<p>ユーザーボイス</p>
				</a>
			</div>
			<div class="col-auto mx-auto">
				<a href="<?php echo get_home_url(); ?>/pricing">
					<p>金額</p>
				</a>
			</div>
			<div class="col-auto mx-auto">
				<a href="<?php echo get_home_url(); ?>/introduction">
					<p>導入の流れ</p>
				</a>
			</div>
		</div>
		<div class="row text-center mb-5 footer-links">
			<div class="col-auto mx-auto">
				<a href="<?php echo get_home_url(); ?>/transaction-law">
					<p>特定商取引法の表示</p>
				</a>
			</div>
			<div class="col-auto mx-auto">
				<a href="https://innovatech.studio/">
					<p>運営会社</p>
				</a>
			</div>
			<div class="col-auto mx-auto">
				<a href="<?php echo get_home_url(); ?>/privacy">
					<p>プライバシーポリシー</p>
				</a>
			</div>
			<div class="col-auto mx-auto">
				<a href="<?php echo get_home_url(); ?>/personal-information">
					<p>個人情報の取扱</p>
				</a>
			</div>
			<div class="col-auto mx-auto">
				<a href="<?php echo get_home_url(); ?>/terms">
					<p>利用規約</p>
				</a>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-12">
				<p>Copyright © 2019 <a href="https://innovatech.studio/">Innovatech Studio</a>. All Rights Reserved</p>
			</div>
			<div class="col-12 text-primary my-2">
				<a onclick="topFunction()" id="myBtn" title="Go to top">
					<div class="circle-border-footer">
						<div class="py-auto">
							<i class="fas fa-arrow-up shadow"></i>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section><!-- #colophon -->
	<script type="text/javascript">
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0; // For Safari
		  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}
	</script>
</footer><!-- wrapper end -->
</div>
<?php wp_footer(); ?>
</body>
</html>