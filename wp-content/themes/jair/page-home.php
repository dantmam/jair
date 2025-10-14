<?php get_header() ?>

<section class="banner-home">
    <div class="container">
        <div class="banner-content animate__animated animate__fadeInUp">
            <img class="logo" src="<?php echo get_template_directory_uri() ?>/theme/img/logo.svg" alt="Logo">
            <h1>Clínica Dr. Jair de Castro | Otorrinolaringologia no Rio de Janeiro</h1>
            <h2>Mais de 40 anos de excelência!</h2>
            <div class="btn-banner">
                <a class="btn-ciano" href="https://wa.me/5521967724949" target="_blank">Fale conosco no WhatsApp<img
                        src="<?php echo get_template_directory_uri() ?>/theme/img/wpp.svg" alt="Logo do WhatsApp"></a>
                <a class="btn-ciano" href="#contato">QUERO SABER COMO FUNCIONA<img
                        src="<?php echo get_template_directory_uri() ?>/theme/img/btn-arrow.svg" alt=""></a>

            </div>
        </div>
    </div>
</section>

<section class="section-space cuidado-alem" id="a-clinica">
    <div class="container text-center">
        <h2 class="content-title-g">Um cuidado que vai muito além da consulta.</h2>
        <p class="w-sm-70 mx-auto">Na Clínica Jair de Castro, o compromisso com sua saúde vai além do atendimento
            tradicional.
            Aqui, você
            encontra acolhimento, tecnologia e uma equipe altamente qualificada.
            <br>
            <br>
            Respirar com dificuldade, dormir mal, viver com zumbido ou tontura constante, são situações que impactam
            diretamente sua qualidade de vida. Na Clínica Jair de Castro, investigamos a fundo esses sintomas para
            chegar ao diagnóstico preciso e oferecer soluções completas e assertivas para cada caso.
        </p>
    </div>
</section>

<section class="pq-escolher section-space pt-0">
    <div class="container">
        <h2 class="content-title-g text-center">Por que escolher a Clínica Jair de Castro?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="pq-item">
                    <img src="<?php echo get_template_directory_uri() ?>/theme/img/selo.svg" alt="">
                    <p><b>Reconhecimento nacional e internacional,</b> em otorrinolaringologia e distúrbios do sono,
                        reabilitação auditiva e alergias, com legado de excelência de mais de 40 anos. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pq-item">
                    <img src="<?php echo get_template_directory_uri() ?>/theme/img/instituicao.svg" alt="">
                    <p><b>Especialistas experientes com formação em instituições renomadas,</b>
                        títulos de mestrado e doutorado, e atuação de alto nível.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pq-item">
                    <img src="<?php echo get_template_directory_uri() ?>/theme/img/saude.svg" alt="">
                    <p><b>Consultas, exames e procedimentos no mesmo lugar,</b> sem necessidade de deslocamentos,
                        inclusive com
                        possibilidade de atendimento domiciliar, quando indicado.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pq-item">
                    <img src="<?php echo get_template_directory_uri() ?>/theme/img/pessoas.svg" alt="">
                    <p><b>Atendimento humanizado para toda a família,</b> com empatia, escuta ativa e foco na resolução
                        do seu
                        problema.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pq-item">
                    <img src="<?php echo get_template_directory_uri() ?>/theme/img/joia.svg" alt="">
                    <p><b>Estrutura de ponta e localização estratégica em Ipanema,</b> com consultórios modernos e
                        equipamentos
                        de ponta.</p>
                </div>
            </div>
        </div>
        <a class="btn-ciano mx-auto mt-5" href="https://wa.me/5521967724949" target="_blank">Quer saber mais? Fale
            conosco no WhatsApp!<img src="<?php echo get_template_directory_uri() ?>/theme/img/wpp.svg"
                alt="Logo do WhatsApp"></a>
    </div>
</section>

<section class="a-clinica section-space" id="quem-somos">
    <div class="container">
        <div class="conheca-clinica">
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/theme/img/conheca.jpg" alt="">
            </div>

            <div class="content-clinica">
                <h2><b>Conheça a Clínica Dr. Jair de Castro |</b> Excelência em Otorrino no RJ</h2>
                <p>Mais de 40 anos de tradição em otorrinolaringologia, sono, alergia e reabilitação auditiva. Conheça
                    nossa história, equipe médica altamente qualificada e estrutura completa em Ipanema, Rio de Janeiro.
                </p>
            </div>
        </div>
        <div class="conheca-clinica mt-5">
            <div class="content-clinica">
                <h2><b>Da tradição à inovação:</b> uma equipe que respira cuidado e expertise.</h2>
                <p>Há 40 anos, a Clínica Dr. Jair de Castro foi fundada, tendo como base a excelência e o cuidado. Seu
                    fundador, formado pelas melhores instituições do país e do mundo, construiu um legado de confiança,
                    transformando vidas por meio da otorrinolaringologia.
                    <br>
                    <br>
                    Hoje, esse compromisso continua ativo com uma equipe multidisciplinar que une experiência,
                    atualização constante e um olhar atento para cada paciente, em conjunto com Dr Pedro de Castro com o
                    mesmo propósito: cuidar dos pacientes com precisão, escuta e humanidade.
                    <br>
                    <br>
                    Ao longo dessas quatro décadas, a clínica se tornou referência não apenas no Rio de Janeiro, mas
                    também para pacientes que vêm de outros estados e países em busca de diagnóstico preciso e
                    tratamento resolutivo.
                </p>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/theme/img/tradicao.jpg" alt="">
            </div>

        </div>
    </div>
</section>

<section class="equipe-home section-space mb-5">
    <div class="container">
        <h2 class="content-title-p">Conheça os profissionais que tornam a Clínica Jair de Castro referência
            em cuidado e confiança:</h2>
        <div class="row">
            <?php
            // the query
            $the_query = new WP_Query(array(
                'post_type' => 'equipe',
                'posts_per_page' => -1
            )); ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) :
                    $the_query->the_post(); ?>
                    <div class="col-md-4">
                        <a href="<?php echo get_permalink() ?>">
                            <div class="equipe-item">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                                <h3><?php the_title() ?></h3>
                                <?php echo get_field('curriculo_home') ?>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php __('No News'); ?></p>
            <?php endif; ?>
        </div>
        <p class="content-title-p text-center" style="color: #89A59F;">E mais: uma equipe completa de fonoaudiólogas,
            otoneurologistas, cirurgiões de cabeça e pescoço, e
            consultores especializados.</p>
        <a class="btn-ciano mx-auto" href="<?= site_url() ?>/equipe">Ver equipe completa<img
                src="<?php echo get_template_directory_uri() ?>/theme/img/btn-arrow.svg" alt=""></a>
    </div>
</section>

<section class="especialidades-home section-space" id="especialidades">
    <div class="container">
        <h2>Especialidades em Otorrinolaringologia | Clínica Dr. Jair de Castro – RJ</h2>
        <h3>Tecnologia, precisão e cuidado para quem busca ouvir, respirar e viver melhor.</h3>
        <p>Há 40 anos, a Clínica Dr. Jair de Castro foi fundada, tendo como base a excelência e o cuidado. Seu fundador,
            formado pelas melhores instituições do país e do mundo, construiu um legado de confiança, transformando
            vidas por meio da otorrinolaringologia.
            <br>
            <br>
            Hoje, esse compromisso continua ativo com uma equipe multidisciplinar que une experiência, atualização
            constante e um olhar atento para cada paciente, em conjunto com Dr Pedro de Castro com o mesmo propósito:
            cuidar dos pacientes com precisão, escuta e humanidade.
            <br>
            <br>
            Ao longo dessas quatro décadas, a clínica se tornou referência não apenas no Rio de Janeiro, mas também para
            pacientes que vêm de outros estados e países em busca de diagnóstico preciso e tratamento resolutivo.
        </p>
        <h3 style="margin-bottom: 2rem">ESPECIALIDADES</h3>
        <div class="d-grid grade-items">
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
                    <a href="<?= site_url() ?>/especialidades">
                        <div class="especialidade-item">
                            <h4><?php echo esc_html($nome); ?></h4>
                        </div>
                    </a>
            <?php
                    $count++;
                endwhile;
            endif;
            ?>

        </div>
        <a class="btn-ciano mx-auto mt-5" href="#contato">Quero agendar uma consulta<img
                src="<?php echo get_template_directory_uri() ?>/theme/img/btn-arrow.svg" alt=""></a>
    </div>
</section>

<section class="exames-home section-space" id="exames">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2><b class="d-block">Exames e Cirurgias Otorrinolaringológicas</b>
                    Clínica Dr. Jair de Castro – RJ</h2>
                <img src="<?php echo get_template_directory_uri() ?>/theme/img/exames.jpg" alt="">
            </div>
            <div class="col-md-4">
                <div class="content-exames">
                    <h3>Aqui, seu tratamento começa com escuta e termina com solução.</h3>
                    <p>Nossa equipe está pronta para cuidar de você com precisão, conforto e agilidade.
                        <br>
                        <br>
                        Oferecemos atendimento multidisciplinar para pacientes com problemas em ouvidos, nariz,
                        garganta, seios paranasais e cordas vocais: otites, sinusites, desvio de septo nasal,
                        amigdalites, faringites, laringites, entre outros.
                    </p>
                </div>
            </div>
        </div>
        <h4 style="margin-bottom: 2rem">EXAMES E PROCEDIMENTOS</h4>
        <div class="row">
            <?php
            $page_id = 78;
            $max_itens = 20; // limite de itens
            $count = 0;

            if (have_rows('exames', $page_id)) :
                while (have_rows('exames', $page_id)) : the_row();
                    if ($count >= $max_itens) break; // interrompe o loop quando atingir o limite
            ?>
                    <div class="col-md-3">
                        <a href="<?= site_url() ?>/exames">
                            <div class="especialidade-item">
                                <?php echo get_sub_field('nome'); ?>
                            </div>
                        </a>
                    </div>

            <?php
                    $count++;
                endwhile;
            endif;
            ?>
        </div>
        <a class="btn-ciano mx-auto mt-5" href="#contato">Agendar uma consulta agora<img
                src="<?php echo get_template_directory_uri() ?>/theme/img/btn-arrow.svg" alt=""></a>
    </div>
</section>

<section class="exames-home cirurgias-home section-space">
    <div class="container">
        <h2 style="margin-bottom: 2rem">CIRURGIAS</h2>
        <div class="row">
            <?php
            $page_id = 90;
            $max_itens = 20; // limite de itens
            $count = 0;

            if (have_rows('cirurgias', $page_id)) :
                while (have_rows('cirurgias', $page_id)) : the_row();
                    if ($count >= $max_itens) break; // interrompe o loop quando atingir o limite
            ?>
                    <div class="col-md-3">
                        <a href="<?= site_url() ?>/cirurgias">
                            <div class="especialidade-item">
                                <?php echo get_sub_field('nome'); ?>
                            </div>
                        </a>
                    </div>

            <?php
                    $count++;
                endwhile;
            endif;
            ?>
        </div>
        <a class="btn-ciano mx-auto mt-5" href="#contato">Agendar uma consulta agora<img
                src="<?php echo get_template_directory_uri() ?>/theme/img/btn-arrow.svg" alt=""></a>
    </div>
</section>

<section class="faq section-space">
    <div class="container">
        <h2>FAQ – PERGUNTAS FREQUENTES</h2>
        <div class="faq-item">
            <?php
            $count = 1;
            if (have_rows('faq')) :
                while (have_rows('faq')) : the_row();
            ?>
                    <div class="pergunta-line">
                        <a class="pergunta" data-bs-toggle="collapse" href="#pergunta-<?php echo $count ?>" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <h3><?php echo $count ?>. <?php echo get_sub_field('pergunta') ?></h3>
                        </a>
                        <div class="collapse" id="pergunta-<?php echo $count ?>">

                            <p><?php echo get_sub_field('resposta') ?></p>

                        </div>
                    </div>

            <?php
                    $count++;
                endwhile;
            endif ?>
        </div>
    </div>
</section>

<section class="section-space" id="contato">
    <div class="container">
        <div class="contato">
            <div class="row">
                <div class="col-md-7">
                    <div class="content-form">
                        <img src="<?php echo get_template_directory_uri() ?>/theme/img/banner-home.jpg" alt="">
                        <h2>Entre em contato com a Clínica Dr. Jair de Castro!</h2>
                        <p>Agende sua consulta ou tire dúvidas pelo WhatsApp, e-mail ou formulário.</p>
                        <p><span>Preencha o formulário ou fale diretamente com a gente:</span></p>
                    </div>

                </div>
                <div class="col-md-5">
                    <?php echo do_shortcode('[contact-form-7 id="437ded2" title="Formulário de contato"]') ?>
                    <p class="text-center w-sm-80 mx-auto"><span>Nossa equipe retornará o contato em até 24h. Se
                            preferir entre
                            em contato em nosso telefone: <a href="tel:2125224949">(21) 2522-4949</a></span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-space" id="localizacao">
    <div class="container">
        <div class="local">
            <h2>Estamos no coração de Ipanema!</h2>
            <p>Com fácil acesso, estacionamento e a poucos passos do metrô.</p>
            <p>Av. Visconde de Pirajá, 351 – sala 405 – Ipanema – Rio de Janeiro<br>Estacionamento próximo | Acesso
                fácil ao
                metrô</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.064659410923!2d-43.20825542468738!3d-22.984649679200423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd5050d8147fd%3A0xce4fd9eb3c0b4d8!2sDr.%20Jair%20de%20Carvalho%20e%20Castro%2C%20Otorrino!5e0!3m2!1spt-BR!2sbr!4v1759989830877!5m2!1spt-BR!2sbr"
                height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
</section>


<?php get_footer() ?>