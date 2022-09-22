<?php 
	session_start();
	$value = $_SESSION["user"]??""; 
?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronics | Online shopping portal</title>
    <link rel = "stylesheet" href = "Assets/Styles/store.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
<div class="header">
            <div class="header_section" id = "title">Online Shop</div>
            <div class="header_section" id = "search">
                <select name="category" id="category">
                <option value="Electronics">Electronics</option>
                    <option value="All Catergories">All Catergories</option>
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
                    <span class="material-icons-outlined" id = "cart">shopping_cart</span>
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
            <span class="topic">Laptop</span>
            <div class="category">
                <div class = "product">             
                    <img src="Assets/Images/dell.svg">
                    <span class = "HP">Dell</span>
                    <span class = "price">80000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class = "product">             
                    <img src="Assets/Images/hp.svg">
                    <span class = "name">HP</span>
                    <span class = "price">50000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class = "product">             
                    <img src="Assets/Images/asus.svg">
                    <span class = "name">Asus</span>
                    <span class = "price">65000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
            </div>
            <span class="topic">Mobile</span>
            <div class="category">
                <div class="product">
                    <img src="Assets\Images\samsung.svg">
                    <span class="name">Samsung</span>
                    <span class="price">30000</span>
                    <button class="cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\apple.svg">
                    <span class="name">Apple</span>
                    <span class="price">100000</span>
                    <button class="cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\oneplus.svg">
                    <span class="name">Oneplus</span>
                    <span class="price">50000</span>
                    <button class="cart_button">Add to cart</button>
                </div>
            </div>
            <span class="topic">Accessories</span>
            <div class="category">
                <div class="product">
                    <img src="Assets\Images\charger.svg">
                    <span class="name">Charger</span>
                    <span class="price">500</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\headphone.svg">
                    <span class="name">Headphone</span>
                    <span class="price">1000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\mouse.svg">
                    <span class="name">Mouse</span>
                    <span class="price">750</span>
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
        <script src = "Assets\Scripts\Electronics.js"></script>
        <script>
            if('<?php echo $value; ?>')
                login_button.remove();    		
</script>
</body>
</html>