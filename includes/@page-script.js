jQuery(function($) {
    //because "Login Here" and "Signup now" links are not inside a "UL" or ".nav", they preserve "active" class
    //and we should remove that, to continue moving between tab-panes
    $('a[data-toggle="tab"]').on('click', function() {
        $('a[data-toggle="tab"]').removeClass('active');        
    });

    //start/show carousel to change backgrounds
    $('#id-start-carousel').on('click', function(e) {
        e.preventDefault();
        $('.carousel-indicators').removeClass('d-none');
        $('#loginBgCarousel').carousel(1);    
    });

    //remove the background/carousel section
    $('#id-remove-carousel').on('click', function(e) {
        e.preventDefault();
        var row = $('.carousel').parent().parent();//.row
        row.children().eq(0).remove();
        row.children().eq(0).removeClass('col-lg-7 col-lg-8').parent().parent().removeClass('col-12 col-lg-10 offset-lg-1').addClass('col-12 col-lg-5').parent().addClass('justify-content-center');

        $('.col-md-6.offset-md-3').removeClass('col-md-6 offset-md-3').addClass('col-md-8 offset-md-2');
        $('h4').parent().next().removeClass('d-lg-none').prev().remove();
    });

    //make the login area fullscreen
    $('#id-fullscreen').on('click', function(e) {
        e.preventDefault();
        if (window.navigator.msPointerEnabled) $('.body-container').addClass('h-100');//for IE only

        $('.main-container').removeClass('container');
        $('.main-content').removeClass('justify-content-center minh-100').addClass('px-4 px-lg-0')
        .children().attr('class', 'my-3 m-lg-0 d-flex flex-column flex-lg-row flex-grow-1')//remove the padding classes
        .children().eq(0).addClass('flex-grow-1')
        .children().removeClass('shadow radius-1 col-lg-10 offset-lg-1').addClass('d-lg-flex')
        .children().addClass('flex-grow-1')
        .children().eq(0).removeClass('col-lg-5').addClass('col-lg-4').next().removeClass('col-lg-7 offset-2').addClass('col-lg-6 mx-auto d-flex align-items-center justify-content-center');
    });

});