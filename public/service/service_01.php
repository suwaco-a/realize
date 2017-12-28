<?php
$pageTtl = "事例紹介";
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
        <?php echo $pageTtl; ?><span class="service_ttl">らくぴた送迎</span></h1>
    <p class="main-header__desc">ダミーテキスト昨日WEB系のアプリケーション開発ベンダーでは困難な車載機器連携や専用機器連携、センサーネットワーク、デジタルサイネージに至るまで、さまざまなM2M・IOTの</p>
  </div>
</header>

<div class="main__conts conts services">
  <section class="conts__item service_01">
    <div class="layout-box_l">
         <h2 class="u-ttl_l">BACKGROUND<br><span>背景</span></h2>
         <h3>見出し</h3>
        <p>営業戦略について再検討を行うフェーズで参画し、その中で顧客課題を解決するサービス提供、という軸を据えつつ取り組むことを提案。
最初の対象市場を介護事業者向けと設定し、様々なヒアリングの中で送迎計画の立案に問題を抱えていることが課題として抽出されたため、計画を自動作成できるシステムを開発することになった。
</p><p class="img-box"><img src="https://placehold.jp/360x250.png" alt=""></p>
        
        <h2 class="u-ttl_l">Technical features<br><span>背景</span></h2>
         <h3>見出し</h3>
        <p>営業戦略について再検討を行うフェーズで参画し、その中で顧客課題を解決するサービス提供、という軸を据えつつ取り組むことを提案。
            最初の対象市場を介護事業者向けと設定し、様々なヒアリングの中で送迎計画の立案に問題を抱えていることが課題として抽出されたため、計画を自動作成できるシステムを開発することになった。</p>
        
    </div>
<!--    layaut-box_l end-->
    <div class="layaut-box_r">
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
</div>

<?php
$panAry[] = array("/service" ,"事業内容");
$panAry[] = array("/dummyURL1" ,"dammy2");
include($inc_path."/lib/inc/pan.php");
include($inc_path."/lib/inc/main-foot.php");/*</main>*/
include($inc_path."/lib/inc/pagetop.php");
include($inc_path."/lib/inc/footer.php");
include($inc_path."/lib/inc/foot.php");
?>
