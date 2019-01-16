$(document).ready(function () {
    displayForm()
})

function displayForm() {
    sessionStorage.setItem('buyProductStep', 'step_one')
    $('main #buy_no_register .span_buy').on('click', function () {
        $('main #buy_no_register .span_buy').css('background-color', '#8191A4')
        $(this).css('background-color', '#A89178')
        sessionStorage.setItem('buyProductStep', $(this).attr('visible'))
        display()
    })

    $('#buy_no_register_next').on('click', function () {
        sessionStorage.setItem('buyProductStep', 'step_one')
        $('#step_one').css('display', 'block')
        $('#step_two').css('display', 'none')
        display()
    })
}
function display() {
    if ( sessionStorage.getItem('buyProductStep') === 'step_one' ) {
        $('#step_one').css('display', 'block')
        $('#step_two').css('display', 'none')
    }

    if ( sessionStorage.getItem('buyProductStep') === 'step_two' ) {
        $('#step_one').css('display', 'none')
        $('#step_two').css('display', 'block')
    }
}