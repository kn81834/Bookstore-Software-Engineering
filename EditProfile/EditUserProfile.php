<?php
    //all the variables 
    session_start();
    $FirstName = filter_input(INPUT_POST,'firstName');
    $LastName = filter_input(INPUT_POST,'lastName');
    $PhoneNumber = filter_input(INPUT_POST,'phoneNumber');
    $CardNumber = filter_input(INPUT_POST,'cardNumber');
    $CardType = filter_input(INPUT_POST,'cardtype');
    $City = filter_input(INPUT_POST,'city');
    $CVV = filter_input(INPUT_POST,'cvc');
    $EmailAddress = filter_input(INPUT_POST,'emailAddress');
    $ExpirationDate = filter_input(INPUT_POST,'expirationDate');
    $State = filter_input(INPUT_POST,'state');
    $StreetAddress = filter_input(INPUT_POST,'streetAddress');
    $ZipCode = filter_input(INPUT_POST,'zipCode');
    $Subscription = filter_input(INPUT_POST,'subscription');


    //db credentials & connect to database 
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "online_bookstore";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error() .')'
            . mysqli_connect_error());
    } else {
        $sql = "UPDATE customer_account
                SET FirstName = '$FirstName', LastName = '$LastName', PhoneNumber = '$PhoneNumber', StreetAddress = '$StreetAddress', City = '$City', State = '$State', ZipCode = '$ZipCode', CardType = '$CardType', CardNumber = '$CardNumber', ExpirationDate = '$ExpirationDate', CVV= '$CVV', Subscribed='$Subscription'
                WHERE EmailAddress = '$EmailAddress'";
        if ($conn->query($sql)){
            echo $FirstName.$LastName;
            header("Location: http://localhost/Bookstore-Soft-Engr/EditProfile/ReturnUserProfile.php");
        } else {
            echo "Error: ". $sql ."<br>". $conn->error;
        }
        $conn->close();
    }

?>