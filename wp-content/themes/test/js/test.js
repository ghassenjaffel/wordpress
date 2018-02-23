jQuery( document ).ready(function() {
    jQuery(".menu").hide();
    jQuery("#myPopup" ).click(function() {
        jQuery(".menu").toggle();
    });

});

    jQuery(".collection").hide();
    jQuery("#collect" ).click(function() {
        jQuery(".collection").toggle();
    });
$('.bt').on("click",function () {

    $(".position_video").html("");
    $(".slider").html("");

    $(".position_video").html("<?php echo do_shortcode('[metaslider id=\"6\"]'); ?>");



});