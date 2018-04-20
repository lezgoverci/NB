</div>
</div>
<!-- Featured Post -->
    <div class="container-fluid" id="featured-post-container">
        <div class="row" id="featured-post">  
            <?php 
                        
                $the_query = new WP_Query( array('tag' => 'mega') );
                
                if( $the_query->have_posts()) : $the_query->the_post();?>
            <div class="col px-0">
                <div class="jumbotron text-center" 
                    style="
                        background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(<?php the_post_thumbnail_url();?>);
                        background-size: cover;
                        background-position: center;">
                    
                    <h1 class="title"><?php the_title();?></h1>
                    <p><?php the_excerpt();?></p>
                    <p><a class="btn btn-primary" role="button" href="<?php the_permalink();?>">Learn more</a></p>
                </div>
            </div>
        <?php endif;?>
        </div>
    </div>
    <!-- End Featured Post -->

    <div class="container-fluid">
        <div class="row" id="main-posts2">