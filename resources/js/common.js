$(document).ready(function () {
    
    /*-----Header ----- */
    $(".nav-btn i").click(function () {
        $(".navMenus").toggleClass("active");
        $(this).toggleClass("fa-bars");
        $(this).toggleClass("fa-xmark");
    });

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 100) {
            $(".header").addClass("sticky");
        } else {
            $(".header").removeClass("sticky");
        }
    });
    /*-----End Header ----- */

    /*----- Main ----- */
    $(".hero-slides").slick({
        dots: true,
        arrows: false,
        speed: 300,
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
        easing: 'linear',
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

    /*----- Testimonials ----- */
    $(".testimonials-slider").slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
    });
    /*-----End  Testimonials ----- */

    /*===== Contact Page   ===== */
    /*----- End Contact Form  ----- */

    $(".contact-form form label").click(function () {
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
});

/*----- Footer ----- */
const currentYear = new Date().getFullYear();
$("#year").text(currentYear);

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
document.addEventListener("DOMContentLoaded", () => {
    const fadeUpSections = document.querySelectorAll(".fade-up");

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
/*----- End Footer ----- */

/*----- ----- */
