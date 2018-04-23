    <div class="container-fluid" id="footer">
        <div class="row" >
            <div class="col-6 col-sm-12">
                <?php 
                    $args = array(
                        'theme_location' => 'footer1',
                        'menu_class' => 'nav'
                    );
                    wp_nav_menu($args);?>
                <!-- <ul class="nav">
                    <li class="nav-item"><a class="nav-link active" href="#">First Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Third Item</a></li>
                </ul> -->
            </div>
            <div class="col-6 col-sm-12">
                <?php 
                    $args = array(
                        'theme_location' => 'footer2',
                        'menu_class' => 'nav'
                    );
                    wp_nav_menu($args);?>
                <!-- <ul class="nav">
                    <li class="nav-item"><a class="nav-link active" href="#">First Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Third Item</a></li>
                </ul> -->
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us8.list-manage.com","uuid":"e797927707c7e9e14fabf1f5c","lid":"e982e762dd"}) })</script>
</body>

</html>

