(function(){
    $(function () {
        new selectTab($('#contact'));
    })
    var selectTab = function selectTab(obj) {
        // Set the first list item and content as active by default
        $(".property-type li").first().addClass("active");
        $(".content").first().addClass("active");
        show_estates();
        var tab = $(".property-type ul li");
        var category = 1;
        tab.click(function(){
            $(".property-type ul li").removeClass("active");
            $(this).addClass("active");
            console.log('category===',$(this).data('category'));
            category = $(this).data('category');
            show_estates(category);
        })
    /*----- End Featured Property---- */
    }
    var show_estates = function show_estates(category) {
        
        if ($('.properties-slider').hasClass('slick-initialized')) {
            $('.properties-slider').slick('unslick'); 
        }
        $('.properties-slider').empty();
        var data = {};
        data['_token'] = $('#csrf-token')[0].content;
        data['index'] = 6;
        data['category'] = category;
        $.post('http://localhost:8000/getproject' , data , function(response) {
            console.log('hello====', response);
            if(response.status){
                var estates = response.projects;
                var count = response.count;
                showEstates(estates, count, function() {
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
                });
            }
            else {
                isLoading = false;
            }
        });
    }
    var showEstates = function showEstates(estates, count, callback) {
        for(var i = 0; i < count; i++){
            showEstate(estates[i], count);
        }
        callback();
    }
    var showEstate = function showEstate(estate, count) {
        console.log(count);
        var $cntPropertyBlock = $(".clone-data .property-slider").clone();
        $cntPropertyBlock.attr('id' , 'cntPropertyBlock_' + estate.id);
        var title = estate.title;
        var price = estate.price;
        console.log(price);
        $('.property-title h3' , $cntPropertyBlock).html(title);
        $('.property-slider-footer .price span' , $cntPropertyBlock).html(price);
        $('.properties-slider').append($cntPropertyBlock);
    }
})();