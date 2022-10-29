<?php session_start(); 
$_SESSION['Discount']=0.00;
$_SESSION['Valid']=False;
  $_SESSION['Total'] = 0; 
                      if (isset($_POST['quantity'])) {
                        $value = $_POST['quantity'];
                        $host = "localhost";
                        $dbusername = "root";
                        $dbpassword = "";
                        $dbname = "online_bookstore";

                        //Make Connection
                        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                        if (mysqli_connect_error()) {
                          die('Connect Error(' . mysqli_connect_error() . ')'
                              . mysqli_connect_error());
                        } else {
                          //echo $value;
                          $ISBN = $_POST['isbn'];
                          //echo $ISBN;
                          $Available_Books = "UPDATE shopping_cart SET Quantity='$value' WHERE Item_ID='$ISBN'";
                          if($conn->query($Available_Books)) {
                            header("Location: http://localhost/Bookstore-Soft-Engr/Shopping%20Cart/shoppingCartRetrieval.php");
                          } else {
                            echo("Error description: " . $conn -> error);
                          }
                        }
                        $conn->close();
                      }
                    ?>
<!DOCTYPE HTML>
<html>
    <head>
    <title>New Shopping Cart</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="newShoppingCart.css"></link>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      
    </head>
    <body>
        <!--nav bar-->
  <div class="container-fluid">
    <nav class="navbar navbar-expand navbar-light">
        <a class="navbar-brand" href="#"><img src="../BooksRUs_Logo.png" height="80"></a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <!--<li class="nav-item px-4"><a href="#" class="nav-link py-4">Textbooks</a></li>
            <li class="nav-item px-4"><a href="#" class="nav-link py-4">Adults</a></li>-->
            <div class="btn-group dropdown">
               <li class="nav-item px-4 mt-0"><a href="#" class="nav-link py-4"><a style="color:rgba(0,0,0,.5);top:-24px;" href="#" class="dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-target="#cat">Categories</a>            
                  <div class="dropdown-menu dropdown-primary" id="cat">
                    <a class="dropdown-item" href="#" id="biography"><input type="hidden">Biography</a>
                    <a class="dropdown-item" href="#" id="sciencefiction"><input type="hidden">Science-Fiction</a>
                    <a class="dropdown-item" href="#" id="nonfiction"><input type="hidden">Non-Fiction</a>
                    <a class="dropdown-item" href="#" id="poetry"><input type="hidden">Poetry</a>
                    <a class="dropdown-item" href="#" id="drama"><input type="hidden">Drama</a>
                  </div>
                 </a>
               </li>
            </div>
                  
            <li class="nav-item px-4"><a href="#" class="nav-link py-4">About Us</a></li>
            <li class="nav-item px-4"><a href="#" class="nav-link py-4" data-toggle="modal" data-target="#contactModal">Contact</a></li>
              <div class="dropdown">
              <li class="nav-item px-4"><a href="#" class="nav-link py-4">

                <!--Trigger-->
               
                <a class="btn-floating btn-lg black dropdown-toggle"type="button" id="dropdownMenu3" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" data-target="#navItem"><i class="fas fa-user fa-2x" style="color:grey;"></i></a>              
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary" id="navItem">
                 
                              <a class="dropdown-item" href="./LogUserOut.php" id="logout" style="color: black">Logout</a>
                            
                            
                              <a class="dropdown-item"
                                href="../EditProfile/edit_profile.php"
                                style="color: black"
                                >Edit Profile</a
                              >
                            
                            
                              <a class="dropdown-item"
                                href="../OrderHistory/order-history.html"
                                style="color: black"
                                >Order History</a
                              >
                   
                  
                </div>
                </a></li>
              </div>
            <li class="nav-item px-4"><a href="../Shopping Cart/shoppingCartRetrieval.php" class="nav-link py-4"><i class="fas fa-shopping-cart"></i></a></li>
          </ul>     
        </div>
    </nav>
  </div>
  
<!--end of nav bar-->

<div class="container-fluid">
    <div class="hero-image2">
      <div class="hero-text" style="color:transparent;">
        <h1>hello</h1>
        <h1>you are annoying</h1>
        <h1>why is it only growing with image</h1>
      </div>
    </div>
  </div>
    
    <div class="pb-5 mt-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow mb-5">
    
              <!-- Shopping cart table -->
              <h2>Shopping Cart</h2>
              <h5 id="numOfItems"></h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" class="bg-light">
                        <div class="p-2 px-3 text-uppercase">Product</div>
                      </th>
                      <th scope="col" class="bg-light">
                        <div class="py-2 text-uppercase">Price</div>
                      </th>
                      <th scope="col" class="bg-light">
                        <div class="py-2 text-uppercase">Quantity</div>
                      </th>
                      <th scope="col" class="bg-light">
                        <div class="py-2 text-uppercase">Remove</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php for ($i = 0; $i < sizeof($_SESSION['Cart_Items']); $i++) :?>
                    <?php $_SESSION['Total'] += $_SESSION['Cart_Items'][$i]['Price']*$_SESSION['Cart_Items'][$i]['Quantity'];?>
                        <tr>
                            <th scope="row">
                                <div class="p-2">
                                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['Cart_Items'][$i]['Cover'] ).'" alt="" width="70" class="img-fluid rounded shadow">'?>
                                    <div class="ml-3 d-inline-block align-middle">
                                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle"><?= $_SESSION['Cart_Items'][$i]['Name']; ?></a></h5>
                                    </div>
                                </div>
                            </th>
                            <td class="align-middle"><strong><?= $_SESSION['Cart_Items'][$i]['Price']; ?></strong></td>
                            <td class="align-middle">
                            <form method="POST">
                                <input type="hidden" name="isbn" value="<?= $_SESSION['Changed_Book'] = $_SESSION['Cart_Items'][$i]['Item_ID'];?>">
                                <select id="quantity" name="quantity" onchange="this.form.submit()">
                                    <option><?= $_SESSION['Cart_Items'][$i]['Quantity']; ?></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                </form>
                                <script>
                                    //selectElement('leaveCode', '<?= $_SESSION['Cart_Items'][$i]['Quantity']; ?>');
                                    //function selectElement(id, valueToSelect) {    
                                    //    let element = document.getElementById(id);
                                    //    element.value = valueToSelect;
                                    //}
                                </script>
                            </td>
                            <td class="align-middle">
                            <form method="POST" action="updateCart.php">
                              <input type="hidden" name="Item_ID" value='<?php echo $_SESSION['Cart_Items'][$i]['Item_ID']?>'>
                              <button name="actions" value="DELETE" class="text-dark"><i class="fa fa-trash"></i></a> 
                            </form>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </table>
                <div class="btm" style="float:right;">
                    <h5 id="subtotal" style="float:right;"></h5>
                    <script>
                        //var subtotal = 0;
                        //for (int i = 0; i <sizeof($_SESSION['Cart']); i++) {
                        //    subtotal += $_SESSION['Cart'][$i]['product'] * $_SESSION['Cart'][$i]['Quantity'];
                        //}
                        document.getElementById("subtotal").innerHTML = "Subtotal: <?php echo $_SESSION['Total'];?>";
                    </script>
                    <form method="POST" action="../Checkout/checkout.php">
                    <button value="Checkout" type="submit" class="btn btn-light" style="float:right;">Checkout</button>
                    </form>
                    </div>              
                <script>
                    var items = $i;
                    document.getElementById("numOfItems").innerHTML = "(" + items + ")" + " in your shopping cart";
                </script>
              </div>
              <!-- End -->
            </div>
          </div>
        </div>
        
    </div>
        
        <footer style="background-color:#F8F8F8;">
        <div class="footer-top" style="text-align:left;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mt-5 footer-about" style="visibility: visible;">
                        <p>
                            We are a young online bookstore company always looking for new and creative ways for you to enhance your book collection.
                        </p>
                        <p>© Books-R-Us Inc.</p>
                    </div>
                    <div class="col-md-4 mt-5 offset-md-1 footer-contact" style="visibility: visible;">
                        <p><i class="fas fa-map-marker-alt"></i> University of Georgia, Athens, GA 30602</p>
                        <p><i class="fas fa-phone"></i> Phone: (123) 456 7890</p>
                        <p><i class="fas fa-envelope"></i> Email: <a href="onlinebookstoreTC8@gmail.com" style="color:black; text-decoration: none;">onlinebookstoreTC8@gmail.com</a></p>
                    </div>
                    <div class="col-md-4 mt-5 footer-links" style="visibility: visible; left:80px;">
                        <!--<div class="row">
                            <div class="col">
                                <h3>Links</h3>
                            </div>
                        </div>-->
                        


                        <div class="row">
                                    <div class="col-md-6">
                                        <p style="text-align:left;color:black;"><a class="scroll-link" href="../Homepage/homepage.php"
                                                style="color:black; text-decoration: none;">Home</a></p>
                                        <p style="text-align:left;color:black;"><a href="../Homepage/AboutUs.php"
                                                style="color:black; text-decoration: none;">About Us</a></p>
                                        <p style="text-align:left;color:black;"><a href="../Homepage/homepage.php"
                                                style="color:black; text-decoration: none;" data-toggle="modal" data-target="#contactModal">Contact</a></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p style="text-align:left;color:black;"><a href="../Homepage/homepage.php"
                                                style="color:black; text-decoration: none;" id="contactTab" data-toggle="modal"
                                                data-target="#loginModal">Login</a></p>
                                        <p style="text-align:left;color:black;"><a href="../Homepage/homepage.php"
                                                style="color:black; text-decoration: none;" id="contactTab" data-toggle="modal"
                                data-target="#registrationModal">Registration</a></p>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                       <div class="col footer-social">
                        <a href="#"><i class="fab fa-facebook-f px-2 blackiconcolor"></i></a> 
                        <a href="#"><i class="fab fa-twitter px-2"></i></a> 
                        <a href="#"><i class="fab fa-google-plus-g px-2"></i></a> 
                        <a href="#"><i class="fab fa-instagram px-2"></i></a> 
                        <a href="#"><i class="fab fa-pinterest px-2"></i></a>
                    </div>
                   </div>
            </div>
        </div>
    </footer>
        
    </body>
    
</html>
    
