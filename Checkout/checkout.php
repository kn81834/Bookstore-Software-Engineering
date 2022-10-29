<?php session_start();?>
<?php
      if(isset($_POST['promotions'])) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "online_bookstore";

        //Make Connection
        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_error() .')'
                . mysqli_connect_error());
        }
        else {
          $promoCode = $_POST['promoCode'];
          $SQL = "SELECT Discount FROM promotions WHERE Promotion_ID='$promoCode'";
          $works = $conn->query($SQL);
          $discount = mysqli_fetch_array($works);
          //print_r($discount);
          if(isset($discount[0])) {
            $_SESSION['Valid'] = True;
            $_SESSION['Discount'] = $discount[0];
            //echo "done";
          } else {  
            $_SESSION['Valid'] = False;
            //echo "error";
          }
        }
        $conn->close();
      }
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"
    />
    <link rel="stylesheet" href="editProfile_style.css" />
    <?php $email = $_SESSION['Email']?>
    <script type="text/javascript">
      session = "<?php echo $recEmail;?>";
    </script>
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
    <script src="https://smtpjs.com/v3/smtp.js"></script> 
          <script type="text/javascript">
      function sendConfirmationEmail(email) {
        console.log("Confirm");
        console.log(email);
        Email.send({
              Host: "smtp.gmail.com",
              Username: "onlinebookstoreTeamBC8@gmail.com",
              Password: "ugaSEFALL2020",
              To: email,
              From: "onlinebookstoreTeamBC8@gmail.com",
              Subject: "Thank you for your purchase!",
              Body: "Thank you for your purchase. Please shop again!",
          });
          document.getElementById("orderConfirmation").submit();
      }
    </script>
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
    <script>
      $(function () {
        $("#footer").load("../Footer/footer.html");
      });
    </script>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <link rel="stylesheet" href="checkout_style.css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      $(function () {
        $("#navbar").load("../NavBar/navbar.html");
      });
    </script>
  </head>
  <style>
    body {
      padding-top: 50px;
    }

    .nav-link-main:hover {
      background-color: #faf0e6;
      border-radius: 5px;
      padding: 8px;
    }

    .container-fluid {
      padding-right: 0;
      padding-left: 0;
      margin-right: auto;
      margin-left: auto;
    }
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
.required:after {
    content:" *";
    color: red;
}
  </style>

  <body>
    <div id="navbar"></div>
    <!--nav bar-->
    <!--nav bar end-->

    <div
      class="container-fluid"
      style="background-color: #e9ecef; padding-bottom: 20px; padding-top: 20px"
    >
      <div class="container-fluid">
        <h1 class="jumbotron-heading text-center" style="font-size: 50px">
          Checkout
        </h1>
      </div>
    </div>

    <div class="flex-grid">
      <div class="col" style="padding-top: 2%">
        <div class="col-lg-12 p-5 bg-white rounded shadow mb-5"  style="height: 50%;">
          <div class="leftcorners">
            <p id="billingAddress">
              <b style="font-size: 40px">Billing Address</b>
            </p>
            <p class="display-info">Current Address: <?php echo $_SESSION['SAddress'];?></p>
            <div class="edit-btn">
              <button
                class="btn btn-info btn-lg"
                id="billingButton"
                type="button"
                data-toggle="modal"
                data-target="#billingModal"
              >
                Change Billing Address
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-12 p-5 bg-white rounded shadow mb-5" style="height: 50%;">
          <div class="leftcorners">
            <p id="paymentInformation">
              <b style="font-size: 40px">Payment Information</b>
            </p>
            <p class="display-info">Current Card: Card 1</p>
            <div class="edit-btn">
              <button
                class="btn btn-info btn-lg"
                id="paymentButton"
                type="button"
                data-toggle="modal"
                data-target="#paymentModal"
              >
                Change Payment Information
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col" style="padding-top: 2%">
        <div class="col-lg-12 p-5 bg-white rounded shadow mb-5">
          <div class="rcorners">
            <div class="book-view">
              <p id="orderSummary">
                <b style="font-size: 40px">Order Summary</b>
              </p>
              <p id="cart">
                <t>Your Cart(1)</t> <a href="#" style="float: right">Edit</a>
              </p>
              <?php for ($i = 0; $i < sizeof($_SESSION['Cart_Items']); $i++) :?>

              <table class="table">
                <thead style="text-align: left"></thead>
                <tbody>
                  <tr>
                    <td>
                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['Cart_Items'][$i]['Cover'] ).'" alt="" class="book"style="positon absolute; left:100px;"/>'?>
                    </td>
                    <td><t style="float: right">Qty:<?= $_SESSION['Cart_Items'][$i]['Quantity']; ?></t></td>
                    <td><t style="float: right">$<?= $_SESSION['Cart_Items'][$i]['Price']; ?></t></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <?php endfor; ?>  
            <hr style="width: 100%; text-align: left; margin-left: 0" />
            <div class="promotion">
              <form method="POST">
            <input name="promoCode" class="promoCode" placeholder="Enter promotion code" />
            <input type="submit" name="promotions" value="Check Promotion"></input>
          </form>
            </div>
            <p class="subtotal">
              <i>Subtotal</i> <t style="float: right">$<?php echo number_format($_SESSION['Total'], 2, '.', '');?></t>
            </p>
            <p class="tax"><i>Tax</i> <t style="float: right">$<?php echo number_format($_SESSION['Total']*.07, 2, '.', '');?></t></p>
            <p class="discount">Discount<t style="float: right"><t style="float: right">$<?php echo number_format($_SESSION['Discount'], 2, '.', '');?></t></p>
            <p class="bold_text">
            <b><i>Order Total</i></b><t style="float: right"><t style="float: right">$<?php            
            if(isset($_POST['promotions'])) {
              if($_SESSION['Valid']) {
                $_SESSION['Total']*=1.07;
                $_SESSION['Total']-=$_SESSION['Discount'];
                echo number_format($_SESSION['Total'], 2, '.', '');
                //$_SESSION['Total']+=$_SESSION['Discount'];
                //$_SESSION['Total']/=1.07;
              } else {
                echo number_format($_SESSION['Total']*1.07, 2, '.', '');
              }
              //$_SESSION['Total']*=1.07; 
            } else {
              echo number_format($_SESSION['Total']*1.07, 2, '.', '');
            }
            ?></b></t>
          </p>
          <form method="POST" action="orderCheckOut.php" id="orderConfirmation">
          <button class="btn btn-info btn-lg" type="button" onclick="sendConfirmationEmail('<?php echo $email;?>')">Checkout</button>
          </form>
          </div>
        </div>
      </div>
    </div>

    <div
      id="billingModal"
      class="modal fade"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Billing Address</h4>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form>
            <div class="modal-body mx-3">
              <div class="md-form mb-5">
                <label data-error="wrong" data-success="right" for="street"
                  >Street Address</label
                >
                <input
                  type="text"
                  id="street"
                  class="form-control validate"
                  required
                />
              </div>

              <div class="md-form mb-5">
                <label data-error="wrong" data-success="right" for="city"
                  >City</label
                >
                <input
                  type="text"
                  id="city"
                  class="form-control validate"
                  required
                />
              </div>

              <div class="md-form mb-5">
                <label data-error="wrong" data-success="right" for="zip"
                  >Zip Code</label
                >
                <input
                  type="text"
                  id="zip"
                  class="form-control validate"
                  pattern="[0-9]{5}"
                  required
                />
              </div>

              <div class="md-form mb-5">
                <label data-error="wrong" data-success="right" for="street"
                  >State</label
                >
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
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-default" type="submit">Submit</button>
              <br />
            </div>
          </form>
        </div>
      </div>
    </div>

    <div
      id="paymentModal"
      class="modal fade"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">
              Payment Information
            </h4>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form>
            <div class="modal-body mx-3">
              <div class="md-form mb-5">
                <label data-error="wrong" data-success="right" for="cardtype"
                  >Card Type</label
                >
                <select name="cardtype" id="cardtype" style="width: 100%">
                  <option value="" selected="selected"></option>
                  <option value="visa">Visa</option>
                  <option value="discover">Discover</option>
                  <option value="americanexpress">American Express</option>
                  <option value="mastercard">Mastercard</option>
                </select>
              </div>

              <div class="md-form mb-5">
                <label data-error="wrong" data-success="right" for="cardnum"
                  >Card Number</label
                >
                <input
                  type="text"
                  id="cardnum"
                  class="form-control validate"
                  pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}"
                  inputmode="numeric"
                  required
                />
              </div>

              <div class="md-form mb-5">
                <label data-error="wrong" data-success="right" for="cvv"
                  >CVC</label
                >
                <input
                  type="text"
                  id="cvv"
                  class="form-control validate"
                  pattern="[0-9]{3}"
                  required
                />
              </div>

              <div class="md-form mb-5">
                <label data-error="wrong" data-success="right" for="expdate"
                  >Exp Date</label
                >
                <input
                  type="month"
                  id="expdate"
                  class="form-control validate"
                  required
                />
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-default" type="submit">Submit</button>
              <br />
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="footer"></div>

    <script>
      var billingModal = document.getElementById("billingModal");
      var billingBtn = document.getElementById("billingButton");
      var billingSpan = document.getElementsByClassName(
        "close-button-billing"
      )[0];
      var submitbtn1 = document.getElementById("submitbtn1");

      billingBtn.onclick = function () {
        billingModal.style.display = "block";
      };

      billingSpan.onclick = function () {
        billingModal.style.display = "none";
      };

      window.onclick = function (event) {
        if (event.target == billingModal) {
          billingModal.style.display = "none";
        }
      };
    </script>
    <script>
      var paymentModal = document.getElementById("paymentModal");
      var paymentBtn = document.getElementById("paymentButton");
      var paymentSpan = document.getElementsByClassName(
        "close-button-payment"
      )[0];
      var submitbtn2 = document.getElementById("submitbtn2");

      paymentBtn.onclick = function () {
        paymentModal.style.display = "block";
      };

      paymentSpan.onclick = function () {
        paymentModal.style.display = "none";
      };

      window.onclick = function (event) {
        if (event.target == paymentModal) {
          paymentModal.style.display = "none";
        }
      };
    </script>
    <script>
      var promotionInput = document.getElementByID('promoInput';)
        var promotionButton = document.getElementByID("applyPromo");
        var promotionID = "";
        promotionButton.onClick = function () {

        };
        getPrice = function () {
          var promotionPercentage = "<?php Print($Discount); ?>";
          var bookPrice = "<?php Print($Selling_Price); ?>";
          var discountID = "<?php Print($Promotion_ID); ?>";
        };
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
      document.getElementById("checkoutButton").onclick = function () {
        location.href = "../OrderConfirmation/orderConfirmation.php";
      };
    </script>
  </body>
</html>
