<?php

$FirstName = filter_input(INPUT_POST, 'fname');
$LastName = filter_input(INPUT_POST, 'lname');
$Password = filter_input(INPUT_POST, 'psw');
$EmailAddress = filter_input(INPUT_POST, 'email');
$PhoneNumber = filter_input(INPUT_POST, 'phone');
$StreetAddress = filter_input(INPUT_POST, 'street');
$City = filter_input(INPUT_POST, 'city');
$State = filter_input(INPUT_POST, 'state');
$ZipCode = filter_input(INPUT_POST, 'zip');
$CardType = filter_input(INPUT_POST, 'cardtype');
$CardNumber = filter_input(INPUT_POST, 'cardnum');
$ExpirationDate = filter_input(INPUT_POST, 'expdate');
$CVV = filter_input(INPUT_POST, 'cvv');

//echo "Password is $password";

if (!empty($EmailAddress)){
    if (!empty($Password)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "online_bookstore";

        //Make Connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_error() .')'
                . mysqli_connect_error());
        }
        else {
            $sql1 = "Select EmailAddress from customer_account cA where (cA.EmailAddress = '$EmailAddress');";
            $test = mysqli_query($conn, $sql1);
            $Email = mysqli_fetch_array($test);
            if ($Email != null) {
                if($Email[0] == $EmailAddress){
                    //echo json_encode($test);
                    $test = mysqli_fetch_array($openAccount = mysqli_query($conn, $sql1));
                    header("Location: http://localhost/Bookstore-Soft-Engr-master/Homepage/homepage.php?results=Email-Is-Taken");
                }
            }
            else {
                session_start();
                $passhash = password_hash($Password, PASSWORD_DEFAULT);
                $cardhash = password_hash($CardNumber, PASSWORD_DEFAULT);
                $sql2 = "INSERT INTO customer_account (FirstName, LastName, Password, EmailAddress, PhoneNumber,
                                                    StreetAddress, City, State, ZipCode, CardType, CardNumber, ExpirationDate, 
                                                    CVV)
                        values ('$FirstName', '$LastName', '$passhash', '$EmailAddress', '$PhoneNumber', '$StreetAddress', '$City',
                                '$State', '$ZipCode', '$CardType', '$CardHash', '$ExpirationDate', '$CVV')";
                if (mysqli_query($conn, $sql2)){
                    $sql3 = "Select * from customer_account cA where (cA.EmailAddress = '$EmailAddress');";
                    if ($openAccount = mysqli_query($conn, $sql3)){ 

                        //$row = mysqli_fetch_array($openAccount);
                        $row = $openAccount -> fetch_array(MYSQLI_ASSOC);
                        $_SESSION['EmailAddress'] = $row['EmailAddress'];
                        $_SESSION['Password'] = $row['Password'];
                        $myArray = array();
                        $myArray[] = $row;
                        $results = json_encode($myArray);
                        $results = "Successfully-Registered"; 
                        //echo($results);
                        //$row = "Hello";
                        echo '<script>var verificationCode = Math.floor((Math.random()*1000000)+1);
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
                        header("Location: http://localhost/Bookstore-Soft-Engr-master/Registration/Regconfirm.php?results={$results}");
                    }
                }
                else {
                    echo "Error: ". $sql2 ."<br>". $conn->error;
                }
            }
            $conn->close();
        }
    }
    else {
        echo "Password is Required";
        die();
    }
}
else {
    echo "Username is Required";
    die();
}

?>