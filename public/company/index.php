<?php
$pageTtl = "CORPORATE DATA";
include ("../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="l-page-single";
include($inc_path."/lib/inc/head.php");
include($inc_path."/lib/inc/header.php");
include($inc_path."/lib/inc/shoulder-nav.php");
include($inc_path."/lib/inc/main-head.php");
?>

<header class="main__header main-header">
  <div class="main-header__row">
    <h1 class="main-header__ttl"><?php echo $pageTtl; ?></h1>
    <p class="main-header__desc">会社概要</p>
  </div>
</header>

<div class="main__conts conts">
  <section class="conts__item">
  
  <dl>
      <dt>社名</dt>
      <dd>リアライズ・モバイル・コミュニケーションズ株式会社<br>
Realize Mobile Communications Corp.</dd>
  </dl>
  <dl>
      <dt>事業内容</dt>
      <dd>モバイルソリューションの企画、設計、運用<br>
モバイルコンテンツの企画、制作、配信<br>
モバイルビジネスに関するアウトソーシング<br>
モバイルコマース事業<br>
モバイルビジネスに関するコンサルティング</dd>
  </dl>
  <dl>
      <dt>所在地</dt>
      <dd>〒106-0032 東京都港区六本木2-4-5 6F<br>
事業所案内</dd>
  </dl>
  <dl>
      <dt>代表取締役社長</dt>
      <dd>酒谷 正人</dd>
  </dl>
  <dl>
      <dt>資本金</dt>
      <dd>3億円</dd>
  </dl>
  <dl>
      <dt>設立年月日</dt>
      <dd>2000年5月1日</dd>
  </dl>
  <dl>
      <dt>株主</dt>
      <dd>SBメディアホールディングス株式会社 100%</dd>
  </dl>

  </section>
</div>

<?php
/*$panAry[] = array("/company" ,"会社概要");
$panAry[] = array("/dummyURL1" ,"dammy2");*/
include($inc_path."/lib/inc/pan.php");
include($inc_path."/lib/inc/main-foot.php");
include($inc_path."/lib/inc/pagetop.php");
include($inc_path."/lib/inc/footer.php");
include($inc_path."/lib/inc/foot.php");
?>
