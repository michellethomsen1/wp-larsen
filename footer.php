    <footer>
        <div class="container">
            <div class="row">
                <a class="col-md-auto mr-md-auto" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( is_active_sidebar( 'footer_headline' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_headline' ); ?>
                    <?php endif; ?>
                </a>

                <nav class="col-xl-5 col-lg-6 col-md-7 col-12">
                    <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'footer-menu' 
                        ) ); 
                    ?>
                </nav>

                <hr class="col-12 footer-hr">

                <div class="col-12 row contact-info">
                    <div class="phone col-xl-3 col-md-4 col-12">
                        <?php if ( is_active_sidebar( 'footer_call' ) ) : ?>
                            <?php dynamic_sidebar( 'footer_call' ); ?>
                        <?php endif; ?>
                    </div><!-- phone -->
    
                    <div class="adress col-xl-3 col-md-4 col-12">
                        <?php if ( is_active_sidebar( 'footer_adress' ) ) : ?>
                            <?php dynamic_sidebar( 'footer_adress' ); ?>
                        <?php endif; ?>
                    </div><!-- adress -->
    
                    <div class="mail col-xl-3 col-md-4 col-12">
                        <?php if ( is_active_sidebar( 'footer_email' ) ) : ?>
                            <?php dynamic_sidebar( 'footer_email' ); ?>
                        <?php endif; ?>
                    </div><!-- mail -->
                </div><!-- row -->
            </div><!-- row -->
        </div><!-- container -->
    </footer>

    <!-- jQuery, Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
</body>
</html>