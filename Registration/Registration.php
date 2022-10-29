<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="registrationstyle.css" />
</head>
<body>

    <div style="display: inline-block; width: 100%;">
        
        <form>
            <button class="backbtn" formaction="file:///C:/Users/steph/Desktop/OnlineBookstore/loginPage.html">
                <img src= "arrow.png" class="arrow"width="30" height="30" style="float:left;"/></button>
        </form>
        <h2>Registration     </h2>
    </div>

    <form method="POST" action="RegisterNewUser.php">
        <div class= "rcorners1">
            <div class="leftside" >
                <div>
                    <p id="newcredentials"><b>New Login Info</b></p> 
                    <p>Enter new username</p>
                    <input type="text" id="userbar" name="userbar">

                    <p id="personalinfo"><b>Personal Information</b></p> 
                    <p>Enter full name</p>
                    <input type="text" id="namebar" name="namebar">
                    <p>Enter street address</p>
                    <input type="text" id="addressbar" name="addressbar">
                    <p>Zip code</p>
                    <input type="text" id="zipcodebar" name="zipcodebar">   
                    

                </div><br>

                <div>
                    <p id="paymenttitle"><b>Payment Information</b></p> 
                    <p id="paymentinfo">Enter card number</p> 
                    <input type="text" id="paymentbar" name="paymentbar">
                    <p>CVV</p>
                    <input type="text" id="CVVbar" name="CVVbar">
                </div>

            </div>

            <div class="rightside">
                
                <br><br>
                <p>Enter new password</p>
                    <input type="text" id="passwordbar" name="passwordbar">
                <br>
                <br>
                <br>
                <p>Email address</p>
                <input type="text" id="emailbar" name="emailbar">
                <p>State</p>
                <input type="text" id="statebar" name="statebar">
                <br><br><br><br><br><br><br><br>
                <p>Expiration date (mm/yy)</p>
                <input type="text" id="expbar" name="expbar">
                <br>
                <br>
                <!--<div class="submitbutton"> 
                    <button class="submittext">Submit info</button>
                </div>-->

                <form>
                    <div class="submitbutton">
                    <button class="submittext" formaction="file:///C:/Users/steph/Desktop/OnlineBookstore/homepage.html">
                    Submit info</button>
                    <input type="submit" value="Submit">
                    </div>
                </form>
                

            </div>


        </div>
    </form>
</body>
</html>
