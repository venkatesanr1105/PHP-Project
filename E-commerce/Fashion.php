<?php 
	session_start();
	$value = $_SESSION["user"]??""; 
?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion | Online shopping portal</title>
    <link rel = "stylesheet" href = "Assets/Styles/store.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
<div class="header">
            <div class="header_section" id = "title">Online Shop</div>
            <div class="header_section" id = "search">
                <select name="category" id="category">
                    <option value="All Catergories">All Catergories</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Furnitures">Furnitures</option>
                    <option value="Home Appliances">Home Appliances</option>
                </select>
                <input type="search" name="search" id="searchbar" placeholder = "Search here">
                <input type="button" value="Search" id="searchbutton">
            </div>
            <div class="header_section">
                <input type="button" value="LOGIN" id = "login_button">
            </div>
            <div class="header_section" id = "icon">
                <figure class="icons">
                    <span class="material-icons-outlined">favorite_border</span>
                    <figcaption>Your wishlist</figcaption>
                </figure>
                <figure class="icons">
                    <span class="material-icons-outlined">shopping_cart</span>
                    <figcaption>Your Cart</figcaption>
                </figure>
            </div>
        </div>
        <nav class="nav_bar">
            <ul>        
                <li><a href="home.php">Home</a></li>
                <li><a href="Electronics.php">Electronics</a></li>
                <li><a href="Fashion.php">Fashion</a></li>
                <li><a href="Furnitures.php">Furnitures</a></li>
                <li><a href="Homeappliances.php">Home Appliances</a></li>
            </ul>
        </nav>
        <div class="container">
            <span class="topic">Men's Wear</span>
            <div class="category">
                <div class = "product">             
                    <img src="Assets/Images/shirt_men.svg">
                    <span class = "HP">T - Shirt</span>
                    <span class = "price">500</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class = "product">             
                    <img src="Assets/Images/pant_men.svg">
                    <span class = "name">Jeans Pants</span>
                    <span class = "price">1000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class = "product">             
                    <img src="Assets/Images/shoe_men.svg">
                    <span class = "name">Sneakers</span>
                    <span class = "price">1500</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
            </div>
            <span class="topic">Ladies Wear</span>
            <div class="category">
                <div class="product">
                    <img src="Assets\Images\saree.svg">
                    <span class="name">Saree</span>
                    <span class="price">2000</span>
                    <button class="cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\dress.svg">
                    <span class="name">Dress</span>
                    <span class="price">1500</span>
                    <button class="cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\shoe_women.svg">
                    <span class="name">Shoe</span>
                    <span class="price">2000</span>
                    <button class="cart_button">Add to cart</button>
                </div>
            </div>
            <span class="topic">Kid's Wear</span>
            <div class="category">
                <div class="product">
                    <img src="Assets\Images\shirt_kids.svg">
                    <span class="name">Kids's Shirt</span>
                    <span class="price">400</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\pant_kids.svg">
                    <span class="name">Kid's pants</span>
                    <span class="price">900</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\shoe_kids.svg">
                    <span class="name">Kid's shoe</span>
                    <span class="price">1400</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
            </div>
        </div>

        <div class="footer">
                        <div class="col">
                            <span class="material-icons-outlined">contact_support</span>
                            <span>About</span>
                        </div>
                        <div class="col">
                        <span class="material-icons-outlined">contact_page</span>
                            <span>Contact</span>
                        </div>
                        <div class="col">
                            <span class="material-icons-outlined">public</span>
                            <span>Social</span>
                        </div>
        </div>
        <script>
    	if('<?php echo $value; ?>')
    		login_button.remove();    		
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
    </script>
</body>
</html>