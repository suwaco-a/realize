<?php
$pageTtl = "SHOW CASE";
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
    <p class="main-header__desc">お客様事例</p>
  </div>
</header>

<div class="main__conts conts">
  <section class="conts__item index">
    <?php /*include ($inc_path."/service/sample-article.php");*/ ?>
<div>
<ul class="page_navi">
	<li><a href="#sensing_ai">SENSING/AI</a></li>
	<li><a href="#vr">VR</a></li>
	<li><a href="#mobility">Mobility</a></li>
	<li><a href="#solution">Solution</a></li>
</ul>
</div>

 <h2 id="sensing_ai" class="u-ttl_l">SENSING/AI<br><span>センシング／AI</span></h2>
  <div class="col-area">
	  <div class="img_col">
		<img src="https://placehold.jp/340x220.png" alt="">
		 <p>ダイハツ工業株式会社様 </p>
		 <p><strong>らくぴた送迎</strong></p>
		 <ul class="tags">
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 </ul>
	  </div>
	  <div class="img_col">
		<img src="https://placehold.jp/340x220.png" alt="">
		 <p>ダイハツ工業株式会社様 </p>
		 <p><strong>らくぴた送迎</strong></p>
		 <ul class="tags">
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 </ul>
	  </div>
	  <div class="img_col">
		<img src="https://placehold.jp/340x220.png" alt="">
		 <p>ダイハツ工業株式会社様 </p>
		 <p><strong>らくぴた送迎</strong></p>
		 <ul class="tags">
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 </ul>
	  </div>
	  <div class="img_col">
		<img src="https://placehold.jp/340x220.png" alt="">
		 <p>ダイハツ工業株式会社様 </p>
		 <p><strong>らくぴた送迎</strong></p>
		 <ul class="tags">
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 </ul>
	  </div>
	  <div class="img_col">
		<img src="https://placehold.jp/340x220.png" alt="">
		 <p>ダイハツ工業株式会社様 </p>
		 <p><strong>らくぴた送迎</strong></p>
		 <ul class="tags">
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 </ul>
	  </div>
  </div>
  
  <h2 id="vr" class="u-ttl_l">VR<br><span>仮想現実</span></h2>
  <div class="col-area">
	  <div class="img_col">
		<img src="https://placehold.jp/340x220.png" alt="">
		 <p>ダイハツ工業株式会社様 </p>
		 <p><strong>らくぴた送迎</strong></p>
		 <ul class="tags">
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 </ul>
	  </div>
	  <div class="img_col">
		<img src="https://placehold.jp/340x220.png" alt="">
		 <p>ダイハツ工業株式会社様 </p>
		 <p><strong>らくぴた送迎</strong></p>
		 <ul class="tags">
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 </ul>
	  </div>
	  <div class="img_col">
		<img src="https://placehold.jp/340x220.png" alt="">
		 <p>ダイハツ工業株式会社様 </p>
		 <p><strong>らくぴた送迎</strong></p>
		 <ul class="tags">
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 	<li><a href="">タグワード</a></li>
		 </ul>
	  </div>
  </div>

  </section>
</div>

<?php
$panAry[] = array("/service" ,"事業内容");
$panAry[] = array("/dummyURL1" ,"dammy2");
include($inc_path."/lib/inc/pan.php");
include($inc_path."/lib/inc/main-foot.php");
include($inc_path."/lib/inc/pagetop.php");
include($inc_path."/lib/inc/footer.php");
include($inc_path."/lib/inc/foot.php");
?>
