$(document).ready(function () {
    removeFromBasket()
    setCountValue()
    setDimentionValue()
    validateBuy()
    seeAddressForm()
    removeAddressForm()
})
function removeFromBasket() {
    $('.remove_btn').on('click', function () {
        
        let id =  $(this).attr('id')
        
        $.ajax({
            type: 'POST',
            url: 'http://localhost:82/OnlineMagazine/index.php',
            data: {
                'ajax': 'removeFromBasket',
                'id': id
            },
            headers: {
                'Content-Type': "application/x-www-form-urlencoded;charset=UTF-8"
            },
            success: function(res) {
               let responce = JSON.parse(res)
            
               if ( responce['status'] === 'success' ) {
                   let price = Number($('.basket_section div table #' + id + ' .td_product_price').text().trim().split('л')[0])
                   $('.basket_section div table #' + id).fadeOut()
                   $('#basket_form').children('#' + id).remove()
                   let countProduct = $('.basket_span').text()
                   let count = Number(countProduct) - 1
                   $('.basket_span').text(count)
                   let sum = $('.all_sum').text()
                   let split = sum.split(':')
                   let newSum = Number(split[1].split('л')[0].trim())
                   let lastSum = newSum - price
                   $('.all_sum').text(String('ОБЩО: ' + lastSum + 'лв.'))
                   toastr.success(responce['text'])
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
function setCountValue() {
    $('.basket_count').on('change', function () {
        let count = $(this).val()
        let id    = $(this).parent().parent().attr('id') 
        $('#basket_form').children('#' + id).children('.count').val(count)
     })
}
function setDimentionValue() {
    $('.basket_dimention').on('change', function () {
        let dimention = $(this).val()
        let id    = $(this).parent().parent().attr('id') 
        $('#basket_form').children('#' + id).children('.dimention').val(dimention)
     })
}
function validateBuy() {
    $('.bascet_btn').on('click', function (e) {
        e.preventDefault()
        
        let counts = $('.count').toArray()
        for (let el of counts) {
            if ( $(el).val() === '' || $(el).val() === '-' ) {
                toastr.error('Трябва да избере брой на всеки продукт от количката')
                return
            }
        }
        
        let dimentions = $('.dimention').toArray()
        for (let el of dimentions) {
            if ( $(el).val() === '' || $(el).val() === '-' ) {
                toastr.error('Трябва да избере разммер на всеки продукт от количката')
                return
            }
        }
        
        sessionStorage.setItem('buyFromBasket', 'true')
        seeAddressForm()
    })
}
function seeAddressForm() {
    if ( sessionStorage.getItem('buyFromBasket') === 'true' ) {
        $('header').css('opacity', '0.1')
        $('footer').css('opacity', '0.1')
        $('.basket_section table').css('display', 'none')
        $('.bascet_btn').css('display', 'none')
        $('.basket_section #step_one').css('display', 'block')
    }else {
        $('header').css('opacity', '1')
        $('footer').css('opacity', '1')
        $('.basket_section table').css('display', 'inline-block')
        $('.bascet_btn').css('display', 'block')
        $('.basket_section #step_one').css('display', 'none')
    }
}
function removeAddressForm() {
    $('.basket_section #step_one .basket_exit_address_form i').on('click', function() {
       sessionStorage.setItem('buyFromBasket', 'false')
       seeAddressForm()
    })
}