let Name =  localStorage.getItem("name").split(",");

let Price = localStorage.getItem("price").split(",");

for(i=0;i<Name.length;i++)
{
    let row = document.createElement("tr");
    let col1 = document.createElement("td");
    let col2 = document.createElement("td");
    let col3 = document.createElement("td");
    let col4 = document.createElement("td");
    col1.innerHTML = Name[i];
    col2.innerHTML = Price[i];
    col2.setAttribute("class","price")
    let plus = document.createElement("span");
    plus.setAttribute("class","material-icons-outlined");
    plus.innerHTML = "add";
    let number = document.createElement("span");
    number.setAttribute("class","number");
    number.innerHTML = "1";
    let minus = document.createElement("span");
    minus.setAttribute("class","material-icons-outlined");
    minus.innerHTML = "remove";
    col3.appendChild(minus);
    col3.appendChild(number);
    col3.appendChild(plus);
    let subtotal = document.createElement("span");
    subtotal.innerHTML = Price[i];
    subtotal.setAttribute("class","subtotal");
    let button = document.createElement("button");
    button.setAttribute("class","remove");
    button.innerHTML = "Remove";
    col4.appendChild(subtotal);
    col4.appendChild(button);
    row.appendChild(col1);
    row.appendChild(col2);
    row.appendChild(col3);
    row.appendChild(col4);
    table_body.appendChild(row);
}

computeTotal();

var number = Array.from(document.getElementsByClassName("number"));

for(i=0;i<number.length;i++)
{
    console.log(number[i]);
    number[i].previousElementSibling.addEventListener('click',decrease);
    number[i].nextElementSibling.addEventListener('click',increase);
}

var button = document.getElementsByClassName("remove");

for(i=0;i<button.length;i++){
    button[i].addEventListener('click',remove);
}

function increase(event){
    var number = event.target.previousElementSibling;
    if(number.textContent != "5"){
        number.innerHTML = parseInt(number.textContent) + 1;
        computeSubTotal();
    }
}

function decrease(event){
    var number = event.target.nextElementSibling;
    if(number.textContent != "1"){
        number.innerHTML = parseInt(number.textContent) - 1;
        computeSubTotal();
    
    }
}

function computeSubTotal(){
    var subtotal = document.getElementsByClassName("subtotal");
    var number = document.getElementsByClassName("number");
    var price = document.getElementsByClassName("price");
    for(i=0;i<subtotal.length;i++)
    {
        subtotal[i].innerHTML = parseInt(number[i].textContent)*parseInt(price[i].textContent);
    }
    computeTotal();
}

function computeTotal(){
     var subtotal = document.getElementsByClassName("subtotal");
     var sum = 0;
     for(i=0;i<subtotal.length;i++)
        sum += parseInt(subtotal[i].textContent);
    total.textContent = sum;
 }

 function remove(event){
    event.target.parentElement.parentElement.remove();      
    computeTotal();

 }

 reloadHandler();
 function reloadHandler(){
    localStorage.setItem("name",Name);
    localStorage.setItem("price",Price);
 }