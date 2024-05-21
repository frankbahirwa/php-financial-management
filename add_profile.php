<?php 
require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense-Recording</title>
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
    margin-top: 13rem;
    padding: 2.5rem;
    border-radius: 8px;
    width:15cm;
    text-align: center;
    margin-left: 11.5cm;
    box-shadow: 0px 0px 12px 2px  lightgray;
  }
  #a:hover{
text-decoration:underline;
text-decoration-thickness: 5px;
text-decoration-color: orange;
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
    margin-left: -0.6cm;
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
                <a href="#" >Add Profile</a><br><br>
                <a href="#" >Security & Privacy</a><br><br>
                <a href="#" >Dark-Mode</a><br><br>
                <a href="logout.php" >Logout</a></span><br><br>
            </div>
            <div class="details">
    <p style="margin-top:-10px;font-size:20px;">Post - Addition</p>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image" accept="image/*">
        <BR></BR>
        <textarea maxlength="74" name="reason" id="description" cols="30" rows="10" placeholder="Description"></textarea><br><br>
        <button type="submit" value="Upload Image" name="submit" id="ok">Post</button>
    </form>
</div>
<footer>
<div class="copy-right">
    <p> Developed By Frank &copy;<script> document.write(new Date().getFullYear()); </script> </p>
</div>

</footer>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    // Define the target directory where images will be stored
    $target_dir = "uploads/";

    // Ensure the uploads directory exists, if not, create it
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Specify the path of the file to be uploaded
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Check if the image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        // Check file size (5MB maximum)
        if ($_FILES["image"]["size"] <= 5000000) {
            // Allow certain file formats
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $allowed_types = array("jpg", "jpeg", "png", "gif");

            if (in_array($imageFileType, $allowed_types)) {
                // Try to upload file
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // Insert file information into the database
                    $stmt = $conn->prepare("INSERT INTO uploads(file_path,user_id) VALUES ('$target_file','1')");

                    if ($stmt->execute()) {
                        echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded and saved to the database.";
                    } else {
                        echo "Sorry, there was an error saving your file to the database.";
                    }

                    $stmt->close();
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            }
        } else {
            echo "Sorry, your file is too large.";
        }
    } else {
        echo "File is not an image.";
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
</body>
<script src="script.js"></script>
</html>