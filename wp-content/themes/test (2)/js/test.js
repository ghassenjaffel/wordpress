jQuery( document ).ready(function() {
    jQuery(".menu").hide();
    jQuery("#myPopup" ).click(function() {
        jQuery(".menu").toggle();
    });

});