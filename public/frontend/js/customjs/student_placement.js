var studentPlacement= function () {
    var studentPlacement = function () {
        $('.brand-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
    }
    return {
        init: function () {
            studentPlacement();
        }
    }
}();
