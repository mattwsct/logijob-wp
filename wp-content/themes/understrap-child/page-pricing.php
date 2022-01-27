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
<main class="bg-white pricing text-center">
  <section class="container py-5" id="full-width-page-wrapper">
    <h1 class="my-5">LOGIJOB月額プラン</h1>
    <div class="alert alert-success" role="alert">
      初期費用無料
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3 shadow-sm text-secondary">
          <h3 class="mt-4">LOGIJOB Liteプラン</h3>
          <h2 class="mt-2">月額<span>3</span>万円</h2>
          <hr>
          <div class="text-left px-3 mt-4">
            <p><i class="fas fa-check"></i>月に5人までのコンタクト、応募管理はこちら</p>
            <p><i class="fas fa-check"></i>全てのLOGIJOBの機能をご利用頂けます</p>
            <p><i class="fas fa-check"></i>まずはこちらでお試し下さい</p>
            <div class="my-4 pt-3">
              <a href="<?php echo get_home_url(); ?>/features" class="btn btn-lg btn-white-secondary mb-4">機能一覧</a>
              <a href="mailto:sales@innovatech.studio?subject=LOGIJOB Liteプラン" class="btn btn-lg btn-secondary mb-4">お問い合わせ / お申し込み</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-3 shadow-sm text-primary">
          <h3 class="mt-4">LOGIJOB Standardプラン</h3>
          <h2 class="mt-2">月額<span>6</span>万円</h2>
          <hr>
          <div class="text-left px-3 mt-4">
            <p><i class="fas fa-check"></i>求人掲載数は無制限</p>
            <p><i class="fas fa-check"></i>LOGIJOBの全ての機能をお使い頂けます</p>
            <p><i class="fas fa-check"></i>各種オプションのご利用も可能です</p>
            <div class="my-4 pt-3">
              <a href="<?php echo get_home_url(); ?>/features" class="btn btn-lg btn-white-primary mb-4">機能一覧</a>
              <a href="mailto:sales@innovatech.studio?subject=LOGIJOB Standardプラン" class="btn btn-lg btn-primary mb-4">お問い合わせ / お申し込み</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 bg-secondary">
    <div class="container">
      <h1 class="my-5">オプション</h1>
      <div class="row">
        <table class="table text-left">
          <tr>
            <th>求人サイト制作</th>
            <td>LOGIJOBのシステムを利用した求人掲載ページを作成致します</td>
          </tr>
          <tr>
            <th>広告運用</th>
            <td>各種求人広告媒体への出稿を代行致します</td>
          </tr>
          <tr>
            <th>各種入力代行</th>
            <td>LOGIJOBへの入力代行、運用代行を行います</td>
          </tr>
          <tr>
            <th>電話受付オペレーター対応</th>
            <td>電話応募の受付、LOGIJOBへの登録まで代行致します</td>
          </tr>
          <tr>
            <th>コーポレートサイト制作</th>
            <td>御社のブランディングに合わせたコーポレートサイトの制作も可能です</td>
          </tr>
        </table>
      </div>
    </div>
  </section>
</main>
<?php get_template_part( 'partials/contact-info' ); ?>
<?php get_footer('contact'); ?>