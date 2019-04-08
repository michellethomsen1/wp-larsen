<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
        <div class="home-hero">
            <?php the_post_thumbnail(); ?>
        </div><!-- home-hero -->

        <div class="container">
            <div class="hero-overlay">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div><!-- hero-overlay -->
        </div><!-- container-->
    <?php endwhile; ?>
<?php endif; ?>

<section class="container frontpage">   
    <h1><?php the_field('overskrift_cards'); ?></h1><span class="red-underline"></span>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <a href="<?php echo esc_url( home_url( '/jul-vinterdekoration' ) ); ?>">
                <div class="product-box">
                    <?php $image = get_field('produkt_billede_1');

                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>

                    <div class="box-txt">
                        <h2><?php the_field('produkt_overskrift_1'); ?></h2>
                        <p><?php the_field('produkt_beskrivelse_1'); ?></p>
                    </div><!-- box-txt -->
                </div><!-- product-box -->
            </a>
        </div><!-- col-lg-3 -->

        <div class="col-xl-3 col-md-6">
            <a href="<?php echo esc_url( home_url( '/dekorationsmateriale' ) ); ?>">
                <div class="product-box">
                    <?php $image = get_field('produkt_billede_2');
                    
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>

                    <div class="box-txt">
                        <h2><?php the_field('produkt_overskrift_2'); ?></h2>
                        <p><?php the_field('produkt_beskrivelse_2'); ?></p>
                    </div><!-- box-txt -->
                </div><!-- product-box -->
            </a>
        </div><!-- col-lg-3 -->

        <div class="col-xl-3 col-md-6">
            <a href="<?php echo esc_url( home_url( '/foraar' ) ); ?>">
                <div class="product-box">
                    <?php $image = get_field('produkt_billede_3');
                    
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>

                    <div class="box-txt">
                        <h2><?php the_field('produkt_overskrift_3'); ?></h2>
                        <p><?php the_field('produkt_beskrivelse_3'); ?></p>
                    </div><!-- box-txt -->
                </div><!-- product-box -->
            </a>
        </div><!-- col-lg-3 -->

        <div class="col-xl-3 col-md-6">
            <a href="<?php echo esc_url( home_url( '/juletraeer' ) ); ?>">
                <div class="product-box">
                    <?php $image = get_field('produkt_billede_4');
                    
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>

                    <div class="box-txt">
                        <h2><?php the_field('produkt_overskrift_4'); ?></h2>
                        <p><?php the_field('produkt_beskrivelse_4'); ?></p>
                    </div><!-- box-txt -->
                </div><!-- product-box -->
            </a>
        </div><!-- col-lg-3 -->
    </div><!-- row -->
</section>


<?php get_footer(); ?>