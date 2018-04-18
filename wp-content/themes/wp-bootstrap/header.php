<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col">
                <nav class="navbar navbar-light navbar-expand-md">
                    <div class="container-fluid"><a class="navbar-brand" href="#"><?php bloginfo('name') ?></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse"
                            id="navcol-1">
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#">First Item</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Third Item</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>