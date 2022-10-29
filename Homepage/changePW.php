<?php 
    session_start();
    $newPW = filter_input(INPUT_POST, 'newpassword');
    $Email = $_SESSION['EmailAddress'];

    if (!empty($newPW)){
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
            $passhash = password_hash($newPW, PASSWORD_DEFAULT);
            $sql = "UPDATE customer_account SET Password = '$passhash' WHERE (EmailAddress = '$Email');";
            if ($conn->query($sql)){
                header("Location: http://localhost/Bookstore-Soft-Engr/Homepage/homepage.php?results=successfully_changed_password");
            } else {
                echo "Error: ". $sql ."<br>". $conn->error;
            }
            $conn->close();
        }
    }
        