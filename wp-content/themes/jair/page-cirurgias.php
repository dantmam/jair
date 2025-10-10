<?php get_header() ?>

<section class="single-pages">
    <div class="container">
        <img class="logo" src="<?php echo get_template_directory_uri() ?>/theme/img/logo.svg" alt="Logo">
        <h1>Cirurgias</h1>
        <div class="row">
            <?php
            $page_id = 90;

            if (have_rows('cirurgias', $page_id)) :
                while (have_rows('cirurgias', $page_id)) : the_row();

                    $nome = get_sub_field('nome');
                    $slug = sanitize_title($nome);
            ?>
                    <div class="col-md-6">

                        <div class="especialidade-item-page" id="<?php echo $slug; ?>">
                            <?php echo get_sub_field('nome'); ?>
                            <?php echo get_sub_field('descricao'); ?>
                        </div>

                    </div>
            <?php

                endwhile;
            endif;
            ?>

        </div>
    </div>
</section>

<?php get_footer() ?>