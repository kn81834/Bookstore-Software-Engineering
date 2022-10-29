<?php 
session_start();
$Admin_ID = "0000";

if (!empty($Admin_ID)) {

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "online_bookstore";

    //Make Connection
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    
    $loginSql = "Select * from admin a where a.Admin_ID = $Admin_ID;";
    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error() .')'
            . mysqli_connect_error());
    }
    else {
        $Account = mysqli_query($conn, $loginSql);
        $Admin_Account = mysqli_fetch_array($Account);
        if ($Admin_Account['Admin_ID'] != null){
            $Available_Books = "Select * from available_books";
            $Books = $conn->query($Available_Books);
            while ($newElement = $Books->fetch_assoc()){
                $new[] = $newElement;                 
            }
            $_SESSION['Books'] = $new;
            header("Location: http://localhost/Bookstore-Soft-Engr/Homepage/homepage.php?results=Login-Successful");
        }
        else{
            header("Location: ");
        }
    }
    $conn->close();

}
?>