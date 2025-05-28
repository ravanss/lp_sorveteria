jQuery(document).scroll(function() {
    var documentTop = jQuery(document).scrollTop();
    if (documentTop > 50) {
        jQuery("#header").addClass("scrollfix");
    }
    else{
        jQuery("#header").removeClass("scrollfix");
    }

});

jQuery(document).ready(function() {
    jQuery(".navbar-toggler").click(function() {
        jQuery("#header").toggleClass("menuative");
    });
});

wow = new WOW({
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       true,       // default
    live:         true        // default
})
wow.init();