<?php
session_start();
?>

<?php $recEmail = $_SESSION['EmailAddress'] ?>

<script type="text/javascript">
    sessionValue = '<?php echo $recEmail; ?>'
</script>
<!DOCTYPE html>

<html>

<head>
    <title>Books-R-Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
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


<body>
    <!--nav bar-->
    <div class="container-fluid">
        <nav class="navbar navbar-expand navbar-light">
            <a class="navbar-brand" href="../Homepage/homepage.html">
                <div class="logo-image">
                    <a href="../Homepage/homepage.php" class="nav-link py-4"><img src="../BooksRUs_Logo.png" height="80>"</a>
                </div>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <div class="dropdown">
                        <li class="nav-item px-4">
                            <a href="#" class="nav-link py-4">

                                Categories

                            </a>
                        </li>
                        <div class="dropdown-content">

                            <a href="#" id="biography"><input type="hidden">Biography</a>
                            <a href="#" id="sciencefiction"><input type="hidden">Science-Fiction</a>
                            <a href="#" id="sciencefiction"><input type="hidden">Non-Fiction</a>
                            <a href="#" id="sciencefiction"><input type="hidden">Poetry</a>
                            <a href="#" id="sciencefiction"><input type="hidden">Drama</a>


                        </div>
                    </div>
                    <li class="nav-item px-4"><a href="AboutUs.html" class="nav-link py-4">About Us</a></li>
                    <li class="nav-item px-4"><a href="#" class="nav-link py-4" id="contactTab" data-toggle="modal"
                            data-target="#contactModal">Contact</a></li>
                    <div class="dropdown">
                        <li class="nav-item px-4"><a href="#" class="nav-link py-4">

                                <!--Trigger-->

                                <a class="btn-floating btn-lg black dropdown-toggle" type="button" id="dropdownMenu3"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-target="#navItem"><i class="fas fa-user fa-2x"
                                        style="color:grey; font-size:20px"></i></a>
                                <!--Menu-->
                                <div class="dropdown-menu dropdown-primary" id="navItem">
                                    <?php
                                    //session_start();
                                    if (isset($_SESSION['Email'])) {
                                        echo '
                              <a href="./LogUserOut.php" id="logout" style="color: black">Logout<br /></a>
                            
                            
                              <a
                                href="../EditProfile/edit_profile.php"
                                style="color: black"
                                >Edit Profile</a
                              ><a
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
    <hr>
    <img src="https://www.westminstercollege.edu/images/default-source/school-of-arts-and-sciences-2/school-of-arts-and-sciences/english/english-students-studying-banner.jpg?sfvrsn=2
    " alt="alternatetext" width=100%>
    <div class="jumbotron text-center">
        <h1 class="display-3">Thank You!</h1>
        <p class="lead"><strong>Select the button below</strong> to have a verification code sent to your email on file.
            Once received,
            enter the verification code here to activate your account. </p>
        <button type="button" id="registerbtn" class="registerbtn" onclick="sendEmail()">Send Code</button>

        <div class="code">
            <script type="text/javascript">
                function verify() {
                    if (document.getElementById('verification').value == verificationCode) {
                        document.getElementById("verified").submit();
                    }
                }
            </script>
            <br>
            <p>Enter verification code</p>
            <form method="POST" action="../Homepage/setStatus.php" id="verified">
                <input type="text" id="verification" name="verification">
                <button type="submit" onclick="verify()" style="text-align:center">
                    Submit
                    </input>
            </form>
        </div>

        <hr>
        <p>
            Having trouble? <a href="#' data-toggle="modal"
            data-target="#contactModal">Contact us</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="https://bootstrapcreative.com/" role="button" ">Continue to homepage</a>
        </p>
      </div>

      <style>

    .btn-primary  {
	    background-color: #000;
	    border-color: #000;
    }
    </style>



    <footer style=" background-color:#F8F8F8;">
                <div class="footer-top" style="text-align:left;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 mt-5 footer-about wow fadeInUp animated"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <p>
                                    We are a young online bookstore company always looking for new and creative ways for
                                    you
                                    to enhance your book collection.
                                </p>
                                <p>© Books-R-Us Inc.</p>
                            </div>
                            <div class="col-md-4 mt-5 offset-md-1 footer-contact wow fadeInDown animated"
                                style="visibility: visible; animation-name: fadeInDown;">
                                <p><i class="fas fa-map-marker-alt"></i> University of Georgia, Athens, GA 30602</p>
                                <p><i class="fas fa-phone"></i> Phone: (123) 456 7890</p>
                                <p><i class="fas fa-envelope"></i> Email: <a href="onlinebookstoreTC8@gmail.com"
                                        style="color:black; text-decoration: none;">onlinebookstoreTC8@gmail.com</a></p>
                            </div>
                            <div class="col-md-4 mt-5 footer-links wow fadeInUp animated"
                                style="visibility: visible; animation-name: fadeInUp;left:80px;">
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




                <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
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
                                    <p style="text-align:center">Send us an email if you have any questions or concerns
                                        here</p>
                                    <div class="md-form mb-5">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <label data-error="wrong" data-success="right" for="email-login">Your
                                            email</label>
                                        <input type="email" id="email-login" class="form-control validate" required />
                                    </div>

                                    <div class="md-form mb-4">
                                        <i class="fas fa-lock prefix grey-text"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your
                                            Message</label>
                                        <textarea rows="4" cols="10" type="message" id="email-login"
                                            class="form-control validate"></textarea>
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