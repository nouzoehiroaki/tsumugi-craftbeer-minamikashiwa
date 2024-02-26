'use strict'
jQuery(function($){
    $(function () {
        $('.js-btn').on('click', function () {
            $('#header nav.g-nav , .btn-line').toggleClass('open');
            $('#header').toggleClass('open');
        })
    });
    $(function () {
        $(".slider").slick({
            autoplay: true,
            arrows: false,
            fade: true,
            asNavFor: ".thumbnail",
        });
        $(".thumbnail").slick({
            slidesToShow: 12,
            asNavFor: ".slider",
            focusOnSelect: true,
            autoplay: false,
        });
        $(".first-view-slide").slick({
            arrows: false,
            dots:false,
            autoplay: true,
            autoplaySpeed: 4000,
            speed: 2000,
            fade: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            pauseOnDotsHover: false,
        });
    });
    $(function(){
        $(function(){
            $(".thumbnail-img img").click(function () {
                let $aaa = $(this).parents('.thumbnail-img');
                $aaa.children('.fadeText').addClass('textOpen');
            });
            $(".fadeText button").click(function () {
                $(this).parents('.fadeText').removeClass('textOpen');
            });
        });
    });
    $(document).ready(function () {
        let $scene_slider = $('._slider');
        $scene_slider.slick({
          autoplay: false,
          autoplaySpeed: 5500,
          speed: 500,
          pauseOnHover: false,
          fade: true,
          dots: false,
          arrows: false,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll:1,
          cssEase: 'linear'
        });
        let $scene_thumbnail = $('._thumbnail');
        $scene_thumbnail.each(function(index, element){
          let $scene_selecter_item = $(this).find('.thumbnail-img');
          $scene_selecter_item.on({
            'mouseenter':function(){
              let selecter_index = $scene_selecter_item.index(this);
              $(this).parents('.gallary').find('._slider').slick('slickGoTo', selecter_index, false);
            }
          });
        });
    });
    $(function () {
        var pagetop = $('#js-pagetop');
        pagetop.hide();
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                pagetop.fadeIn();
            } else {
                pagetop.fadeOut();
            }
        });
        pagetop.click(function () {
            $('body, html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });
});
