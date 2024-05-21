<?php 
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal-Plan</title>
    <!-- <link rel="stylesheet" href="expense.css"> -->
    <style>
             *{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
  }
  html,body{
    scroll-behavior:smooth;
  }
 .copy-right{
    margin-left:15cm;
    margin-top:-8px;
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
      margin-left:-1cm;
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

  li{
    width:40cm;
    margin-top:0.5cm;
    content:left;
    border-radius:8px;
  }

  .details{
    margin-top: 6rem;
    padding: 2.5rem;
    border-radius: 8px;
    width:31.5cm;
    height: 11cm;
    text-align: center;
    margin-left: 1.8cm;
    box-shadow: 0px 0px 12px 2px  lightgray; 
    overflow: scroll;
  }
  .details::-webkit-scrollbar{
    display: none;
  }
  /* input {
    width: 5cm;
    height: 1.5rem; 
    font-size:20px;
    border-radius: 5px;
    border: 1px solid gray; 
    padding: 0.5rem;
    
  } */


  /* button {
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
  } */

  .text{
    margin-left:1.6cm;
    margin-top:-1.5cm;
}






            /* Include the padding and border in an element's total width and height */
            * {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
ul {
  margin: 0;
  padding: 0;
}

/* Style the list items */
ul li {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;

  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ul li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header {
  /* background-color: #f44336; */
  padding: 30px 40px;
  color: white;
  text-align: center;
  box-shadow:0px 0px 12px lightgray;
}

/* Clear floats after the header */
.header:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the input */
input {
  margin: 0;
  border: 1px solid gray;
  border-radius: 10px;
  width: 75%;
  padding: 10px;
  float: left;
  font-size: 16px;
}

#a:hover{
transition:0.1s;

margin-top:-10px;
}

/* Style the "Add" button */
.addBtn {
  padding: 10px;
  width: 15%;
  background: orange;
  color:white;
  float: left;
  text-align: center;
  border-top-right-radius:10px;
  border-bottom-right-radius:10px;
  margin-left:-3cm;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border:1px solid gray;
}


.addBtn:hover {
  background-color: #bbb;
}
#crd{
background:gray;
padding:2px;
color:white;
font-family:font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  ;
}

#crd{
  color:blue;
  margin-left:5cm;
  margin-right:-20cm;
  position:relative;
  background:white;
}
.crd{
  position:fixed;
  margin-left:16.5cm;
}

#expanded{
  margin-top:-1.3cm;
  margin-left:29cm;
  height:20px;
  width:20px;
}
#expanded:hover{
  background:red;
  color:white;
  
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
                <a id="a" " href="home.php">Home</a>
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
                <a href="#" >Logout</span><br><br>
            </div>
            <div class="details">
    <!-- <p style="margin-top:-1cm;margin-bottom:1cm;">This Is My Reports</p> -->
    <!-- <span class="arrow2" >&downarrow;</span> -->

    <div class="table_show">
      

<div id="myDIV" class="header">
  <p style="color:orange;font-size:20px;">My Personal Plans</p>
  <form action="#" method="post">
  <input type="text" id="myInput" name="task" placeholder="Type The Task Title....">
  <button type="submit" name="submit" class="addBtn">Add</button>
  </form>
</div>

<?php

if(isset($_POST['submit'])){
    $task = $_POST['task'];

    $save = mysqli_query($conn , "INSERT INTO plans values('','$task')");
   

}

$retrive = mysqli_query($conn , "SELECT * FROM plans");

while($data = mysqli_fetch_assoc($retrive)){
 echo " <ul id='myUL'><li> " .$data['task']; ." </li></ul>
"; 

}
?>


</body>
</html>

</div>
</div>
<footer>
<div class="copy-right">
<p> Developed By Frank &copy;<script> document.write(new Date().getFullYear()); </script> </p>
</div>
</footer>
</body>
</html>