$(document).ready(function () {
    onhover();
    addToBasket();
})

function onhover() {
    $('main section .search_products img').on('mouseover', function () {
        let src = $(this)[0]['src'];
        let alt = $(this)[0]['alt'];
        $(this)[0]['src'] = alt;
        $(this)[0]['alt'] = src;
    })
    $('main section .search_products img').on('mouseout', function () {
        let src = $(this)[0]['src'];
        let alt = $(this)[0]['alt'];
        $(this)[0]['src'] = alt;
        $(this)[0]['alt'] = src;    
    })
}

function addToBasket() {
    $('.add_to_basket').on('click', function() {
        let id = $(this).attr('product_id');
        
        $.ajax({
            type: 'POST',
            url: 'http://localhost:82/OnlineMagazine/index.php',
            data: {
                'ajax': 'addToBasket',
                'id': id
            },
            headers: {
                'Content-Type': "application/x-www-form-urlencoded;charset=UTF-8"
            },
            success: function(res) {
               let responce = JSON.parse(res)
               if ( responce['status'] === 'success' ) {
                   toastr.success(responce['text'])
                   let countProduct = $('.basket_span').text()
                   let count = Number(countProduct) + 1
                   $('.basket_span').text(count)
               }else {
                   toastr.error(responce['text'])
               }
            },
            error: function(err) {
                console.log(err)
            }
        })
    })
}