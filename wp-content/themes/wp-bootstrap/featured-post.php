    <!-- Featured Post -->
    <div class="container-fluid">
        <div class="row" id="featured-post">  
            <?php 
                        
                $the_query = new WP_Query( array('tag' => 'mega') );
                
                if( $the_query->have_posts()) : $the_query->the_post();?>
            <div class="col px-0">
                <div class="jumbotron text-center">
                    
                    <h1 class="title"><?php the_title();?></h1>
                    <p><?php the_content();?></p>
                    <p><a class="btn btn-primary" role="button" href="<?php the_permalink();?>">Learn more</a></p>
                </div>
            </div>
        <?php endif;?>
        </div>
    </div>
    <!-- End Featured Post -->