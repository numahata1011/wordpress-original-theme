<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta content="width=decive-width, initial-scale=1.0" name="viewport"/>
   <title><?php bloginfo('name'); ?></title>
   <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
   <?php wp_head(); ?>
</head>
   <body>
   <header>
      <h1 id="head-title"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
         <?php wp_nav_menu(); ?> 
   </header>