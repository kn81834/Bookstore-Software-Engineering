<?php 
session_start();
$Status = "ACTIVE";
if (isset($_SESSION['EmailAddress'])){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "online_bookstore";
    $EmailAddress = $_SESSION['EmailAddress'];
    //Make Connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error() .')'
            . mysqli_connect_error());
    }
    else {
        $sql = "UPDATE customer_account SET STATUS = '$Status' WHERE EmailAddress = '$EmailAddress'";
        //$results = mysqli_query($conn, $sql);
        //echo $results;
        if ($conn->query($sql) === TRUE){
            session_start();
            session_unset();
            session_destroy();
            header("Location: http://localhost/Bookstore-Soft-Engr/Homepage/homepage.php?Status=Account_Set_to_ACTIVE");
        }
        else {
            session_start();
            session_unset();
            session_destroy();
            header("Location: http://localhost/Bookstore-Soft-Engr/Homepage/homepage.php?Status=Account_Still_INACTIVE");
        }        
    }
}
?>