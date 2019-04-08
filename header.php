<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="icon" href="images/favicon.png" type="image/png">

    <title><?php wp_title('', true); ?> <?php bloginfo('name'); ?> </title>
    
    <?php wp_head();?>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-auto mr-auto">

                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo $image[0]; ?>" alt="Larsen_logo" class="navbar-brand" id="logo">
                    </a>
                </div><!-- col-lg-2 -->

                <button class="navbar-toggler col-auto" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav class="collapse navbar-collapse col-xl-9 col-lg-10 offset-xl-1 offset-lg-0" id="navbarToggle">
                    <hr class="col-12 nav-hr">
                    
                    <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'header-menu' 
                        ) ); 
                    ?>
                </nav>
            </div><!-- row -->
        </div><!-- container -->
    </header>