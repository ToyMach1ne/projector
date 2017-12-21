<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!-- css + javascript -->

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <nav class="nav__header col-md-12" role="navigation">
    <a href="#" class="mobile_burger"><img src="<?php echo get_template_directory_uri(); ?>/img/menu_bars.png" alt=""></a>
      <div class="container">
        <div class="row">
          <nav class="navigation">
            <?php wpeHeadNav(); ?>
          </nav>
        </div>
      </div>
    </nav><!-- /nav -->
    <div class="sign__up--block">
      <img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="">
    </div>
  </header><!-- /header -->
