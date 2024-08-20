$(document).ready((function() {
    AOS.init({
            offset: 15,
            disable: "mobile"
        }), $(".form__field").focus((function() {
            $(this).addClass("form__field_active")
        })).blur((function() {
            "" == $(this).val() && $(this).removeClass("form__field_active")
        })), $(".nano__btn").on("click", (function(t) {
            $("html,body").stop().animate({
                scrollTop: $(".js-section_face").offset().top
            }, 1e3), t.preventDefault()
        })),
        function() {
            var t = 22,
                e = 0;
            t <= 9 && (t = "0" + t);
            setTimeout((function i() {
                if (0 != e)(e -= 1) <= 9 && (e = "0" + e);
                else {
                    if (0 == t) return;
                    e = 59, (t -= 1) <= 9 && (t = "0" + t)
                }
                $(".form__time-count:nth-of-type(2) span:first-child").text(t), $(".form__time-count:last-child span:first-child").text(e), setTimeout(i, 1e3)
            }), 1e3)
        }(), $(".js-commits__box").owlCarousel({
            loop: !0,
            autoHeight: !0,
            margin: 40,
            stagePadding: 20,
            responsive: {
                320: {
                    items: 1,
                    nav: !0
                },
                768: {
                    items: 2,
                    nav: !1
                },
                1280: {
                    items: 3
                }
            }
        })
}));