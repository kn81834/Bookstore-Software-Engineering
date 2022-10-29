<?php 
session_start();
$Email = filter_input(INPUT_POST, 'email-reset');

if (!empty($Email)){
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
        $sql = "Select * from customer_account ca where (ca.EmailAddress = '$Email');";
        $test = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($test);
        if($row != null) {
            $_SESSION['EmailAddress'] = $row['EmailAddress'];
            //echo $_SESSION['EmailAddress'];
            header("Location: http://localhost/Bookstore-Soft-Engr-master/Registration/PWconfirm.php?results=Confirm");
        }
        else {
            echo $row['EmailAddress'];
        }
    }
}
?>