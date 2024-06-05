<?php   

require_once('../database.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sched_in = $_POST['sched_in'];
    $sched_out = $_POST['sched_out'];

if($conn){  
    $sql = "INSERT INTO `emp_sched` (sched_in, sched_out)VALUES('$sched_in', '$sched_out')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: ../schedule/show_masterlist.php");
    }else{
        echo "NOTHING HAPPENED";
    }
}
}

?>