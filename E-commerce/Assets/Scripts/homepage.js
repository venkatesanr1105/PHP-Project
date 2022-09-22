login_button.onclick = () => {
    window.location.href = "login.php";
}

cart.onclick = () => {
    window.location.href = "cart.php";
}

left.onclick = (event) => {
    var parent = event.target.parentElement;
    var slides = Array.from(document.getElementsByClassName("slides"));
    for(i=0;i<slides.length;i++){
        if(slides[i].classList.contains("active")){
            slides[i].classList.remove("active")
            var element = (i!=0)?slides[i].previousElementSibling:parent.lastElementChild.previousElementSibling;
            element.classList.add("active");
            break;
        }
    }
}

right.onclick = (event) => {
    var parent = event.target.parentElement;
    var slides = Array.from(document.getElementsByClassName("slides"));
    for(i=0;i<slides.length;i++){
        if(slides[i].classList.contains("active")){
            slides[i].classList.remove("active")
            var element = (i!=slides.length-1)?slides[i].nextElementSibling:parent.firstElementChild.nextElementSibling;
            element.classList.add("active");
            break;
        }
    }
}

category.onchange = (event) => {
    let index = category.selectedIndex;
    console.log(index);
    switch(index)
    {
        case 1: window.location.href = "Electronics.php"; break;
        case 2: window.location.href = "Fashion.php"; break;
        case 3: window.location.href = "Furnitures.php"; break;
        case 4: window.location.href = "Homeappliances.php"; break;
    }
}