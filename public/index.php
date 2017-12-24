<?php
$pageTtl = "HOME";
include ("function.php");
$metaTtl = $siteName;
$metaDesc = $siteDescription;
$body_class ="home";
include($inc_path."/lib/inc/head.php");
include($inc_path."/lib/inc/header.php");
include($inc_path."/lib/inc/shoulder-nav.php");
include($inc_path."/lib/inc/_page/_home/main-head.php");
?>

<div class="home-conts">

  <section class="home-conts__item" id="realizing">
    <div class="home-conts__inner">
      <?php
      $movie_list = 'realizing';
      include($inc_path."/lib/inc/_page/_home/bg.php");
      ?>
      <header class="home-conts__head">
        <h2 class="home-conts__ttl">REALIZING<br>PEOPLE'S DREAMS</h2>
        <p class="home-conts__sub">先端技術を付加価値に変え、イノベイティブな事業開発を支援する</p>
      </header>
      <div class="home-conts__next next">
        <a href="#mixed" class="next__link" data-scroll>
          <div class="next__arrow">NEXT</div>
          <h4 class="next__ttl">MIXED<br>REALITY</h4>
          <p class="next__sub">VR（仮想現実）AR（拡張現実）<br>MR（複合現実）のスペシャリスト</p>
        </a>
        <div class="next__bg">
            <svg viewBox="0 0 10 10" class="next__svg">
              <polygon points="10 0 10 10 0 10 10 0">
            </svg>
        </div>
      </div>
    </div>
  </section>

  <section class="home-conts__item" id="mixed">
    <div class="home-conts__inner">
      <?php
      $movie_list = 'mixed';
      include($inc_path."/lib/inc/_page/_home/bg.php");
      ?>
      <header class="home-conts__head">
        <h2 class="home-conts__ttl">MIXED REALITYS</h2>
        <p class="home-conts__sub">VR（仮想現実）AR（拡張現実）MR（複合現実）のスペシャリスト</p>
      </header>
      <p class="home-conts__ex">3D/ホログラム技術によりこれまでには実現できなかったイノベーションを</p>
      <div class="home-conts__next next">
        <a href="#mobility" class="next__link" data-scroll>
          <div class="next__arrow">NEXT</div>
          <h4 class="next__ttl">SMART MOBILITY<br>MANAGEMENT</h4>
          <p class="next__sub">社会を前進させる技術</p>
        </a>
        <div class="next__bg">
            <svg viewBox="0 0 10 10" class="next__svg">
              <polygon points="10 0 65 10 0 10 10 0">
            </svg>
        </div>
      </div>
    </div>
  </section>

  <section class="home-conts__item" id="mobility">
    <div class="home-conts__inner">
      <div class="home-conts__bg">
        <?php
        $movie_list = 'mobility';
        include($inc_path."/lib/inc/_page/_home/bg.php");
        ?>
        <div class="home-conts__dot"></div>
      </div>
      <header class="home-conts__head">
        <h2 class="home-conts__ttl">SMART MOBILITY<br>MANAGEMENT</h2>
        <p class="home-conts__sub">社会を前進させる技術</p>
      </header>
      <p class="home-conts__ex">シェアリングエコノミーから物流課題までICTでモビリティの未来を創る</p>
      <div class="home-conts__next next">
        <a href="#sensing" class="next__link" data-scroll>
          <div class="next__arrow">NEXT</div>
          <h4 class="next__ttl">SENSING/AI</h4>
          <p class="next__sub">データの意味を見出し新たな価値を創る</p>
        </a>
        <div class="next__bg">
            <svg viewBox="0 0 10 10" class="next__svg">
              <polygon points="10 0 65 10 0 10 10 0">
            </svg>
        </div>
      </div>
    </div>
  </section>

  <section class="home-conts__item" id="sensing">
    <div class="home-conts__inner">
      <?php
      $movie_list = 'sensing';
      include($inc_path."/lib/inc/_page/_home/bg.php");
      ?>
      <header class="home-conts__head">
        <h2 class="home-conts__ttl">SENSING/AI</h2>
        <p class="home-conts__sub">データの意味を見出し新たな価値を創る</p>
      </header>
      <p class="home-conts__ex">すぐに実現可能なAIによる行動分析/予測</p>
    </div>
  </section>
  <div class="scroll-icon"></div>
  <?php include($inc_path."/lib/inc/diagonal-bg.php"); ?>
</div>

<div class="main">
  <div class="main__row">
    <div class="main__conts conts">

      <section class="conts__item">

        <div class="bottom-links">

          <ul class="bottom-links__row">
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
            <li class="bottom-links__item">
              <a href="#" target="_blank" rel="nofollow" class="bottom-links__link">
                <img src="<?php echo $img_url; ?>/dummy/bronze.png" alt="会社ロゴ" class="u-img__max">
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
</div>

<?php
include($inc_path."/lib/inc/main-foot.php");
include($inc_path."/lib/inc/pagetop.php");
include($inc_path."/lib/inc/footer.php");
include($inc_path."/lib/inc/foot.php");
?>