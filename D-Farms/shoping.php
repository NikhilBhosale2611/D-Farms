<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>





<!doctype html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="digitalfarmlogo.png" />
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" href="shoping.css">
  <link rel="stylesheet" media="screen and (max-width:400px)" href="homeshopping.css">

  <title>D-Farms Shopping Page</title>
  <script src="https://kit.fontawesome.com/0de29952d6.js" crossorigin="anonymous"></script>

  <script>

    function Delete(e) {
      let items = [];
      JSON.parse(localStorage.getItem('items')).map(data => {
        if (data.id != e.parentElement.parentElement.children[0].textContent) {

          items.push(data);

        }
      });
      localStorage.setItem('items', JSON.stringify(items));
      window.location.reload();
    };
  </script>
</head>

<body>

  <div class="navbarr">
    <div class="ef">
      <div class="eflogo">
        <img src="prop1.png " id="eflogo" alt="" srcset="">
      </div>
      <div class="efname">
        <h3>E-Farms</h6>
      </div>
    </div>
    <div id="sch">
      <H6>search</H6>
    </div>

    <div class="searchbx">
      <input type="text" style="width: 90%;margin-top: 0.5rem;">
      <button style="background-color: #FFBF00;margin-left: -0.3rem;border: none;
      width: 3rem;
      height: 28px;
      border-radius: 6%;color: white;">Go</button>
    </div>


    <div class="lang">
      <!-- <div class="container"> -->
      <div class="downarr">
        <!-- Trigger the modal with a button -->
        <img src="india.png" class="india" data-toggle="modal" data-target="#myModal" alt="" srcset="">

        <!-- <i class='fas fa-angle-down downarr' style='font-size:48px;color:white'></i> -->
        <i style='font-size:24px' class='fas'>&#xf107;</i>
      </div>

      <br>
      <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: #232F3E; color: white;">
              <h4 class="modal-title">Choose Your Language</h4>
              <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
            </div>

            <div class="modal-body">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  <h6> Engish</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  <h6> हिन्दी</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  <h6> मराठी</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  <h6> ગુજરાત</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  <h6> ಕನ್ನ</h6>
                </label>
              </div>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal"
                style="background-color: #232F3E;">Apply</button>

            </div>
          </div>

        </div>
      </div>

      <!-- </div> -->




    </div>
    <div class="login">
      <button style="width: 100%; margin-top: 9px;
       border: white;
       color: #191970;
       background-color: white;"><b>Login</b></button>
    </div>
    <div class="more" style="color: white; margin-left: 2%; margin-top: 18px;">

      <b>More</b>

    </div>

    <div class="cart iconShopping">
      <p>0</p>
      <img src="cart1.jpg" alt="" srcset="">
    </div>
    <div class="menu">

      <div class="offcanvas offcanvas-end" id="demo">
        <div class="offcanvas-header" style="background-color: #232F3E;">
          <div class="ofcanvaslogo ">
            <img src="prop1.png" alt="" srcset="">
          </div>
          <h1 class="offcanvas-title" style="color: white;"><b> E-Farms</b></h1>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" style="color: red;"></button>
        </div>
        <div class="offcanvas-body ">
          <h4 class="listofcan">About</h4>
          <h4 class="listofcan">Your Account</h4>
          <h4 class="listofcan">Your Orders</h4>
          <h4 class="listofcan">Clients</h4>
          <h4 class="listofcan">Customer Service</h4>
          <h4 class="listofcan">Contacts</h4>
          <h4 class="listofcan"><a href="logout.php">Logout</a></h4>


        </div>
      </div>

      <div class="container-fluid mt-3">

        <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
          Toggle Right Offcanvas
        </button> -->
        <img src="menu.png" data-bs-toggle="offcanvas" data-bs-target="#demo" alt="" srcset="">
      </div>



    </div>

  </div>
  <!-- ---------------------------------------------------------------------------- -->
  <div class="navbar2" style="display: flex;">
    <div class="navbar2a">
      <p class="nav2detail">Tractors</p>
      <p class="nav2detail">Best sellers</p>
      <p class="nav2detail">Seeds</p>
      <p class="nav2detail">Crops</p>
      <p class="nav2detail">Fertilizers</p>
      <p class="nav2detail">Insecticides</p>
      <p class="nav2detail">Todays deal</p>
      <p class="nav2detail">Efarms pay</p>

    </div>
    <div class="navbar2b">
      <p class="nav2bdetail">Join Efarm &nbsp;&nbsp;<vr style="color: #FFBF00;">&nbsp;&nbsp; </p>
      <button type="button" class="btn btn-outline-danger btn-danger nav2b1detail" style = "margin-top:-2px;"><a href="logout.php" style = "text-decoration:none; color:white;">Logout</a></button><!--<p class="nav2b1detail"><a href="logout.php">Logout</a></p>-->
    </div>
  </div>

  <!-- ------------------------------------------------------- -->
  <div class="add">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="carsel1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 style="color: white;">Bigger & Better Savings</h1>
            <h4 style="color: white;">Wallpaper 3D max</h4>>
            <button type="button" class="btn btn-light btn-lg"><b> Add to Cart</b>&nbsp;&nbsp;<i
                class='fas fa-angle-right' style='font-size:28px; color:black'></i></button>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="carsel2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 style="color: blue;">Bigger & Better Savings</h1>
            <h4 style="color: blue;">Wallpaper 3D max</h4>>
            <button type="button" class="btn btn-light btn-lg"><b> Add to Cart</b>&nbsp;&nbsp;<i
                class='fas fa-angle-right' style='font-size:28px; color:black'></i></button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Consumables/SVD/Dec/1500X300-SVD-DEC.jpg"
            class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h1 style="color: white;">Bigger & Better Savings</h1> -->
            <!-- <h4 style="color: white;">Wallpaper 3D max</h4>> -->
            <button type="button" class="btn btn-light btn-lg"><b> Add to Cart</b>&nbsp;&nbsp;<i
                class='fas fa-angle-right' style='font-size:28px; color:black'></i></button>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- ------------------------------- -->





  <div class="main">
    <div class="head">
      <h1>Fresh Fruits</h1>
    </div>
    <div class="itemsBox">

      <div class="item">
        <img src="apple.jpg" alt="Men's Solid Regular Fit T-Shirt" />
        <div class="itemInfo">
          <h1>Apple</h1>
          <p>$<span>42.50</span></p>
          <!--<a href="#" onclick="alert('I am a popup!');">Link</a>-->
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="banana.jpg" />
        <div class="itemInfo">
          <h1>Banana</h1>
          <p>$<span>15.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <!-- <div class="item">
        <img src="grapes.jpg" />
        <div class="itemInfo">
          <h1>Grapes</h1>
          <p>$<span>100.50</span></p>
          <a href="#" title="add to cart" class="attToCart">Add to cart</a>
        </div>
      </div> -->

      <div class="item">
        <img src="pineapple.jpg" alt="Men's Solid Regular Fit T-Shirt" />
        <div class="itemInfo">
          <h1>Pineapple</h1>
          <p>$<span>42.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="strawberry.jpg" />
        <div class="itemInfo">
          <h1>Strawberry</h1>
          <p>$<span>15.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="mango.jpg" />
        <div class="itemInfo">
          <h1>Mango</h1>
          <p>$<span>100.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
    </div>
  </div>
  <hr>


  <div class="main">
    <div class="head">
      <h1>Daily Food</h1>
    </div>
    <div class="itemsBox">

      <div class="item">
        <img src="rice.jpg" alt="Men's Solid Regular Fit T-Shirt" />
        <div class="itemInfo">
          <h1>Rice</h1>
          <p>$<span>42.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="wheat.jpg" />
        <div class="itemInfo">
          <h1>Wheat</h1>
          <p>$<span>15.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="soyabean.jpg" />
        <div class="itemInfo">
          <h1>Soyabean</h1>
          <p>$<span>100.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>

      <!-- <div class="item">
        <img src="cereals.jpg"
          alt="Men's Solid Regular Fit T-Shirt" />
        <div class="itemInfo">
          <h1>Cearials</h1>
          <p>$<span>42.50</span></p>
          <a href="#" title="add to cart" class="attToCart">Add to cart</a>
        </div>
      </div> -->
      <div class="item">
        <img src="pulses.jpg" />
        <div class="itemInfo">
          <h1>Pulses</h1>
          <p>$<span>15.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="oil.png" />
        <div class="itemInfo">
          <h1>Edible Oil</h1>
          <p>$<span>100.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
    </div>
  </div>

  <hr>
  <div class="main">
    <div class="head">
      <h1>Fresh Vegetables</h1>
    </div>
    <div class="itemsBox">

      <div class="item">
        <img src="tomato.jpg" alt="Men's Solid Regular Fit T-Shirt" />
        <div class="itemInfo">
          <h1>Tomato</h1>
          <p>$<span>42.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="bringle.jpg" />
        <div class="itemInfo">
          <h1>Bringles</h1>
          <p>$<span>15.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="cauli.jpg" />
        <div class="itemInfo">
          <h1>Cauliflower</h1>
          <p>$<span>100.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>

      <!-- <div class="item">
        <img src="potato.jpg"
          alt="Men's Solid Regular Fit T-Shirt" />
        <div class="itemInfo">
          <h1>Potatos</h1>
          <p>$<span>42.50</span></p>
          <a href="#" title="add to cart" class="attToCart">Add to cart</a>
        </div>
      </div> -->
      <div class="item">
        <img src="bellpaper.jpg" />
        <div class="itemInfo">
          <h1>Bellpepper</h1>
          <p>$<span>15.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="pumkin.jpg" />
        <div class="itemInfo">
          <h1>Pumpkin</h1>
          <p>$<span>100.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
    </div>
  </div>
  <hr>



  <div class="main">
    <div class="head">
      <h1>Fresh Leafy Vegetables</h1>
    </div>
    <div class="itemsBox">

      <div class="item">
        <img src="methi.jpg" alt="Men's Solid Regular Fit T-Shirt" />
        <div class="itemInfo">
          <h1>Fenugreek Leaves</h1>
          <p>$<span>42.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="kothimbir.jpg" />
        <div class="itemInfo">
          <h1>Coriander</h1>
          <p>$<span>15.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="spinach.jpg" />
        <div class="itemInfo">
          <h1>Spinach Leaves</h1>
          <p>$<span>100.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>

      <!-- <div class="item">
        <img src="pea.jpg"
          alt="Men's Solid Regular Fit T-Shirt" />
        <div class="itemInfo">
          <h1>Pea</h1>
          <p>$<span>42.50</span></p>
          <a href="#" title="add to cart" class="attToCart">Add to cart</a>
        </div>
      </div> -->
      <div class="item">
        <img src="arugula.jpg" />
        <div class="itemInfo">
          <h1>Arugula</h1>
          <p>$<span>15.50</span></p>
          <a href="#" title="add to cart" class="attToCart">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="microgreens.jpg" />
        <div class="itemInfo">
          <h1><b> Microgreens</b></h1>
          <p>$<span>100.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
    </div>
  </div>
  <hr>


  <div class="main">
    <div class="head">
      <h1>Tools & Machinaries</h1>
    </div>
    <div class="itemsBox">

      <div class="item">
        <img src="tractor.jpg" alt="Men's Solid Regular Fit T-Shirt" />
        <div class="itemInfo">
          <h1>Tracors</h1>
          <p>$<span>42.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="jcb.jpg" />
        <div class="itemInfo">
          <h1>JCB</h1>
          <p>$<span>15.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="ricecutting.png" />
        <div class="itemInfo">
          <h1>Rice Cutter Machine</h1>
          <p>$<span>100.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>

      <div class="item">
        <img src="grasscutter.jpg" alt="Men's Solid Regular Fit T-Shirt" />
        <div class="itemInfo">
          <h1>Grass Cutter Machine</h1>
          <p>$<span>42.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <div class="item">
        <img src="tools.jpg" />
        <div class="itemInfo">
          <h1>Basic Tools</h1>
          <p>$<span>15.50</span></p>
          <a href="#" title="add to cart" class="attToCart" onclick="alert('Successfully Added To Cart');">Add to cart</a>
        </div>
      </div>
      <!-- <div class="item">
      <img src="waterpump.jpeg" />
      <div class="itemInfo">
        <h1>Water Pumping Machine</h1>
        <p>$<span>100.50</span></p>
        <a href="#" title="add to cart" class="attToCart">Add to cart</a>
      </div>
    </div> -->
    </div>
  </div>
  <hr>


  <div class="cartBox">
    <div class="cart">
      <i class="fa fa-close"></i>
      <h1>Cart</h1>
      <table id="customers">
        <th id="thead">
        </th>


      </table>
    </div>
  </div>


  <!-- -------------------------------------------------------------------------------- -->



  <div class="footerbig">
    <div class="footerA">
        <div class="footerA1">
            <img src="prop1.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="footerA1a">
                <h2><i>EFarms</i></h2>
                <p style="margin-top: -1rem;"> For a Healthy Life</p>
            </div>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit Lorem ipsum dolor sit amet
                consectetur adipisicing elit.</p>
        </div>
        <div class="footerA2">
            <div class="footerA21">
                <img src="loc.png" alt="">
                <p style="margin-left: 1rem;">Lorem ipsum dolor, sit amet consect adipisicing elit.
                    Itaque
                    ut</p>

            </div>
            <div class="footerA22">
                <img src="call.png" alt="">
                <p style="margin-left: 1rem;">Lorem ipsum dolor, sit amet consect adipisicing elit.
                    Itaque
                    ut</p>

            </div>
            <div class="footerA23">
                <img src="mail.png" alt="">
                <p style="margin-left: 1rem;">Lorem ipsum dolor, sit amet consect adipisicing elit.
                    Itaque
                    ut</p>

            </div>
        </div>

    </div>
    <div class="footerB">
        <div class="containerB1">
            <h4>RECENT POSTS</h4>
            <div class="progress prog">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                    aria-valuemax="100" style="width: 25%;"></div>
            </div>
        </div><br>
        <div class="containerB2">
            <div class="containerB2a">
                <img src="seeds.jpg" alt="">
                <h6 style="margin-left: 1rem;">WHAT CAUSES PERICORTENETISE</h6><br><br>


            </div>
            <p style="margin-left: 8rem;margin-top: -2rem;">24 July 2019</p>
        </div>
        <br>
        <div class="progress prog">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                aria-valuemax="100" style="width: 50%;"></div>
        </div>

        <br>
        <div class="containerB2">
            <div class="containerB2a">
                <img src="crops2.jpg" alt="">
                <h6 style="margin-left: 1rem;">WHAT CAUSES PERICORTENETISE</h6>


            </div>
            <p style="margin-left: 8rem;margin-top: -2rem;">22 June 2019</p>
        </div>


    </div>
    <div class="footerC">
        <div class="containerB1">
            <h4>TAGS</h4>
            <div class="progress prog">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                    aria-valuemax="100" style="width: 80%;"></div>
            </div>
        </div>
        <div class="footerC1">
            <img src="aro.png" alt="">
            <a href="#">&nbsp;&nbsp;&nbsp; About Us</a><br>

        </div><br>
        <div class="footerC2">
            <img src="aro.png" alt="">
            <a href="#">&nbsp;&nbsp;&nbsp; Blogs & News</a><br>

        </div><br>
        <div class="footerC3">
            <img src="aro.png" alt="">
            <a href="#">&nbsp;&nbsp;&nbsp; Contact Us</a><br>

        </div><br>
        <div class="footerC4">
            <img src="aro.png" alt="">
            <a href="#">&nbsp;&nbsp;&nbsp; Our Services</a><br>

        </div><br>
        <div class="footerC5">
            <img src="aro.png" alt="">
            <a href="#">&nbsp;&nbsp;&nbsp; Gallery</a><br>

        </div><br>

    </div>


    <div class="footerD">
        <div class="containerB1">
            <h4>RECENT POSTS</h4>
            <div class="progress prog">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                    aria-valuemax="100" style="width: 40%;"></div>
            </div>
        </div>


        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="biofert.jpg">
                    <img src="croptonics.png" alt="Cinque Terre" width="600" height="400">
                </a>
                <!-- <div class="desc">Add a description of the image here</div> -->
            </div>
        </div>


        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img_forest.jpg">
                    <img src="crops2.jpg" alt="Forest" width="600" height="400">
                </a>
                <!-- <div class="desc">Add a description of the image here</div> -->
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img_lights.jpg">
                    <img src="biofert.jpg" alt="Northern Lights" width="600" height="400">
                </a>
                <!-- <div class="desc">Add a description of the image here</div> -->
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img_mountains.jpg">
                    <img src="background3.jpg" alt="Mountains" width="600" height="400">
                </a>

            </div>
        </div>
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img_mountains.jpg">
                    <img src="pesticides.jpg" alt="Mountains" width="600" height="400">
                </a>
                <!-- <div class="desc">Add a description of the image here</div> -->
            </div>
        </div>


        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img_mountains.jpg">
                    <img src="seeds.jpg" alt="Mountains" width="600" height="400">
                </a>
                <!-- <div class="desc">Add a description of the image here</div> -->
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img_mountains.jpg">
                    <img src="slogan.jpg" alt="Mountains" width="600" height="400">
                </a>
                <!-- <div class="desc">Add a description of the image here</div> -->
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img_mountains.jpg">
                    <img src="spfert.jpg" alt="Mountains" width="600" height="400">
                </a>
                <!-- <div class="desc">Add a description of the image here</div> -->
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img_mountains.jpg">
                    <img src="background3.jpg" alt="Mountains" width="600" height="400">
                </a>
                <!-- <div class="desc">Add a description of the image here</div> -->
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img_mountains.jpg">
                    <img src="biofert.jpg" alt="Mountains" width="600" height="400">
                </a>
                <!-- <div class="desc">Add a description of the image here</div> -->
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="img_mountains.jpg">
                    <img src="crops2.jpg" alt="Mountains" width="600" height="400">
                </a>
                <!-- <div class="desc">Add a description of the image here</div> ----->
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="lowft">
          <p id="lowft1"> @2021 Copyright by AIT .</p>
          <p style="color: gray;margin-top: 2rem;margin-left: 1rem;">All Rights Reserved</p>
          <a href="#"><img src="soc.png" alt=""></a>
      </div>





    </div>

</div>














  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <script src="shoping.js"></script>
</body>

</html>