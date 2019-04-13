if (document.getElementById('menu-toggle') && document.querySelector('aside')){
    let menu_button = document.getElementById('menu-toggle'),
    aside = document.querySelector('aside');

    menu_button.addEventListener('click', function () {
        if (aside.style.left == "-100%") {
            aside.style.left = "0%";
        } else {
            aside.style.left = "-100%";
        }
    });
}

