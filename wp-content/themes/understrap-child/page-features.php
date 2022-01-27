<?php
/**
 * Template Name: Features
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
<main class="bg-white features text-center">
  <section class="container py-5" id="full-width-page-wrapper">
    <div class="container text-black" id="content">
      <header class="my-5 pb-3">
        <h1>LOGIJOB機能一覧</h1>
      </header>
      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card shadow-sm mb-3">
            <header class="mt-4">
              <h2>求人案件掲載</h2>
            </header>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>-child/images/group_145.svg" alt="">
              <p>求人案件の掲載は管理パネルからいつでも簡単に行えます。随時情報の編集も可能です。</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm mb-3">
            <header class="mt-4">
              <h2>説明会開催</h2>
            </header>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>-child/images/group_133.svg" alt="">
              <p>求人に当たって説明会を開催する場合、Webからの応募を管理する事が出来ます。</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm mb-3">
            <header class="mt-4">
              <h2>履歴書出力</h2>
            </header>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>-child/images/group_268.svg" alt="">
              <p>応募者の登録情報から、履歴書を出力することが出来ます。履歴書持参の手間を省き、管理も簡略化できます</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm mb-3">
            <header class="mt-4">
              <h2>電話応募対応</h2>
            </header>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>-child/images/group_237.svg" alt="">
              <p>Webからの応募だけでなく、電話応募者の情報登録も可能です。採用のチャンスを逃しません。</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm mb-3">
            <header class="mt-4">
              <h2>進捗管理</h2>
            </header>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>-child/images/illustration_07.svg" alt="">
              <p>各応募者の審査ステータスを確認できます。対応漏れや連絡漏れを防ぎます</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm mb-3">
            <header class="mt-4">
              <h2>面接管理</h2>
            </header>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>-child/images/group_242.svg" alt="">
              <p>面接可能時間を事前に入力しておくことで、応募者との日程調整をオンラインで行い、両者に面接日を通知します。</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm mb-3">
            <header class="mt-4">
              <h2>内定通知</h2>
            </header>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>-child/images/illustration_08.svg" alt="">
              <p>内定決定後はスムーズに通知を行う事が可能です。</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm mb-3">
            <header class="mt-4">
              <h2>応募者追加</h2>
            </header>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>-child/images/illustration_09.svg" alt="">
              <p>他求人媒体からの応募者をCSV形式で追加する事が出来るので、応募者の一元管理が可能になります。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid bg-primary text-center text-white" id="next-features">
    <div class="container wrapper py-5">
      <header class="row mt-5">
        <div class="col-12">
          <h1>次回アップデートで追加予定の機能</h1>
          <div class="blue-gradient-bg my-5">2019 Spring</div>
        </div>
      </header>
      <div class="row">
        <div class="col-12">
          <div class="my-3 pb-2">
            <h2>面接評価</h2>
            <p>面接日程をLOGIJOBで決定後、実際の面接を行ったあとには、各応募者の評価や聞き取り内容をログできる機能を追加します。一定以上の評価のあった応募者を採用可能として表示し、次のステータスへ進めます。この時点で条件等が合わず不採用になった方などのログなども残し、後日再度求人案件が掲載された場合に通知を流せるように記録を残す事が可能となる予定です。</p>
          </div>
          <div class="my-3">
            <h2>勤務条件等追加依頼</h2>
            <p>各種広告媒体からの応募の場合、書類選考に必要な情報が不足している場合があります。採用に必要な情報の入力を応募者に依頼することで、これまで面接をしなければ確認出来なかった事項を事前に知ることが出来るようになります。これにより、採用工数の大幅削減が可能となります。</p>
          </div>
          <form action="<?php echo get_home_url(); ?>/features">
            <div class="row input-box mx-auto mt-5">
              <div class="col m-0 text-md-left py-auto">
                <input type="text" class="form-control" id="logijob-feature-request"  placeholder="『こんな機能があったら使いたい』をお聞かせ下さい。" readonly>
              </div>
              <div class="col-12 col-md-auto text-md-right p-0">
                <a href="<?php echo get_home_url(); ?>/future-updates" class="btn btn-lg btn-light ml-auto mt-md-0 mt-4 shadow">機能追加リクエスト</a>
              </div>
            </div>
          </form>
          <div class="my-3 pb-2">
            <a href="<?php echo get_home_url(); ?>/user-voice" class="btn btn-lg btn-light mt-5 shadow">過去の追加機能</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_template_part( 'partials/contact-info' ); ?>
<?php get_footer('contact'); ?>