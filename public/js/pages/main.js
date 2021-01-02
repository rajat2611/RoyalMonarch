(function ($) {
    "use strict"

    /* 1. Proloder */
    $(window).on('load', function () {
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
    }
    ;


    /* 3. MainSlider-1 */
    function mainSlider() {
        var BasicSlider = $('.slider-active');
        BasicSlider.on('init', function (e, slick) {
            var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
        BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
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
            elements.each(function () {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function () {
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
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $(".header-sticky").removeClass("sticky-bar");
        } else {
            $(".header-sticky").addClass("sticky-bar");
        }
    });

    $(window).on('scroll', function () {
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
    $("[data-background]").each(function () {
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
    $(window).on('load', function () {
        aos_init();
    });



})(jQuery);

// this makes the height of each page equal to the height of the window
//$('.page').css('height', $(window).height());

// scrollspy section
(function ($) {
    //variable that will hold the href attr of the links in the menu
    var sections = [];
    //variable that stores the id of the section
    var id = false;
    //variable for the selection of the anchors in the navbar
    var $navbara = $('#navi a');

    $navbara.click(function (e) {
        //prevent the page from refreshing
        e.preventDefault();
        //set the top offset animation and speed
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 180
        }, 500);
        hash($(this).attr('href'));
    });



    //select all the anchors in the navbar one after another
    $navbara.each(function () {
        // and adds them in the sections variable
        sections.push($($(this).attr('href')));

    })
    $(window).scroll(function (e) {
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

    $(collapse).click(function (e) {
        if ($(this).attr('aria-expanded') == "false") {

            $(this).children().addClass("bx bx-down-arrow bx-rotate-180");

        } else {
            $(this).children().removeClass("bx-rotate-180");

        }
    })

    // chart .js   


    // // global options :
    // Chart.defaults.global.defaultFontFamily = "Arial";

    // Chart.defaults.global.defaultFontColor = "red";


    var ctx = document.getElementById('myChart').getContext('2d');
    var gradient = ctx.createLinearGradient(0, 0, 0, 225);
    gradient.addColorStop(0, 'rgba(215, 227, 244, 1)');

    var gradient1 = ctx.createLinearGradient(0, 0, 0, 400);
    gradient1.addColorStop(0, 'rgba(50, 148, 250, 0.48)');
    gradient1.addColorStop(1, 'rgba(255, 255, 255, 0)');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
//            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25],
            labels: ["Year " + 1, "Year " + 2, "Year " + 3, "Year " + 4, "Year " + 5, "Year " + 6, "Year " + 7, "Year " + 8, "Year " + 9, "Year " + 10, "Year " + 11, "Year " + 12, "Year " + 13, "Year " + 14, "Year " + 15, "Year " + 16, "Year " + 17, "Year " + 18, "Year " + 19, "Year " + 20, "Year " + 21, "Year " + 22, "Year " + 23, "Year " + 24, "Year " + 25, "Year " + 26, "Year " + 27, ],
            datasets: [{
                    fill: true,
                    label: '',
                    strokeColor: "#ff6c23",
//                  data: [1458732, 2063745, 2861685, 3914073, 5302046, 7132618, 9546923, 12731102, 16930654, 22469362, 29774256, 39408537, 52115004, 68873314, 90975524, 120125697, 158571292, 209276437, 276150466, 364349318, 480673065, 634090187, 836429039, 1103289806, 1455247269],
//                    data: [10000, 15000, 10000, 25000, 10000, 35000, 15000, 30000, 20000, 45000, 10000, 20000, 10000, 55000, 40000],
                    data: [1409082, 1933631, 2606357, 3469271, 4576342, 5996911, 7820087, 10160406, 13165112, 17023537, 21979175, 28345242, 36524713, 47036150, 60546983, 77916416, 100250751, 128974720, 165923509, 213461462, 274635261, 353371607, 454732400, 585244192, 753323620, 969826874, 1248759507],
                    backgroundColor: gradient1,
                    borderColor: '#1b6ca8',
                    borderWidth: 2,
//                    fill: false,
                    pointBorderColor: 'rgba(0, 0, 0, 0)',
                    pointBackgroundColor: 'rgba(0, 0, 0, 0)',
                    pointHoverBackgroundColor: "#1b6ca8",
                    pointHoverBorderColor: "#1b6ca8",

                }]
        },

        options: {
            chart: {
                backgroundColor: "white"
            },
            elements: {
                point: {
//                        radius: 0,
//                        hoverRadius: 10 
                }
            },
            title: {
                display: true,
                text: 'Your Investement',
                position: "top",
                fontSize: 20,
            },
            tooltips: {
                mode: 'index',
                intersect: false,
                callbacks: {
                    label: function (tooltipItem, data) {
                        var value = data.datasets[0].data[tooltipItem.index];
                        if (parseInt(value) >= 1000) {
                            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        } else {
                            return value;
                        }
                    }
                } // end callbacks:
            },
            hover: {
                mode: 'index',
                intersect: false
            },
            legend: {
                display: false,
                position: "top",
                labels: {
                    fontColor: "black"
                }
            },
            scales: {
                xAxes: [{
                        ticks: {
                            display: false
                        },
                        gridLines: {
                            display: false,
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }],
                yAxes: [{
                        ticks: {
                            display: false,
                            beginAtZero: true,
                            callback: function (value, index, values) {
                                return '₹' + value;
                            }
                        },
                        gridLines: {
                            display: false,
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }]
            },
        }
    });

    var data = [];
    var value1 = $('input[name="name"]').val();
    var value2 = $('input[name="age"]').val();
    var value3 = $('input[name="invest"]').val();
    var value4 = $('input[name="monthly"]').val();
    var n1 = 0, n2 = 0;
    console.log("name: " + value1);
    console.log("age: " + value2);
    console.log("invest: " + value3);
    console.log("monthly: " + value4);
    if (value2 > 50)
        value2 = 15;
    else
        value2 = 65 - value2;

    if (value3 > 0)
        n2 = value2;
    if (value4 > 0)
        n1 = value2 * 12;

    var ioi = (27 / 100) / 12;
    var ioi21 = (27 / 100);
    var ioi2 = ioi + 1;
    var ioi22 = ioi21 + 1;

    var saveHas = value4 * (((Math.pow(ioi2, n1)) - 1) / ioi) * (ioi + 1);
    var investHas = value3 * (Math.pow(ioi22, n2));
    var x = saveHas + investHas;
    data.push(x);
    console.log("main value: " + x);
    var n = 12;
    var r = 0.28;
    var t = 25;


    var labels = [];


    for (var i = 1; i <= t; i++) {
        labels.push(i);
    }

    var myChart2 = null;
    var ctx2 = document.getElementById('myChart2').getContext('2d');

    var gradient2 = ctx2.createLinearGradient(0, 0, 0, 225);
    gradient2.addColorStop(0, 'rgba(215, 227, 244, 1)');

    myChart2 = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                    fill: true,
                    label: 'Wealth',
//                    data: data,
//                    backgroundColor: gradient2,
//                    borderColor: '#1b6ca8',
//                    borderWidth: 3,
                    backgroundColor: gradient1,
                    borderColor: '#1b6ca8',
                    borderWidth: 2,
                    pointBorderColor: 'rgba(0, 0, 0, 0)',
                    pointBackgroundColor: 'rgba(0, 0, 0, 0)',
                    pointHoverBackgroundColor: "#1b6ca8",
                    pointHoverBorderColor: "#1b6ca8",
                }]
        },

        options: {
            chart: {
                backgroundColor: "gray"
            },
            tooltips: {
                mode: 'index',
                intersect: false, callbacks: {
                    label: function (tooltipItem, data) {
                        var value = data.datasets[0].data[tooltipItem.index];
                        if (parseInt(value) >= 1000) {
                            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        } else {
                            return value;
                        }
                    }
                } // end callbacks:
            },
            hover: {
                mode: 'index',
                intersect: false
            },
            title: {
                display: true,
                text: 'Your Investement',
                position: "top",
                fontSize: 20,
            },
            legend: {
                display: false,
                position: "bottom",
                labels: {
                    fontColor: "black"
                }
            },
            scales: {

                xAxes: [{
                        ticks: {
                            display: false
                        },
                        gridLines: {
                            display: false,
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }],
                yAxes: [{
                        ticks: {
                            display: false,
                            beginAtZero: true,
                            callback: function (value, index, values) {
                                return '₹' + value;
                            }


                        },
                        gridLines: {
                            display: false,
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }]
            },
        }
    });

    /*Function to update the bar chart*/
    function updateBarGraph(chart, data, label) {
        chart.data.datasets.pop();
        chart.data.labels = label;
        chart.data.datasets.push({
//            backgroundColor: 'rgba(69, 128, 196, 0.49)',
            backgroundColor: gradient1,
            borderColor: '#1b6ca8',
            borderWidth: 2,
            pointBorderColor: 'rgba(0, 0, 0, 0)',
            pointBackgroundColor: 'rgba(0, 0, 0, 0)',
            pointHoverBackgroundColor: "#1b6ca8",
            pointHoverBorderColor: "#1b6ca8",
            fill: true,
            label: 'Wealth',
            data: data
        });
        chart.update();
    }
    document.querySelector("form.invest").addEventListener("submit", function (e) {
        e.preventDefault();
        // window.location.href = "index";

        var value1 = $('input[name="name"]').val();
        var value2 = $('input[name="age"]').val();
        var value3 = $('input[name="invest"]').val();
        var value4 = $('input[name="monthly"]').val();
        var data = [];

        // new code
        debugger;
        value3 = value3.replace(/,/g, '');
        value4 = value4.replace(/,/g, '');

        var n1 = 0, n2 = 0;
        console.log("name: " + value1);
        console.log("age: " + value2);
        console.log("invest: " + value3);
        console.log("monthly: " + value4);
        if (value2 > 50)
            value2 = 15;
        else
            value2 = 65 - value2;

        var totalYear = value2;
        var mainyear = 65 - $('input[name="age"]').val();
        mainyear++;
        var labels = [];
        for (var i = 0; i < (65 - $('input[name="age"]').val()); i++) {
            labels.push("Year " + (i + 1));

            var newValue = totalYear - i;
            value2 = mainyear - newValue;
            if (value3 > 0)
                n2 = value2;
            if (value4 > 0)
                n1 = value2 * 12;

            var ioi = (27 / 100) / 12;
            var ioi21 = (27 / 100);
            var ioi2 = ioi + 1;
            var ioi22 = ioi21 + 1;

            var saveHas = value4 * (((Math.pow(ioi2, n1)) - 1) / ioi) * (ioi + 1);
            var investHas = value3 * (Math.pow(ioi22, n2));


            var x = saveHas + investHas;
            data.push(Math.round(x));
        }
        x = Math.floor(x)
        console.log("main value: " + x);
        value2 = $('input[name="age"]').val();
        if (value2 > 50)
            value2 = 15;
        else
            value2 = 65 - value2;

        var res = new Number(x).toLocaleString("hi-IN");
        $('strong.inp2').text(" " + res);
        $('strong.inp3').text(value2);
        $('strong.inp1').text(value1);
        console.log(data);
        updateBarGraph(myChart2, data, labels)
    });

    var lis = $(".join_form .dashboardcode-bsmultiselect").find(".dropdown-menu li");
    setTimeout(function () {
        var lis = $(".join_form .dashboardcode-bsmultiselect").find(".dropdown-menu li");
        $.each(lis, function (index, element) {
            var image = "";
            if (index == 0) {
                image = '<img src="image/signup/emergency-fund.png" style="margin-right: 5px;" width="20px">';
            } else if (index == 1) {
                image = '<img src="image/signup/Paying_off_Debts.png" style="margin-right: 5px;" width="20px">';
            } else if (index == 2) {
                image = '<img src="image/signup/Marriage.png" style="margin-right: 5px;" width="20px">';
            } else if (index == 3) {
                image = '<img src="image/signup/Family.png" style="margin-right: 5px;" width="20px">';
            } else if (index == 4) {
                image = '<img src="image/signup/Home.png" style="margin-right: 5px;" width="20px">';
            } else if (index == 5) {
                image = '<img src="image/signup/Retirement.png" style="margin-right: 5px;" width="20px">';
            } else if (index == 6) {
                image = '<img src="image/signup/College.png" style="margin-right: 5px;" width="20px">';
            } else if (index == 7) {
                image = '<img src="image/signup/Car.png" style="margin-right: 5px;" width="20px">';
            } else if (index == 8) {
                image = '<img src="image/signup/Vacation.png" style="margin-right: 5px;" width="20px">';
            } else if (index == 9) {
                image = '<img src="image/signup/Charity.png" style="margin-right: 5px;" width="20px">';
            } else if (index == 10) {
                image = '<img src="image/signup/Business.png" style="margin-right: 5px;" width="20px">';
            } else if (index == 11) {
                image = '<img src="image/signup/Others.png" style="margin-right: 5px;" width="20px">';
            }
            var label = $(element).find('label').html();
            $(element).find('label').html(image + label)
        })
    }, 2000);

})(jQuery);
