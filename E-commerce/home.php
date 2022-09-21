<?php 
	session_start();
	$value = $_SESSION["user"]??""; 
?>	
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | Online shopping Portal</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href = "Assets/Styles/homepage.css" rel = "stylesheet">
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
            <div class="slideshow">
                <span class="material-icons-outlined" id = "left">arrow_back_ios</span>
                <img src="http://onlineshoppingportal.com/Assets/Images/slide1.jpg" class="slides active" id = "slide1">
                <img src="http://onlineshoppingportal.com/Assets/Images/slide2.jpg" class="slides" id = "slide2">
                <img src="http://onlineshoppingportal.com/Assets/Images/slide3.jpg" class="slides" id = "slide3">
                <img src="http://onlineshoppingportal.com/Assets/Images/slide4.jpg" class="slides" id = "slide4">
                <img src="http://onlineshoppingportal.com/Assets/Images/slide5.jpg" class="slides" id = "slide5">
                <img src="http://onlineshoppingportal.com/Assets/Images/slide6.jpg" class="slides" id = "slide6">
                <span class="material-icons-outlined" id = "right">arrow_forward_ios</span>
            </div>
            <div class="collections">
                    <div class="box">
                        <div class="name">
                            Laptop collections
                        </div>
                        <a href="#" class="button">shop now</a>
                        <img src="Assets/Images/laptop.svg">
                    </div>
                    <div class="box">
                        <div class="name">
                            Mobile collections
                        </div>
                        <a href="#" class="button">shop now</a>
                        <img src="Assets/Images/mobile.svg">
                    </div>
                    <div class="box">
                        <div class="name">Accessories collection</div>
                        <a href="#" class="button">shop now</a>
                        <img src="Assets/Images/accessories.svg">
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
        <script src = "Assets/Scripts/homepage.js"></script>
    </body>
    <script>
    	if('<?php echo $value; ?>')
    		login_button.remove();    		
    </script>
</html>

