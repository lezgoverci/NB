<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block" src="<?php bloginfo('url')?>/wp-content/uploads/2018/6.jpg" alt="Slide Image">
                            <div class="carousel-caption text-center">
                                    <h1>Example headline.</h1>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="<?php bloginfo('url')?>/wp-content/uploads/2018/9.jpg" alt="Slide Image">
                            <div class="carousel-caption text-center">
                                    <h1>Example headline.</h1>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a></p>
                              </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="<?php bloginfo('url')?>/wp-content/uploads/2018/10.jpg" alt="Slide Image">
                            <div class="carousel-caption text-center">
                                    <h1>Example headline.</h1>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a></p>
                              </div>
                        </div>
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
                <ul class="nav" >
                    <li class="nav-item"><a class="nav-link active" href="#">First Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Third Item</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Main -->
    <div class="container">
        <div class="row">
        <?php 
            if(have_posts()) :
                while(have_posts()) : the_post(); ?>
                <div class="col-sm-12 col-md-6 offset-0">
                    <div class="card">
                        <a href="<?php the_permalink();?>">
                        <img class="card-img-top" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/sample.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="row author">
                                <div class="col-auto thumbnail px-0">
                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/profile-thumbnail.jpg" alt="" class="rounded-circle profile-thumbnail mx-3">
                                </div>
                                <div class="col info px-0 pb-2">
                                    <span class="d-block name"><?php the_author();?></span>
                                    <span class="d-block date"><?php echo get_the_date();?></span>
                                </div>
                            </div>
                            
                            <h4 class="card-title"><?php the_title();?></h4>
                        </div>
                        </a>
                    </div>
                </div>
        <?php
                endwhile;
            else :
                echo '<p>No posts</p>';
            endif; ?>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row" id="featured-post">  
            <div class="col px-0">
                <div class="jumbotron text-center">
                    
                    <h1 class="title">Heading text</h1>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p><a class="btn btn-primary" role="button" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-6 offset-0">
                <div class="card">
                    <img class="card-img-top" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/sample.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="row author">
                            <div class="col-auto thumbnail px-0">
                                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/profile-thumbnail.jpg" alt="" class="rounded-circle profile-thumbnail mx-3">
                            </div>
                            <div class="col info px-0 pb-2">
                                <span class="d-block name">John Doe</span>
                                <span class="d-block date">April 15, 2018</span>
                            </div>
                        </div>
                        
                        <h4 class="card-title">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 offset-0">
                <div class="card">
                    <img class="card-img-top" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/sample.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="row author">
                            <div class="col-auto thumbnail px-0">
                                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/profile-thumbnail.jpg" alt="" class="rounded-circle profile-thumbnail mx-3">
                            </div>
                            <div class="col info px-0 pb-2">
                                <span class="d-block name">John Doe</span>
                                <span class="d-block date">April 15, 2018</span>
                            </div>
                        </div>
                        
                        <h4 class="card-title">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 offset-0">
                <div class="card">
                    <img class="card-img-top" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/sample.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="row author">
                            <div class="col-auto thumbnail px-0">
                                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/profile-thumbnail.jpg" alt="" class="rounded-circle profile-thumbnail mx-3">
                            </div>
                            <div class="col info px-0 pb-2">
                                <span class="d-block name">John Doe</span>
                                <span class="d-block date">April 15, 2018</span>
                            </div>
                        </div>
                        
                        <h4 class="card-title">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 offset-0">
                <div class="card">
                    <img class="card-img-top" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/sample.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="row author">
                            <div class="col-auto thumbnail px-0">
                                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/profile-thumbnail.jpg" alt="" class="rounded-circle profile-thumbnail mx-3">
                            </div>
                            <div class="col info px-0 pb-2">
                                <span class="d-block name">John Doe</span>
                                <span class="d-block date">April 15, 2018</span>
                            </div>
                        </div>
                        
                        <h4 class="card-title">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>