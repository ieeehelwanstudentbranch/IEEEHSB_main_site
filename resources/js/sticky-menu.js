if (document.querySelector('header')){
    let header = document.querySelector('header');
    window.addEventListener('scroll', function () {
        if (window.pageYOffset >= 200){
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    });
}