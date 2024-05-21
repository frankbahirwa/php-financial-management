<?php
require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updates</title>
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
    padding-left:20px;
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
    padding-left:12px;
  }
  textarea::placeholder{
    color: orange;
    font-size: 20px;
    text-align: center;
  }
  .copy-right p{
    text-align: center;
    margin-left: 1.7cm;
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
                <a href="home.php">Home</a>
                <a href="income.php">Income</a>
                <a href="expense.php">Expenses</a>
                <a href="report.php">Reports</a>
                <a href="personalPlan.php">Personal-Plans</a>
                <a href="#">Who Am I ?</a>
                
            </ul>
        </div>

        <div class="profile">
            <img src="./uploads/frank.jpg" alt="profile">
            <span>Bahirwa-Frank</span>
            <span class="arrow" >&downarrow;</span>
        </div>

    </header>

    <div class="dropdown">
                <a href="add_prolfile.php" >Add Profile</a><br><br>
                <a href="#" >security&privacy</a><br><br>
                <a href="#" >Dark-mode</a><br><br>
                <a href="logout.php" >Logout</a></span><br><br>
            </div>
            <?php 
            if(isset($_GET['Iupdate'])){
                $id = $_GET['Iupdate'];
            $slctt = $conn->query("SELECT * FROM income  where id='$id'");

            if(mysqli_num_rows($slctt)){
            
            while($row = $slctt->fetch_assoc())
            
            {?>
    <div class="details">
    <p style="margin-top:-10px;">Update Moneys From <?php echo $row['source'];?></p>
    <form  method="post">
    <input type="text" name="source_new" value="<?php echo $row['source'];?>" placeholder="Income From!!"><br><br>
    <input type="text" name="amount_new" value="<?php echo $row['amount'];?>" placeholder="Amount"><br><br>
    <input type="date" name="date_new" value="<?php echo $row['Earning_Date'];?>" ><br><br>
    <textarea maxlength="74"  name="reason_new" id="description" cols="30" rows="10" placeholder="Planning For!!!"><?php echo $row['reason']; ?></textarea><br><br>
    <button type="submit" name="ok" id="ok">UPDATE</button>
    </form>
    </div>
    <?php
    }
}
            }


            else if(isset($_GET['Eupdate'])){
                $id=$_GET['Eupdate'];
                $slctt=$conn->query("SELECT * FROM expense  where id='$id'");
    
                if(mysqli_num_rows($slctt)){
                
                while($row=$slctt->fetch_assoc())
                
                {?>
        <div class="details">
        <p style="margin-top:-10px;">Update Moneys For <?php echo $row['paying_for'];?></p>
        <form  method="post">
        <input type="text" name="paying_for_new" value="<?php echo $row['paying_for'];?>" placeholder="expense for !!"><br><br>
        <input type="text" name="amount_new" value="<?php echo $row['amount'];?>" placeholder="Amount"><br><br>
        <input type="date" name="Payed_At_new" value="<?php echo $row['Payed_At'];?>" ><br><br>
        <textarea maxlength="74"  name="reason_new" id="description" cols="30" rows="10" placeholder="reason For!!!"><?php echo $row['reason']; ?></textarea><br><br>
        <button type="submit" name="okk" id="okk">UPDATE</button>
        </form>
        </div>
        <?php
        }
    } 

    if(isset($_POST['okk'])){

        $source=$_POST['paying_for_new'];
        $amount=$_POST['amount_new'];
        $reason=$_POST['reason_new'];
        $date=$_POST['Payed_At_new'];
    
    $updd=$conn->query("UPDATE expense SET paying_for='$source',amount='$amount',Payed_At='$date',reason='$reason' where id='$id' ");
 
    
    }
}
    ?>

<footer>
<div class="copy-right">
    <p> Developed By Frank &copy;<script> document.write(new Date().getFullYear()); </script> </p>
</div>

</footer>
<?php
if(isset($_POST['ok'])){

    $reason=$_POST['reason_new'];
    $amount=$_POST['amount_new'];
    $source=$_POST['source_new'];
    $date=$_POST['date_new'];

$upd=$conn->query("UPDATE income SET source='$source',amount='$amount',Earning_Date='$date',reason='$reason' where id='$id'");

}






?>

</body>
<script src="script.js"></script>
</html>