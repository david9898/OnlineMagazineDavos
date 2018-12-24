$(document).ready(function () {
    chageImage()
    selectCount()
    $('body > main > section > article > div.front_view > img').on('click', function () {
        viewCurrentImage()
    })
})
function chageImage() {
    $('main section .details .all_images img').on('click', function () {
        let image = $(this)[0]['src']
        $('main section .details .front_view img')[0]['src'] = image;
    })
}
function selectCount() {
    let count = $('main section .details .articul_details .current_value').text()
    let decrement = $('main section .details .articul_details .decrement')
    let increment = $('main section .details .articul_details .increment')
    let span = $('main section .details .articul_details .current_value')    
    
    decrement.on('click', function () {
        if ( count >= 2 ) {
            count = Number(count) - 1
            span.text(count)
        }
    })
    increment.on('click', function () {
        if ( count <= 7 ) {
            count = Number(count) + 1
            span.text(count)
        }
    })
}
function viewCurrentImage() {   
    let currentImage = $('body > main > section > article > div.front_view > img')[0]['src']
    let allImages = []
    let imagesContainer = $('main section .details .all_images').children().toArray()
    imagesContainer.forEach(el => {
         allImages.push(el['src'])
    });
    let index = findIndex(allImages, currentImage)
    $('body > main > section > div > div > div:nth-child(2) > img')[0]['src'] = currentImage
    $('main section .big_image').css('display', 'block')
    $('body header').css('opacity', '0.1')
    $('body footer').css('opacity', '0.1')

    $('#left_arrow').on('click', function () {
        index = index - 1
        if ( index === -1 ) {
            index = allImages.length - 1
        }
        $('body > main > section > div > div > div:nth-child(2) > img')[0]['src'] = allImages[index]    
    })
    
    $('#right_arrow').on('click', function () {
        index = index + 1
        if ( index === allImages.length ) {
            index = 0
        }
        $('body > main > section > div > div > div:nth-child(2) > img')[0]['src'] = allImages[index]    
    })
    $('#exit').on('click', function () {
        $('main section .big_image').css('display', 'none')
        $('body header').css('opacity', '1')
        $('body footer').css('opacity', '1')
    })
}
function findIndex(array, url) {
    for (let i = 0; i < array.length; i++) {
        let el = array[i];
        
        if ( el === url ) {
            return i;
        }
    }
}