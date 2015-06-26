<!doctype html>
<html lang="it">
<head>
<meta charset="utf-8">
<title>
<?php bloginfo('name'); ?>
</title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
<div id="row1">
  <header class="wrapper">
    <h1><a href="<?php bloginfo('url'); ?>" title="Torna alla home page di <?php bloginfo('name'); ?>">
      <?php bloginfo('name'); ?>
      </a></h1>
    <nav>
      <?php if ( has_nav_menu( 'menu-primario' ) ) { ?>
        <?php wp_nav_menu( array( 'theme_location' => 'menu-primario' ) ); ?>
      <?php } ?>
    </nav>
  </header>
</div>
<!-- /#row1 -->