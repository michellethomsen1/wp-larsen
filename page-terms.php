<?php get_header ();

 /*
	Template Name: Terms of Sales
*/

?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
        <div class="page-hero">
            <?php the_post_thumbnail(); ?>
        </div><!-- home-hero -->
    <?php endwhile; ?>
<?php endif; ?>

<section class="container terms"> 
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab-danish-tab" data-toggle="pill" href="#tab-danish" role="tab" aria-controls="tab-danish" aria-selected="true">
                <?php $image = get_field('dansk_flag');

                if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="tab-english-tab" data-toggle="pill" href="#tab-english" role="tab" aria-controls="tab-english" aria-selected="false">
                <?php $image = get_field('engelsk_flag');

                if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="tab-german-tab" data-toggle="pill" href="#tab-german" role="tab" aria-controls="tab-german" aria-selected="false">
                <?php $image = get_field('tysk_flag');

                if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </a>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="tab-danish" role="tabpanel" aria-labelledby="tab-danish-tab">
            <h1><?php the_field('dansk_overskrift'); ?></h1><span class="red-underline"></span>
            <h2><?php the_field('dansk_underoverskrift'); ?></h2>
            <p><?php the_field('dansk_tekst'); ?></p>
        </div>

        <div class="tab-pane fade" id="tab-english" role="tabpanel" aria-labelledby="tab-english-tab">
            <h1><?php the_field('engelsk_overskrift'); ?></h1><span class="red-underline"></span>
            <h2><?php the_field('engelsk_underoverskrift'); ?></h2>
            <p><?php the_field('engelsk_tekst'); ?></p>
        </div>

        <div class="tab-pane fade" id="tab-german" role="tabpanel" aria-labelledby="tab-german-tab">
            <h1><?php the_field('tysk_overskrift'); ?></h1><span class="red-underline"></span>
            <h2><?php the_field('tysk_underoverskrift'); ?></h2>
            <p><?php the_field('tysk_tekst'); ?></p>
        </div>
    </div>
</section>


<?php get_footer(); ?>