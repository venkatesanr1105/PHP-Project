var btn = document.getElementsByClassName("cart_button");

for(i=0;i<btn.length;i++)
{
    btn[i].onclick = (event) => {
        var parent = event.target.parentElement;
        var product = parent.firstElementChild;
        var name = product.nextElementSibling;
        var price = name.nextElementSibling;
        localStorage.setItem("product",product.outerHTML);
        localStorage.setItem("name",name.outerHTML);
        localStorage.setItem("price",price.outerHTML);
    }
}

login_button.onclick = () => {
    window.location.href = "login.php";
}

console.log("Hi")