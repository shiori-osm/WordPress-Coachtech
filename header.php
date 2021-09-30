<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- header-->
  <header class="header">
    <h1 class="header-title">
      <a class="header-title-link" href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
        <br />
        <span class="magazine-subtitle">
          <?php bloginfo('description'); ?>
        </span>
      </a>
    </h1>
    <nav class="header-nav">
      <ul class="header-nav-list">
        <li class="header-nav-list-item"><a href="<?php echo get_category_link(158); ?>">HTML</a></li>
        <li class="header-nav-list-item"><a href="">CSS</a></li>
        <li class="header-nav-list-item"><a href="">JavaScript</a></li>
        <li class="header-nav-list-item"><a href="">PHP</a></li>
        <li class="header-nav-list-item"><a href="">MySQL</a></li>
      </ul>
    </nav>
  </header>