if (document.getElementById('menu-toggle') && document.getElementById('menu')) {
    let menu_button = document.getElementById('menu-toggle'),
        menu = document.getElementById('menu');


    menu_button.addEventListener('click', function () {
        if (menu.style.display == "none") {
            menu.style.display = "block";
        } else {
            menu.style.display = "none";
        }
    });
}