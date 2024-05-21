
<?php
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="fontawesome.js"></script>
    <title>Sign in & Sign Up</title>


    <!-- <link rel="stylesheet" href="../fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css"> -->

    <link rel="stylesheet" href="./styles/index.css">
    <style>
        .message {
            position: absolute;
            color: red;
            z-index: 100000;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 1px 3px 10px 3px rgba(244, 244, 244, .8);
            margin: 20px;
        }
        /* .form2{
            background:blue;
            margin-top:-7cm;
        } */
        .sign-up-form{
        width:8cm;
        padding-bottom:1cm;
        /* margin-left:4cm; */
        box-shadow:0px 0px 12px lightgray;
        }
        .sign-up-form input{
            outline-color:orange;
            padding-left:5px;
        }
        .signin-signup{
        width:12cm;
        text-align: center;
        box-shadow:0px 0px 12px lightgray;
        }
        .signin-signup input{
            outline-color:orange;
            padding-left:5px;
            
            margin-left: -2;
        }
    </style>
</head>

<body>
    
    <div class="container sign-up">
        <div class="forms-container">
            <div class="cont-slide" style="background:rgb(116, 78, 9);"></div>
            <div class="signin-signup">
                <form action="#" method="post" class="sign-in-form">
                    <h2 class="title" style="color:orange;">Sign in</h2>
                    <div>
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Username or Email" id=""  style="background-color: blck;width:9cm;">
                    </div><br><br>
                    <div>
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" id=""  style="background-color: blck;width:9cm;">
                    </div><br><br>
                    <div  style="background-color: blck;width:9cm;">
                        <a href="./" style="color: black;" >Forget password?</a>
                    </div>
                    <input type="submit" name="login" value="Login" class="btn solid" style="border:0;width:10cm;border-radius:10px;background:orange;">
                </form>


                <?php
if(isset($_POST['signup'])){
    $username = htmlspecialchars($_POST['username']);
    $gender = $_POST['gender']; 
    $email = htmlspecialchars($_POST['email']);
    $pass   = $_POST['password'];    
   $ins=$conn->query("INSERT INTO `users` (`username`,`gender`, `email`, `password`) VALUES ('$username', '$gender', '$email', '$pass')");
   
   if($ins){
    header("location:home.php");
   }

}

?>
                <form action="#" method="post" class="sign-up-form">
                    <span id="back" style="top: 10px;" onclick="document.location.assign('../index.php')"><i class="fas fa-arrow-left"></i></span>
                    <h2 class="title" style="color:orange;">Create Account</h2>
                    <div>
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" id="" style="background-color: blck;width:9cm;">
                    </div><br><br>
                    
                    <div>
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" placeholder="Email" id="" style="background-color: blck;width:9cm;">
                    </div><br><br>
                    <div>
                        <i class="fas fa-phone"></i>
                        <input type="number" name="phone" placeholder="Enter Phone" id="" style="background-color: blck;width:9cm;">
                    </div><br><br>
                    <div>
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" id="" style="background-color: blck;width:9cm;">
                    </div><br><br>
                    <div>
                        <i class="fas fa-geneder"></i>
                        <select name="gender" id="" style="height:2.7rem;width:22rem;border-radius:10px;border-color:lightblue;outline-color:orange;">
                            <option value="#" selected>Select The Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div><br><br>
                    <input type="submit" name="signup" value="Sign up" style="border:0;width:10cm;border-radius:10px;background:orange;">
                </form>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content" >
                        <span class="bb2" onclick="document.location.assign('../index.php')"><i class="fas fa-arrow-left"></i></span>
                        <h3>Hello, Friend!</h3>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="btn transparent" id="sign-up-btn">Sign up</button>
                    </div>
                    <img src="../image/imgLogin/undraw_content_re_33px.svg" class="image" alt="">
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>Welcome Back!</h3>
                        <p>To keep connected us please login with your personal info</p>
                        <button class="btn transparent" id="sign-in-btn">Sign in</button>
                    </div>
                    <img src="../image/imgLogin/undraw_login_re_4vu2.svg" class="image" alt="">
                </div>
            </div>
        </div>

    </div>
    <?php
if (isset($_POST['login'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];

    $_SESSION['user']=$username;

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
    
        // Check the number of rows returned
        $nums = $result->num_rows;

        if($nums > 0){
            header("location:home.php");
           } else {
        echo "<script>alert('Invalid Account !!!')</script>";
        echo "<script>history.back();</script>";
    }

}
?>
<script src="./js/index.js"></script>
</body>
</html>