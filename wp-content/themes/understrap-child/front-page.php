<?php
/**
 * Template Name: Landing Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
get_header('');
$container = get_theme_mod('understrap_container_type');
?>

<main class="landing text-center">
	<section class="text-primary header-title mt-2">
		<div class="container">
			<h1>物流業界の採用を救う採用管理システム</h1>
		</div>
	</section>
	<header class="header-bg landing-bg-1 text-primary pt-4">
		<div class="truck-right">
			<img src="<?php echo get_template_directory_uri(); ?>-child/images/truck-right.svg" alt="">
		</div>
		<div class="truck-left">
			<img src="<?php echo get_template_directory_uri(); ?>-child/images/truck-left.svg" alt="">
		</div>
	</header>
	<section class="py-5 bg-white">
		<a href="#content" class="">
			<div class="mx-auto">
				<div class="py-auto">
					<i class="fas fa-chevron-down"></i>
				</div>
			</div>
		</a>
	</section>
	<section class="pb-5 bg-white">
		<div class="container text-black" id="content">
			<header class="my-5 pb-3">
				<h1>主な機能</h1>
			</header>
			<div class="row mt-5">
				<div class="col-md-6">
					<div class="card top-card shadow mb-3">
						<header class="mt-4">
							<h2>求人管理</h2>
						</header>
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>-child/images/illustration_01.svg" alt="">
							<h3>案件管理</h3>
							<p>求人案件は、いつでも開始・停止が可能です。<br>ご担当者様で内容の修正も簡単に行えます</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card top-card shadow mb-3">
						<header class="mt-4">
							<h2>応募者情報管理</h2>
						</header>
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>-child/images/illustration_02.svg" alt="">
							<h3>履歴書</h3>
							<p>応募者は自身の登録した情報から履歴書を作成する<br>ことができます。担当社もいつでも画面上で履歴書を確認出来、なおかつ応募ハードルを下げることが<br>出来ます</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card bottom-card shadow mb-3">
						<header class="mt-4">
							<h2>選考管理</h2>
						</header>
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>-child/images/illustration_03.svg" alt="">
							<h3>面接の評価</h3>
							<p>面接後、管理画面から評価を入力する事で、<br>採用担当全員と情報共有が瞬時に行えます。</p>
							<h3>進捗管理</h3>
							<p>応募から採用・不採用まで同一システムで管理が出来るので、各応募者のステータスの確認がスムーズに<br>できます。対応漏れを防ぐことが出来ます。</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card bottom-card shadow mb-3">
						<header class="mt-4">
							<h2>内定者管理</h2>
						</header>
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>-child/images/illustration_04.svg" alt="">
							<h3>内定通知</h3>
							<p>選考がすんだら速やかに内定通知を送ることが<br>可能です。</p>
							<h3>フォロー</h3>
							<p>辞退が少なくなるよう、<br>内定後のフォローを行う事ができます。</p>
						</div>
					</div>
				</div>
				<a href="<?php echo get_home_url(); ?>/features" class="btn btn-lg btn-primary mx-auto my-5 shadow">機能一覧</a>
			</div>
		</div>
	</section>
	<section class="py-3 bg-primary text-white logijob-reasons">
		<div class="container">		
			<header>
				<h1>LOGIJOBを選ぶ理由</h1>
			</header>
			<div class="row">
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri(); ?>-child/images/illustration_04.svg" alt="" class="mb-5">
				</div>
				<div class="col-md-6 order-md-first my-auto text-md-left">
					<h3>物流業界の痒いところに手が届くシステム</h3>
					<p>LOGIJOBは、創業100年のセンコーグループのイノバテックスタジオだから開発出来る、物流業界に特化した採用管理システムです。<br>一般的な採用管理システムと同様の、応募者情報の管理、応募状況の管理、面接日程の管理をすべてクラウドで行い、従来時間とコストの掛かっていた採用フロー業務の負担を軽減します。</p>
				</div>
			</div>
			<div class="row my-5">
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri(); ?>-child/images/illustration_03.svg" alt="" class="mb-5">
				</div>
				<div class="col-md-6 my-auto text-md-left">
					<h3>物流業界の痒いところに手が届くシステム</h3>
					<p>LOGIJOBは、創業100年のセンコーグループのイノバテックスタジオだから開発出来る、物流業界に特化した採用管理システムです。<br>一般的な採用管理システムと同様の、応募者情報の管理、応募状況の管理、面接日程の管理をすべてクラウドで行い、従来時間とコストの掛かっていた採用フロー業務の負担を軽減します。</p>
					<a href="<?php echo get_home_url(); ?>/future-updates" class="btn btn-lg btn-light">機能追加リクエスト</a>
				</div>
			</div>
		</div>
	</section>
	<?php if ($posts = get_posts('posts_per_page=3')): ?>
		<section class="py-5 bg-white">
			<div class="container mb-5" id="content">
				<div class="text-left text-black">
					<header class="text-center mt-5 mb-4">
						<h1>お知らせ</h1>
					</header>
					<div class="articles">
						<?php foreach ($posts as $post): setup_postdata($post)?>
							<?php get_template_part('loop-templates/content', 'post');?>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</section>
	<?php endif;?>
	<section class="py-5 bg-secondary">
		<div class="container my-5">
			<header class="my-5">
				<h1>ユーザーボイス</h1>
			</header>
			<div class="card quote-box shadow px-3 px-md-5">
				<div class="row">
					<div class="col-12 quote-top text-left">
						<img src="<?php echo get_template_directory_uri(); ?>-child/images/quote-left.svg" alt="">
					</div>
				</div>
				<div class="row px-3 pt-5 pb-4">
					<div class="col-md-9 text-left">
						<h3>おかげさまで予定より早く目的採用人数を達成しました</h3>
						<p>新規オープンする倉庫の採用をLOGIJOBで行いました。新規オープンということで一度に200人ほどの採用を予定しており、約4ヵ月をかけてのスケジュールでおりましたが、LOGIJOBのシステムと広告運用サポートのおかげで予定を大幅に短縮した1ヵ月で採用を完了することが出来ました。</p>
						<hr align="left" />
						<p><span>柏センコー運輸株式会社　田子部長</span></p>
					</div>
					<div class="col-md-3 text-right-md testimonial-pic">
						<img src="<?php echo get_template_directory_uri(); ?>-child/images/testimonial@2x.jpg" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col-12 quote-bottom text-right">
						<img src="<?php echo get_template_directory_uri(); ?>-child/images/quote-right.svg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_template_part( 'partials/contact-info' ); ?>
<?php get_footer('contact');?>