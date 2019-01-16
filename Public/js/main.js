$(document).ready(function () {
    onhover();
    onclick();
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

function onclick() {
    $('main .page_products_display .search_products').on('click', function () {
        console.log('davo');
    })
}