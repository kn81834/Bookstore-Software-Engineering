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
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script type="text/javascript">
  function jsFunction(){document.getElementById(“login”).innerHTML = “Logout”;}
</script>
<!DOCTYPE html>
<html style="font-size: 24px">
  <head>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <title>Books-r-us</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="homepage.css" />
    <script
      src="https://kit.fontawesome.com/a746b8874d.js"
      crossorigin="anonymous"
    ></script>
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
  <body style="background-color: rgba(108, 173, 138, 0.32); width: 100%">
    <!--navigation starts here-->
    <!--    <nav>-->
    <div class="header">
      <div class="logo">
        <a href="homepage.php" style="color: black; text-decoration: none"
          ><h1>Books-r-us</h1></a
        >
      </div>
      <nav>
        <div class="nav-bar">
          <ul>
            <li><a href="#" style="color: black">Textbooks</a></li>
            <li><a href="#" style="color: black">Adults</a></li>
            <li><a href="#" style="color: black">Teens</a></li>
            <li><a href="#" style="color: black">Kids</a></li>
            <li>
              <i class="fas fa-user">
                <ul class="dropdown-list">
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
                  
                </ul>
              </i>
            </li>
            <li>
              <a href="../Shopping Cart/shopping-cart.html"
                ><i class="fas fa-shopping-cart"></i
              ></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--navigation ends here-->

    <!--SEARCH BAR-->
    <div class="search-container">
      <div class="search-text">
        <h1>Support local bookstores.<br />Shop with us.</h1>
      </div>
      <div class="search-bar">
        <input
          type="search"
          class="search-input"
          placeholder="Search your favorite book here!"
        />
        <i class="fas fa-filter"></i>
        <a href="#"
          ><i class="fas fa-caret-down">
            <ul>
              <!--title-->
              <li>
                <input
                  type="checkbox"
                  id="title"
                  name="title"
                  value="titleName"
                />
                <label for="title">Title</label>
              </li>
              <!--author-->
              <li>
                <input
                  type="checkbox"
                  id="author"
                  name="author"
                  value="authorName"
                />
                <label for="author">Author</label>
              </li>
              <!--ISBN-->
              <li>
                <input type="checkbox" id="isbn" name="isbn" value="isbn" />
                <label for="isbn">ISBN</label>
              </li>
              <!--category-->
              <li>
                <input
                  type="checkbox"
                  id="category"
                  name="category"
                  value="categoryType"
                />
                <label for="category">Category</label>
              </li>
            </ul>
          </i>
        </a>
      </div>
      <br />
    </div>
    <!--end of SEARCH BAR-->
    <!--Book content-->
    <div class="books-bar">
      <div class="top-sellers">
        <h1>Top Sellers</h1>
        <button class="top-sellers-btn">view list</button>
        <ul>
          <li>
            <a href="eat-a-peach.html"
              ><img
                src="https://images4.penguinrandomhouse.com/cover/9781524759216?height=284&alt=cover_coming_soon.jpg"
                alt="top1"
                class="top1"
            /></a>
          </li>
          <li>
            <a href="#"
              ><img
                src="https://images1.penguinrandomhouse.com/cover/9780593238899?height=284&alt=cover_coming_soon.jpg"
                alt="top2"
                class="top2"
            /></a>
          </li>
          <li>
            <a href="#"
              ><img
                src="https://images1.penguinrandomhouse.com/cover/9780756412531?height=284&alt=cover_coming_soon.jpg"
                alt="top3"
                class="top3"
            /></a>
          </li>
          <li>
            <a href="#"
              ><img
                src="https://images4.penguinrandomhouse.com/cover/9780525518778?height=284&alt=cover_coming_soon.jpg"
                alt="top4"
                class="top4"
            /></a>
          </li>
          <li>
            <a href="#"
              ><img
                src="https://images2.penguinrandomhouse.com/cover/9781984830210?height=284&alt=cover_coming_soon.jpg"
                alt="top5"
                class="top5"
            /></a>
          </li>
        </ul>
      </div>
      <hr />
      <div class="featured-books">
        <h1>Featured books</h1>
        <button class="featured-books-btn">view list</button>
        <ul>
          <li>
            <a href="#"
              ><img
                src="https://images2.penguinrandomhouse.com/cover/9781681375540?height=284&alt=cover_coming_soon.jpg"
                alt="ft1"
                class="ft1"
            /></a>
          </li>
          <li></li>
          <li>
            <a href="#"
              ><img
                src="https://images4.penguinrandomhouse.com/cover/9781568366012?height=284&alt=cover_coming_soon.jpg"
                alt="ft2"
                class="ft2"
            /></a>
          </li>
          <li></li>
          <li>
            <a href="#"
              ><img
                src="https://images3.penguinrandomhouse.com/cover/9780593158289?height=284&alt=cover_coming_soon.jpg"
                alt="ft3"
                class="ft3"
            /></a>
          </li>
          <li></li>
          <li>
            <a href="#"
              ><img
                src="https://images3.penguinrandomhouse.com/cover/9781635421194?height=284&alt=cover_coming_soon.jpg"
                alt="ft4"
                class="ft4"
            /></a>
          </li>
          <li></li>
          <li>
            <a href="#"
              ><img
                src="https://images4.penguinrandomhouse.com/cover/9780449819203?height=284&alt=cover_coming_soon.jpg"
                alt="ft5"
                class="ft5"
            /></a>
          </li>
          <li></li>
        </ul>
      </div>
    </div>

    <!--end of book content-->
    <!-- registration modal content -->
    <div id="registrationModal" class="regModal">
      <div class="regModal-content">
        <span class="close-button-reg">&times;</span>
        <form action="RegisterNewUser.php" method="POST" id="regform">
          <div class="container">
            <h1 style="text-align: center">Register</h1>
            <p style="text-align: center">
              Please fill in the mandatory fields in this form to create an
              account.
            </p>
            <label for="fname" class="fname"><b>First Name</b></label>
            <input
              type="text"
              placeholder="Enter First Name"
              name="fname"
              id="fname"
              required
            />

            <label for="lname" class="lname"><b>Last Name</b></label>
            <input
              type="text"
              placeholder="Enter Last Name"
              name="lname"
              id="lname"
              required
            />

            <label for="email" class="email"><b>Email Address</b></label>
            <input
              type="email"
              placeholder="Enter Email Address"
              name="email"
              id="email"
              required
            />

            <label for="psw" class="password"><b>Password</b></label>
            <input
              type="password"
              placeholder="Enter Password"
              name="psw"
              id="psw"
              required
            />

            <label for="phone" class="phone-num"><b>Phone Number</b></label>
            <input
              type="tel"
              name="phone"
              id="phone"
              pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
              placeholder="Enter Phone Number as 123-456-7890"
              required
            />
            <form action="RegisterNewUser.php" method="POST">
            <label for="street"><b>Street Address</b></label>
            <input
              type="text"
              placeholder="Enter Street Address"
              name="street"
              id="street"
              required
            />
            
            <label for="city"><b>City</b></label>
            <input type="text" placeholder="Enter City" name="city" id="city" />

            <label for="zip"><b>Zip Code</b></label>
            <input
              type="text"
              placeholder="Enter Zip Code"
              name="zip"
              id="zip"
              pattern="[0-9]{5}"
              required
            />

            <label for="state"
              ><b>State</b>
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
            </label>
            </form>
            <br /><br />
            <form action="RegisterNewUser.php" method="POST">
            <label for="cardtype"><b>Card Type</b></label>
            <select name="cardtype" id="cardtype" style="width: 100%">
              <option value="" selected="selected"></option>
              <option value="visa">Visa</option>
              <option value="discover">Discover</option>
              <option value="americanexpress">American Express</option>
              <option value="mastercard">Mastercard</option>
            </select>
            <br /><br />
            <label for="cardnum"><b>Card Number</b></label>
            <input
              type="text"
              name="cardnum"
              id="cardnum"
              inputmode="numeric"
              pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}"
              placeholder="Enter Card Number as xxxx-xxxx-xxxx-xxxx"
              required
            />

            <label for="cvv"><b>CVV</b></label>
            <input 
              type="text" 
              name="cvv" 
              id="cvv"
              pattern="[0-9]{3}"
              placeholder="Enter CVV as xxx" 
            />

            <label for="expdate"><b>Expiration Date</b></label>
            <input
              type="month"
              placeholder="Enter Exp Date (mm/yy)"
              name="expdate"
              id="expdate"
              required
            />
            </form>
            
            <input type="submit" id="registerbtn" class="registerbtn"></input>
            
            <br /><br /><br /><br />
          </div>
        </form>
      </div>
    </div>
    <!--end of registration modal content-->

    <!--login modal content-->
    <div id="loginModal" class="loginModal">
      <div class="loginModal-content">
        <span class="close-button-login">&times;</span>
        <form method="post" action="LoginUser.php">
          <div class="login-container">
            <h1 style="text-align: center">Login</h1>
            <p style="text-align: center">
              Please login with your email address or account ID.
            </p>
            <label for="email-login"><b>Email Address</b></label>
            <input
              type="text"
              placeholder="Enter Email Address or Account ID"
              name="email-login"
              id="email-login"
              required
            />

            <label for="psw"><b>Password</b></label>
            <input
              type="password"
              placeholder="Enter Password"
              name="psw"
              id="psw"
              required
            />

            <button type="submit" class="loginbtn" id="loginbtn">Login</button>
            <h3>
              If you are not a registered user, sign up
              <a href="#" id="toRegistration">here</a>.
            </h3>
            <h6>
              Forgot your password? Click
              <a href="#" id="toResetPassword">here</a>.
            </h6>
          </div>
        </form>
      </div>
    </div>
    <!--end of login modal content-->

    <!--reset password modal content-->
    <div id="resetPWModal" class="resetPWModal">
      <div class="resetPWModal-content">
        <span class="close-button-resetPWModal">&times;</span>
        <form method="post" action="./ForgotPW.php">
          <div class="resetPWModal-container">
            <h1 style="text-align: center">Reset Password</h1>
            <p style="text-align: center">
              Please enter your email address associated with your account.
            </p>
            <label for="email-login"><b>Email Address</b></label>
            <input
              type="email"
              placeholder="Enter Email Address"
              name="email-reset"
              id="email-reset"
              required
            />

            <button type="submit" class="resetbtn" id="resetbtn">
              Reset Password
            </button>
          </div>
        </form>
      </div>
    </div>

    <!--end of reset password modal content-->
    <script>
      /*
       * reset password JS
       */

      var resetModal = document.getElementById("resetPWModal");
      var btn3 = document.getElementById("toResetPassword");
      var resetBtn = document.getElementById("email-reset");
      var spanReset = document.getElementsByClassName(
        "close-button-resetPWModal"
      )[0];

      btn3.onclick = function () {
        loginModal.style.display = "none";
        resetModal.style.display = "block";
      };

      spanReset.onclick = function () {
        resetModal.style.display = "none";
      };

      window.onclick = function (event) {
        if (event.target == resetModal) {
          resetModal.style.display = "none";
        }
      };

      /*
       * login JS
       */

      var loginModal = document.getElementById("loginModal");
      var btn = document.getElementById("login");
      var spanLogin = document.getElementsByClassName("close-button-login")[0];
      var loginbtn = document.getElementById("loginbtn");

      btn.onclick = function () {
        loginModal.style.display = "block";
      };

      spanLogin.onclick = function () {
        loginModal.style.display = "none";
      };

      window.onclick = function (event) {
        if (event.target == loginModal) {
          loginModal.style.display = "none";
        }
      };

      /*
       * registration JS
       */
      var regModal = document.getElementById("registrationModal");
      var btn2 = document.getElementById("toRegistration");
      var spanReg = document.getElementsByClassName("close-button-reg")[0];
      var registerbtn = document.getElementById("registerbtn");

      btn2.onclick = function () {
        loginModal.style.display = "none";
        regModal.style.display = "block";
      };

      spanReg.onclick = function () {
        regModal.style.display = "none";
      };

      window.onclick = function (event) {
        if (event.target == regModal) {
          regModal.style.display = "none";
        }
      };

    </script>
  </body>
</html>
