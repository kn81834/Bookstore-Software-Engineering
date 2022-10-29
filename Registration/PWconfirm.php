<?php 
    session_start();
    if (isset($_GET['results'])){
        if ($_GET['results'] = "Successfully-Registered"){
            echo '<script src="https://smtpjs.com/v3/smtp.js"></script>
                        <script>var verificationCode = Math.floor((Math.random()*1000000)+1);
                        var userID = \'\';
                        var chars = \'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789\';
                        var length = 7;
                        for (var i = 0; i < length; i++ ) {
                           userID += chars.charAt(Math.floor(Math.random() * chars.length));
                        } 
                        Email.send({
                            Host: "smtp.gmail.com",
                            Username: "onlinebookstoreTeamBC8@gmail.com",
                            Password: "ugaSEFALL2020",
                            To: "bx28005@uga.edu",
                            From: "onlinebookstoreTeamBC8@gmail.com",
                            Subject: "Welcome to the Online Bookstore!",
                            Body: "Welcome!\nHere is your verification code: " + verificationCode + ". And here is your unique user identification number: " + makeUserID() +". You can use this to sign in as well!",
                        });</script>';
        }
    }
?>
<?php $recEmail = $_SESSION['EmailAddress']?>
<script type="text/javascript">sessionValue='<?php echo $recEmail;?>'</script>
<!DOCTYPE html>
<html>
<head>
    <title>Bookstore</title>
    <link rel="stylesheet" href="regconfirmstyle.css" />
    <script type="text/javascript" src="../SkeletonEmailCode/sendEmail.js"></script>
</head>
<body>

    <div style="display: inline-block; width: 100%;">
        
        <h2>Books-R-Us     <img src="book.png" width="19" height="25"/></h2>
    </div>


    <div class= "rcorners1">
        <div class="leftside"  >
            <div class="welcometext">
                <p><span style="color: green" text-align:center;>CONGRATS!</span> You are almost there! An email will be sent out shortly with your verification code. 
                Once received, enter the verification code here to activate your account. Click "Send Code" below to send you a verification code!</p>
                <input type="button" id="registerbtn" class="registerbtn" onclick="sendEmail();">Send Code</input>
                <br>
                <div class="code">
                    <script type="text/javascript">
                    function verify() {
                        if (document.getElementById('verification').value == verificationCode){
                            document.getElementById("verified").submit();
                        }
                    }
                    </script>
                    <p>Enter verification code</p>
                    <form method="POST" action="../Login/ForgotPasswordVerify.php" id="verified">
                    <input type="text" id="verification" name="verification">
                    <input type="button" class="submittext" id="submittext" onclick="verify()">
                        Submit
                    </input>
                </div>
                   
        
                   
            </div>

            
        </div>

    </div>

    

</body>
</html>
