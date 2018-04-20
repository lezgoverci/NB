<div class="container-fluid">
<div class="row">
    <div class="col px-0">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <?php 
                
                $the_query = new WP_Query( array('tag' => 'feature') );
                
                if( $the_query->have_posts()) :
                    while( $the_query->have_posts()):  $the_query->the_post();?>
                <div class="carousel-item ">
                    <?php the_post_thumbnail();?>
                    <div class="carousel-caption text-center">
                            <h1><?php the_title();?></h1>
                            <p><a class="btn btn-lg btn-primary" href="<?php the_permalink();?>" role="button">READ MORE</a></p>
                    </div>
                </div>
                <?php 
                endwhile;
                endif;?>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                    data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</div>
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
</div>