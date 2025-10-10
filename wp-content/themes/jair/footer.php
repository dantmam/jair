<?php b4st_footer_before(); ?>

<footer class="footer">

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="<?= site_url() ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri() ?>/theme/img/logo.svg" alt="Logo">
                </a>
            </div>
            <div class="col-md-6 navbar-footer">
                <?php
        wp_nav_menu(array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new b4st_walker_nav_menu()
        ));
        ?>
            </div>
            <div class="col-md-2">
                <p>Acompanhe-nos e fique por dentro das novidades!</p>
                <div class="social">
                    <a href="https://www.instagram.com/clinicajairdecastro/" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="https://wa.me/5521967724949" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
        <p class="text-center mt-5" style="font-size: .8rem;">© Copyright <?php echo date('Y') ?>. Todos os direitos
            reservados.</p>
    </div>

</footer>

<?php b4st_footer_after(); ?>



<!--
Viewport width indicator
========================
Just delete this if or when you don't need it.
-->

<div id="vp"
    style="position: fixed; bottom: 0.5rem; right: 0.5rem; z-index: 999; display: inline-block; background: #555; color: #ffffff; padding: 0 0.5rem 0.125rem; border-radius: 0.25rem;">
</div>

<script>
var vp = document.body.querySelector('#vp');
var viewportWidth = window.innerWidth + 'px';
vp.innerHTML = viewportWidth;
window.addEventListener('resize', function() {
    viewportWidth = window.innerWidth + 'px';
    vp.innerHTML = viewportWidth;
});
</script>

<?php wp_footer(); ?>
</body>

</html>