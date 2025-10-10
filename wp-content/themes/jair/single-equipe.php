<?php get_header() ?>

<section class="equipe-completa">
    <div class="container">
        <img class="logo" src="<?php echo get_template_directory_uri() ?>/theme/img/logo.svg" alt="Logo">

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


    </div>
</section>

<?php get_footer() ?>