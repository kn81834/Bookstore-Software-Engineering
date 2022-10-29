<?php 
session_start();
$Email = $_SESSION['Email'];
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
    $SQL = "Select * from order_history where Email='$Email'";
    $ITEMS = $conn->query($SQL);
    while ($newElement = $ITEMS->fetch_assoc()){
        $new[] = $newElement;                 
    }
    $_SESSION['Order_History'] = $new;
    header("Location: http://localhost/Bookstore-Soft-Engr/OrderHistory/newOrderHistory.php");
}
$conn->close();

?>