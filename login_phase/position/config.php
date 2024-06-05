<?php   

require_once('database.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['position_title'];
    $rates = $_POST['position_rate'];

if($conn){  
    $sql = "INSERT INTO `emp_position` (position_title, position_rate)VALUES('$title', '$rates')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: ../position/position.php");
    }else{
        echo "NOTHING HAPPENED";
    }
}
}

?>