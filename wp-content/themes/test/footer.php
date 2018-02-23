<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */
?>
<div class="container-fluid">
    <div  class="footer">
        <div class="row">
            <div class="col-lg-6" >
                <a href="#" style=" color: #999999;">Votre adresse e-mail</a>
                <a href="#" style="color: #ffffff;">Inscription à la newsletter</a>
            </div>
            <div class="col-lg-6">
                <img src="<?php bloginfo('template_url');?>/test_images/Facebook.png">
                <img src="<?php bloginfo('template_url');?>/test_images/Instagram.jpg">
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>


</body>


</html>





