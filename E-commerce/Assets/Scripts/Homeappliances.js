   		
var btn = document.getElementsByClassName("cart_button");

cart.onclick = () => {
    window.location.href = "cart.php";
}

for(i=0;i<btn.length;i++)
{
    btn[i].onclick = (event) => {
        var parent = event.target.parentElement;
        var product = parent.firstElementChild;
        var name = product.nextElementSibling;
        var price = name.nextElementSibling;

        if(localStorage.getItem("name"))    
            localStorage.setItem("name",localStorage.getItem("name")+','+name.textContent)
        else    
            localStorage.setItem("name",name.textContent)
        
        if(localStorage.getItem("price"))    
            localStorage.setItem("price",localStorage.getItem("price")+','+price.textContent)
        else    
            localStorage.setItem("price",price.textContent)

    }
}
category.onchange = (event) => {
    let index = category.selectedIndex;
    switch(index)
    {
        case 1: window.location.href = "home.php"; break;
        case 2: window.location.href = "Fashion.php"; break;
        case 3: window.location.href = "Furnitures.php"; break;
        case 4: window.location.href = "Homeappliances.php"; break;
    }
}   