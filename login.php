<?php 
require "connection.php";
session_start();
?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="C:\xamppfrank\htdocs\ramadhan_real\php\logos.png" rel="icon">
  <title>Finance- Login</title>
    <style>
*{
    margin: 0;
    padding: 0;
}

.form-controll{
border-radius:20px;
padding:5cm;
width:4cm;
margin-left:16cm;
margin-top:-10px;
margin-bottom:-1cm;
height:6cm;
box-shadow:3px 2px 15px 3px lightgrey;
}
select,input{
    border-radius:10px;
    padding-left:10px;
    width:9cm;
    margin-left:-2.4cm;
    height:1cm;
    outline-color:orange;
    
}
img{
    margin-top:-4cm;
    width:4cm;
    height:4cm;
    border-radius:50%;
    margin-left:0.2cm;
    margin-bottom:1.8cm;
   
}
#pp{
    width:10cm;
    margin-left:-3.1cm;
    margin-top:-1cm;
    margin-bottom:2cm;
    color:white;
    background:teal;
    text-align:center;
    text-transform:capitalize;
    padding:10px;
    border-radius:5px;
}
input::placeholder{
    
    font-size:18px;
    text-align:center;
}
select{
    color:black;
    text-align:center;
    font-size:19px;
    width:9.3cm;
}
button{
    width:13.8cm;
    margin-left:-4.9cm;
    margin-top:2cm;
    /* margin-bottom:2cm; */
    color:white;
    background:orange;
    text-align:center;
    text-transform:capitalize;
    padding:15px;
    border-radius:5px;
    
    border:0;
    
}
.login-footer{
    display:flex;
    width:13.8cm;
    margin-left:-4.9cm;
    justify-content:space-between;
    margin-top:20px;
}
a{
    color:teal;
    text-decoration:none;
    font-size:19px;
}
.first{
background:rgb(141, 114, 63);
padding-top:1.01cm;
height:16.5cm;
width:20cm;
border-bottom-right-radius:20cm;
top:0;

}
</style>
</head>
<body><hr>
<div class="first">
<div class="form-controll">

<img src="logos.png" alt="kats-logos">


<form method="post" action="">
<!-- <select required name="whosethis">
    <option value="# selected">select your role</option>
    <option value="administrator">DM</option>
    <option value="parents">PARENTS</option>
    <option value="metron">METRON</option>
    <option value="petron">PETRON</option>
</select><br><br> -->
<input type="text" name="names" value="" placeholder="Enter The user-Names"><br><br><br>
<input type="password" name="password" value="" placeholder="Enter The Password"><br><br>

<button type="submit" name="login">LOGIN</button>
<div class="login-footer">
<a href="create.php">Create-Account</a>
<a href="#">Forgot-Password</a>
</div>
</div>

</form>
<?php
if (isset($_POST['login'])) {
    $userrole = $_POST['whosethis'];
    $username = $_POST['names'];
    $password = $_POST['password'];

    $_SESSION['user']=$username;

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM discipline_officers WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check the number of rows returned
    $num = $result->num_rows;


        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
    
        // Check the number of rows returned
        $nums = $result->num_rows;

    if ($userrole == 'administrator' && $num > 0) {
        header("location: admin.php");
        exit(); // Stop execution after redirect
    } else {
        echo "<script>alert('Invalid account!')</script>";
        echo "<script>history.back();</script>";
    }

    if ($userrole == 'petron' && $num > 0) {
        header("location: petrondash.php");
        exit(); // Stop execution after redirect
    } else {
        echo "<script>alert('Invalid account!')</script>";
        echo "<script>history.back();</script>";
    }

    if ($userrole == 'metron' && $num > 0) {
        header("location: metrondash.php");
        exit(); // Stop execution after redirect
    } else {
        echo "<script>alert('Invalid account!')</script>";
        echo "<script>history.back();</script>";
    }

    if ($userrole == 'parents' && $nums > 0) {
        header("location: parentdash.php");
        exit(); // Stop execution after redirect
    } else {
        echo "<script>alert('Invalid account!')</script>";
        echo "<script>history.back();</script>";
    }


}
?>


</div>
</body>
<script src="index.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
