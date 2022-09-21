<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log in | Online shopping portal</title>
        <link rel = "stylesheet" href = "Assets/Styles/login.css">
    </head>
    <body>
        <div class="container">
            <div id="first">
                <p class = "heading1">Login</p>
                <p class = "heading2">Get access to your Orders and Wishlist</p>
                <img src="Assets/Images/login_logo.svg">
            </div>
            <div id="second">
                <form action="<?php echo $_SERVER['PHP_XELF']; ?>" class="form" method = "post" id="form">
                    <div class="section">
                        <label for = "username">User name</label>
                        <input type="text" class="fields" placeholder = "User name" name = "username" id = "username">
                    </div>
                    <div class="section">
                        <label for = "password">Password</label>
                        <input type="password" class="fields" placeholder = "Password" name = "password" id = "password">
                    </div>
                    <input type="submit" class="button" value = "LOGIN" id = "btn">
                    <a href="signup.php">Create account</a>
                </form>
            </div>
        </div>
        <?php
            include_once 'Database.php';
            
            function redirect($url)
            {
                header('Location: '.$url);
                exit;
            }
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $db = new Database();
                $email = $_POST["username"];
                $password = $_POST["password"];
                $result = $db->validateUser($email,$password);
                if($result == 1){
                    session_start();
                    $_SESSION["user"] = $email;
                    redirect("home.php");
                }
                else{
                    echo "
                        <script>
                            let box = document.createElement('div');
                            let text = document.createElement('p');
                            text.innerHTML = 'Invalid user credientials';
                            text.setAttribute('class','text');
                            box.appendChild(text);
                            box.setAttribute('class','box')
                            form.appendChild(box);
                            setTimeout(()=>{box.remove();},5000);
                        </script>
                    ";
                }
            }
        ?>
    </body>
</html>
