<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" style="font-size: 24px">
  <head>
    <meta charset="UTF-8" />
    <title>Books-r-us</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="../Homepage/homepage.css" />
    <script
      src="https://kit.fontawesome.com/a746b8874d.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body style="background-color: rgba(108, 173, 138, 0.32); width: 100%">
    <!--navigation starts here-->
    <!--    <nav>-->
    <div class="header">
      <div class="logo">
        <a
          href="../Homepage/homepage.html"
          style="color: black; text-decoration: none"
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
                  <li>
                    <a href="#" id="login" style="color: black">Login<br /></a>
                  </li>
                  <li>
                    <a
                      href="../EditProfile/edit_profile.html"
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
                  </li>
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

    <!--<div id="navBar"></div>-->
    <!--<link rel="stylesheet" href="edit_profile_style.css" />-->
    <div id="editProfileContainer" class="container">
      <div class="leftbox">
        <nav id="editProfileNav">
          <a id="editProfileNavA" onclick="tabs(0)" class="tab active">
            <image src="../account_image.png" width="50" height="50"></image>
          </a>
          <a id="editProfileNavA" onclick="tabs(1)" class="tab">
            <image src="../credit_card_icon.png" width="50" height="50"></image>
          </a>
          <a id="editProfileNavA" onclick="tabs(2)" class="tab">
            <image
              src="../address_book_icon.png"
              width="50"
              height="50"
            ></image>
          </a>
          <a
            id="editProfileNavA"
            oncick="tabs(3)"
            class="tab"
            href="../Homepage/homepage.php"
          >
            <image src="../home_icon.svg" width="50" height="50"></image>
          </a>
        </nav>
      </div>
      <div class="editProfileContainer">
        <!-- Change Password Modal -->
        <div id="changePasswordModal" class="changePasswordModal">
          <div class="changePasswordModal-content">
            <span class="close-button-password">&times;</span>
            <form method="post">
              <div class="changePassword-container">
                <h1 style="text-align: center">Change Password</h1>
                <label for="current-password"><b>Current Password</b></label>
                <input
                  type="text"
                  placeholder="Enter Current Password"
                  id="enteredPassword"
                  value=""
                  required
                />
                <button
                  type="button"
                  class="loginbtn"
                  id="changePasswordBtn"
                  onclick="matchPasswords()"
                >
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- End of Change Password Modal -->
        <form method="POST" action="EditUserProfile.php">
            First Name : <?php echo $_SESSION['FName']?> <input type="text" name="firstName"><br><br>
            Last Name : <?php echo $_SESSION['LName']?> <input type="text" name="lastName"><br><br>
            Phone Number : <?php echo $_SESSION['PNum']?> <input type="text" name="phoneNumber"><br><br>
            Card Number :  <input type="text" name="cardNumber"><br><br>
            Card Type : <input type="text" name="cardType"><br><br>
            City : <?php echo $_SESSION['City']?> <input type="text" name="city"><br><br>
            CVV : <input type="text" name="cvc"><br><br>
            Email : <?php echo $_SESSION['Email']?> <input type="text" name="emailAddress"><br><br>
            Expiration Date : <?php echo $_SESSION['ExpDate']?> <input type="text" name="expirationDate"><br><br>
            State : <?php echo $_SESSION['State']?> <input type="text" name="state"><br><br>
            Street Address : <?php echo $_SESSION['SAddress']?> <input type="text" name="street"><br><br>
            Zip Code : <?php echo $_SESSION['ZipCode']?> <input type="text" name="zipCode"><br><br>
            
            <input type="submit" value="EditProfile">
        </form>
      </div>
    </div>

    <!-- registration modal content -->
    <div id="registrationModal" class="regModal">
      <div class="regModal-content">
        <span class="close-button-reg">&times;</span>
        <form action="insert.php" method="POST">
          <div class="container">
            <h1 style="text-align: center">Register</h1>
            <p style="text-align: center">
              Please fill in the mandatory fields in this form to create an
              account.
            </p>
            <label for="fname"><b>First Name</b></label>
            <input
              type="text"
              placeholder="Enter First Name"
              name="fname"
              id="fname"
              required
            />

            <label for="lname"><b>Last Name</b></label>
            <input
              type="text"
              placeholder="Enter Last Name"
              name="lname"
              id="lname"
              required
            />

            <label for="email"><b>Email Address</b></label>
            <input
              type="email"
              placeholder="Enter Email Address"
              name="email"
              id="email"
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

            <label for="phone"><b>Phone Number</b></label>
            <input
              type="tel"
              placeholder="Enter Phone Number"
              name="phone"
              id="phone"
              required
            />

            <label for="street"><b>Street Address</b></label>
            <input
              type="text"
              placeholder="Enter Street Address"
              name="street"
              id="street"
            />

            <label for="city"><b>City</b></label>
            <input type="text" placeholder="Enter City" name="city" id="city" />

            <label for="zip"><b>Zip Code</b></label>
            <input
              type="text"
              placeholder="Enter Zip Code"
              name="zip"
              id="zip"
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
            <br /><br />
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
              placeholder="Enter Card Number"
              name="cardnum"
              id="cardnum"
            />

            <label for="cvv"><b>CVV</b></label>
            <input type="text" placeholder="Enter CVV" name="cvv" id="cvv" />

            <label for="expdate"><b>Expiration Date</b></label>
            <input
              type="month"
              placeholder="Enter Exp Date (mm/yy)"
              name="expdate"
              id="expdate"
            />

            <button type="submit" class="registerbtn" id="registerbtn">
              Register
            </button>
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
        <form method="post">
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
        <form method="post">
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
      const tabBtn = document.querySelectorAll(".tab");
      const tab = document.querySelectorAll(".tabShow");

      function tabs(panelIndex) {
        tab.forEach(function (node) {
          node.style.display = "none";
        });
        tab[panelIndex].style.display = "block";
      }
      tabs(0);
    </script>
    <script>
      $(".tab").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
      });
    </script>
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

      /*
       * change password JS
       */
      // Get the modal
      var changePasswordModal = document.getElementById("changePasswordModal");

      // Get the button that opens the modal
      var btn4 = document.getElementById("changePasswordButton");

      // Get the <span> element that closes the modal
      var spanPassword = document.getElementsByClassName(
        "close-button-password"
      )[0];

      // When the user clicks on the button, open the modal
      btn4.onclick = function () {
        changePasswordModal.style.display = "block";
      };

      // When the user clicks on <span> (x), close the modal
      spanPassword.onclick = function () {
        changePasswordModal.style.display = "none";
      };

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == changePasswordModal) {
          changePasswordModal.style.display = "none";
        }
      };

      /*variables for optional elements in form*/
      //var typeInput = document.getElementById("cardtype");
      //var cardNumInput = document.getElementById("cardnum");
      //var cvvInput = document.getElementById("cvv");
      //var expInput = document.getElementById("expdate");

      //
      //registerbtn.onclick = function()
      //{
      //    /* one element is required, then the rest must be required*/
      //    if (typeInput.value.length == 0 || cardNumInput.value.length == 0 || cvvInput.value.length == 0 || expInput.value.length == 0) {
      //      /*nothing is required*/
      //
      //    } else {
      //      /*the other fields must have values*/
      //      alert("you must fill out all corresponding fields");
      //    }
      //};
    </script>
    <script type="text/javascript">
      document.getElementById("changePasswordBtn").onclick = function () {
        var currentPassword = document.getElementById("password").value;
        var enteredPassword = document.getElementById("enteredPassword").value;
        if (currentPassword == enteredPassword) {
          location.href = "../Login/ForgotPasswordVerify.html";
        } else if (enteredPassword == "") {
          alert("Please fill out field.");
        } else {
          alert("Password does not match.");
        }
      };
    </script>
    <script src="button_functions.js"></script>
  </body>
</html>
