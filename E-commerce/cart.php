<?php 
	session_start();
	$value = $_SESSION["user"]??""; 
?>	

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
        <cart class="cart">
            <table class="cart_table">
                <thead>
                    <tr>
                        <th scope = "col">Name</th>
                        <th scope = "col">Price</th>
                        <th scope = "col">Quantity</th>
                        <th scope = "col">Subtotal</th>
                    </tr>
                </thead>
                <tbody id = "table_body">
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th  scope = "row" colspan = "2">Total Amount</th>
                        <td colspan = "2" id = "total">0</td>
                    </tr>
                </tfoot>
            </table>
            <button>Place Order</button>
        </cart>
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
    <script>
            if('<?php echo $value; ?>')
                login_button.remove();    		
    </script>
</body>
</html>