$(document).ready(function() {
    if (screen.width >= 1025) {
        $(window).scroll(function() {
            if ($(document).scrollTop() > 450) {
                $("nav").css("height", "50px");
                $(".nav-full").css("top", "10px");
                $(".sub-nav").css("top", "50px");
                $(".logo").css({
                    'width': '220px'
                });
            } else {
                $("nav").css("height", "70px");
                $(".nav-full").css("top", "30px");
                $(".sub-nav").css("top", "70px");
                $(".logo").css({
                    'width': '250px'
                });
            }
        });
    }
    if (screen.width <= 1024) {
        $('.logo').click(function() {
            $("nav").toggleClass("show", 1500);
        });

        $('.arreglos').click(function() {
            $(".sub-nav").toggleClass("muestra", 1500);

            if ($('.sub-nav').hasClass('muestra')) {
                $(".show").css("height", "460px");
            } else {
                $(".show").css("height", "240px");
            }
        });
    } 
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-88075525-1', 'auto');
    ga('send', 'pageview');

    //$(window).stellar();
});