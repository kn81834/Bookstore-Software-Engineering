<?php
    session_start();
    $EmailAddress = $_SESSION['Email'];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "online_bookstore";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error() .')'
            . mysqli_connect_error());
    } 
    else {
        echo $EmailAddress;
        $sql = "SELECT * FROM customer_account WHERE EmailAddress = '$EmailAddress'";

        if($openAccount = mysqli_query($conn, $sql)) {
            echo "Done";
        } else {
            echo("Error description: " . $conn -> error); 
        }
        
        $results = mysqli_fetch_array($openAccount);
        $_SESSION['FName'] = $results[0];
        $_SESSION['LName'] = $results[1];
        $_SESSION['Email'] = $results[3];
        $_SESSION['PNum'] = $results[4];
        $_SESSION['SAddress'] = $results[5];
        $_SESSION['City'] = $results[6];
        $_SESSION['State'] = $results[7];
        $_SESSION['ZipCode'] = $results[8];
        $_SESSION['CardType'] = $results[9];
        $_SESSION['CardNumber'] = $results[10];
        $_SESSION['Exp'] = $results[11];
        $_SESSION['CVC'] = $results[12];
        $_SESSION['Subscribed'] = $results[16];
        echo $_SESSION['Subscribed'];
        header("Location: http://localhost/bookstore-Soft-Engr/EditProfile/edit_profile.php");
    }
    