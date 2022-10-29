<?php session_start();?>
<!DOCTYPE html>

<html>
  <head>
    <title>Edit Profile</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="editProfile_style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/a746b8874d.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
      integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
      crossorigin="anonymous"
    ></script>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="button_functions.js"></script>
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
    .nav-item {
      font-size: 1.3rem;
    }
    .mycol {
      border: 1px solid black;
      background-color: black;
    }
    * {
      text-align: center;
      /*          font-family: Arial, Helvetica, sans-serif;
*/
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }
    .card {
      border: none;
      background: #d6d1b1;
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
    .dropdown-toggle {
      height: 34px;
      width: 34px;
      float: left;
      display: flex;
      /*        background-color: #536bf6;
*/
      justify-content: center;
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
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 0.25rem;
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
    .btn-default {
      background-color: #e0dede;
      margin-left: 5px;
    }
    .features {
      margin-top: 50px;
    }
    .container-fluid {
      padding-right: 0;
      padding-left: 0;
      margin-right: auto;
      margin-left: auto;
    }

    .hero-image {
      /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("https://s3.amazonaws.com/prod.assets.thebanner/styles/article-large/s3/article/large/TIN-332%20Books%20from_large.jpg?itok=goIsOQs0");

      /* Set a specific height */
      height: 50%;

      /* Position and center the image to scale nicely on all screens */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }
    .outside {
      border-left: 1px solid /*#a52a2a*/ black;
      border-right: 1px solid black;
    }
    .b {
      width: 100%;
      text-align: center;
      border-bottom: 1px solid #000;
      line-height: 0.1em;
      margin: 10px 0 20px;
    }

    .b span {
      background: #eceeef;
      padding: 0 10px;
    }
    .b2 {
      width: 94%;
      margin-left: 2.5%;
      margin-right: 2.5%;
      text-align: center;
      border-bottom: 1px solid #000;
      line-height: 0.1em;
      margin: 10px 0 20px;
    }

    .b2 span {
      background: #faf0e6;
      padding: 0 10px;
    }
  </style>
  <body>
    <!--nav bar-->
    <div class="container-fluid">
      <nav class="navbar navbar-expand navbar-light">
        <a class="navbar-brand" href="#"
          ><img src="../BooksRUs_Logo.png" height="120" style="left: -20px"
        /></a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item px-4">
              <a href="#" class="nav-link py-4">Textbooks</a>
            </li>
            <li class="nav-item px-4">
              <a href="#" class="nav-link py-4">Adults</a>
            </li>
            <li class="nav-item px-4">
              <a href="#" class="nav-link py-4">Teens</a>
            </li>
            <li class="nav-item px-4">
              <a href="#" class="nav-link py-4">Kids</a>
            </li>
            <div class="dropdown">
              <li class="nav-item px-4">
                <a href="#" class="nav-link py-4">
                  <!--Trigger-->

                  <a
                    class="btn-floating btn-lg black dropdown-toggle"
                    type="button"
                    id="dropdownMenu3"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-target="#navItem"
                    ><i class="fas fa-user fa-2x" style="color: grey"></i
                  ></a>
                  <!--Menu-->
                  <div class="dropdown-menu dropdown-primary" id="navItem">
                    <a
                      class="dropdown-item"
                      href="../Homepage/LogUserOut.php"
                      id="logout"
                      data-toggle="modal"
                      data-target="#loginModal"
                      >Log Out</a
                    >
                    <a class="dropdown-item" href="#">Edit Profile</a>
                    <a class="dropdown-item" href="../OrderHistory/newOrderHistory.php">Order History</a>
                  </div>
                </a>
              </li>
            </div>
            <li class="nav-item px-4">
              <a href="../Shopping Cart/shoppingCartRetrieval.php" class="nav-link py-4"
                ><i class="fas fa-shopping-cart"></i
              ></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--nav bar end-->

    <!--banner image-->
    <div class="container-fluid">
      <div class="hero-image">
        <div class="hero-text" style="color: transparent">
          <h1>hello</h1>
          <h1>you are annoying</h1>
          <h1>why is it only growing with image</h1>
        </div>
      </div>
    </div>
    <!--banner image end-->

    <!--edit profile container-->
    <div id="editProfileContainer" class="container">
      <div id="leftbox" class="leftbox">
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
        <form id="editProfileForm" action="EditUserProfile.php" method="POST">
          <div class="profile tabShow">
            <h1 id="personalHeader" class="editProfileHeader">Personal Info</h1>
            <div class="info-inputs">
              <h2 class="info-headers">First Name</h2>
              <input
                id="firstName"
                name="firstName"
                type="text"
                class="form-control validate"
                value="<?php echo $_SESSION['FName']?>"
                readonly="true"
              />
              <h2 class="info-headers">Last Name</h2>
              <input
                id="lastName"
                name="lastName"
                type="text"
                class="form-control validate"
                value="<?php echo $_SESSION['LName']?>"
                readonly="true"
              />
              <h2 class="info-headers">Phone Number</h2>
              <input
                id="phoneNumber"
                name="phoneNumber"
                type="text"
                class="form-control validate"
                value="<?php echo $_SESSION['PNum']?>"
                readonly="true"
              />
              <h2 class="info-headers">Email Address</h2>
              <input
                id="emailAddress"
                name="emailAddress"
                type="text"
                class="form-control validate"
                value="<?php echo $_SESSION['Email']?>"
                readonly="true"
              />
              <h2 class="info-headers">Password</h2>
              <input
                id="password"
                name="password"
                type="password"
                class="form-control validate"
                value="helloworld"
                readonly="true"
              />
              <br><br>
              <?php 
                if($_SESSION['Subscribed']=="1") {
                  echo "Subscribed";
                  echo '<input
                  type="hidden"
                  id="subscription"
                  class="subscription"
                  name="subscription"
                  value="1"
                /><br>';
                echo '<input
                  type="checkbox"
                  id="subscription"
                  class="subscription"
                  name="subscription"
                  value="0"
                /> <label class="subscription" for="subscription">
                 Unsubscribe from Promotions</label>';
                } else {
                  echo '<input
                  type="checkbox"
                  id="subscription"
                  class="subscription"
                  name="subscription"
                  value="1"
                /> <label class="subscription" for="subscription">
                Subscribe for Promotions</label>';
                }
                ?>
              <br />
            </div>
            <div class="button-group">
              <button
                id="changePasswordButton"
                class="btn btn-default"
                type="button"
              >
                Change Password
              </button>
              <button
                onclick="changeToInputPersonal()"
                class="btn btn-default"
                type="button"
              >
                Edit
              </button>
              <button
                id="updateProfileButton"
                onclick="changeToTextPersonal()"
                class="btn btn-default"
                type="submit"
              >
                Update
              </button>
            </div>
          </div>
          <div class="payment tabShow">
            <h1 id="paymentHeader" class="editProfileHeader">Payment Info</h1>
            <div class="info-inputs">
              <h2 class="info-headers">Card Type</h2>
              <select name="cardType" id="cardType" style="width: 100%">
                <option value="" selected="selected"></option>
                <option value="visa">Visa</option>
                <option value="discover">Discover</option>
                <option value="americanexpress">American Express</option>
                <option value="mastercard">Mastercard</option>
              </select>
              <h2 class="info-headers">Card Number</h2>
              <input
                id="cardNumber"
                name="cardNumber"
                type="text"
                class="form-control validate"
                value="0000 **** **** 0000"
                readonly="true"
              />
              <h2 class="info-headers">CVC</h2>
              <input
                id="cvc"
                name="cvc"
                type="text"
                class="form-control validate"
                value="123"
                maxlength="3"
                readonly="true"
              />
              <h2 class="info-headers">Expiration Date</h2>
              <input
                id="expirationDate"
                name="expirationDate"
                type="text"
                class="form-control validate"
                value="12/25"
                maxlength="5"
                readonly="true"
              />
            </div>
            <div class="button-group">
              <button
                onclick="changeToInputPayment()"
                class="btn btn-default"
                type="button"
              >
                Edit
              </button>
              <button
                id="updateAddressButton"
                onclick="changeToTextPayment()"
                class="btn btn-default"
                type="submit"
              >
                Update
              </button>
            </div>
          </div>
          <div class="address tabShow">
            <h1 id="billingHeader" class="editProfileHeader">
              Billing Address
            </h1>
            <div class="info-inputs">
              <h2 class="info-headers">Street Address</h2>
              <input
                id="streetAddress"
                name="streetAddress"
                type="text"
                class="form-control validate"
                value="<?php echo $_SESSION['SAddress']?>"
                readonly="true"
              />
              <h2 class="info-headers">City</h2>
              <input
                id="city"
                name="city"
                type="text"
                class="form-control validate"
                value="<?php echo $_SESSION['City']?>"
                readonly="true"
              />
              <h2 class="info-headers">State</h2>
              <input
                id="state"
                name="state"
                type="text"
                class="form-control validate"
                value="<?php echo $_SESSION['State']?> "
                readonly="true"
              />
              <h2 class="info-headers">Zip Code</h2>
              <input
                id="zipCode"
                name="zipCode"
                type="text"
                class="form-control validate"
                value="<?php echo $_SESSION['ZipCode']?>"
                readonly="true"
              />
            </div>
            <div class="button-group">
              <button
                onclick="changeToInputAddress()"
                class="btn btn-default"
                type="button"
              >
                Edit
              </button>
              <button
                id="updateAddressButton"
                onclick="changeToTextAddress()"
                class="btn btn-default"
                type="submit"
              >
                Update
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--edit profile container end-->

    <!-- Change Password Modal -->
    <div id="changePasswordModal" class="modal fade">
      <div class="modal-content">
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
          alert("Password does not match current password.");
        }
      };
    </script>
    <script src="button_functions.js"></script>
  </body>
</html>
