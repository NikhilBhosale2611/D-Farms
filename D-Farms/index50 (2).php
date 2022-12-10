<?php
$insert = false;
if(isset($_POST['email'])){
    $server = "localhost";
    $username = "id15474335_comp";
    $password = "Bhosale#0101";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("conection to this database failed due to" . mysqli_connect_error());

    }
    //echo "huvgugv";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $desc = $_POST['desc']; 
    $sql = "INSERT INTO `id15474335_company`.`farmer` (`name`, `age`, `gender`, `email`, `phone`, `product`, `quantity`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$product', '$quantity', '$desc', current_timestamp());";
    //echo $sql;

    if($con->query($sql) == true){
        //echo "Successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        $not_insert = true;
    }

     $con->close();
}
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="digitalfarmlogo.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-Farms Farmer Form</title>
    <link rel="stylesheet" href="style50.css">
    <link rel="stylesheet" media="screen and (max-width:400px)" href="phone.css">
</head>
<body>
     <img class="farmer9" src="farmf.jpg" alt="IIT Kharagpur"> 
     <h1>Enter the detail of product which you want to sell.<h1>
    <div class="container">
        <!--<h1>Welcome to E-Farm Farmers form</h1>-->
        
        <!--<p> Enter your details and submit this form to confirm your participation</p>-->
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form</p>";
        }
        ?>
        <form action="index50.php" method="post" class="form">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <input type="text" name="product" id="product" placeholder="Enter your product">
            <input type="text" name="quantity" id="quantity" placeholder="Enter your Address">
            <textarea name="desc" id="desc" cols="10" rows="7" placeholder="Enter any other information here"></textarea>
            
            <button class="btn">Submit</button>
            
        </form>

    </div>
    
    <script src="index50.js"></script>
    <!-- INSERT INTO `company` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `product`, `quantity`, `other`, `dt`) VALUES ('1', 'ganesh', '23', 'male', 'this@this.com', '9999999999', 'wheat', '45', 'hbubuvbuhbuh', current_timestamp()); -->
</body>
</html>

