<?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "online_bookstore";

    //Make Connection
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_error() .')'
            . mysqli_connect_error());
    }
    else {
        $now = getdate();
        $day = $now['mday'];
        $mon = $now['mon'];
        $year= $now['year'];
        $date = $mon.$day.$year;
        $SQL = "INSERT INTO order_history (ISBN, Name, Quantity, Price, User_ID, Date_Purchased) VALUES 
                (SELECT (Item_ID, Name, Quantity, Price, Account_ID) FROM shopping_cart), '$date')";
        if ($conn->query($SQL)){
            echo "Added to order_history";
            //header("Location: http://localhost/Bookstore-Soft-Engr/Admin%20Homepage/Admin_Phps/BookRetrieval.php");
        }
    }
?>