<?php

$FirstName = filter_input(INPUT_POST, 'fname');
$LastName = filter_input(INPUT_POST, 'lname');
$Password = filter_input(INPUT_POST, 'psw');
$EmailAddress = filter_input(INPUT_POST, 'email');
$PhoneNumber = filter_input(INPUT_POST, 'phone')
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
            $sql1 = "Select * from customer_account cA where (cA.EmailAddress = '$EmailAddress' and
                                                              cA.Password = '$Password');";
            if ($openAccount = mysqli_query($conn, $sql1)){
                $openAccount = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($openAccount);
                echo json_encode($row);
            }
            else {
                $sql2 = "INSERT INTO customer_account (FirstName, LastName, Password, EmailAddress, PhoneNumber,
                                                    StreetAddress, City, State, ZipCode, CardType, CardNumber, ExpirationDate, 
                                                    CVV)
                        values ('$FirstName', '$LastName', '$Password', '$EmailAddress', '$PhoneNumber', '$StreetAddress', '$City',
                                '$State', '$ZipCode', '$CardType', '$CardNumber', '$ExpirationDate', '$CVV')";
                if ($newAccount = mysqli_query($conn, $sql2)){
                    $newAccount = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($newAccount);
                    echo json_encode($row);
                    //echo "New User is Registered Successfully";
                    //header('Location: http://localhost/PHP_VS_Code/demoLogin.php');
                }
                else {
                    echo "Error: ". $sql ."<br>". $conn->error;
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