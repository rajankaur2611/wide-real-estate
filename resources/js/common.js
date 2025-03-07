$(window).on('load', function(){
    $(".property-slide-footer .btn-primary").click(function(){
        $(".request-info-popup-overlay").addClass("show-popup");
        $("body").addClass("show-popup");
    })
})
$(document).ready(function () {
    /*-----Header ----- */
    $(".nav-btn i").click(function () {
        $(".navMenus").toggleClass("active");
        $(this).toggleClass("fa-bars");
        $(this).toggleClass("fa-xmark");
    });
    
    $(".request-info-popup-overlay").click(function () {
        $(this).removeClass("show-popup");
        $("body").removeClass("show-popup");
    });
    $(".close-icon p").click(function () {
        $(".request-info-popup-overlay").removeClass("show-popup");
        $("body").removeClass("show-popup");
    });

    $(".popup-form").click(function (event) {
        event.stopPropagation();
    });
    
    var lastScrollTop = 0;

    $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();

        if (scrollTop > lastScrollTop) {
            $(".header").addClass("sticky");
        } else {
            $(".header").removeClass("sticky");
        }

        lastScrollTop = scrollTop;
    });
    /*-----End Header ----- */

    /*----- Main ----- */
    $(".hero-slides").slick({
        dots: true,
        arrows: false,
        speed: 1500,
        slidesToShow: 1,
        // autoplay: true,
        autoplaySpeed: 2000,
    });
    /*-----End Main ----- */

    /*----- Sponsers ----- */
    $(".sponsers-slider").slick({
        arrows: false,
        autoplay: true,
        centerMode: true,
        centerPadding: "80px",
        slidesToShow: 5,
        autoplaySpeed: 0,
        speed: 3000,
        easing: "linear",
        responsive: [
            {
                breakpoint: 1601,
                settings: {
                    centerMode: true,
                    centerPadding: "70px",
                    slidesToShow: 5,
                },
            },
            {
                breakpoint: 1025,
                settings: {
                    centerMode: true,
                    centerPadding: "80px",
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    centerMode: true,
                    centerPadding: "90px",
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 769,
                settings: {
                    centerMode: true,
                    centerPadding: "80px",
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 481,
                settings: {
                    centerMode: true,
                    centerPadding: "70px",
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 380,
                settings: {
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                },
            },
        ],
    });
    /*----- End Sponsers ----- */

    /*----- Featured Property---- */

    
    $(".properties-slider").slick({
        slidesToShow: 3,
        // autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
    /*----- End Featured Property---- */
    /*----- News Slider ----- */
    $(".news-slides").slick({
        arrows: false,
        dots: false,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 0,
        speed: 3000,
        easing: "easeInOut",
        infinite: true,
        vertical: true,
        verticalSwiping: true
    });
    /*----- End News Slider ----- */
    /*----- Testimonials ----- */
    $(".testimonials").slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
    /*-----End  Testimonials ----- */

    /*----- Blog Slider ----- */
    $(".blog-slides").slick({
        arrows: false,
        dots: false,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 0,
        speed: 3000,
        easing: "linear",
        infinite: true,
        vertical: true,
        verticalSwiping: true,
    });
    /*----- End Blog Slider ----- */

    /*===== Contact Page   ===== */
    /*----- End Contact Form  ----- */

    $(".contact-form form label:not(:contains('Villa')):not(:contains('apartment')):not(:contains('comerical'))"
    ).click(function () {
        $(this).addClass("active");
        $(this).next().focus();
    });

    $(".contact-form form input, .contact-form form textarea").focus(
        function () {
            $(this).siblings("label").addClass("active");
        }
    );

    $(".contact-form form input, .contact-form form textarea").blur(
        function () {
            const inputLength = $(this).val().length;
            if (inputLength === 0) {
                $(this).siblings("label").removeClass("active");
            }
        }
    );
    /*===== End Contact Page   ===== */
    /*----- Featured Property---- */
    $(".property-type ul li").click(function () {
        $(".property-type ul li").removeClass("active");
        $(this).addClass("active");
    });

    $(".property-type li").click(function () {
        var type = $(this).data("type");

        // Remove active class from all list items and content
        $(".property-type li").removeClass("active");
        $(".content").removeClass("active");

        // Add active class to clicked list item and corresponding content
        $(this).addClass("active");
        $("#" + type).addClass("active");
    });

    // Set the first list item and content as active by default
    $(".property-type li").first().addClass("active");
    $(".content").first().addClass("active");
    /*----- End Featured Property---- */
});

/*----- Footer ----- */

$(window).scroll(function () {
    if ($(this).scrollTop() > 350) {
        $(".go-top").fadeIn();
    } else {
        $(".go-top").fadeOut();
    }
});

$(".go-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
});
// const text = "Discover Your Perfect Property with Us";
// let i = 0;
// const typewriter = document.getElementById("abc");

// function type() {
//     if (i < text.length) {
//         typewriter.innerHTML += text.charAt(i);
//         i++;
//         setTimeout(type, 100); // Typing speed
//     }
// }
// type();

/*----- End Footer ----- */
/*----- Animations ----- */
document.addEventListener("DOMContentLoaded", () => {
    const fadeUpSections = document.querySelectorAll(
        ".fade-up, .fade-down, .fade-down-smooth, .fade-left, .fade-right, .fade-in , .scale"
    );

    const handleScroll = () => {
        fadeUpSections.forEach((section) => {
            const rect = section.getBoundingClientRect();
            if (rect.top < window.innerHeight - 150 && rect.bottom > 0) {
                section.classList.add("visible");
            }
        });
    };

    // Trigger the scroll handler on page load and during scroll
    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Run on page load
});
/*----- End Animations ----- */
/*----- ----- */
/*===== Single Property Detail Page=====*/

/*----- Single Property Slider ----- */
$(document).ready(function () {
    $(".single-property-detail-slider").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        autoplaySpeed: 2000,
    });
    /*----- End Single Property Slider ----- */

    /*-----Enquire Popup ----- */
    $(".contact-form").click(function (e) {
        e.stopPropagation();
    });
    $(".enquire-now").click(function () {
        $(".enquire-popup-overlay").addClass("active");
        $("body").addClass("no-scroll");
    });
    $(".enquire-popup-overlay, .popup-closer").click(function () {
        $(".enquire-popup-overlay").removeClass("active");
        $("body").removeClass("no-scroll");
    });
    /*-----End Enquire Popup ----- */
});
/*===== End Single Property Detail Page=====*/