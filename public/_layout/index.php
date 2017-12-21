<?php
$pageTtl = "レイアウト集";
include ("../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="l-page-single";
include($inc_path."/lib/inc/head.php");
include($inc_path."/lib/inc/header.php");
include($inc_path."/lib/inc/main-head.php");
include($inc_path."/lib/inc/pan.php");
?>

<div class="main__conts conts">
  <section class="conts__item">
    <h2 class="u-ttl_l">ページレイアウト</h2>
  </section>
  <section class="conts__item">
    <h2 class="u-ttl_l">レイアウト用パーツ</h2>
    <h4 class="u-ttl_s">
      <a href="<?php echo $base_url; ?>/_styleguide/category/common/layout/l-full/" target="_blank" class="u-icon__link">.l-full</a>
    </h4>
    <p>親要素から子要素をはみ出して表示</p>
    <h4 class="u-ttl_s">
      <a href="<?php echo $base_url; ?>/_styleguide/category/common/layout/l-column/" target="_blank" class="u-icon__link">.l-culumn</a>
    </h4>
    <p>要素の隙間ありのカラムレイアウト</p>
  </section>
</div>

<?php
include($inc_path."/lib/inc/main-foot.php");
include($inc_path."/lib/inc/pagetop.php");
include($inc_path."/lib/inc/footer.php");
include($inc_path."/lib/inc/foot.php");
?>
