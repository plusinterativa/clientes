jQuery(document).ready(function ($) {
    /*MENU RESPONSIVO*/
    $('.mobmenu').click(function () {
        if (!$('.mobmenu').hasClass('active-menu')) {
            $('.content-sub').slideUp('fast');
        }
        $('.main_nav').slideToggle('fast');
        $(this).toggleClass('active-menu');
        return false;
    });
    if ($('.mobmenu').is(':visible')) {
        $('.main_nav li:contains(+)').click(function () {
            if (!$(this).children('.content-sub').hasClass('active')) {
                $('.active').slideUp().removeClass('active');
            }
            $('.content-sub a').click(function () {
                var local = $(this).attr('href');
                $(location).attr('href', local);
                return false;
            });
            $(this).children('.content-sub').slideToggle('fast').toggleClass('active');
            return false;
        });
    }
    /*SLIDER HOME*/
    //$('.main_slider').nivoSlider({
    //    effect: 'fade'
    //});
    
    $('.owl-carousel').owlCarousel({
        items:1,
        loop:true,
        margin:0,
        nav:true,
        autoplay:true,
        autoplayTimeout:8000,
        autoplayHoverPause:true
    });
    $('.owl-prev,.owl-next').html('');
    if ($(window).width() > 960) {
        var n1 = $('.main_news .box.box-large-pd.n1').find('h1').height();
        var n2 = $('.main_news .box.box-large-pd.n2').find('h1').height();
        var n3 = $('.main_news .box.box-large-pd.n3').find('h1').height();
        var n4 = $('.main_news .box.box-large-pd.n4').find('h1').height();
        var n5 = $('.main_news .box.box-large-pd.n5').find('h1').height();
        var n6 = $('.main_news .box.box-large-pd.n6').find('h1').height();
        if(n1 < 40){
            $('.main_news .box.box-large-pd.n1').find('h1').css('margin-top','11px');    
        }
        if(n2 < 40){
            $('.main_news .box.box-large-pd.n2').find('h1').css('margin-top','11px');    
        }
        if(n3 < 40){
            $('.main_news .box.box-large-pd.n3').find('h1').css('margin-top','11px');       
        }
        if(n4 < 40){
            $('.main_news .box.box-large-pd.n4').find('h1').css('margin-top','11px');      
        }
        if(n5 < 40){
            $('.main_news .box.box-large-pd.n5').find('h1').css('margin-top','11px');       
        }
        if(n6 < 40){
            $('.main_news .box.box-large-pd.n6').find('h1').css('margin-top','11px');      
        }
    }

    /*MASCARA DO FORM DE CONTATOS*/
    $('.phone_mask').mask('(99) 99999999?9');
    $('.cpf_mask').mask('999.999.999-99');
    /*VALIDAÇÃO DOS CAMPOS*/
    $(".validate-form").validate({
        onBlur: true,
        sendForm: true,
        eachValidField: function () {
            $(this).val($.trim($(this).val()));
            if ($(this).val() === '') {
                $(this).closest('input.validate').removeClass('input-success').addClass('input-error');
            } else {
                $(this).closest('input.validate').removeClass('input-error').addClass('input-success');
            }
        },
        eachInvalidField: function () {
            $(this).closest('input.validate').removeClass('input-success').addClass('input-error');
        }
    });
    /*ACCORDION*/
    $('.question_answer .question').click(function(){
        if (!$(this).parent().hasClass('active')){
            $('.question_answer .answer').slideUp('fast').parent().css('background', 'url(http://dev.plusinterativa.com/nucleos/wp-content/themes/nucleos/img/li-image-questionanswer.jpg) no-repeat');
            $('.question_answer li').removeClass('active');
            $(this).next().slideDown('fast').parent().css('background', 'url(http://dev.plusinterativa.com/nucleos/wp-content/themes/nucleos/img/li-image-questionanswer-less.jpg) no-repeat').addClass('active');
        }
    });


    $('.main_breadcrum a' ).each( function () {
        $(this).attr('href','#');
    });

});