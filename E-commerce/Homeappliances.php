<?php 
	session_start();
	$value = $_SESSION["user"]??""; 
?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Appliances | Online shopping portal</title>
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
                    <option value="Electronics Gadgets">Electronics Gadgets</option>
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
            <span class="topic">Kitchen</span>
            <div class="category">
                <div class = "product">             
                    <img src="Assets/Images/mixer.svg">
                    <span class = "HP">Juice Mixer</span>
                    <span class = "price">5000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class = "product">             
                    <img src="Assets/Images/oven.svg">
                    <span class = "name">Microwave Oven</span>
                    <span class = "price">10000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class = "product">             
                    <img src="Assets/Images/fridge.svg">
                    <span class = "name">Refridgerator</span>
                    <span class = "price">15000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
            </div>
            <span class="topic">Living</span>
            <div class="category">
                <div class="product">
                    <img src="Assets\Images\tv.svg">
                    <span class="name">Television</span>
                    <span class="price">20000</span>
                    <button class="cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\sound.svg">
                    <span class="name">Music System</span>
                    <span class="price">10000</span>
                    <button class="cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\fan.svg">
                    <span class="name">Fan</span>
                    <span class="price">3500</span>
                    <button class="cart_button">Add to cart</button>
                </div>
            </div>
            <span class="topic">Bed Room</span>
            <div class="category">
                <div class="product">
                    <img src="Assets\Images\ac.svg">
                    <span class="name">Air Conditioner</span>
                    <span class="price">30000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\lamp.svg">
                    <span class="name">Lamp</span>
                    <span class="price">5000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\washingmachine.svg">
                    <span class="name">Washing Machine</span>
                    <span class="price">20000</span>
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
        <script src = "Assets\Scripts\Homeappliances.js"></script>
        <script>
            if('<?php echo $value; ?>')
                login_button.remove();
        </script>
</body>
</html>