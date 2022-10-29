<?php
session_start();
$_SESSION['Total']*=1.07;
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
    $now = getdate();
    $day = $now['mday'];
    $mon = $now['mon'];
    $year= $now['year'];
    $date = $mon.'-'.$day.'-'.$year;
    $SQL = "INSERT INTO order_history (ISBN, Name, Quantity, Price, User_ID, Cover, Email, Date_Purchased) SELECT Item_ID, Name, Quantity, Price, Account_ID, Cover, Email, Date_Purchased FROM shopping_cart WHERE Email='$Email'";
    $SQL2 = "UPDATE shopping_cart SET Date_Purchased='$date' WHERE Email='$Email'";
    $SQL3 = "DELETE FROM shopping_cart WHERE Email='$Email'";
    $SQL4 = "SELECT Quantity, Item_ID FROM shopping_cart WHERE Email='$Email'";
    if ($quantity = $conn->query($SQL4)) {
        while ($newElement = $quantity->fetch_assoc()){
            $new[] = $newElement;                 
        }
        print_r($new);
        echo '<br>';
        for($i = 0; $i < sizeof($new); $i++) {
            $temp = $new[$i]['Item_ID'];
            $SQL5 = "SELECT Quantity, ISBN FROM available_books WHERE ISBN='$temp'";
            if ($q2=$conn->query($SQL5)) {
                while ($newElement2 = $q2->fetch_assoc()){
                    $new2[] = $newElement2;                 
                }
                $temp2 = $new[$i]['Quantity'];
                $temp3 = $new2[$i]['Quantity'];
                $ISBN = $new[$i]['Item_ID'];
                $temp3 -= $temp2;
                $SQL6 = "UPDATE available_books SET Quantity='$temp3' WHERE ISBN='$ISBN'";
                if ($conn->query($SQL6)) {
                    echo "done";
                } else {
                    echo("Error description: " . $conn -> error);
                }
            } else {
                echo("Error description: " . $conn -> error);
            }
            /**
            if ($q2 = mysqli_query($conn, $SQL5)) {
                $q2 = mysqli_fetch_array($q2);
                print_r($q2);
                echo '<br>';
                echo $q2[0]-$quantity[0];
            }
            */
        }   
    } else {
        echo("Error description: " . $conn -> error);
    }

    //echo $SQL;
    
    if($conn->query($SQL2)) {
        echo "ur ";
        if($conn->query($SQL)) {
            echo "mom";
            if($conn->query($SQL3)) {
                echo " is awesome";
                header("Location: http://localhost/Bookstore-Soft-Engr/OrderConfirmation/orderConfirmation.php");
            } else {
                echo("Error description: " . $conn -> error);
            }
        } else {
            echo("Error description: " . $conn -> error);
        }
    } else {
        echo("Error description: " . $conn -> error);
    }    
    
}
$conn->close();

?>