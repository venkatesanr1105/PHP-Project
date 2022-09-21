<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Online Shopping Portal</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel = "stylesheet" href = "Assets\Styles\cart.css">
</head>
<body>
<div class="header">
            <div class="header_section" id = "title">Online Shop</div>
            <div class="header_section" id = "search">
                <select name="category" id="category">
                    <option value="All Catergories">All Catergories</option>
                    <option value="Home">Home</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Ladies Wears">Ladies Wears</option>
                    <option value="Mens Wear">Mens Wear</option>
                    <option value="Kids Wear">Kids Wear</option>
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
                    <span class="material-icons-outlined">shopping_cart</span>
                    <figcaption>Your Cart</figcaption>
                </figure>
            </div>
        </div>
        <nav class="nav_bar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="store1.php">Electronics</a></li>
                <li><a href="store2.php">Ladies Wears</a></li>
                <li><a href="store3.php">Mens Wears</a></li>
                <li><a href="store4.php">Kids  Wears</a></li>
                <li><a href="store5.php">Furnitures</a></li>
                <li><a href="store6.php">Home Appliances</a></li>
                <li><a href="store7.php">Electronics Gadgets</a></li>
            </ul>
    </div>
</nav>
    <div class="cart" id = "cart">
        
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
    <script src="Assets\Scripts\cart.js"></script>
</body>
</html>