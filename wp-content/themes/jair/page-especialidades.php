<?php get_header() ?>

<section class="single-pages">
    <div class="container">
        <img class="logo" src="<?php echo get_template_directory_uri() ?>/theme/img/logo.svg" alt="Logo">
        <h1>Especialidades</h1>
        <div class="row">
            <?php
            $page_id = 53;
            $max_itens = 9; // limite de itens
            $count = 0;

            if (have_rows('especialidades', $page_id)) :
                while (have_rows('especialidades', $page_id)) : the_row();
                    if ($count >= $max_itens) break; // interrompe o loop quando atingir o limite
                    $nome = get_sub_field('nome');
                    $slug = sanitize_title($nome);
            ?>
                    <div class="col-md-6">

                        <div class="especialidade-item-page" id="<?php echo $slug; ?>">
                            <h2><?php echo get_sub_field('nome'); ?></h2>
                            <?php echo get_sub_field('descricao'); ?>
                        </div>

                    </div>
            <?php
                    $count++;
                endwhile;
            endif;
            ?>

        </div>
    </div>
</section>

<?php get_footer() ?>