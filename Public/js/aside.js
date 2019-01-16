$(document).ready(function () {
    slider()
    color()
})

function slider() {
    let max = $('#slider').attr('price_max');
    let curMin = $('#slider').attr('current_min');
    let curMax = $('#slider').attr('current_max');
    if ( curMax === '' ) {
        curMax = 512;
    }
    // console.log(curMax);
    $('#slider').slider({
        range:true,
        min: 1,
        max: max,
        values: [curMin, curMax],
        slide: function( event, ui ) {
            $( "#amount" ).val( ui.values[ 0 ] + 'лв.' + " - " + ui.values[ 1 ] + 'лв.' )
            $('form #amount1').val(ui.values[0])
            $('form #amount2').val(ui.values[1])
        }
    });
    $( "#amount" ).val( $( "#slider" ).slider( "values", 0 ) + "лв." +
      " - " + $( "#slider" ).slider( "values", 1 ) + 'лв.');
}

function color() {
    $('.product_search :checkbox').on('change', function () {
        console.log('David')
    })
}