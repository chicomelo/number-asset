jQuery(document).ready(function ($) {

    $('body').on('click', '.menu-hamburger__wrapper', function () {
        $(this).toggleClass('active');
        $('.menu-principal__wrapper').toggleClass('active');
    });

    if(window.screen.width < 769){
        if ($('.slider-produtos').length) {
            $('.slider-produtos').slick({
                lazyLoad: 'ondemand',
                adaptiveHeight: true,
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
                adaptiveHeight: true,
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
                adaptiveHeight: true,
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
                adaptiveHeight: true,
                centerPadding: '0',
                infinite: false,
                arrows: false,
                dots: true,
                slidesToShow: 1
            });
        }
    }

    // if ($('.lista-solucoes').length) {
    //     $('.lista-solucoes').slick({
    //         centerMode: true,
    //         lazyLoad: 'ondemand',
    //         centerPadding: '0',
    //         infinite: false,
    //         slidesToShow: 5,
    //         responsive: [
    //             {
    //                 breakpoint: 4000,
    //                 settings: "unslick"
    //             },
    //             {
    //                 breakpoint: 1024,
    //                 settings: {
    //                     arrows: false,
    //                     centerMode: true,
    //                     dots: true,
    //                     centerPadding: '40px',
    //                     slidesToShow: 3
    //                 }
    //             },
    //             {
    //                 breakpoint: 960,
    //                 settings: {
    //                     arrows: false,
    //                     centerMode: true,
    //                     dots: true,
    //                     centerPadding: '0px',
    //                     slidesToShow: 3
    //                 }
    //             },
    //             {
    //                 breakpoint: 768,
    //                 settings: {
    //                     arrows: false,
    //                     centerMode: true,
    //                     dots: true,
    //                     centerPadding: '90px',
    //                     slidesToShow: 1
    //                 }
    //             },
    //             {
    //                 breakpoint: 480,
    //                 settings: {
    //                     arrows: false,
    //                     dots: true,
    //                     centerMode: true,
    //                     centerPadding: '45px',
    //                     slidesToShow: 1
    //                 }
    //             }
    //         ]
    //     });
    // }


});