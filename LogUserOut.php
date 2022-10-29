<?php 
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/Bookstore-Soft-Engr-master/Homepage/homepage.php?results=LoggedOut");
?>