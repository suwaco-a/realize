<header class="header">
  <div class="header__row">
    <div class="header__bg"></div>
    <h1 class="header__logo header-logo">
      <div class="header-logo__bg"></div>
      <a href="<?php echo $base_url; ?>/" class="header-logo__item"><?php echo $metaTtl; ?></a>
    </h1>
    <?php include($inc_path."/lib/inc/gnav.php"); ?>
    <nav class="header__lang lang-nav">
      <ul class="lang-nav__row">
        <li class="lang-nav__item">
          <a href="" class="lang-nav__link jp">JP</a>
        </li>
        <li class="lang-nav__item">
          <a href="" class="lang-nav__link en">EN</a>
        </li>
      </ul>
    </nav>
    <label class="header__menubar menubar">
      <div class="menubar__row">
        <span class="menubar__item"></span>
        <span class="menubar__item"></span>
        <span class="menubar__item"></span>
      </div>
    </label>
  </div>
</header>
