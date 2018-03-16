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
        $.post("/cart/ajax/"+id, {}, function (response) {
            var data = JSON.parse(response);
            $('#cart-count').html(data.total_count);
            $('#total-price').html(data.total_price);
        });
        return false;
    });
});


$(document).ready(function(){
    $(".delete").click(function () {
        var id = $(this).attr("data-id");
        $.post("/cart/delete/"+id, {}, function () {
           $("#product-"+id).remove();
       });
        return false;
    });
});


