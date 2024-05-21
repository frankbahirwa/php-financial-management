<?php
require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encome-Recording</title>
    <!-- <link rel="stylesheet" href="expense.css"> -->
    <style>
        *{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
  }
body{
    overflow:hidden;
}

  header{
      position: fixed;
      left: 0 ;
      right: 0;
      top: 0;
      box-shadow: 0px 0px 12px 2px  lightgray;
      display: flex;
      align-items: center;
      padding: 15px;
      padding-left: 20px;
      padding-right: 60px;
      justify-content:space-between ;
  }
  
  ul{
      list-style: none;
      display: flex;
      align-items: center;
      justify-content: center;
  }
  
  li{
      padding: 12px;
  }
  
  .logo{
      font-size: 40px;
      color: orange;
  }
  
  .profile{
      display: flex;
      align-items: center;
      flex-direction: column;
  }
  
  
  .arrow{
      float: right;
      margin-left:4.9cm;
      margin-right:-1.5cm;
      margin-top:-1.5cm;
      padding: 5px;
      height:20px;
      text-align:center;
      width:20px;
      color: white;
      cursor:pointer;
      border-radius: 50%;
      background-color:orange;
  }
  a{
      cursor: pointer;
      text-decoration: none;
      color: gray;
      font-size: 19px; 
      padding-left: 20px; 
  }
  .display,.dropdown{
     
          float: right; 
           margin-top: 7rem;
           padding: 2.5rem;
           text-decoration: none;
           border-radius: 8px;
           box-shadow: 0px 0px 12px 2px  lightgray;
       }
  img{
      border-radius: 50%;
      height: 50px;
      width: 50px;
  }
  
  .dropdown{
     float: right; 
      margin-top: 7rem;
      padding: 2.5rem;
      display: none;
      border-radius: 8px;
      box-shadow: 0px 0px 12px 2px  lightgray;
  }
  #a:hover{
text-decoration:underline;
text-decoration-thickness: 5px;
text-decoration-color: orange;
}
  
   .dropdown a{
      cursor: pointer;
      text-decoration: none;
      color: gray;
      font-size: 19px;
  }
  .profile{
      margin-top:-25px;
  }
  .details{
    margin-top: 7rem;
    padding: 2.5rem;
    border-radius: 8px;
    width:15cm;
    text-align: center;
    margin-left: 12cm;
    box-shadow: 0px 0px 12px 2px  lightgray;
  }
  input {
    width: 10cm;
    height: 1.5rem; 
    font-size:20px;
    border-radius: 5px;
    border: 1px solid gray; 
    padding: 0.5rem;
    outline-color:orange;
  }
  input::placeholder{
    color: orange;
    font-size: 20px;
    text-align: center;
  
  }
  /* input:-ms-input-placeholder {
    color: initial;
    font-size: initial;
    text-align: initial;
} */

textarea{
    width: 10.4cm;
    height: 1cm;
    border-radius:5px;
    font-size:20px;
    outline-color:orange;
  }
  textarea::placeholder{
    color: orange;
    font-size: 20px;
    text-align: center;
  }
  .copy-right p{
    text-align: center;
    margin-left: 2cm;
    margin-top:0.5cm;
  }
  .copy-right:hover{
   color:orange;
   transition:2s;

}
button{
    background:orange;
    width:15cm;
    height:0.8cm;
    border:none;
    border-radius:5px;
    color:white;
    font-size:20px;
    cursor:pointer;
}

.text{
    margin-left:1.6cm;
    margin-top:-1.5cm;
} 
    </style>
</head>
<body>
    
    <header>
              
    <div class="logo">
        
        <img src="logos.png" alt="my-logos">
         <div class="text">
         MyFinance
         </div>   
        </div>

        <div class="links">
        <ul>
                <a id="a" href="home.php">Home</a>
                <a id="a" href="income.php">Income</a>
                <a id="a" href="expense.php">Expenses</a>
                <a id="a" href="report.php">Reports</a>
                <a id="a" href="personalPlan.php">Personal-Plans</a>
                <a id="a" href="#">Who Am I ?</a>
                
            </ul>
        </div>

        <div class="profile">
            <img src="./uploads/frank.jpg" alt="profile">
            <span>Bahirwa-Frank</span>
            <span class="arrow" >&downarrow;</span>
        </div>

    </header>

    <div class="dropdown">
                <a href="add_profile.php" >Add Profile</a><br><br>
                <a href="#" >security&privacy</a><br><br>
                <a href="#" >Dark-mode</a><br><br>
                <a href="logout.php" >Logout</a></span><br><br>
            </div>
            <div class="details">
    <p style="margin-top:-10px;">Record Incomes</p>
    <form action="#" method="post">
        <input type="text" name="source" value="" placeholder="Income From!!"><br><br>
        <input type="text" name="amount" value="" placeholder="Amount"><br><br>
       
        <input type="date" name="date" value="" ><br><br>
        <textarea maxlength="74" name="reason" id="description" cols="30" rows="10" placeholder="Planning For!!!"></textarea><br><br>
        <button type="submit" name="ok" id="ok">ADD</button>

    </form>
</div>
<footer>
<div class="copy-right">
    <p> Developed By Frank &copy;<script> document.write(new Date().getFullYear()); </script> </p>
</div>

</footer>
<?php
if(isset($_POST['ok'])){
    $reason=$_POST['reason'];
    $amount=$_POST['amount'];
    $$plan_for=$_POST['plan_for'];
    $source=$_POST['source'];
    $date=$_POST['date'];
    $ins=$conn->query("INSERT INTO income(source,amount,reason,Earning_Date) VALUES('$source','$amount','$reason','$date')");
    if($ins){
        echo "<p>Successifully Recorded</p>";
    }
}

?>

</body>
<script src="script.js"></script>
</html>