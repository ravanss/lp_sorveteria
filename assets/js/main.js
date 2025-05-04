jQuery(document).scroll(function() {
 var documentTop = jQuery(document).scrollTop();
    if (documentTop > 50) {
        jQuery("#header").addClass("scrollfix");
    }
    else{
        jQuery("#header").removeClass("scrollfix");
    }

});