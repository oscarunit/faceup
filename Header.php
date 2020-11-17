  <!DOCTYPE html>
  <html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="Agence Bzzz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <title><?php bloginfo('name');?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
  
  <?php wp_head(); ?>
      <title><?php wp_title();?></title>
  </head>
  <body>
    <header>
      <img class="logo" src="" alt="logo FaceUp">
      <nav>
          <a href="">Notre méthode FaceUp</a>
          <a href="">Votre soin</a>
          <a href="">Formation</a>
          <a href="">Prendre rendez-vous</a>
          <a href="">E-shop</a>
        </nav>
      </header>
