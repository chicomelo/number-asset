jQuery(document).ready(function ($) {

    if(window.screen.width < 769){
        $('body').on('click', '.menu-hamburger__wrapper', function () {
            $(this).toggleClass('active');
            $('.menu-principal__wrapper').toggleClass('active');
        });

        $('body').on('click', '.menu .menu-item a', function () {
            $('.menu-hamburger__wrapper').toggleClass('active');
            $('.menu-principal__wrapper').toggleClass('active');
        });
    }

    $('body').on('click', '.btn-altere-configuracao', function (e) {
        e.preventDefault();
        //$('.cky-btn-revisit').click();
        $('.cky-btn-customize').click();
        
    });
    

    if(window.screen.width < 769){
        if ($('.slider-produtos').length) {
            $('.slider-produtos').slick({
                lazyLoad: 'ondemand',
                centerPadding: '0',
                infinite: false,
                arrows: false,
                dots: true,
                slidesToShow: 1
            });
        }

        if ($('.slider-equipe').length) {
            $('.slider-equipe').slick({
                lazyLoad: 'ondemand',
                centerPadding: '0',
                infinite: false,
                arrows: false,
                dots: true,
                slidesToShow: 1
            });
        }
        if ($('.slider-estrutura').length) {
            $('.slider-estrutura').slick({
                lazyLoad: 'ondemand',
                centerPadding: '0',
                infinite: false,
                arrows: false,
                dots: true,
                slidesToShow: 1
            });
        }
        if ($('.slider-parcerias').length) {
            $('.slider-parcerias').slick({
                lazyLoad: 'ondemand',
                centerPadding: '0',
                infinite: false,
                arrows: false,
                dots: true,
                slidesToShow: 1
            });
        }
    }

    if($('body').hasClass('page-template-template-denuncia')){

        $('.btn-enviar .btn').addClass('btn-disabled');
        $('.wpcf7-spinner').html("<div class='spinner'></div>");

        $('.form-denuncias .wpcf7-form .wpcf7-textarea').on("keyup", function (e) {
            if($(this).val().length > 2){
                $('.btn-enviar .btn').removeClass('btn-disabled');
            }else{
                $('.btn-enviar .btn').addClass('btn-disabled');
            }
        });

        // redireciona apos enviar e-mail
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            $('.form-denuncias').hide();
            $('.msg-sucesso').fadeIn();
        }, false );

        $('body').on('click', '.msg-sucesso .btn a', function(){
            $('.form-denuncias').fadeIn();
            $('.msg-sucesso').hide();
        })

    }

});