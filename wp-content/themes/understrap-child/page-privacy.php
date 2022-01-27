<?php
/**
 * Template Name: Privacy (プライバシーポリシー)
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
    <section class="container py-5 text-left" id="full-width-page-wrapper">
        <h1 class="my-5 text-center">プライバシーポリシー</h1>
        <p>個人情報保護方針<br>
            基本方針<br>
        イノバテックスタジオ株式会社（以下「当社」）は、当社が扱う個人情報の重要性を認識し、そ の適正な保護のために、自主的なルール及び体制を確立し、個人情報保護に関する法令そ の他関係法令及び厚生労働省のガイドラインを遵守し、個人情報の保護を図ることを宣言い たします。</p>

        <p>個人情報の適切な収集、利用、提供の実施<br>
            個人情報の取得に際して、その利用目的を事前に通知または公表し、利用目的に従って 、適切に個人情報の収集、利用、提供を行います。<br>
            個人情報の収集、利用、提供にあたっては、本人の同意を得るようにします。<br>
            個人情報の紛失、漏えい、改ざん及び不正なアクセス等のリスクに対して、必要な安全 対策、予防措置を講じて適切な管理を行います。<br>
            安全性確保の実践<br>
            当社は、個人情報保護の取り組みを全社員に周知徹底させるために、個人情報保護に 関する規程類を整備し、必要な教育を行います。<br>
            個人情報保護の取り組みが適切に実施されるよう、必要に応じ評価・見直しを行い、継 続的な改善に努めます。<br>
        個人情報に関するお問い合わせ窓口 当社が所有する個人情報についてのご質問やお問い合わせ、あるいは、開示、訂正、削除、 利用停止等については、以下の窓口でお受けいたします。</p>

        <p>イノバテックスタジオ株式会社<br>
        代表取締役　瀬沼健吾</p>

        <p>電話：03-6862-8845　E-mail：info@innovatech.studio.co.jp</p>

        <p>※受付時間　10:00～17:00　平日のみ</p>

        <p>苦情の処理</p>

        <p>当社は、個人情報取扱に関する苦情に対し、適切かつ迅速な対応に努めます。</p>
    </section>
</main>
<?php get_footer(); ?>