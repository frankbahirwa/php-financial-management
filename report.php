<?php 
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial-Reports</title>
    <!-- <link rel="stylesheet" href="expense.css"> -->
    <style>
             *{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
    margin:0;
    padding:0;  
}
  html,body{
    scroll-behavior:smooth;
  }
 .copy-right{
    margin-left:16cm;
    margin-top:15px;
 }
  header{
      position: fixed;
      left: 0 ;
      width:100%;
      right: 0;
      top: 0;
      box-shadow: 0px 0px 12px 2px  lightgray;
      display: flex;
      align-items: center;
      padding: 15px;
      justify-content: space-between;
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
  .arrow2{
      float:right;
      margin-left:1cm;
      margin-right:-0.6cm;
      margin-top:-1.5cm;
      padding: 5px;
      height:20px;
      text-align:center;
      width:20px;
      color: white;
      margin-top:-1cm;
      cursor:pointer;
      border-radius: 50%;
      background-color:orange; 
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
      /* background-color:orange; */
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

.display2,.dropdown2{
     
display:block;
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
    margin-top: 6rem;
    padding: 2.5rem;
    border-radius: 8px;
    width:31.5cm;
    height: 10.9cm;
    text-align: center;
    margin-left: 3cm;
    box-shadow: 0px 0px 12px 2px  lightgray; 
    overflow: scroll;
  }
  .details::-webkit-scrollbar{
    display: none;
  }
  input {
    width: 5cm;
    height: 1.5rem; 
    font-size:20px;
    border-radius: 5px;
    border: 1px solid gray; 
    padding: 0.5rem;
    outline-color:orange;
  }
select{
    margin-left:25cm;
    width: 5cm;
    height: 1.1cm; 
    font-size:20px;
    border-radius: 5px;
    border: 1px solid gray; 
    outline-color:orange;
    
}

  #date1{
    margin-left:1cm;
  }
  #date2{
    margin-left:1cm;
  }
  button {
    width: 3cm;
    height: 1.1cm; 
    border-radius: 5px;
    margin-left:1cm;
    border: 1px solid gray;
    background:orange;
    color:white;
    border:0; 
    padding: 0.5rem;
    margin-bottom:1px;
    font-size:100%;
    cursor: pointer;
  }

  .text{
    margin-left:1.6cm;
    margin-top:-1.5cm;
}
.dropdown2{
    display:flex;
    /* position:fixed;
    margin-bottom:2cm;
    margin-top:-1cm;
    padding:1cm;
    box-shadow: 0px 0px 12px 2px  lightgray;  */
    /* background:green; */
}
form{
    margin-top:-0.5cm;
    margin-left:-25cm;
}
table{
    margin-top:1cm;
    border-collapse:collapse;
    
}
th{
    width:5cm;
    padding:7px;
}
#tableid{
    padding:20px;
    text-transform:capitalize;
}
.hi{
    position: fixed;
}
#a:hover{
text-decoration:underline;
text-decoration-thickness: 5px;
text-decoration-color: orange;

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
            <span class="arrow" ></span>
        </div>

    </header>

    <div class="dropdown">
                <a href="#" >Add Profile</a><br><br>
                <a href="#" >security&privacy</a><br><br>
                <a href="#" >Dark-mode</a><br><br>
                <a href="logout.php" >Logout</a></span><br><br>
            </div>
            <div class="details">
    <p style="margin-top:-1cm;margin-bottom:1cm;">This Is My Reports</p>
    <span class="arrow2" >&downarrow;</span>
<div class="dropdown2">
    <form action method="post" onsumit="validate();">
        <select name="role" id="role">
            <option value="#" selected>What To Look For !!</option>
            <option value="income">Incomes</option>
            <option value="expense">Expenses</option>
        </select>
        From
        <input type="date" name="date1" id="date1" value="" placeholder="Enter The Date From!! ">To
        <input type="date" name="date2" id="date2" value="" placeholder="Enter The Date To!! ">
        <button type="submit" name="ok">Check</button>
    </form>
    </div> 
    <div class="table_show">
        <table border="1">
        <tr>
<td colspan="8" id="tableid">calculated reports for your financial use.</td>
</tr>
<tr>
<th>Serial Number</th>
<th>Source/Expense</th>
<th>Amount</th>
<th>Reason</th>
<th>Time</th>
<th>Action</th>
</tr>
<?php 

if(isset($_POST['ok']))  { 

$role=$_POST['role'];  
$start=$_POST['date1'];
$end=$_POST['date2'];


if($role=='income'){?>
 <td colspan="6" style="background:black;color:orange;">THis Is Your Detailed Incomes</td>
<?php

$slctt=$conn->query("SELECT * FROM income WHERE Earning_Date BETWEEN '$start' AND '$end'");

if(mysqli_num_rows($slctt)){

while($Row=$slctt->fetch_assoc())

{?>
        <tr>
            <td><?php echo $Row['id'];?></td>
            <td><?php echo ucfirst($Row['source']);?></td>
            <td><?php echo $Row['amount'];?>  Rwf</td>
            <td><?php echo ucfirst($Row['reason']);?></td>
            <td><?php echo $Row['Earning_Date'];?></td>

            <td>
    <a  href="?delete=<?php echo $Row['id']?>"><img src="icon1.png"></a>
    <a href="incomes_update.php?Iupdate=<?php echo $Row['id']?>"><img src="icon2.png"></a>
</td>
        </tr>
<?php
 }

 if(isset($_GET['delete'])){
    $id=$_GET['delete'];

    $del=$conn->query("DELETE FROM income where id='$id'");
    if($del){
        echo "the  user is deleted";
    }
 }
    }

    } 

else if($role=='expense')  {?>
 <td colspan="6" style="background:black;color:orange;">This Is Your Detailed Expenses</td>
<?php
$slct=$conn->query("SELECT * FROM expenses  where Payed_At BETWEEN '$start' AND '$end' ");
        
if( mysqli_num_rows($slct)){

while($Row=$slct->fetch_assoc())

{?>

        <tr>
            <td><?php echo $Row['id'];?></td>
            <td><?php echo ucfirst($Row['paying_for']);?></td>
            <td><?php echo $Row['amount'];?></td>
            <td><?php echo ucfirst($Row['reason']);?></td>
            <td><?php echo $Row['Payed_At'];?></td>

<td>
    <a  href="?delete=<?php echo $Row['id']?>"><img src="icon1.png"></a>
    <a href="incomes_update.php?Eupdate=<?php echo $Row['id']?>"><img src="icon2.png"></a>
</td>

        </tr>

<?php
 }
  } 
    }
       
else{
            echo "<script>alert('Try To Enter The Valid Date');</script>";
        }

}       

?>

<tr>
    <td colspan="6" style="background:black;color:orange;">Short Summery About Your MYFinance </td>
</tr>
<tr>


<?php

$income_query =("SELECT amount FROM income");
$income_result = $conn->query($income_query);

$expense_query = "SELECT amount FROM expenses";
$expense_result = $conn->query($expense_query);

$income_sum = 0;
$expense_sum = 0;

if ($income_result->num_rows > 0) {

while($row = $income_result->fetch_assoc()) {
        $income_sum += $row["amount"];
}

if ($expense_result->num_rows > 0) {

while ($row = $expense_result->fetch_assoc())

  $expense_sum += $row["amount"];

  $result=$income_sum - $expense_sum;
    
{
    if($expense_sum>$income_sum)
    {?>
        <td colspan="8" id="tableid"><p style="padding:0;margin-left:-26.5cm;margin-bottom:5px;margin-top:3px;font-size:20px;">Income :<?php echo $income_sum;?>Rwf </p><hr><p style="padding:0;margin-left:-26cm;margin-bottom:-5px;margin-top:3px;">Profit :<?php echo "Losses Occurs";?> </p> <br> <hr><p style="padding:0;margin-left:-25.3cm;margin-bottom:-15px;margin-top:10px;color:blue;">Net Balance : <?php echo $result;?>  RWF<p></td>
        <?php
    }
    else 
    
    {?>
        
        
        <td colspan="8" id="tableid"><p style="padding:0;margin-left:-26.7cm;margin-bottom:-5px;margin-top:-3px;">Income :<?php echo $income_sum;?>Rwf </p><hr><p style="padding:0;margin-left:-26.5cm;margin-bottom:-5px;margin-top:3px;">expense :<?php echo $expense_sum;?>Rwf </p><hr><p style="padding:0;margin-left:-25.7cm;margin-bottom:-5px;margin-top:3px;">Profit :<?php echo "You Still In Profit";?> </p> <hr><p style="padding:0;margin-left:-25.3cm;margin-bottom:-15px;margin-top:10px;color:blue;">Net Balance : <?php echo $result;?>  RWF<p></td>
    <?php
    }

   


}

}
}
           
?>
</tr>

</table>
</div>
</div>
<footer>
<div class="copy-right">
<p> Developed By Frank &copy;<script> document.write(new Date().getFullYear()); </script> </p>
</div>
</footer>
</body>
<script src="validator.js"></script>
</html>