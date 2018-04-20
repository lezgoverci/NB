<div class="col-sm-12 col-md-6 offset-0">
    <div class="card">
        <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail(array(568,0));?>
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