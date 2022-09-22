<?php 
	session_start();
	$value = $_SESSION["user"]??""; 
?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furnitures | Online shopping portal</title>
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
            <span class="topic">Chairs</span>
            <div class="category">
                <div class = "product">             
                    <img src="Assets/Images/chair3.svg">
                    <span class = "HP">Sofa</span>
                    <span class = "price">25000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class = "product">             
                    <img src="Assets/Images/chair2.svg">
                    <span class = "name">Wooden Chair</span>
                    <span class = "price">5000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class = "product">             
                    <img src="Assets/Images/chair1.svg">
                    <span class = "name">Rolling Chair</span>
                    <span class = "price">10000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
            </div>
            <span class="topic">Tables</span>
            <div class="category">
                <div class="product">
                    <img src="Assets\Images\table1.svg">
                    <span class="name">Wooden Table</span>
                    <span class="price">15000</span>
                    <button class="cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\table2.svg">
                    <span class="name">Coffee Table</span>
                    <span class="price">9500</span>
                    <button class="cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\table3.svg">
                    <span class="name">Table with Locker</span>
                    <span class="price">15000</span>
                    <button class="cart_button">Add to cart</button>
                </div>
            </div>
            <span class="topic">Shelves</span>
            <div class="category">
                <div class="product">
                    <img src="Assets\Images\cupboard.svg">
                    <span class="name">Cup Board</span>
                    <span class="price">20000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\cabinet.svg">
                    <span class="name">Cabinet</span>
                    <span class="price">30000</span>
                    <button class = "cart_button">Add to cart</button>
                </div>
                <div class="product">
                    <img src="Assets\Images\wardrobe.svg">
                    <span class="name">Wardrobe</span>
                    <span class="price">30000</span>
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
        <script src = "Assets\Scripts\Furnitures.js"></script>
        <script>
            if("<?php echo $value; ?>")
                login_button.remove();    		
        </script>

</body>
</html>