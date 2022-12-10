<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <script>
    function myFunction() {
        var x;
        var r = confirm("For Better Experience Please Enable Desktop Mode Of Your Device");
        if (r == true) {
            x = "Your Data is Cleared";
            window.location.href = "shoping.php";
        }
        
        
    }
</script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Navbar with Header</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
  <!-- Style.css -->
  <link rel="stylesheet" href="homefinal.css">
</head>
<body>

  <div class="banner"></div>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-mainbg outset">
    <!-- Logo -->
    <img src="prop1.png" id="prop" alt="">
     <!--<img src="prop1" alt=""> -->
    <a class="navbar-brand navbar-logo" href="#"> D-Farm Website</a>
    <!-- Collapse Button -->
    <button 
      class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars text-white"></i>
    </button>
    <!-- Links -->
    <div 
      class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <!-- For Styling -->
            <div class="hori-selector">
              <div class="left"></div>
              <div class="right"></div>
            </div>
            <!-- Nav Links -->
            <li class="nav-item">
                <a 
                  class="nav-link" href="#Dashboard">
                  <i 
                    class="fas fa-tachometer-alt">
                  </i>Dashboard
                </a>
            </li>
            <li class="nav-item active">
                <a 
                  class="nav-link" href="#Address">
                  <i 
                    class="far fa-address-book">
                  </i>Address Book
                </a>
            </li>
            <li class="nav-item">
                <a 
                  class="nav-link" href="#Components">
                  <i class="far fa-clone">
                  </i>Components
                </a>
            </li>
            <li class="nav-item">
                <a 
                  class="nav-link" href="#Calender">
                  <i 
                    class="far fa-calendar-alt">
                  </i>Calendar
                </a>
            </li>
            <li class="nav-item">
                <a 
                  class="nav-link" href="#Charts">
                  <i 
                    class="far fa-chart-bar">
                  </i>Charts
                </a>
            </li>
            <li class="nav-item">
                <a 
                  class="nav-link" href="#Documents">
                  <i class="far fa-copy">
                  </i>Documents
                </a>
            </li>
            <li class="nav-item">
                <a 
                  class="nav-link" href="logout.php">
                  <i class="fa fa-sign-out" style="font-size:48px;color:white"></i>Logout
                </a>
            </li>
        </ul>
    </div>
  </nav>

  <!-- -------------------------------------------------------------------- -->


  <div class="container">
    <div class="container1">
      <h1>Our Services</h1>
      <center><hr width="100px;" color="skyblue;" size="10"></center>
      <p>We specialise in intelligent and effective search and believesin the power of
        partnership to grow Business</p>
    </div>
  </div>


  <div id="containercardA" class="container">


    <div class="card" style="width: 18rem;">
      <img src="shop.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Shopping Section</h5>
        
        <a href="shoping.php" class="btn btn-primary" onclick="myFunction()">Enter</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="weather.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Weather Report</h5>
        
        <a href="weather.html" class="btn btn-primary">Enter</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="info.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">News Section</h5>
        
        <a href="index50.php" class="btn btn-primary">Enter</a>
      </div>
    </div>


  </div><br>




  <div id="containercardB" class="container">


    <div class="card" style="width: 18rem;">
      <img src="farmerhome.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Farmer Section</h5>
        
        <a href="index50.php" class="btn btn-primary">Enter</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="farmer29.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Company Section</h5>
        
        <a href="index25.php" class="btn btn-primary">Enter</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="team.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">DFarm Team</h5>
        
        <a href="index3.html" class="btn btn-primary">Enter</a>
      </div>
    </div>


  </div>


<div class="footer">
    <p>@2021 Copyright by AIT .

      All Rights Reserved
      
      </p>
  </div>
  
  
  

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <!-- Custom Script -->
  <script src="homefinal.js"></script>
</body>
</html>