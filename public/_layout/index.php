<?php
$pageTtl = "レイアウト集";
include ("../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="l-page-single";
include($inc_path."/lib/inc/head.php");
include($inc_path."/lib/inc/header.php");
include($inc_path."/lib/inc/shoulder-nav.php");
include($inc_path."/lib/inc/main-head.php");
#include($inc_path."/lib/inc/pan.php");
?>
<div class="main__conts conts">
  <section class="conts__item">
    <h2 class="u-ttl_l">ページレイアウト</h2>
  </section>
  <section class="conts__item">
    <?php include("./sample-article.php"); ?>
  </section>
</div>

<?php
include($inc_path."/lib/inc/main-foot.php");
include($inc_path."/lib/inc/pagetop.php");
include($inc_path."/lib/inc/footer.php");
include($inc_path."/lib/inc/foot.php");
?>
