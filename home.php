<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        *{
            user-select:none;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
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
#a:hover{
text-decoration:underline;
text-decoration-thickness: 5px;
text-decoration-color: orange;
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
.my-img{
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

.details{
    display:flex;
    margin-top: 7rem;
    padding: 2.5rem;
    border-radius: 8px;
    width:20cm;
    text-align: center;
    margin-left: 4.5cm;
    /* box-shadow: 0px 0px 12px 2px  lightgray; */
  }

  .copy-right p{
    text-align: center;
    margin-left: 17cm;
    position:fixed;
    margin-top:2cm;
    margin-bottom:-1cm;
    
  }
  .copy-right:hover{
   color:orange;
   transition:2s ease-in-out;

}
.div22 img,.div33 img{
    border-radius:10px;
    /* margin-left:-20px; */
}
.div22 img{
    border-bottom-left-radius:30cm;
}

.div33 img{
    border-bottom-right-radius:30cm;
}


.profile{
    margin-top:-25px;
    
}
.text{
    margin-left:1.6cm;
    user-select:none;
    margin-top:-1.5cm;
}

/* .div3,.div2{
  padding: 6rem;
  width:9cm;
  margin-left:-3cm;
  height:2cm;
  border-radius:20px;
  margin-top:-1cm;
  margin:20px;
  box-shadow: 0px 0px 12px 2px  lightgray;  
} */
.div4,.div1{
  padding: 4rem;
  width:1cm;
  margin-left:-4cm;
  height:2cm;
  border-radius:20px;
  margin:20px;
  box-shadow: 0px 0px 12px 2px  lightgray;  
}

.div1:hover,.div4:hover{
  
  width:1cm;
  height:3cm;
  transition:1s ease;
  margin-top:-0.7cm;
  box-shadow: 0px 0px 12px 2px  lightgray;  
}
.img{
    border-radius: 50%;
    height: 50px;
    width: 50px;  
}
.main{
      background-color: rgb(88, 87, 87);;
    margin-left:-20px;
    margin-right:-90px;
    padding-right:17px;
    margin-top:-11rem;
    margin-bottom:-1.5cm;
    height:15.3rem      ;
    width:40.5cm;
    box-shadow: 2px 5px 2px 0px  orange;  
}
#income_img .div2{
    width:1cm;
    text-align:center;
    border-radius:20px;
}
.div22:hover img,.div33:hover img{
    height:5cm;
    transition:2s;

}
.div22 img,.div33 img{
    box-shadow: 0px 0px 1px 2px  lightgray;  
}
    </style>
</head>


<body>
    
    <header>
       
        <div class="logo">
        
        <img src="logos.png" alt="my-logos" class="my-img">
         <div class="text">
         MyFinance
         </div>   
        </div>

        <div class="links">
        <ul>
                <a  id="a" href="home.php">Home</a>
                <a id="a" href="income.php">Income</a>
                <a id="a" href="expense.php">Expenses</a>
                <a id="a" href="report.php">Reports</a>
                <a id="a" href="personalPlan.php">Personal-Plans</a>
                <a id="a" href="#">Who Am I ?</a>
                
</ul>
        </div>

        <div class="profile">
            <?php
        $slct = $conn->query("SELECT * FROM uploads where user_id='4'");
        while($row = $slct->fetch_assoc())
        {?>
            <a href="add_profile.php"><img src="<?php echo $row['file_path']?>" alt="profile" class="my-img"></a>
            <?php
        }

            ?>
           
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

<div class="div1">
<img src="logos.png" alt="image 1" class="img">
</div>
<div class="div22">
<a href="income.php"><img id="income_img" src="income.png" width="300px" height="285px"></a>
</div>

<div class="div33">
<a href="expense.php"><img id="income_img" src="expense.png" width="300px" height="285px"></a>
</div>

<div class="div4">
<img src="logos.png" alt="image 3" class="img">
</div>

</div>
<footer>
<div class="copy-right">
    <p> Developed By Frank &copy;<script> document.write(new Date().getFullYear()); </script> </p>
</div>

</footer>
<div class="main">
</div>
</body>
<script>
    var arrow = document.querySelector('.arrow');
    var dropdown = document.querySelector('.dropdown');

    arrow.addEventListener('click', ()=>{
        if(arrow.innerHTML = "&downarrow;"){
            arrow.innerHTML = "&uparrow;";
        }
        else if(arrow.innerHTML = "&uparrow;"){
            arrow.innerHTML = "&downarrow;"
        }
        else{
            arrow.innerHTML = "&downarrow;";
        }
        dropdown.classList.toggle('dropdown');
        dropdown.classList.toggle('display');
    });
</script>
</html>