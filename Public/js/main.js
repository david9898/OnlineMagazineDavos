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
    $('main .search_products article').on('click', function () {
        window.location.href = 'details ?id=' + $(this)[0]['id']; 
    })
}