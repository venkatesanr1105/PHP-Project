login_button.onclick = () => {
    window.location.href = "http://onlineshoppingportal.com/login.php";
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
