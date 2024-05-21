<?php 
require "connection.php";
?>

<?php

if (isset($_POST['submit'])) {
    $std_name = $_POST['std_name'];
    $destination = $_POST['destination'];
    $given_date = $_POST['given_date'];
    $return_date = $_POST['return_date'];
    $reason = $_POST['reason'];
    $done_by = $_POST['permiter'];
    $level = $_POST['levels'];
    $option = $_POST['std_option'];
    $times = $_POST['backtime'];

    $check = $conn->query("SELECT * FROM all_students WHERE std_names='$std_name' AND Levels='$level' AND std_option='$option'");

    if ($check->num_rows > 0) { // Check if there are rows in the result
        $ins = $conn->query("INSERT INTO `permissions` (`std_names`, `level`, `destination`, `given_date`, `return_date`, `reason`, `permiter_username`, `time_to_go`, `time_to_back`) 
                             VALUES ('$std_name', '$level', '$destination', '$given_date', '$return_date', '$reason', '$done_by', current_timestamp(), '$times')");
        if ($ins) {
            $success="   Permission granted   successfully! ";
        } else {
           $success= "Error in registration: " . $conn->error;
        }
    } else {
        $success= "Student not registered";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kats-permission</title>
    <style>
        /* students css applied */


*{
    margin: 0;
    padding: 0;
}
.main_div{
    display: flex;
}
.second_div{
    background-color: teal;
    padding: 1cm;
    width: 5cm;
    height: 100%;
    position: fixed;
}
/* .user_profile {
    background: orangered;
    padding: 2cm;
    width: -5px;
    border-radius: 50%;
    text-align: center;
} */
p{
    /* margin-left: 1.3cm; */
    color: white;
    font-size: 20px;
    /* margin-left: 18px; */
}

img{
    height: 3cm;
    width: 3cm;
    border-radius: 50%;
    margin-left: 1cm;
}

.user_details{
  
    margin-left: 5.5cm;
    width: 10cm;
    height: 10cm;
    margin-top: 2.5cm;
    padding: 1cm;
}
#pp{
    color: white;
    background-color: orangered;
    width: 15cm;
    padding: 10px;
    border-radius: 10px;
    text-align: center;
}
li{
    margin-left: 2cm;
    margin-top: 1cm;
    /* text-align: center; */
    list-style-type: disc;
    list-style:square;
    font-size: 17.5px;
}
#ss{
    margin-left: 5cm;
    background-color: rgb(148, 126, 126);
    padding: 10px;
    margin-top: 2cm;
    border: 0;
    border-radius: 10px;
    width: 5cm;
    

}
a{color: white;
    text-decoration: none;
}
#dd{
    margin-top: 5cm;
    margin-left: 0;
    padding: 10px;
    width: 3cm;
    background: orangered;
    border-radius: 20px;
    text-align: center;
    margin-left: 25px;
    cursor: pointer;
    border: 0;
}
#dd:hover{
   background: orangered;
   border-radius: 20px;
   text-align: center;
   margin-left: 25px;
   border: 0;
}
/* ion-icon{
    color: white;
    background-color: white;
    font-size: 60px;
} */
.frank11{
margin-left: 2cm;
}

input::placeholder{
    color: teal;
    font-size: 17px;
    text-align: center;
    text-transform: capitalize;
}
input{
    padding: 6px;
    width: 6cm;
    border-radius: 10px;
    outline-color:orange;
}

#button{
    width: 15cm;
    margin-left: -4cm;
    height: 0.9cm;
    border-radius: 10px;
    border: 0;
    background-color:orange;
    color: white;
    cursor: pointer;
}

#ssvv{
    padding: 2px;
    border-radius: 10px;
    text-align: center;
    background-color: gainsboro;
    cursor: pointer;
    transition: 3s ease;
}
#ssvv:hover{
background-color: orangered;
cursor: pointer;
transition: 3s ease;
}
form{
    margin-left: 4cm;
}
a{
    color: black;
    text-decoration: none;
}
a:hover{
    color: white;
}
.mainpart{
    display: flex;
  
}
.first{
    margin-left:-4cm;

}
.second{
    margin-left: 2cm;
}
.main_form{
    width: 15cm;
    box-shadow:3px 2px 15px 3px lightgrey;
    
    padding:40px;
    margin-top: -3.5cm;
    margin-left: 7cm;
}
.img_permit{
    margin-left: 5.9cm;
}
.firstt{
background:rgb(141, 114, 63);
padding-top:1.01cm;
height:16.6cm;
width:20cm;
border-bottom-right-radius:15cm;
top:0;

}


    </style>
</head>
<body>

  <div class="firstt">
<div class="user_details">

<div class="main_form">
<img src="logos.png" alt="user-profile" class="img_permit"><br><br>
<p style="width:15cm;margin-bottom:20px;text-align:center;color:orange;text-transform:capitalize;">
Create An Account To be Authorized
</p>
<form action="#" method="post">
<div class="mainpart">
<div class="first">

        <input type="text" name="std_name" id="std_name" value="" placeholder="User-names"><br><br>
        <input type="text" name="std_option" id="option"value="" placeholder="Phone-number"><br><br>
        <select name="levels" id="levels" style="width:6.5cm;padding:10px;border-radius:15px;margin-left:-0.1cm;outline-color:orange;">
        <option value="#" selected>Select The Gender</option>
        <option value="make">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>

        </select><br><br>


        <input type="text" name="destination" id="destination" value="" placeholder="destination"><br><br>
</div>
<div class="second">
        <input type="number" name="identity" id="date" value="" placeholder=" Identity Card"><br><br>
        <input type="text" name="nationality" id="return_date" placeholder="Nationality"><br><br>
        <input type="email" name="Email" id="time" value="" placeholder="Type Email"><br><br>
        <input type="password" name="password "id="reason" placeholder="Password" ><br><br>
        </div>
        </div>

<input type="file"name="permiter" id="file" style="width:15cm;padding:10px;border-radius:15px;margin-left:-4cm;text-align:center;outline-color:orange;">
 <br><br>

 <button type="submit" name="submit" id="button">PERMIT</button>
 <br><br>
<h4 style="margin-left:-1cm;color:black;"> Have-One<a href="login.php" style="color:orange;">Login</a></h4>
 <div class="success">
    <?php
   if (!empty($success))
    echo "<p style='color: white;background:green;padding:10px;width:14.5cm;margin-left:-4cm;text-align:center;'>$success</p>"
     ?>
 </div>
</form>
</div>
</div>
</body>
<script src="index.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html
