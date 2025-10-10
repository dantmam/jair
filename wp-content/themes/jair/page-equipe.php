<?php get_header() ?>

<section class="equipe-completa">
    <div class="container">
        <img class="logo" src="<?php echo get_template_directory_uri() ?>/theme/img/logo.svg" alt="Logo">
        <?php
        // the query
        $the_query = new WP_Query(array(
            'post_type' => 'equipe',
            'posts_per_page' => -1
        )); ?>
        <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) :
                $the_query->the_post(); ?>
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
            </div>
            <div class="col-md-6">
                <div class="equipe-item-completa">
                    <h2><?php the_title() ?></h2>
                    <?php the_content() ?>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php __('No News'); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer() ?>