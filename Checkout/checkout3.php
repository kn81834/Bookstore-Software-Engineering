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
<html>
  <head>
 
    <meta charset="utf-8" />
    <title>Checkout</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"
    />
    <link rel="stylesheet" href="../Admin Homepage/ManageBooks/manageBooks.css" />
    <link rel="stylesheet" href="checkout_style.css" />
    <?php $email = $_SESSION['Email']?>
    <script type="text/javascript">
      session = "<?php echo $recEmail;?>";
    </script>
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
    <script src="https://smtpjs.com/v3/smtp.js"></script> 
    
    <script
      src="https://kit.fontawesome.com/a746b8874d.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
  </style>

  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-expand navbar-light">
        <a class="navbar-brand" href="adminHomepage.html"
          ><img
            src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo4.jpg"
            height="50"
        /></a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item px-4">
              <a href="../../Homepage/LogUserOut.php" class="nav-link py-4"
                >Logout</a
              >
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div
      class="container-fluid"
      style="background-color: #e9ecef; padding-bottom: 20px; padding-top: 20px"
    >
      <div class="container-fluid">
        <h1 class="jumbotron-heading text-center">Checkout</h1>
      </div>
    </div>

    <div class="flex-grid">
      <div class="col">
        <div class="leftcorners">
          <p id="billingAddress">
            <b style="font-size: 40px">Billing Address</b>
          </p>
          <button class="button" id="billingButton">Change Billing Address</button>
        </div>
        <div class="leftcorners">
          <p id="paymentInformation">
            <b style="font-size: 40px">Payment Information</b>
          </p>
          <button class="button" id="paymentButton">Change Payment Information</button>
        </div>
      </div>
      <div class="col">      
        <div class="rcorners">
          <p id="orderSummary"><b style="font-size: 40px">Order Summary</b></p>
          <p id="cart">
            <t>Your Cart(1)</t> <a href="#" style="float: right">Edit</a>
          </p>
          <?php for ($i = 0; $i < sizeof($_SESSION['Cart_Items']); $i++) :?>
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['Cart_Items'][$i]['Cover'] ).'" alt="" class="book"
            style="positon
      absolute; left:100px;"
          />'?>
            <t style="float: right">
                <?php echo "Quantity: ";?>
                <?= $_SESSION['Cart_Items'][$i]['Quantity']; ?>
            </t>
          <div> 
            <t style="float: right">
                <?php echo "$";?>
                <?= $_SESSION['Cart_Items'][$i]['Price']; ?>
            </t>
          </div>          
          <hr style="width: 100%; text-align: left; margin-left: 0" />
          <?php endfor; ?>
          <form method="POST">
            <input name="promoCode" class="promoCode" placeholder="Enter promotion code" />
            <input type="submit" name="promotions" value="Check Promotion"></input>
          </form>
          <p class="subtotal">
            <i>Subtotal</i> <t style="float: right">$<?php echo number_format($_SESSION['Total'], 2, '.', '');?></t>
          </p>
          <p class="tax"><i>Tax</i> <t style="float: right">$<?php echo number_format($_SESSION['Total']*.07, 2, '.', '');?></t></p>
          <p class="delivery">
            <i>Delivery</i> <t style="float: right">Free</t>
          </p>
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
              }
              echo "thing is".$_SESSION['Total']*1.07;
              //$_SESSION['Total']*=1.07; 
            } else {
              echo "thing is".$_SESSION['Total']*1.07;
            }
            ?></b></t>
          </p>
          <form method="POST" action="orderCheckOut.php" id="orderConfirmation">
          <button type="button" onclick="sendConfirmationEmail('<?php echo $email;?>')">Checkout</button>
          </form>
        </div>
      </div>
    </div>
    
    <div id="billingModal" class="billingModal">
      <div class="addBookModal-content">
        <span class="close-button-billing">&times;</span>

        <form action="../Admin_Phps/PromoUpdate.php" method="POST">
          <div class="container">
            <h1 style="text-align: center"><b>Edit Billing Address</b></h1>

            <h1 id="billingHeader" class="editProfileHeader">
              Billing Address
            </h1>
            <h2>Street Address</h2>
            <input
              id="streetAddress"
              type="text"
              class="input"
              value="1234 Some Street"
              required
            />
            <h2>City</h2>
            <input
              id="city"
              type="text"
              class="input"
              value="Atlanta"
              required
            />
            <h2>State</h2>
            <input
              id="state"
              type="text"
              class="input"
              value="GA"
              required
            />
            <h2>Zip Code</h2>
            <input
              id="zipCode"
              type="text"
              class="input"
              value="30606"
              required
            />

            <button
              value="Add"
              name="actions"
              type="submit"
              class="submitbtn1"
              id="submitbtn1"
            >
              Submit
            </button>
            <br /><br /><br /><br />
          </div>
        </form>
      </div>
    </div>

    <div id="paymentModal" class="paymentModal">
      <div class="addBookModal-content">
        <span class="close-button-payment">&times;</span>

        <form action="../Admin_Phps/PromoUpdate.php" method="POST">
          <div class="container">
            <h1 style="text-align: center"><b>Edit Payment Information</b></h1>

            <h2>Card Type</h2>
            <select name="cardType" id="cardType" style="width: 100%">
              <option value="" selected="selected"></option>
              <option value="visa">Visa</option>
              <option value="discover">Discover</option>
              <option value="americanexpress">American Express</option>
              <option value="mastercard">Mastercard</option>
            </select>
            <h2>Card Number</h2>
            <input
              id="cardNumber"
              type="text"
              class="input"
              value="0000 **** **** 0000"
              required
            />
            <h2>CVC</h2>
            <input
              id="cvc"
              type="text"
              class="input"
              value="123"
              maxlength="3"
              required
            />
            <h2>Expiration Date</h2>
            <input
              id="expirationDate"
              type="text"
              class="input"
              value="12/25"
              maxlength="5"
              required
            />

            <button
              value="Add"
              name="actions"
              type="submit"
              class="submitbtn2"
              id="submitbtn2"
            >
              Submit
            </button>
            <br /><br /><br /><br />
          </div>
        </form>
      </div>
    </div>

    <script>
      var addModal = document.getElementById("billingModal");
      var addbtn = document.getElementById("billingButton");
      var span = document.getElementsByClassName("close-button-billing")[0];
      var submitbtn = document.getElementById("submitbtn1");

      addbtn.onclick = function () {
        addModal.style.display = "block";
      };

      span.onclick = function () {
        addModal.style.display = "none";
      };

      window.onclick = function (event) {
        if (event.target == addModal) {
          addModal.style.display = "none";
        }
      };
    </script>
    <script>
      var addModal = document.getElementById("paymentModal");
      var addbtn = document.getElementById("paymentButton");
      var span = document.getElementsByClassName("close-button-payment")[0];
      var submitbtn = document.getElementById("submitbtn2");

      addbtn.onclick = function () {
        addModal.style.display = "block";
      };

      span.onclick = function () {
        addModal.style.display = "none";
      };

      window.onclick = function (event) {
        if (event.target == addModal) {
          addModal.style.display = "none";
        }
      };
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $("#mydatatable").DataTable();

      var table = document.getElementById("mydatatable");

      table.find("tr").each(function () {
        var $tds = $(this).find("td");
        //var number = $tds.eq(0).text();
        //var name = $tds.eq(1).text();
        //var accountID = $tds.eq(2).text();
        var role = $tds.eq(3).text();
        var status = $tds.eq(4).text();
        var action = $tds.eq(5).text();
        // do something with it
        if (role.value == "User") {
          action.html(
            "<select><option>Suspend</option><option>Unsuspend</option></select>"
          );
        } else if (role.value == "Employee") {
          action.html("<button>Promote</button>");
        } else if (role.value == "Admin") {
          action.html("<button>Demote</button>");
        }
      });
    </script>
  </body>
</html>
