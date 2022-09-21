<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign up | Online shopping portal</title>
        <link rel = "stylesheet" href = "Assets/Styles/signup.css">
    </head>
    <body>
        <div class="container">
            <div id="first">
                <p class="heading1">Look like you're new here!</p>
                <p class="heading2">Sign up with your email address to get started</p>
                <img src="Assets/Images/login_logo.svg">
            </div>
            <div id="second">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="form" method= "post" id = "form">
                    <div class="section">
                        <input type="text" placeholder = "First name" class = "fields" name = "fname" id = "fname">
                        <span class="error_msg"></span>
                    </div>
                    <div class="section">
                        <input type="text" placeholder = "Last name" class = "fields" name = "lname" id = "lname">
                        <span class="error_msg"></span>
                    </div>
                    <div class="section">
                        <input type="email" placeholder = "Email" class = "fields" name = "email" id = "email">
                        <span class="error_msg"></span>
                    </div>
                    <div class="section">
                        <input type="password" placeholder = "Password" class = "fields" name = "npass" id = "npass">
                        <span class="error_msg"></span>
                    </div>
                    <div class="section">
                        <input type="password" placeholder = "Confirm password" class = "fields" name = "cpass" id = "cpass">
                        <span class="error_msg"></span>
                    </div>
                    <div class="section">
                        <input type="text" placeholder = "Mobile number" class = "fields" name = "mobile" id = "mobile">
                        <span class = "error_msg"></span>
                    </div>
                    <div class="section">
                        <input type="text" placeholder = "Address" class = "fields" name = "address" id = "city">
                        <span class="error_msg"></span>
                    </div>
                    <div class="section">
                        <input type="text" placeholder = "Pincode" class = "fields" name = "pincode" id = "pincode">
                        <span class="error_msg"></span>
                    </div>
                    <input type="button" value="SIGN UP" class = "button" id = "btn">
                </form>
            </div>
        </div>  
        <script src="Assets/Scripts/signup.js"></script>
    </body>
</html> 
<?php        
            include_once 'Database.php';

            function redirect($url)
            {
                header('Location:'.$url);
                exit;
            }

            $db = new Database();
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $email = $_POST["email"];
                $flag = $db->checkEmail($email);
                echo $flag;
                if($flag == 1){
                    $values = array(
                        "fname" => $_POST["fname"],
                        "lname" => $_POST["lname"],
                        "email" => $_POST["email"],
                        "mobile" => $_POST["mobile"],
                        "password" => $_POST["cpass"],
                        "address" => $_POST["address"],
                        "pincode" => $_POST["pincode"]
                    );
                    $db->insertUserDetails($values);
                    redirect("login.php");
                }
                else
                {
                    echo "
                        <style>
                           
                         
                        </style>
                        <script>
                            let box = document.createElement('div');
                            let message = document.createElement('p');
                            message.setAttribute('class','message');
                            message.innerHTML = 'User already exists';
                            box.appendChild(message);
                            box.setAttribute('class','alert');
                            form.appendChild(box);
                            setTimeout(()=>{box.remove();},3000);
                        </script>
                    ";
                }
            }

        ?>