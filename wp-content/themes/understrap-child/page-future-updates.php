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
<main class="user-voice bg-white pricing text-center">
  <section class="text-center pt-5 pb-3" id="full-width-page-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="my-5">LOGIJOB追加予定機能</h1>
          <div class="blue-gradient-bg">2019 Spring</div>
          <p>気になる機能がありましたら、ぜひ「欲しい」ボタンを押して下さい！</p>
        </div>
      </div>
    </div>
  </section>
  <section class="user-voice-options wrapper text-left mb-5 pb-5">
    <div class="container">
      <div class="row article-summary">
        <div class="d-none d-md-block col-md-2 my-auto">
          <div class="category-name"><p>LGJB001</p></div>
        </div>
        <header class="entry-header col-6 col-md-6 my-auto">
          <p class="entry-title">複数人の面接官登録</p>
        </header>
        <div class="col-6 col-md-4 my-auto text-right">
          <div class="wanted d-none d-md-inline-block shadow-sm">
            <p><i class="fas fa-truck"></i> 欲しい</p>
          </div>
          <div class="count d-inline-block text-primary ml-3">2.6k</div>
        </div>
      </div>
      <div class="row article-summary">
        <div class="d-none d-md-block col-md-2 my-auto">
          <div class="category-name"><p>LGJB002</p></div>
        </div>
        <header class="entry-header col-6 col-md-6 my-auto">
          <p class="entry-title">採用フローの作成</p>
        </header>
        <div class="col-6 col-md-4 my-auto text-right">
          <div class="wanted d-none d-md-inline-block shadow-sm">
            <p><i class="fas fa-truck"></i> 欲しい</p>
          </div>
          <div class="count d-inline-block text-primary ml-3">1.2k</div>
        </div>
      </div>
      <div class="row article-summary">
        <div class="d-none d-md-block col-md-2 my-auto">
          <div class="category-name"><p>LGJB003</p></div>
        </div>
        <header class="entry-header col-6 col-md-6 my-auto">
          <p class="entry-title">メッセージ機能</p>
        </header>
        <div class="col-6 col-md-4 my-auto text-right">
          <div class="wanted d-none d-md-inline-block shadow-sm">
            <p><i class="fas fa-truck"></i> 欲しい</p>
          </div>
          <div class="count d-inline-block text-primary ml-3">985</div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-primary text-center text-white py-5 wrapper">
    <div class="container pt-3">
      <div class="row">
        <div class="col-12">
          <header class="py-5">
            <h1>次回アップデートで追加予定の機能</h1>
          </header>
          <div class="blue-gradient-bg mb-5">2019 Spring</div>
        </div>
        <div class="col-12 py-3">
          <h3 class="mb-3">面接評価</h3>
          <p>面接日程をLOGIJOBで決定後、実際の面接を行ったあとには、各応募者の評価や聞き取り内容をログできる機能
            を追加します。一定以上の評価のあった応募者を採用可能として表示し、次のステータスへ進めます。
            この時点で条件等が合わず不採用になった方などのログなども残し、後日再度求人案件が掲載された場合に通知を
          流せるように記録を残す事が可能となる予定です。</p>
        </div>
        <div class="col-12 py-3">
          <h3 class="mb-3">勤務条件等追加依頼</h3>
          <p>求人案件の掲載は管理パネルからいつでも簡単に行えます。
          随時情報の編集も可能です。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper pt-5">
    <div class="container pt-5">
      <div class="row">
        <div class="col-12">
          <h1>これまでのアップデート</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="blue-gradient-bg my-5">2019 4月</div>
        </div>
      </div>
      <div class="row light-blue-box">
        <div class="d-none d-md-block col-md-2 my-auto text-left">
          <b>2019/04</b>
        </div>
        <div class="col-10 col-md-8 my-auto text-left">
          <p>面接評価</p>
        </div>
        <div class="col-2 my-auto text-right">
          <i class="fas fa-check"></i>
        </div>
      </div>
      <div class="row light-blue-box">
        <div class="d-none d-md-block col-md-2 my-auto text-left">
          <b>2019/04</b>
        </div>
        <div class="col-10 col-md-8 my-auto text-left">
          <p>勤務条件等追加</p>
        </div>
        <div class="col-2 my-auto text-right">
          <i class="fas fa-check"></i>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="blue-gradient-bg my-5">2019 4月以前</div>
        </div>
      </div>
      <div class="row light-blue-box">
        <div class="d-none d-md-block col-md-2 my-auto text-left">
          <b>2019</b>
        </div>
        <div class="col-10 col-md-8 my-auto text-left">
          <p>履歴書のPDF出力</p>
        </div>
        <div class="col-2 my-auto text-right">
          <i class="fas fa-check"></i>
        </div>
      </div>
      <div class="row light-blue-box">
        <div class="d-none d-md-block col-md-2 my-auto text-left">
          <b>2019</b>
        </div>
        <div class="col-10 col-md-8 my-auto text-left">
          <p>広告媒体からの応募者のCSV登録</p>
        </div>
        <div class="col-2 my-auto text-right">
          <i class="fas fa-check"></i>
        </div>
      </div>
      <div class="row light-blue-box">
        <div class="d-none d-md-block col-md-2 my-auto text-left">
          <b>2019</b>
        </div>
        <div class="col-10 col-md-8 my-auto text-left">
          <p>面接予約</p>
        </div>
        <div class="col-2 my-auto text-right">
          <i class="fas fa-check"></i>
        </div>
      </div>
      <div class="row light-blue-box">
        <div class="d-none d-md-block col-md-2 my-auto text-left">
          <b>2019</b>
        </div>
        <div class="col-10 col-md-8 my-auto text-left">
          <p>応募者プロフィールに写真を追加</p>
        </div>
        <div class="col-2 my-auto text-right">
          <i class="fas fa-check"></i>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_template_part( 'partials/contact-info' ); ?>
<?php get_footer('contact'); ?>