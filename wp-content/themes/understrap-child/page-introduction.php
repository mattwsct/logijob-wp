<?php
/**
 * Template Name: Pricing
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<main class="container-fluid bg-white introduction text-center">
  <header class="container py-5" id="full-width-page-wrapper">
    <h1 class="mt-5">LOGIJOB導入の流れ</h1>
    <div class="mx-auto row intro-box my-5 d-none d-lg-flex">
      <div class="mr-auto py-auto intro-box-circle">
        <a href="#intro-1">
          <p style="margin-top: 51px;">お問い合わせ<br/>ご相談</p>
        </a>
      </div>
      <i class="fas fa-chevron-right"></i>
      <div class="mx-auto intro-box-circle">
        <a href="#intro-2">
          <p style="margin-top: 39px;">プラン<br/>オプション<br/>ご提案</p>
        </a>
      </div>
      <i class="fas fa-chevron-right"></i>
      <div class="mx-auto intro-box-circle">
        <a href="#intro-3">
          <p style="margin-top: 62px;">設置</p>
        </a>
      </div>
      <i class="fas fa-chevron-right"></i>
      <div class="ml-auto intro-box-circle">
        <a href="#intro-4">
          <p style="margin-top: 62px;">運用開始</p>
        </a>
      </div>
    </div>
  </header>
  <section class="progress-circles-main d-none d-md-block"></section>
  <section class="wrapper container" id="intro-1">
    <div class="mx-auto progress-circle">1</div>
    <div class="row">
      <div class="col-12 py-5">
        <h1>お問い合わせご相談</h1>
        <img class="py-5" src="<?php echo get_template_directory_uri(); ?>-child/images/introduction_illustration_1.svg" alt="">
        <h3>お問い合わせ〜数日</h3>
        <p>まずはお客様のお困りごとをお聞かせ下さい。
        専任担当者がお客様のお困りごと解決に向けてサポート致します</p>
        <a href="#intro-2"><i class="fas fa-chevron-down"></i></a>
      </div>
    </div>
  </section>
  <section class="wrapper container" id="intro-2">
    <div class="mx-auto progress-circle">2</div>
    <div class="row">
      <div class="col-12 py-5">
        <h1>プランオプションご提案</h1>
        <img class="py-5" src="<?php echo get_template_directory_uri(); ?>-child/images/introduction_illustration_2.svg" alt="">
        <h3>〜5日程</h3>
        <p>お客様の状況に合わせ、最適なプランをご提案致します定型のプランではなくカスタマイズされたご提案を致します。</p>
        <a href="#intro-3"><i class="fas fa-chevron-down"></i></a>
      </div>
    </div>
  </section>
  <section class="wrapper container" id="intro-3">
    <div class="mx-auto progress-circle">3</div>
    <div class="row">
      <div class="col-12 py-5">
        <h1>設置</h1>
        <img class="py-5" src="<?php echo get_template_directory_uri(); ?>-child/images/introduction_illustration_3.svg" alt="">
        <h3>3週間〜</h3>
        <p>LOGIJOBの設置を行います必要に応じて求人サイトの制作も行いますので、制作規模によって設置期間が変わります。</p>
        <a href="#intro-4"><i class="fas fa-chevron-down"></i></a>
      </div>
    </div>
  </section>
  <section class="wrapper container" id="intro-4">
    <div class="mx-auto progress-circle">4</div>
    <div class="row">
      <div class="col-12 py-5">
        <h1>運用</h1>
        <img class="py-5" src="<?php echo get_template_directory_uri(); ?>-child/images/introduction_illustration_4.svg" alt="">        
        <p>LOGIJOBの運用後も広告運用、機能リクエスト、運用サポートなどお気軽に担当社までお問い合わせ下さい。システムの提供だけでなく、エンゲージメントまでお手伝い致します。</p>
      </div>
    </div>
  </section>
</main>
<?php get_template_part( 'partials/contact-info' ); ?>
<?php get_footer('contact'); ?>