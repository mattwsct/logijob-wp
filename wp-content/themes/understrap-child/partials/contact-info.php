<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$container = get_theme_mod( 'understrap_container_type' );
?>
<section class="py-5 bg-white text-black text-center contact-info">
	<div class="container">
		<header class="my-5">
			<h3>LOGIJOBではお客様の採用を改善するお手伝いを致します。<br>上記プラン、オプション以外のお見積もり・ご相談も是非一度お気軽にお問い合わせ下さい</h3>
		</header>
		<div class="row py-4">
			<div class="col-md-4 offset-md-2">
				<img src="<?php echo get_template_directory_uri(); ?>-child/images/kenji.jpg" alt="" class="mb-3">
				<p>担当：品川</p>
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>-child/images/meg.jpg" alt="" class="mb-3">
				<p>担当：甲斐</p>
			</div>
		</div>
		<div class="row my-4">
			<div class="col">
				<p class="mb-0">イノバテックスタジオ株式会社</p>
				<p class="contact-number">03-6862-8845</p>
				<a href="mailto:sales@innovatech.studio?subject=LOGIJOB Enquiry" class="btn btn-lg btn-primary mt-5">メールでお問い合わせ</a>
			</div>
		</div>
	</div>
</section>