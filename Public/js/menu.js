$(document).ready(function () {
    dropDown();
    sessionStorage.setItem('adminPanel', 'false')
    adminPanel()
});

function dropDown() {

    //MEN MENU


    $('.men_menu').on('mouseover', function () {
        $('#men_menu').css('display', 'block');
    })

    $('#men_menu').on('mouseover', function () { 
        $('#men_menu').css('display', 'block');
    })

    $('#men_menu').on('mouseout', function () { 
        $('#men_menu').css('display', 'none');
    })

    $('.men_menu').on('mouseout', function () {
        $('#men_menu').css('display', 'none');
    })



    // WOMEN MENU 

    $('.women_menu').on('mouseover', function () {
        $('#women_menu').css('display', 'block');
    })

    $('#women_menu').on('mouseover', function () { 
        $('#women_menu').css('display', 'block');
    })

    $('#women_menu').on('mouseout', function () { 
        $('#women_menu').css('display', 'none');
    })

    $('.women_menu').on('mouseout', function () {
        $('#women_menu').css('display', 'none');
    })


    //PROMOTION MENU

    $('.promotion_menu').on('mouseover', function () {
        $('#promotion_menu').css('display', 'block');
    })

    $('#promotion_menu').on('mouseover', function () { 
        $('#promotion_menu').css('display', 'block');
    })

    $('#promotion_menu').on('mouseout', function () { 
        $('#promotion_menu').css('display', 'none');
    })

    $('.promotion_menu').on('mouseout', function () {
        $('#promotion_menu').css('display', 'none');
    })

    //NEW MENU

    $('.new_menu').on('mouseover', function () {
        $('#new_menu').css('display', 'block');
    })

    $('#new_menu').on('mouseover', function () { 
        $('#new_menu').css('display', 'block');
    })

    $('#new_menu').on('mouseout', function () { 
        $('#new_menu').css('display', 'none');
    })

    $('.new_menu').on('mouseout', function () {
        $('#new_menu').css('display', 'none');
    })
}

function adminPanel() {

    $('body header div div div:nth-child(1) p:nth-child(1)').on('click', function () {
        let condition = sessionStorage.getItem('adminPanel')
        if ( condition === 'false' ) {
            $('#admin_panel').css('display', 'block')
            sessionStorage.setItem('adminPanel', true)
        }else {
            $('#admin_panel').css('display', 'none')
            sessionStorage.setItem('adminPanel', false)
        }
    })
}