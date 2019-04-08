<?php get_header ();

 /*
	Template Name: Dekorationsmateriale
*/

?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="page-hero">
            <?php the_post_thumbnail(); ?>
        </div><!-- home-hero -->

        <section class="container decoration">   
            <h1><?php the_title(); ?></h1><span class="red-underline"></span>

            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Søg efter produkter..">

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="decorate-with-nature-tab" data-toggle="tab" href="#decorate-with-nature" role="tab" aria-controls="decorate-with-nature" aria-selected="true"><?php the_field('faneblad1'); ?></a>
                    <span class="nav-pipe">|</span>
                    <a class="nav-item nav-link" id="rest-tab" data-toggle="tab" href="#rest" role="tab" aria-controls="rest" aria-selected="false"><?php the_field('faneblad2'); ?></a>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="decorate-with-nature" role="tabpanel" aria-labelledby="decorate-with-nature-tab">
                    <div class="row">
                        <?php $args = array( 'post_type' => 'dekoration', 'category_name' => 'dwn', 'posts_per_page' => -1 );
                        $the_query = new WP_Query( $args ); ?>

                        <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <a target="_blank" href="<?php the_post_thumbnail_url(); ?>">
                                        <div class="sigle-decoration" id="decoration-single">
                                            <?php the_post_thumbnail(); ?>

                                            <div class="decoration-txt">
                                                <h2><?php the_title(); ?></h2>
                                                <?php the_content(); ?>
                                            </div><!-- decoration-txt -->

                                            <?php wp_reset_postdata(); ?>
                                        </div> <!-- signle-decoration -->
                                    </a>
                                </div><!-- col-xl-4 -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div><!-- row -->
                </div><!-- tab-pane -->

                <div class="tab-pane fade" id="rest" role="tabpanel" aria-labelledby="rest-tab">
                    <div class="row">
                        <?php $args = array( 'post_type' => 'dekoration', 'category_name' => 'andet', 'posts_per_page' => -1 );
                        $the_query = new WP_Query( $args ); ?>

                        <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <a target="_blank" href="<?php the_post_thumbnail_url(); ?>">
                                        <div class="sigle-decoration" id="decoration-single">
                                            <?php the_post_thumbnail(); ?>

                                            <div class="decoration-txt">
                                                <h2><?php the_title(); ?></h2>
                                                <?php the_content(); ?>
                                            </div><!-- decoration-txt -->

                                            <?php wp_reset_postdata(); ?>
                                        </div> <!-- signle-decoration -->
                                    </a>
                                </div><!-- col-xl-4 -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div><!-- row -->
                </div><!-- tab-pane -->
            </div> <!-- tab-content -->
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<script>
function searchFunction() {
  // Declare variables
  var input, filter, ul, li, h2, i, txtValue;
  input = document.getElementById('searchInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("nav-tabContent");
  li = ul.getElementById('decoration-single');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    h2 = li[i].getElementsByTagName("p")[0];
    txtValue = h2.textContent || h2.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>


<?php get_footer(); ?>