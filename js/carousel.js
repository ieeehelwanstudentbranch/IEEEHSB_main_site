let carousels = document.getElementById('carousel-wrap');

let previous = document.getElementById('arrow-left'),
    next = document.getElementById('arrow-right'),
    carousel_items = document.getElementById('carousel-items'),
    images = carousel_items.getElementsByTagName('div'),
    currentImageIndex = 0,
    width = 500;

function switchImage(){
    carousel_items.style.left = -width * currentImageIndex +'px';
}

next.addEventListener('click', function(){
    currentImageIndex = currentImageIndex + 1.5;
    if (currentImageIndex >= images.length){
        currentImageIndex = 0;
    }
    switchImage();
});
previous.addEventListener('click', function(){
    currentImageIndex = currentImageIndex -1.5;
    if (currentImageIndex < 0){
        currentImageIndex = images.length - 1.5 ;
    }
    switchImage();
});

// auto click function
function autoclick() {
    next.click();
    setTimeout('autoclick()', 5000);
}

setTimeout("autoclick()", 5000);