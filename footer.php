<footer class="footer section">
    <div class="footer__top">
        <div class="container">
            <section class="footer__widget contact-details">
                <h4>Contáctenos</h4>
                <ul class="contact">
                    <li>
                        <p><strong>Dirección:</strong> Carrera 5 # 10-93, Cartago, Colombia</p>
                    </li>
                    <li>
                        <p><strong>PBX:</strong> +57 (2) 210 7171</p>
                    </li>
                    <li>
                        <p><strong>Correo:</strong> info@ganesuperservicios.co</p>
                    </li>
                </ul>
            </section>
            <section class="footer__widget follow-us">
                <h4>Siguenos</h4>
                <ul class="social">
                    <li><a href="https://facebook.com/ganenortedelvalle"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://instagram.com/ganesuperserviciosdelvalle"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://youtube.com/ganesuperservicios"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </section>
            <section class="footer__widget">
                <ul>
                    <?php wp_nav_menu(array(
                    'theme_location' => 'menu-footer',
                    'container' => '',
                    'items_wrap' => '%3$s'
                    ));?>
                </ul>
            </section>
        </div>
    </div>
    <div class="footer__bottom">

    </div>
</footer>
<?php wp_footer();?>
<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/jquery.stellar.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/scrollreveal.min.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/scripts.js"></script>
<script>loadCSS( "<?php bloginfo('template_url')?>/style.css" );</script>
<script>loadCSS( "https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.min.css" );</script>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfR-ZcI5RhQ4Zz_S0sL4J7XdTeBpg4rbw&callback=initMap">
    </script>
</body>
</html>