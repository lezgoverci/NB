    <div class="container-fluid" id="footer" style="background-image: url('<?php echo home_url() . "/wp-content/uploads/2018/04/footer-image.jpg"; ?>') ;">
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
    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"7984d91cf3be8b18f851f80b9","lid":"8f8d98708a"}) })</script>
</body>

</html>

