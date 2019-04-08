<?php get_header ();

 /*
	Template Name: Kontakt
*/

?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d72700.77174085377!2d10.484018240410004!3d55.28991657240684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464d24857d153f03%3A0x917b8957da352e19!2sLarsen+A%2FS!5e0!3m2!1sda!2sdk!4v1550217794621" class="map-hero" frameborder="0" style="border:0" allowfullscreen></iframe>

        <section class="container contact">   
            <h1><?php the_title(); ?></h1><span class="red-underline"></span>

            <div class="row">
                <div class="col-md-6">
                    <?php the_content(); ?>
                </div><!-- col-6 -->

                <div class="col-md-6">
                    <?php the_post_thumbnail(); ?>
                </div><!-- col-6 -->
            </div><!-- row -->
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>