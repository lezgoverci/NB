<?php get_header(); ?>
    <?php get_template_part('carousel-template');?>
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