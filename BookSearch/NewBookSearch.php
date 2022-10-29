<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <title>Books-R-Us</title>
    <!--
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="NewBookSearch.css">

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
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="NewBookSearch.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <script>
        var userID = '';
        var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var length = 7;
        for (var i = 0; i < length; i++) {
            userID += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        var verificationCode = Math.floor((Math.random() * 1000000) + 1);
    </script>
</head>


<body>
    <!--nav bar-->
    <div class="container-fluid">
        <nav class="navbar navbar-expand navbar-light">
            <a class="navbar-brand" href="../Homepage/homepage.php">
                <div class="logo-image">
                    <img src="../BooksRUs_Logo.png" height="80">
                </div>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <form method="POST">
                        <div class="dropdown">
                            <li class="nav-item px-4">
                                <a href="#" class="nav-link py-4">
                                    Categories
                                </a>
                            </li>
                            <div class="dropdown-content">
                            <form method="POST">
                                <a href="NewBookSearch.php" id="biography"><button style="border: 1px solid transparent;background-color: transparent;" name="Category" value="Biography" type="submit">Biography</button></a>
                                <a href="#" id="sciencefiction"><button style="border: 1px solid transparent;background-color: transparent;" name="Category" value="Science-Fiction" type="submit">Science Fiction</button></a>
                                <a href="#" id="sciencefiction"><button style="border: 1px solid transparent;background-color: transparent;" name="Category" value="Non-Fiction" type="submit">Non Fiction</button></a>
                                <a href="#" id="sciencefiction"><button style="border: 1px solid transparent;background-color: transparent;" name="Category" value="Poetry" type="submit">Poetry</button></a>
                                <a href="#" id="sciencefiction"><button style="border: 1px solid transparent;background-color: transparent;" name="Category" value="Drama" type="submit">Drama</button></a>
                            </form>
                            </div>
                        </div>
                    </form>
                    <li class="nav-item px-4"><a href="../About Us/aboutUs.php" class="nav-link py-4">About Us</a></li>
                    <li class="nav-item px-4"><a class="nav-link py-4" id="contactTab" data-toggle="modal" data-target="#contactModal">Contact</a></li>
                    <div class="dropdown">
                        <li class="nav-item px-4"><a href="#" class="nav-link py-4">

                                <!--Trigger-->

                                <a class="btn-floating btn-lg black dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-target="#navItem"><i class="fas fa-user fa-2x" style="color:grey; font-size:20px"></i></a>
                                <!--Menu-->
                                <div class="dropdown-menu dropdown-primary" id="navItem">
                                    <?php
                                    //session_start();
                                    if (isset($_SESSION['Email'])) {
                                        echo '
                              <a href="../Homepage/LogUserOut.php" id="logout" style="color: black">Logout<br /></a>
                            
                            
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
                                    } else {
                                        echo '<a class="dropdown-item" href="#" id="login" data-toggle="modal" data-target="#loginModal">Login/Sign Up</a>';
                                    }
                                    ?>
                                </div>
                            </a></li>
                    </div>
                    <li class="nav-item px-4"><a href="#" class="nav-link py-4"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!--nav bar end-->


    <br>


    <!--Search box-->
    <div class="container-fluid" style="/*background-color:#FFFFF0#ffdead*/; padding-bottom:50px;margin-top:0px;">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-9">
                    <form method="POST">
                        <div class="input-group">
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top:32px; margin-right:5px; background-color:#E0DEDE;"><i class="fas fa-filter" style="color:black;"></i>
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu" id="filter">
                                        <input type="hidden" name="Filter" value="Book_Name"/>
                                        <li style="text-align:left; padding-left:5px;"><input name="Filter" value="Author" type="checkbox"> Author</li>
                                        <li style="text-align:left; padding-left:5px;"><input name="Filter" value="Book_Name" type="checkbox"> Title</li>
                                        <li style="text-align:left; padding-left:5px;"><input name="Filter" value="Category" type="checkbox"> Category</li>
                                        <li style="text-align:left; padding-left:5px;"><input name="Filter" value="ISBN" type="checkbox"> ISBN</li>
                                    </ul>
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

    <script>
        $(document).ready(function() {
            $('input:checkbox').click(function() {
                $('input:checkbox').not(this).prop('checked', false);
            });
        });
    </script>
    <!--end of search box-->


    <div>
        <form method="POST" action="../Shopping%20Cart/updateCart.php">
            <table style="background-color: #faf0e6; border-radius:5px;padding-bottom:50px;">

                <?php
                if (isset($_POST["search"])) {

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
                        $Filter = $_POST['Filter'];
                        $str = $_POST["search"];
                        $Available_Books = "SELECT * FROM available_books WHERE ".$Filter." = '$str'";
                        $Books = $conn->query($Available_Books);
                        while ($newElement = $Books->fetch_assoc()) {
                            $new[] = $newElement;
                        }
                        $_SESSION['BooksTemp'] = $new;
                    }
                    $conn->close();
                } else if (!empty($_POST["homeSearch"])) {
                    //echo $_SESSION['Email'];
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
                        $Filter = $_POST['homeFilter'];
                        $str = $_POST["homeSearch"];
                        $Available_Books = "SELECT * FROM available_books WHERE ".$Filter." = '$str'";
                        $Books = $conn->query($Available_Books);
                        while ($newElement = $Books->fetch_assoc()) {
                            $new[] = $newElement;
                        }
                        $_SESSION['BooksTemp'] = $new;
                    }
                    $conn->close();
                } else if (!empty($_POST["Category"])) {
                    //echo $_SESSION['Email'];
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
                        $str = $_POST["Category"];
                        echo $str;
                        $Available_Books = "SELECT * FROM available_books WHERE Category = '$str'";
                        $Books = $conn->query($Available_Books);
                        while ($newElement = $Books->fetch_assoc()) {
                            $new[] = $newElement;
                        }
                        $_SESSION['BooksTemp'] = $new;
                    }
                    $conn->close();
                }
                ?>
                <div class="container-fluid features" style="background-color:#faf0e6;border-radius:5px;padding-bottom:50px;">

                    <div class="row justify-content-around" style="flex-direction:column;padding-top:50px;">
                        <h1 class="results" style="margin-left:3%; margin-right:3%;"><span>Search Results</span></h1>
                    </div>
                    <thead>
                        <tr>
                            <th>Book Cover</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        <div>
                            <?php

                            for ($i = 0; $i < sizeof($_SESSION['BooksTemp']); $i++) :
                                $_SESSION['TempISBN'] = $_SESSION['BooksTemp'][$i]['ISBN'];
                            ?>



                                <tr style="height: 255px; padding:30px;">
                                    <div class="book card" style="border: 3px black;">
                                        <?php $_SESSION['Cover']=$_SESSION['BooksTemp'][$i]['Cover'];?>
                                        <td><a href="../BookDetails/bookDescriptions.php"><?php echo '<img src="data:image/jpeg;base64,' . base64_encode($_SESSION['BooksTemp'][$i]['Cover']) . '" height="200" width="200"/>'; ?></a>
                                        </td>
                                        <!--cover picture-->
                                        <td>
                                            <h4 class="name-text"><?php echo $_SESSION['BooksTemp'][$i]['Book_Name']; ?>
                                            </h4>
                                        </td>
                                        <!--booktitle-->
                                        <td>
                                            <h4 class="author-text"><?php echo $_SESSION['BooksTemp'][$i]['Author']; ?></h4>
                                        </td>
                                        <!--author-->
                                        <td>
                                            <h4 class="price-text"><?php echo $_SESSION['BooksTemp'][$i]['Asking_Price']; ?>
                                            </h4>
                                        </td>
                                        <!--price-->
                                        <td class="addToCart"><input type="image" name="actions" value="Add to Cart" src="add.png" width="30px" height="30px" alt="Submit Form"></td>

                                        <input name="Item_ID" type="hidden" value="<?php echo $_SESSION['BooksTemp'][$i]['ISBN']; ?>">
                                        <!--<input name="Cover" type="hidden" value="<?php echo '<img src="data:image/jpeg;base64,' . base64_encode($_SESSION['BooksTemp'][$i]['Cover']) . '" height="200" width="200"/>'; ?>">-->
                                        <!--cover picture-->
                                        <input name="Name" type="hidden" value="<?php echo $_SESSION['BooksTemp'][$i]['Book_Name']; ?>">
                                        <!--booktitle-->
                                        <input name="author" type="hidden" value="<?php echo $_SESSION['BooksTemp'][$i]['Author']; ?>">
                                        <!--author-->
                                        <input name="Price" type="hidden" value="<?php echo $_SESSION['BooksTemp'][$i]['Asking_Price']; ?>">
                                        <input name="actions" type="hidden" value="Add to Cart">
                                    </div>
                                </tr>

                            <?php endfor;
                            ?>
                        </div>
                    </tbody>

                </div>

            </table>
        </form>
    </div>

   

    <footer style="background-color:#F8F8F8;">
        <div class="footer-top" style="text-align:left;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mt-5 footer-about wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <p>
                            We are a young online bookstore company always looking for new and creative ways for you to enhance your book collection.
                        </p>
                        <p>© Books-R-Us Inc.</p>
                    </div>
                    <div class="col-md-4 mt-5 offset-md-1 footer-contact wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                        <p><i class="fas fa-map-marker-alt"></i> University of Georgia, Athens, GA 30602</p>
                        <p><i class="fas fa-phone"></i> Phone: (123) 456 7890</p>
                        <p><i class="fas fa-envelope"></i> Email: <a href="onlinebookstoreTC8@gmail.com" style="color:black; text-decoration: none;">onlinebookstoreTC8@gmail.com</a></p>
                    </div>
                    <div class="col-md-4 mt-5 footer-links wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;left:80px;">
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
                                    </div>
                                    <div class="col-md-6">
                                        <p style="text-align:left;color:black;"><a href="../Homepage/homepage.php"
                                                style="color:black; text-decoration: none;" id="contactTab" data-toggle="modal"
                                                data-target="#contactModal>Login</a></p>
                                        <p style="text-align:left;color:black;"><a href="../Homepage/homepage.php"
                                                style="color:black; text-decoration: none;" id="contactTab" data-toggle="modal"
                                data-target="#contactModal">Registration</a></p>
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
                        <a href="#"><i class="fab fa-facebook-f px-2 blackiconcolor" style="color:black;"></i></a> 
                        <a href="#"><i class="fab fa-twitter px-2" style="color:black;" ></i></a> 
                        <a href="#"><i class="fab fa-google-plus-g px-2" style="color:black;"></i></a> 
                        <a href="#"><i class="fab fa-instagram px-2" style="color:black;"></i></a> 
                        <a href="#"><i class="fab fa-pinterest px-2" style="color:black;"></i></a>
                    </div>
                   </div>
            </div>
        </div>
    </footer>


    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Contact Us</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body mx-3">
                        <p style="text-align:center">Send us an email if you have any questions or concerns here</p>
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="email-login">Your email</label>
                            <input type="email" id="email-login" class="form-control validate" required />
                        </div>

                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Message</label>
                            <textarea rows="4" cols="10" type="message" id="email-login" class="form-control validate"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default" type="submit">Submit</button>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
