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
#include($inc_path."/lib/inc/pan.php");
?>

<header class="main__header main-header">
  <div class="main-header__row">
    <h1 class="main-header__ttl"><?php echo $pageTtl; ?></h1>
    <p class="main-header__desc">お客様事例</p>
  </div>
</header>

<div class="main__conts conts">
  <section class="conts__item">
    <?php  include ($inc_path."/_layout/sample-article.php"); ?>
  </section>
</div>

<?php
include($inc_path."/lib/inc/main-foot.php");
include($inc_path."/lib/inc/pagetop.php");
include($inc_path."/lib/inc/footer.php");
include($inc_path."/lib/inc/foot.php");
?>
