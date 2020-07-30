$( document ).ready(function() {
    // smooth scroll 
    $('a[href^="#"]').click(function () {
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 1500);
        return false;
    });

    // animate on scroll
    AOS.init();

    $(document).scroll(function () {
        var $nav = $(".nav");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});