<?php get_header ();

 /*
	Template Name: Om
*/

?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="page-hero">
            <?php the_post_thumbnail(); ?>
        </div><!-- home-hero -->

        <section class="container aboutpage"> 
    
            <h1><?php the_title(); ?></h1><span class="red-underline"></span>
            <p><?php the_content(); ?></p>
    
            <h2><?php the_field('overskrift_medarbejdere'); ?></h2><span class="red-underline"></span>
            <div class="row">
                <?php $args = array( 'post_type' => 'medarbejder', 'posts_per_page' => -1 );
                $the_query = new WP_Query( $args ); ?>
                
                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="team-single">
                                <?php $image = get_field('billede_medarbejder');
                                
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>

                                <h3><?php the_title(); ?></h3>
                                <p class="team-title"><?php the_field('stilling_medarbejder'); ?></p>
                                <p>Telefon: <a href="tel:+45-<?php the_field('telefon_medarbejder');?>">+45 <?php the_field('telefon_medarbejder'); ?></a></p>

                                <?php if(get_field('mobil_medarbejder',$page->ID) != NULL ){ ?>
                                    <p>Mobil: <a href="tel:+45-<?php the_field('mobil_medarbejder');?>">+45 <?php the_field('mobil_medarbejder'); ?></a></p>
                                <?php } ?>

                                <?php if(get_field('email_medarbejder',$page->ID) != NULL ){ ?>
                                    <p>Email: <a href="mailto:<?php the_field('email_medarbejder');?>"><?php the_field('email_medarbejder'); ?></a></p>
                                <?php } ?>

                                <?php wp_reset_postdata(); ?>
                            </div><!-- team-single -->
                        </div><!-- colg-xl-3-->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- row -->
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>