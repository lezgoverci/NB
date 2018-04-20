<?php

get_header();
if(have_posts()):
    while(have_posts()): the_post();
?>

<div class="container-fluid">
    <!-- Nav -->
    <div class="row" id="fixed-nav" >
        <div class="col-auto mx-auto">
            <?php 
                $args = array(
                    'theme_location' => 'sticky',
                    'menu_class' => 'nav'
                );
                wp_nav_menu($args);?>
            <!-- <ul class="nav" >
                <li class="nav-item"><a class="nav-link active" href="#">First Item</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Third Item</a></li>
            </ul> -->
        </div>
    </div>
    <!-- End Nav -->
    <!-- header -->
    <div class="row" id="post-image" style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(<?php the_post_thumbnail_url();?>); height:500px; background-position:center; background-size:cover;">
        <div class="col align-self-center text-center" id="post-header">
            <h1><?php the_title();?></h1>
        </div>
    </div>
    <!-- End Header -->
    <!-- Content -->
    <div class="row" id="single-the-content-container">
        <div class="col">
            <p><?php the_content();?></p>
        </div>
    </div>
</div>

<?php
endwhile;
endif;
get_footer();
?>