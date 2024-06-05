<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "payroll_database";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo '';
    }

    $sql = "SELECT attendance_date, employee_name, attendance_timein, attendance_timeout, attendance_hour FROM emp_attendance";
    $result = mysqli_query($conn, $sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="show-masterlist.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/256a0a77a7.js" crossorigin="anonymous"></script>
    <title>TIME IN TIME OUT</title>
</head>
<style>
    .bahay{
        float: right;
        margin: 5rem;
        margin-left:90%;
        position: fixed;
        background-color:white;
        border:0px;
        width: 50px;
        height: 50px;
        border-radius:50%;
        cursor: pointer;
        background-color:#4fc3a1;
    }

    .bahay:hover{
        background-color:white;
    }
</style>
<body>
<a href="../homepage/home_page.php"><button class="bahay"><i class="fa-solid fa-house"></i></button></a>


<div class="table-wrapper">
        <table class="fl-table">
        <thead>
        <tr>
            <th class="tg-et4c">DATE</th>
            <th class="tg-et4c">NAME</th>
            <th class="tg-et4c">TIME IN</th>
            <th class="tg-et4c">TIME OUT</th>
        </tr>
        </thead>
    <tbody>
        <tr>
        <?php 
            while($row=$result->fetch_assoc()){
        ?>

        <td class="tg-0pky"><?php echo $row["attendance_date"]; ?></td>
        <td class="tg-0pky"><?php echo $row["employee_name"]; ?></td>
        <td class="tg-0pky"><?php echo $row["attendance_timein"]; ?></td>
        <td class="tg-0pky"><?php echo $row["attendance_timeout"]; ?></td>
        </tr>

        <?php 
        } 
    ?>  
    
    </tbody>
</table>
</div>
    </div>
</body>
</html>