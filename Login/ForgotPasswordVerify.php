<!DOCTYPE html>
<html>
<head>
    <title>Bookstore</title>
    <link rel="stylesheet" href="ForgotPasswordVerifyStyle.css" />
    <script type="text/javascript">
        function pwverify() {
            if (document.getElementById('newpassword').value == document.getElementById('confirmpassword').value){
                document.getElementById("pw").submit();
            }
            else {
                alert("Password did not match: Please try again!");
            }
        }
    </script>
    <script>
        function checkPassword(form){
            element1 = form.newpassword.value;
            element2 = form.confirmpassword.value;

        if(element1 != element2 ){

         alert ("\nPassword did not match: Please try again...") 
            return false; 
        }else{ 
                
            document.getElementById("newpassword").submit();

            return true; 
        } 
     }
     </script>
</head>
<body>

    <div style="display: inline-block; width: 100%;">
        
        <h2>Books-R-Us     <img src="../book.png" width="19" height="25"/></h2>
    </div>

    


    <div class= "rcorners1">
        <div class="leftside"  >
            <div class="welcometext">
                <p>An email will be sent out shortly with your verification code needed to reset your password. Be sure to enter all information correctly. </p>
                <div class="code">
                    <form method="POST" action="../Homepage/changePW.php" id="pw">
                        <p>Enter New Password</p>
                        <input type="text" id="newpassword" name="newpassword" required>

                        <p>Reconfirm New Password</p>
                        <input type="text" id="confirmpassword" name="confirmpassword" required>
            
                        <input type="button" class="submittext" id="submittext" onclick="pwverify()">
                        </input>
                    </form>
                </div>
                   
        
                   
            </div>

            
        </div>

    </div>

    
</body>
</html>
