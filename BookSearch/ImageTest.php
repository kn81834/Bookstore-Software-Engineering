<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>
<?php
    $msg = '';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $image = $_FILES['image']['tmp_name'];
        $img = file_get_contents($image);
        echo $img;
        $conn = mysqli_connect('localhost','root','','online_bookstore') or die('Unable To connect');
        $sql = "UPDATE available_books SET Cover=(?) WHERE ISBN='1234567890'";
        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "s",$img);
        mysqli_stmt_execute($stmt);
        //print_r($img);
        $check = mysqli_stmt_affected_rows($stmt);
        echo $check;
        if($check==1){
            $msg = 'Image Successfullly UPloaded';
        }else{
            echo("Error description: " . $conn -> error);
        }
        mysqli_close($conn);
    }
    ?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <button>Upload</button>
</form>
<?php
    echo $msg;
?>
</body>
</html>