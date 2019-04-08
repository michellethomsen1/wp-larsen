<?php get_header ();

 /*
	Template Name: Juletræer
*/

?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="page-hero">
            <?php the_post_thumbnail(); ?>
        </div><!-- home-hero -->

        <section class="container trees">   
            <h1><?php the_title(); ?></h1><span class="red-underline"></span>

            <div class="row">
                <?php $args = array( 'post_type' => 'juletræ', 'posts_per_page' => -1 );
                $the_query = new WP_Query( $args ); ?>

                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <a target="_blank" href="<?php the_post_thumbnail_url(); ?>">
                                <div class="sigle-tree">
                                    <?php the_post_thumbnail(); ?>

                                    <div class="tree-txt">
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_content(); ?>
                                    </div><!-- tree-txt -->
                                </div> <!-- signle-tree -->
                            </a>
                        </div><!-- col-xl-4 -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- row -->
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>