if (document.getElementById('title') && document.getElementById('description')){
    let title = document.getElementById('title'),
    description = document.getElementById('body');

    title.addEventListener('keyup', function(){
        title.previousElementSibling.classList.add("active", "highlight");
        if(title.value == ''){
            title.previousElementSibling.classList.remove("active", "highlight");
        }
    });
    description.addEventListener('keyup', function(){
        description.previousElementSibling.classList.add("active", "highlight");
        if(description.value == ''){
            description.previousElementSibling.classList.remove("active", "highlight");
        }
    });
}
