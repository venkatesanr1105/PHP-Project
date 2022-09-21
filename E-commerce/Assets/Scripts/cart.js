var product = localStorage.getItem("product");
var names = localStorage.getItem("name");
var price = localStorage.getItem("price");

const parser = new DOMParser();

product = parser.parseFromString(product,"text/html")
names = parser.parseFromString(names,"text/html")
price = parser.parseFromString(price,"text/html")

var qty = document.createElement("div")
qty.setAttribute("class","quantity")
var plus = document.createElement("span")
plus.setAttribute("class","material-icons-outlined")
plus.innerHTML = "add";
var minus = document.createElement("span")
minus.setAttribute("class","material-icons-outlined")
minus.innerHTML = "remove"
var number = document.createElement("span")
number.setAttribute("class","number")
number.textContent = "1"
qty.appendChild(minus)
qty.appendChild(number)
qty.appendChild(plus)

var subtotal = document.createElement("span");
subtotal.setAttribute("class","subtotal");
subtotal.innerHTML = price.body.firstElementChild.textContent


var button = document.createElement("button");
button.setAttribute("class","remove_button")
button.innerHTML = "Remove";

var box = document.createElement("div")
box.setAttribute("class","product")
box.appendChild(product.body.firstElementChild)
box.appendChild(names.body.firstElementChild)
box.appendChild(price.body.firstElementChild)
box.appendChild(qty)
box.appendChild(subtotal)
box.appendChild(button)

cart.appendChild(box)

var numbers = document.getElementsByClassName("number");

for(i=0;i<numbers.length;i++){
    numbers[i].previousElementSibling.addEventListener("click",decrease)
    numbers[i].nextElementSibling.addEventListener("click",increase)
}

var remove = document.getElementsByClassName("remove_button")

for(i=0;i<remove.length;i++){
    remove[i].addEventListener("click",removeElement);
}

function decrease(event){
    var number = event.target.nextElementSibling;
    if(number.textContent != "1"){
        number.innerHTML = parseInt(number.textContent) - 1
        computeTotal()
    }
}

function increase(event){
    var number = event.target.previousElementSibling;
    if(number.textContent != "5"){
        number.innerHTML = parseInt(number.textContent) + 1
        computeTotal()
    }
}

function computeTotal(){
    var subtotal = document.getElementsByClassName("subtotal")
    var qty = document.getElementsByClassName("number")
    var price = document.getElementsByClassName("price")
    for(i=0;i<subtotal.length;i++){
        subtotal[i].innerHTML = parseInt(qty[i].textContent)*parseInt(price[i].textContent)
    }
}

function removeElement(event){
    event.target.parentElement.remove()
}