<?php
$pageTtl = "事例紹介 らくぴた送迎";
include ("../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="l-page-single";
include($inc_path."/lib/inc/head.php");
include($inc_path."/lib/inc/header.php");
include($inc_path."/lib/inc/shoulder-nav.php");
include($inc_path."/lib/inc/main-head.php");
?>

<header class="main__header main-header services">
  <div class="main-header__row">
    <h1 class="main-header__ttl">
        事例紹介<span class="service_ttl">らくぴた送迎</span></h1>
    <p class="main-header__desc">ダミーテキスト昨日WEB系のアプリケーション開発ベンダーでは困難な車載機器連携や専用機器連携、センサーネットワーク、デジタルサイネージに至るまで、さまざまなM2M・IOTの</p>
  </div>
</header>

<div class="main__conts conts services sensing sensing_01">
  <section class="conts__item">
    <div class="layout-box_l">
         <h2 class="u-ttl_l">BACKGROUND<br><span>背景／課題</span></h2>
        <p>ダイハツとしての中小法人向け営業戦略について再検討を行うフェーズで参画し、その中で顧客課題を解決するサービス提供、という軸を据えつつ取り組むことを提案。<br>
最初の対象市場を介護事業者向けと設定し、様々なヒアリングの中で送迎計画の立案に問題を抱えていることが課題として抽出されたため、計画を自動作成できるシステムを開発することになった。
</p>
        
        <h2 class="u-ttl_l">Implementation items<br><span>実施事項</span></h2>
        <p>利用者情報／車両情報を登録することで自動的に最適な送迎計画を立案する「らくぴた送迎」を開発。作成された計画がドライバーアプリ側で閲覧でき、進捗を簡単に登録可能とすることで、管理者側でリアルタイムに送迎の状況やキャンセル等変更の発生も確認ができるようにした。これにより介護事業者側での送迎計画作業時間が1/4に短縮されるとともに属人的であった業務をスタッフ間で共有できるようにするなど、業務の効率化に貢献した。</p>
        
        <h2 class="u-ttl_l">Technical features<br><span>技術的な特長</span></h2>
        <p>最適な送迎計画を立案するために、複数の利用者と複数の車両との間で「多対多」の最適ルーティング及び車割りを実現するアルゴリズムを開発し、各種の条件を満たしつつ走行距離／業務時間の最短化を実現した。その他、リアルタイムの業務管理を実現するためにセンター側とクライアントアプリ側とが連携する動態管理の仕組みも導入し、これまでになかった介護事業者向けのテレマティクスサービスを実現した。</p>
        
    </div>
<!--    layaut-box_l end-->
    <div class="layout-box_r">
        <div class="img-box">
            <img src="https://placehold.jp/360x250.png" alt="">
           <p class="img-caption">キャプションです。この文章はダミーです。キャプションです。この文章はダミーです。キャプションです。この文章はダミーです。キャプションです。この文章はダミーです。キャプションです。この文章はダミーです。</p>
       </div>
       
        <div class="img-box">
            <img src="https://placehold.jp/360x250.png" alt="">
           <p class="img-caption">キャプションです。この文章はダミーです。キャプションです。この文章はダミーです。キャプションです。この文章はダミーです。キャプションです。この文章はダミーです。キャプションです。この文章はダミーです。</p>
       </div>
       
        <div class="img-box">
            <img src="https://placehold.jp/360x250.png" alt="">
           <p class="img-caption">キャプションです。この文章はダミーです。キャプションです。この文章はダミーです。キャプションです。この文章はダミーです。キャプションです。この文章はダミーです。キャプションです。この文章はダミーです。</p>
       </div>
    </div>
<!--    layaut-box_r end-->

  </section>

    <div class="link_prev">
      <a href="index.php">事業内容一覧に戻る</a>
    </div>
</div>

<?php
$panAry[] = array("/service" ,"SERVICE 事業内容");
//$panAry[] = array("/dummyURL1" ,"dammy2");
include($inc_path."/lib/inc/pan.php");
include($inc_path."/lib/inc/main-foot.php");/*</main>*/
include($inc_path."/lib/inc/pagetop.php");
include($inc_path."/lib/inc/footer.php");
include($inc_path."/lib/inc/foot.php");
?>
