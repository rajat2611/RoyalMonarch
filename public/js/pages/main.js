(function($) {
    "use strict"

    /* 1. Proloder */
    $(window).on('load', function() {
        $('#preloader-active').delay(450).fadeOut('slow');
        $('body').delay(450).css({
            'overflow': 'visible'
        });
    });


    /* 2. slick Nav */
    // mobile_menu
    var menu = $('ul#navigation');
    if (menu.length) {
        menu.slicknav({
            prependTo: ".mobile_menu",
            closedSymbol: '+',
            openedSymbol: '-'
        });
    };


    /* 3. MainSlider-1 */
    function mainSlider() {
        var BasicSlider = $('.slider-active');
        BasicSlider.on('init', function(e, slick) {
            var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
        BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });
        BasicSlider.slick({
            autoplay: false,
            autoplaySpeed: 10000,
            dots: false,
            fade: true,
            arrows: false,
            prevArrow: '<button type="button" class="slick-prev"><i class="ti-shift-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="ti-shift-right"></i></button>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
            ]
        });

        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function() {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function() {
                    $this.removeClass($animationType);
                });
            });
        }
    }
    mainSlider();



    /* 4. Testimonial Active*/
    var testimonial = $('.h1-testimonial-active');
    if (testimonial.length) {
        testimonial.slick({
            dots: false,
            infinite: true,
            speed: 1000,
            autoplay: true,
            loop: true,
            arrows: false,
            prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        arrow: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    }
                }
            ]
        });
    }


    /* 5. Gallery Active */
    var client_list = $('.completed-active');
    if (client_list.length) {
        client_list.owlCarousel({
            slidesToShow: 2,
            slidesToScroll: 1,
            loop: true,
            autoplay: true,
            speed: 3000,
            smartSpeed: 2000,
            nav: false,
            dots: false,
            margin: 15,

            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    }


    /* 6. Nice Selectorp  */
    var nice_Select = $('select');
    if (nice_Select.length) {
        nice_Select.niceSelect();
    }

    /* 7.  Custom Sticky Menu  */
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $(".header-sticky").removeClass("sticky-bar");
        } else {
            $(".header-sticky").addClass("sticky-bar");
        }
    });

    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $(".header-sticky").removeClass("sticky");
        } else {
            $(".header-sticky").addClass("sticky");
        }
    });



    /* 8. sildeBar scroll */
    $.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topDistance: '300', // Distance from top before showing element (px)
        topSpeed: 300, // Speed back to top (ms)
        animation: 'fade', // Fade, slide, none
        animationInSpeed: 200, // Animation in speed (ms)
        animationOutSpeed: 200, // Animation out speed (ms)
        scrollText: '<i class="ti-arrow-up"></i>', // Text for element
        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });


    /* 9. data-background */
    $("[data-background]").each(function() {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    });


    /* 10. WOW active */
    new WOW().init();

    /* 11. Datepicker */

    // 11. ---- Mailchimp js --------//  
    function mailChimp() {
        $('#mc_embed_signup').find('form').ajaxChimp();
    }
    mailChimp();


    // 12 Pop Up Img
    var popUp = $('.single_gallery_part, .img-pop-up');
    if (popUp.length) {
        popUp.magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }
    // Init AOS
    function aos_init() {
        AOS.init({
            duration: 1000,
            once: true
        });
    }
    $(window).on('load', function() {
        aos_init();
    });



})(jQuery);

// this makes the height of each page equal to the height of the window
//$('.page').css('height', $(window).height());

// scrollspy section
(function($) {
    //variable that will hold the href attr of the links in the menu
    var sections = [];
    //variable that stores the id of the section
    var id = false;
    //variable for the selection of the anchors in the navbar
    var $navbara = $('#navi a');

    $navbara.click(function(e) {
        //prevent the page from refreshing
        e.preventDefault();
        //set the top offset animation and speed
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 180
        }, 500);
        hash($(this).attr('href'));
    });



    //select all the anchors in the navbar one after another
    $navbara.each(function() {
        // and adds them in the sections variable
        sections.push($($(this).attr('href')));

    })
    $(window).scroll(function(e) {
        // scrollTop retains the value of the scroll top with the reference at the middle of the page
        var scrollTop = $(this).scrollTop() + ($(window).height() / 2);
        //cycle through the values in sections array
        for (var i in sections) {
            var section = sections[i];
            //if scrollTop variable is bigger than the top offset of a section in the sections array then 
            if (scrollTop > section.offset().top) {
                var scrolled_id = section.attr('id');
            }
        }
        if (scrolled_id !== id) {
            id = scrolled_id;
            $($navbara).removeClass('current');
            $('#navi a[href="#' + id + '"]').addClass('current');
        }
    })

    var collapse = $('a[data-toggle]');

    $(collapse).click(function(e) {
        if ($(this).attr('aria-expanded') == "false") {

            $(this).children().addClass("bx bx-down-arrow bx-rotate-180");

        } else {
            $(this).children().removeClass("bx-rotate-180");

        }
    })

    // chart .js
    var ctx = document.getElementById('myChart').getContext('2d');
    var ctx2 = document.getElementById('myChart2').getContext('2d');
    var gradient = ctx.createLinearGradient(0, 0, 0, 225);
    gradient.addColorStop(0, 'rgba(215, 227, 244, 1)');
    var gradient2 = ctx2.createLinearGradient(0, 0, 0, 225);
    gradient2.addColorStop(0, 'rgba(215, 227, 244, 1)');

    // // global options : 
    // Chart.defaults.global.defaultFontFamily = "Arial";

    // Chart.defaults.global.defaultFontColor = "red";


    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25],
            datasets: [{
                fill: true,
                label: 'Wealth',
                data: [1458732, 2063745, 2861685, 3914073, 5302046, 7132618, 9546923, 12731102, 16930654, 22469362, 29774256, 39408537, 52115004, 68873314, 90975524, 120125697, 158571292, 209276437, 276150466, 364349318, 480673065, 634090187, 836429039, 1103289806, 1455247269],
                backgroundColor: gradient,
                borderColor: '#1b6ca8',
                borderWidth: 3,

            }]
        },

        options: {
            chart: {
                backgroundColor: "white"
            },
            title: {
                display: true,
                text: 'Your Investement',
                position: "top",
                fontSize: 20,
            },
            legend: {
                position: "top",
                labels: {
                    fontColor: "black"
                }
            },
            scales: {

                xAxes: [{
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            return '₹' + value;
                        }


                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    }
                }]
            },
        }
    });

    var value1 = $('input[name="name"]').val();
    var value2 = $('input[name="age"]').val();
    var value3 = $('input[name="invest"]').val();
    var value4 = $('input[name="monthly"]').val();
    var n = 12;
    var r = 0.28;
    var t = 25;


    var labels = [];
    var data = []
    var x = value3;
    for (var i = 1; i <= t; i++) {
        labels.push(i);
    }
    for (var j = 1; j <= t; j++) {
        x = x * (1 + r / n) ** 12 + value4 * (((1 + r / n) ** 12 - 1) / (r / 12));
        data.push(x);

    }





    var myChart2 = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                fill: true,
                label: 'Wealth',
                data: data,
                backgroundColor: gradient2,
                borderColor: '#1b6ca8',
                borderWidth: 3,

            }]
        },

        options: {
            chart: {
                backgroundColor: "gray"
            },
            title: {
                display: true,
                text: 'Your Investement',
                position: "top",
                fontSize: 20,
            },
            legend: {
                position: "bottom",
                labels: {
                    fontColor: "black"
                }
            },
            scales: {

                xAxes: [{
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            return '₹' + value;
                        }


                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    }
                }]
            },
        }
    });

    /*Function to update the bar chart*/
    function updateBarGraph(chart, data) {
        chart.data.datasets.pop();
        chart.data.datasets.push({
            backgroundColor: 'rgba(69, 128, 196, 0.49)',
            borderColor: '#1b6ca8',
            borderWidth: 3,
            fill: true,
            label: 'Wealth',
            data: data
        });
        chart.update();
    }
    document.querySelector("form.invest").addEventListener("submit", function(e) {
        e.preventDefault();
        // window.location.href = "index";

        var value1 = $('input[name="name"]').val();
        var value2 = $('input[name="age"]').val();
        var value3 = $('input[name="invest"]').val();
        var value4 = $('input[name="monthly"]').val();
        var data = []
        var x = value3;

        for (var j = 1; j <= t; j++) {
            x = x * (1 + r / n) ** 12 + value4 * (((1 + r / n) ** 12 - 1) / (r / 12));
            data.push(x);

        }
        x = Math.floor(x)

        x = x.toString();

        var l = x.length - 7
        var res = x.substr(0, l);
        $('strong.inp2').text("Rs." + res);
        $('strong.inp3').text(t);
        $('strong.inp1').text(value1);

        updateBarGraph(myChart2, data)
    })


})(jQuery);