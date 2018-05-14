"use strict";
$(function() {
    $(".slider__wrapper").lightSlider({
        adaptiveHeight: !0,
        item: 1,
        auto:true,
        loop:true,
        pause:5000,
        slideMargin: 0,
        enableDrag: false,
        prevHtml: '<i class="icon-arrow_prev"></i>',
        nextHtml: '<i class="icon-arrow_next"></i>'
    }), $(".full-slider__wrapper").lightSlider({
        adaptiveHeight: !0,
        item: 1,
        slideMargin: 10,
        pager: !1,
        enableDrag: !1,
        prevHtml: '<i class="icon-arrow_prev"></i>',
        nextHtml: '<i class="icon-arrow_next"></i>'
    }), $(".goods__slider").lightSlider({
        adaptiveHeight: !0,
        item: 4,
        loop:true,
        slideMargin: 0,
        pager: !1,
        enableDrag: !1,
        prevHtml: '<i class="icon-arrow_prev"></i>',
        nextHtml: '<i class="icon-arrow_next"></i>',
        responsive: [{
            breakpoint: 991,
            settings: {
                item: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                item: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                item: 1
            }
        }]
    }), $(".cart__slider").lightSlider({
        prevHtml: '<i class="icon-arrow_prev"></i>',
        nextHtml: '<i class="icon-arrow_next"></i>',
        gallery: true,
        enableDrag: false,
        item: 1,
        thumbItem: 5,
        thumbMargin: 10,
        slideMargin: 0,
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '.cart__slider .lslide',
            });
        },
        responsive: [{
            breakpoint: 991,
            settings: {
                thumbMargin: 8,
                thumbItem: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                thumbItem: 4
            }
        }]
    }), $(".iselect").select2(), $(".catalog__submenu_toggle").click(function(e) {
        e.preventDefault(), $(this).toggleClass("active").siblings(".catalog__submenu").stop().slideToggle()
    }), $(".goods__counter_add").click(function(e) {
        e.preventDefault();
        var t = $(this),
            i = t.siblings(".goods__counter_input"),
            a = i.val();
        console.log(a), i.val(++a)
    }), $(".goods__counter_subtract").click(function(e) {
        e.preventDefault();
        var t = $(this),
            i = t.siblings(".goods__counter_input"),
            a = i.val();
        a > 1 && i.val(--a)
    }), $(".toggle__menu").click(function() {
        return $(this).toggleClass("on"), $(".nav").slideToggle(), !1
    }), $(".header__contact_mobile").click(function() {
        $(this).toggleClass("active"), $(".header__contact").toggleClass("active")
    }), $("body").innerWidth() > 752 && $(".tabs__nav").eq(0).addClass("active"), $(".tabs__nav").click(function(e) {
        e.preventDefault(), $(this).addClass("active").siblings(".tabs__nav").removeClass("active")
    })
});