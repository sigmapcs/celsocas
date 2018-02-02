<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>
</div>
<footer class="main-footer">
  <p class="main-footer__year" id="cyear"></p>
  <p class="main-footer__web">www.celsocastro.com.mx</p>
  <p class="main-footer__dev">Desarrollado por:
    <a href="http://tunabranding.mx" target="_blank">Tuna Branding</a><span> y </span><a href="https://sigmapcs.com.mx" target="_blank">SigmaPCS</a>
  </p>
</footer>

<?php wp_footer(); ?>


<div class="modal-lanscape">
  <div class="modal-container">
    <img src="<?php echo get_template_directory_uri(); ?>/img/giphy.gif" alt="">
    <p>Para visualizar correctamente la pagina favor de girar su dispositivo verticalmente</p>
  </div>
</div>
</body>

</html>

