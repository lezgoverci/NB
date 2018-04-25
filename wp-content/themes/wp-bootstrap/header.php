<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
   
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400i,700i,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i" rel="stylesheet">


     <!-- styles -->
     <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row" id="header">
            <div class="col">
                <nav class="navbar navbar-light navbar-expand-md">
                    <div class="container-fluid"><button class="navbar-toggler" data-toggle="collapse" data-target="#header-nav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="col">   
                            <div class="collapse navbar-collapse"
                                    id="header-nav">
                                    <?php 
                                    $args = array(
                                        'theme_location' => 'primary',
                                        'menu_class' => 'nav navbar-nav'
                                    );
                                    wp_nav_menu($args);?>
                                <!-- <ul class="nav navbar-nav">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">First Item</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Third Item</a></li>
                                </ul> -->
                            </div> 
                            
                        </div>
                        <div class="col text-center logo"><a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php echo home_url().'/wp-content/uploads/2018/logo.png';?>"/></a></div>
                        <div class="col social-icons text-right">
                            <a href="https://www.facebook.com/NorthBuzz-Inc-219805832119092/"><i class="fa fa-facebook-f"></i></a>
                            <a href="https://twitter.com/northbuzzblog"><i class="fa fa-twitter"></i></a>
                            <i class="fa fa-search"></i>
                        </div>
                    <div>
                </nav>
            </div>
        </div>
    </div>