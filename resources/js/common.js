$(document).ready(function () {
    /*-----Header ----- */
    $(".nav-btn i").click(function () {
        $(".navMenus").toggleClass("active");
    });
    /*-----End Header ----- */

    /*----- Main ----- */
    $(".hero-slides").slick({
        dots: true,
        arrows: false,
        speed: 300,
        slidesToShow: 1,
    });
    /*-----End Main ----- */

    /*----- Sponsers ----- */
    $(".sponsers-slider").slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: true,
        centerPadding: "80px",
        slidesToShow: 5,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 769,
                settings: {
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 575,
                settings: {
                    centerMode: true,
                    centerPadding: "50px",
                    slidesToShow: 1,
                },
            },
        ],
    });
    /*----- End Sponsers ----- */

    /*----- Featured Property---- */
    $(".properties-slider").slick({
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
                breakpoint: 575,
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
});

/*----- ----- */
