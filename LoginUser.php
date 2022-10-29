<?php
session_start();
$EmailAddress = filter_input(INPUT_POST, 'email-login');
$Password = filter_input(INPUT_POST, 'psw');

//echo "Password is $password";

if (!empty($EmailAddress)){
    if (!empty($Password)){
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
            $sql1 = "Select * from customer_account cA where (cA.EmailAddress= '$EmailAddress');";
            $hash = mysqli_query($conn, $sql1);
            $temp = mysqli_fetch_array($hash);
            //echo $Password.'<br>';
            //echo $hash['Password'];
            if (password_verify($Password, $temp['Password'])) { 
                $sql = "Select * from customer_account cA where (cA.EmailAddress = '$EmailAddress');";
                $open = mysqli_query($conn, $sql);
                $openAccount = mysqli_fetch_array($open);
                //echo $openAccount[0];
                if ($openAccount['EmailAddress'] != null){                
                    $_SESSION['Email'] = $openAccount['EmailAddress'];
                    $_SESSION['FName'] = $openAccount['FirstName'];
                    $_SESSION['LName'] = $openAccount['LastName'];
                    $_SESSION['PNum'] = $openAccount['PhoneNumber'];
                    $_SESSION['SAddress'] = $openAccount['StreetAddress'];
                    $_SESSION['City'] = $openAccount['City'];
                    $_SESSION['State'] = $openAccount['State'];
                    $_SESSION['ZipCode'] = $openAccount['ZipCode'];
                    $_SESSION['CardType'] = $openAccount['CardType'];
                    $_SESSION['CardNum'] = $openAccount['CardNumber'];
                    $_SESSION['ExpDate'] = $openAccount['ExpirationDate'];
                    $_SESSION['CVV'] = $openAccount['CVV'];
                    if ($openAccount['AccountType'] == "Admin"){
                        header("Location: http://localhost/Bookstore-Soft-Engr-master/Admin_Homepage/admin-homepage.php?results=Login-Successful");
                    }
                    else {
                        header("Location: http://localhost/Bookstore-Soft-Engr-master/Homepage/homepage.php?results=Login-Successful");
                    }
                }
                else {
                    header("Location: http://localhost/Bookstore-Soft-Engr-master/Homepage/homepage.php?results=Login-Unsuccessful");
                }
            } else {
                //echo password_verify($Password, $hash['Password']);
                //echo '<br>';
                //echo $temp['Password'];
                header("Location: http://localhost/Bookstore-Soft-Engr-master/Homepage/homepage.php?results=Incorrect-Password/Email-Combination");
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
    echo "Email is Required";
    die();
}

?>