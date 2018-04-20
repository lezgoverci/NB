<?php get_header(); ?>
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
                            <img class="d-block" src="<?php bloginfo('url')?>/wp-content/uploads/2018/6.jpg" alt="Slide Image">
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
    <!-- Main -->
    <div class="container-fluid">
        <div class="row" id="main-posts">
        <?php 
            $count = 0;
            if(have_posts()) :
                while(have_posts()) : the_post();
                    $count++;
                    get_template_part('card-post-template');
                    if($count == 4):
                        get_template_part('featured-post');
                    else:
                    endif;
                endwhile;
            else :
                echo '<p>No posts</p>';
            endif; ?>
        </div>
    </div>

<?php get_footer(); ?>