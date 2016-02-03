<header id="site-header">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#flyout" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="fa fa-bars"></span>
          <!--<span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>-->
        </button>
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div><!-- /.navbar-header -->

    <div class="flyout-wrap">
      <div id="flyout" class="collapse flyout">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav primary-navigation']);
        endif;
        ?>
        <?php
        if (has_nav_menu('secondary_navigation')) :
          wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav navbar-nav secondary-navigation',
          'after' => '<span class="toggle fa fa-chevron-down"></span>']);
        endif;
        ?>
        <?php
        if (has_nav_menu('tertiary_navigation')) :
          wp_nav_menu(['theme_location' => 'tertiary_navigation', 'menu_class' => 'nav navbar-nav tertiary-navigation']);
        endif;
        ?>
      </div>
    </div>
  </nav>
</header>

<!--
<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
-->
