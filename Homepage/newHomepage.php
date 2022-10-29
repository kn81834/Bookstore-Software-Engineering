<?php
  session_start();
  //echo $_SESSION['Email'];
	if(isset($_GET['results'])) {
    if ($_GET['results'] == "Login-Successful"){
      //session_start();
      echo '<p><script>alert("You are logged in!");</script></p>';
      echo '<script type="text/javescript">jsFunction()</script>';
    }
    else if ($_GET['results'] == "Login-Unsuccessful"){
      echo '<p><script>alert("Incorrect Email/Password Combination!");</script></echo>';
    }
    else if ($_GET['results'] == "Email-Is-Taken"){
      echo '<p><script>alert("Email-Is-Taken!");</script></echo>';
    }
    else if ($_GET['results'] == "Successfully-Registered"){
      echo '<p><script>alert("Successfully-Registered!");</script></echo>';
    }
    else if ($_GET['results'] == "Incorrect-Password/Email-Combination"){
      echo '<p><script>alert("Email/Password Combination Does Not Exist!");</script></echo>';
    }
    else if ($_GET['results'] == "LoggedOut") {
      echo '<p><script>alert("Successfully Logged Off!");</script></echo>';
    }
  }
?>
<!DOCTYPE html>

<html>
<head>
    <title>New Homepage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="../SkeletonEmailCode/sendEmail.js"></script>
    <script>
      var userID = '';
      var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      var length = 7;
      for (var i = 0; i < length; i++ ) {
        userID += chars.charAt(Math.floor(Math.random() * chars.length));
      }
      var verificationCode = Math.floor((Math.random()*1000000)+1);
    </script>
</head>
<style>
 .modal-body {
    max-height: calc(100vh - 210px);
    overflow-y: auto;
} 
  body {
    padding-top: 50px;
}
.dropdown.dropdown-lg .dropdown-menu {
    margin-top: -1px;
    padding: 6px 20px;
}
.input-group-btn .btn-group {
    display: flex !important;
}
.btn-group .btn {
    border-radius: 0;
    margin-left: -1px;
}
.btn-group .btn:last-child {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.btn-group .form-horizontal .btn[type="submit"] {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
}
.form-group .form-control:last-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
    .nav-item
    {
        font-size:1.3rem;
    }
    .mycol
    {
        border:1px solid black;
        background-color:black;
    }
    *
    {
        text-align:center;
/*          font-family: Arial, Helvetica, sans-serif;
*/
font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }
    .card
    {
        border: none;
        background: #D6D1B1;
    }

    .search {
        width: 100%;
        margin-bottom: auto;
        margin-top: 20px;
        height: 50px;
        background-color: #fff;
        padding: 10px;
        border-radius: 5px;
    }
    
    .search-input {
        color: white;
        border: 0;
        outline: 0;
        background: none;
        width: 0;
        margin-top: 5px;
        caret-color: transparent;
        line-height: 20px;
        transition: width 0.4s linear;
    }
    
    .search .search-input {
        padding: 0 10px;
        width: 100%;
        caret-color: #536bf6;
        font-size: 19px;
        font-weight: 300;
        color: black;
        transition: width 0.4s linear;
    }
    
    .search-icon {
        height: 34px;
        width: 34px;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        background-color: #536bf6;
        font-size: 10px;
        bottom: 30px;
        position: relative;
        border-radius: 5px;
    }
    .dropdown-toggle
    {
        height: 34px;
        width: 34px;
        float: left;
        display: flex;
/*        background-color: #536bf6;
*/        justify-content: center;
        align-items: center;
        color: white;
        font-size: 10px;
        bottom: 30px;
        position: relative;
        border-radius: 5px;
    }
    
    .search-icon:hover {
        color: #fff !important;
    }
    
    a:link {
        text-decoration: none;
    }
    
    .card-inner {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
        border: none;
        cursor: pointer;
        transition: all 2s;
    }
    
    .card-inner:hover {
        transform: scale(1.1);
    }
    
    .mg-text span {
        font-size: 12px;
    }
    
    .mg-text {
        line-height: 14px;
    }
    .btn-default
    {
      background-color:#E0DEDE;
      margin-left:5px;
    }
    .features
    {margin-top:50px;}
    .container-fluid {
    padding-right:0;
    padding-left:0;
    margin-right:auto;
    margin-left:auto
 }
 
 .hero-image {
  /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://s3.amazonaws.com/prod.assets.thebanner/styles/article-large/s3/article/large/TIN-332%20Books%20from_large.jpg?itok=goIsOQs0");

  /* Set a specific height */
  height: 50%;

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.outside
{
  border-left:1px solid /*#a52a2a*/black;
  border-right:1px solid black;
}
.b {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
   margin: 10px 0 20px; 
} 

.b span { 
    background:#ECEEEF; 
    padding:0 10px; 
}
.b2
{
  width: 94%;
  margin-left:2.5%;
  margin-right:2.5%;
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
   margin: 10px 0 20px;
}

.b2 span
{
  background:#faf0e6; 
  padding:0 10px;
}
</style>
<body>
  <!--nav bar-->
  <div class="container-fluid">
    <nav class="navbar navbar-expand navbar-light">
        <a class="navbar-brand" href="#"><img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo4.jpg" height="50"></a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item px-4"><a href="#" class="nav-link py-4">Textbooks</a></li>
            <li class="nav-item px-4"><a href="#" class="nav-link py-4">Adults</a></li>
            <li class="nav-item px-4"><a href="#" class="nav-link py-4">Teens</a></li>
            <li class="nav-item px-4"><a href="#" class="nav-link py-4">Kids</a></li>
              <div class="dropdown">
              <li class="nav-item px-4"><a href="#" class="nav-link py-4">

                <!--Trigger-->
               
                <a class="btn-floating btn-lg black dropdown-toggle"type="button" id="dropdownMenu3" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" data-target="#navItem"><i class="fas fa-user fa-2x" style="color:grey;"></i></a>              
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary" id="navItem">
                <?php
                    //session_start();
                    if (isset($_SESSION['Email'])){
                      echo '
                              <a href="./LogUserOut.php" id="logout" style="color: black">Logout<br /></a>
                            
                            
                              <a
                                href="../EditProfile/edit_profile.php"
                                style="color: black"
                                >Edit Profile</a
                              >
                            
                            
                              <a
                                href="../OrderHistory/order-history.html"
                                style="color: black"
                                >Order History</a
                              >
                            ';
                    }
                    else {
                      echo '<a class="dropdown-item" href="#" id="login" data-toggle="modal" data-target="#loginModal">Login/Sign Up</a>';
                    }
                  ?>
                </div>
                </a></li>
              </div>
            <li class="nav-item px-4"><a href="#" class="nav-link py-4"><i class="fas fa-shopping-cart"></i></a></li>
          </ul>     
        </div>
    </nav>
  </div>
  
  <!--nav bar end-->
  
  <!--banner image-->
  <div class="container-fluid">
    <div class="hero-image">
      <div class="hero-text" style="color:transparent;">
        <h1>hello</h1>
        <h1>you are annoying</h1>
        <h1>why is it only growing with image</h1>
      </div>
    </div>
  </div>
  <!--banner image end-->
  
  <!--Search box-->
  <div class="container-fluid" style="/*background-color:#FFFFF0#ffdead*/;padding-bottom:50px;margin-top:0px;">
    <div class="container-fluid">
      <div class="row justify-content-center py-4">
          <div class="col-6">
              <h1>Support local bookstores.<br>Shop with us.</h1>
          </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-9">
          <form method="POST">
            <div class="input-group">
              <div class="dropdown">
              <a class="btn-floating btn-lg black dropdown-toggle"type="button" id="dropdownMenu3" data-toggle="dropdown" data-target="#down"
                aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-filter" style="position: relative;z-index:-1;left: 0px;padding: 10px 12px; pointer-events: none;">
                <div class="dropdown-menu dropdown-primary" id="down">
                 <!--put php here-->
                 <?php
                    //session_start();
                    if (isset($_SESSION['Email'])){
                      echo '<li>
                              <a href="./LogUserOut.php" id="logout" style="color: black">Logout<br /></a>
                            </li>
                            <li>
                              <a
                                href="../EditProfile/edit_profile.php"
                                style="color: black"
                                >Edit Profile</a
                              >
                            </li>
                            <li>
                              <a
                                href="../OrderHistory/order-history.html"
                                style="color: black"
                                >Order History</a
                              >
                            </li>';
                    }
                    else {
                      echo '<li>                    
                              <a href="#" id="login" style="color: black">Login/Register<br /></a>
                            </li>';
                    }
                  ?>
                </div>
              </i></a>
              </div>
              <input type="text" class="form-control" placeholder="search..." name="search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--end of search box-->
  
  <!--books-->
  <div class="container-fluid features" style="background-color:#faf0e6;border-radius:5px;padding-bottom:50px;">
    <div class="row justify-content-around" style="flex-direction:column;padding-top:50px;">
      <!--put featured books link here-->
        <h1 class="b2" style="margin-left:3%; margin-right:3%;"><span>Top Sellers</span></h1>
        <a href="#"><p style="color:black; text-decoration:none;">View all top selling books here</p></a>
    </div>
    <div class="row justify-content-center"> <!--style="margin-top:50px;"-->
      <div class="col-2 justify-content-center">
        <img
              src="https://images4.penguinrandomhouse.com/cover/9781524759216?height=284&alt=cover_coming_soon.jpg"
              alt="top1"
              class="top1"
              width="125"
              height="175"
          />
      </div>
      <div class="col-2">
         <img
              src="https://images1.penguinrandomhouse.com/cover/9780593238899?height=284&alt=cover_coming_soon.jpg"
              alt="top2"
              class="top2"
              width="125"
              height="175"
          />
      </div>
      <div class="col-2">
        <img
              src="https://images1.penguinrandomhouse.com/cover/9780756412531?height=284&alt=cover_coming_soon.jpg"
              alt="top3"
              class="top3"
              width="125"
              height="175"
          />
      </div>
      <div class="col-2">
        <img
              src="https://images4.penguinrandomhouse.com/cover/9780525518778?height=284&alt=cover_coming_soon.jpg"
              alt="top4"
              class="top4"
              width="125"
              height="175"
          />
      </div>
      <div class="col-2">
          <img
              src="https://images2.penguinrandomhouse.com/cover/9781984830210?height=284&alt=cover_coming_soon.jpg"
              alt="top5"
              class="top5"
              width="125"
              height="175"
          />
      </div>
    </div>
    <div class="row justify-content-around" style="flex-direction:column;padding-top:50px;">
      <!--put featured books link here-->
        <h1 class="b2" style="margin-left:3%; margin-right:3%;"><span>Featured Books</span></h1>
        <a href="#"><p style="color:black; text-decoration:none;">View all featured books here</p></a>
    </div>
    <div class="row justify-content-center"> <!--style="margin-top:50px;"-->
      <div class="col-2 justify-content-center">
        <img
              src="https://images2.penguinrandomhouse.com/cover/9781681375540?height=284&alt=cover_coming_soon.jpg"
              alt="top1"
              class="top1"
              width="125"
              height="175"
          />
      </div>
      <div class="col-2">
         <img
              src="https://images4.penguinrandomhouse.com/cover/9781568366012?height=284&alt=cover_coming_soon.jpg"
              alt="top2"
              class="top2"
              width="125"
              height="175"
          />
      </div>
      <div class="col-2">
        <img
              src="https://images3.penguinrandomhouse.com/cover/9780593158289?height=284&alt=cover_coming_soon.jpg"
              alt="top3"
              class="top3"
              width="125"
              height="175"
          />
      </div>
      <div class="col-2">
        <img
              src="https://images3.penguinrandomhouse.com/cover/9781635421194?height=284&alt=cover_coming_soon.jpg"
              alt="top4"
              class="top4"
              width="125"
              height="175"
          />
      </div>
      <div class="col-2">
          <img
              src="https://images4.penguinrandomhouse.com/cover/9780449819203?height=284&alt=cover_coming_soon.jpg"
              alt="top5"
              class="top5"
              width="125"
              height="175"
          />
      </div>
  </div>
  </div>
  <!--books end-->
  
  <!--why us-->
  <div class="container-fluid" style="background-color:lightblue;">
    <div class="jumbotron">
      <h1 class="b mycol"><span><i>Why Us?</i></span></h1>
      <br>
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-3 outside">
            <i class="fas fa-users fa-3x"></i>
            <h2>Our Customers Come First!</h2>
            <p>Our customers are our #1 priority; your satisfaction is 100% guaranteed!</p>
          </div>
          <div class="col-3 outside">
            <i class="fas fa-money-bill-alt fa-3x"></i>
            <h2>Relatively Affordable Books</h2>
            <p>Competitive prices; guaranteed we have the most reasonably priced books!</p>
          </div>
          <div class="col-3 outside">
            <i class="fas fa-shipping-fast fa-3x"></i>
            <h2>Guaranteed Fast Shipping</h2>
            <p>Once we process your payment, your book will arrive within 3-5 business days!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end of why us-->
  
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="LoginUser.php">
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="email-login">Your email</label>
              <input type="email" id="email-login" class="form-control validate" required/>
            </div>
    
            <div class="md-form mb-4">
              <i class="fas fa-lock prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
              <input type="password" id="defaultForm-pass" class="form-control validate" required/>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-default" type="submit">Login</button>
            <br>
          </div>
          <p>If you are not a registered user, sign up <a href="#" data-toggle="modal" data-target="#registrationModal" data-dismiss="modal">here.</a></p>
          <br>
          <p>Forgot your password? Click <a href="#" data-toggle="modal" data-target="#resetPWModal" data-dismiss="modal">here.</a></p>
        </form>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="resetPWModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Reset Password</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="email-login">Please enter the email address associated with your account.</label>
              <input type="email" placeholder="Enter Email Address" name="email-reset" id="email-reset" class="form-control validate" required/>
            </div>
          <div class="modal-footer d-flex justify-content-center">
              <button type="submit" class="btn btn-default" id="resetbtn" onclick="sendEmail();">Reset Password</button>
            <br>
          </div>
        </form>
        </div>
      </div>
   </div>
   </div>
  
  <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Register</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="RegisterNewUser.php" method="POST" id="regform">
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="defaultForm-email">First Name</label>
              <input type="text" id="defaultForm-email" class="form-control validate" required/>
            </div>
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="lastName">Last Name</label>
              <input type="text" id="lastName" class="form-control validate" required/>
            </div>
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="email">Email Address</label>
              <input type="email" id="email" class="form-control validate" required/>
            </div>
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="psw">Password</label>
              <input type="password" id="psw" class="form-control validate" required/>
            </div>
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="phone">Phone Number</label>
              <input type="tel" class="form-control validate" type="tel" placeholder="Enter Phone Number as 123-456-7890" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required/>
            </div>
            
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="street">Street Address</label>
              <input type="text" id="street" class="form-control validate" required/>
            </div>
            
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="city">City</label>
              <input type="text" id="city" class="form-control validate" required/>
            </div>
            
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="zip">Zip Code</label>
              <input type="text" id="zip" class="form-control validate" pattern="[0-9]{5}" required/>
            </div>
            
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="street">State</label>
              <select name="state" id="state" style="width: 100%">
                <option value="" selected="selected"></option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
    
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="cardtype">Card Type</label>
              <select name="cardtype" id="cardtype" style="width: 100%">
                <option value="" selected="selected"></option>
                <option value="visa">Visa</option>
                <option value="discover">Discover</option>
                <option value="americanexpress">American Express</option>
                <option value="mastercard">Mastercard</option>
              </select>
            </div>
            
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="cardnum">Card Number</label>
              <input type="text" id="cardnum" class="form-control validate" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" inputmode="numeric" required/>
            </div>
            
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="cvv">CVV</label>
              <input type="text" id="cvv" class="form-control validate" pattern="[0-9]{3}" required/>
            </div>
            
            <div class="md-form mb-4">
              <label data-error="wrong" data-success="right" for="expdate">Exp Date</label>
              <input type="month" id="expdate" class="form-control validate" required/>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-default" type="submit">Register</button>
            <br>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
