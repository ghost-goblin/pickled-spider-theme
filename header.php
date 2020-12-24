<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <!-- Navbar -->
    <div class="container">
      <a class="blog-header-logo text-dark" href="<?php echo site_url(); ?>"><strong>Pickled Spider</strong></a>
      <?php wp_nav_menu(array(
        'theme_location' => 'top-menu',
        'menu_class' => 'top-bar',
        ));?>
    </div>

  </header>