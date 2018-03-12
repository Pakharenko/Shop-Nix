$('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        }
    }
});

$(document).ready(function(){
    $(".add-to-cart").click(function () {
        var id = $(this).attr("data-id");
        $.post("/cart/ajax/"+id, {}, function (data) {
        });
        return false;
    });
});


