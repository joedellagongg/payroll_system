<?php
require_once('database.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * from `employee_data` where `id` = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Not Successful".mysqli_connect_error());
    }else{
        $row = mysqli_fetch_assoc($result);      
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>