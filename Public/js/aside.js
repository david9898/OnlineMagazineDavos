$(document).ready(function () {  
    slider()
    color()
})

function slider() {
    $('#slider').slider({
        range:true,
        min: 0,
        max: 250,
        values: [0, 250],
        slide: function( event, ui ) {
            $( "#amount" ).val( ui.values[ 0 ] + 'лв.' + " - " + ui.values[ 1 ] + 'лв.' )
            $('form #amount1').val(ui.values[0])
            $('form #amount2').val(ui.values[1])
        }
    });
    $( "#amount" ).val( "$" + $( "#slider" ).slider( "values", 0 ) +
      " - $" + $( "#slider" ).slider( "values", 1 ) );
}

function color() {
    $('.product_search :checkbox').on('change', function () {
        console.log('David')
    })
}