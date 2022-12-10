<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        .gfg {
            width: 100;
	height: 100vh; 
	
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
            margin: 0%;
            position: relative;
        }
  
        .first-txt {
            position: absolute;
            top: 17px;
            left: 1500px;
        }
  
        .second-txt {
            position: absolute;
            top: 17px;
            left: 50px;
        }

        .third-txt {
            font-size: 80px;
            position: absolute;
            top: 80px;
            left: 250px;
            color: blue;
            opacity: 0.4;
        }

        .btn{
    color: red;
    background: transparent;
    padding: 8px 12px;
    font-size: 30px;
    border: 2px solid red;
    border-radius: 14px;
    cursor: pointer;

    </style>
<script>
function welcome(){
  alert("welcome <?php echo  $_SESSION['username']  ?>");

}
</script>


</head>
<body onload="welcome()">
<div class="gfg">
        <img src="village1.jpg">
        <h3 class="first-txt"><a href="logout.php"><button class="btn">Logout</button></a></h3>
        <h3 class="second-txt"><a href="index5.php"><button class="btn">Enter</button></a></h3>
        <h3 class="third-txt"><|| You Are Successfully Login <?php echo  $_SESSION['username']  ?> ||</h3>
    </div>
    
    
    
    
</body>
</html>