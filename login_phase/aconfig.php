<?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $suffix = $_POST['suffix'];
        $email = $_POST['emailaddress'];
        $gender = $_POST['gender'];

        $sss = $_POST['sss-id'];
        $gsis = $_POST['gsis-id'];
        $philhealth = $_POST['philhealth-id'];
        $pagibig = $_POST['pagibig-id'];
        $tin = $_POST['tin-id'];
    
        $host = "localhost";
        $phpusername = "root";
        $phppassword = "";
        $dbname = "payroll_database";

        $conn = new mysqli($host, $phpusername, $phppassword, $dbname);

        if($conn){
            echo "SUCCESSFUL";
            $sql = "INSERT INTO `employee_data`(firstname, middlename, lastname, suffix, email, gender, sss, gsis, philhealth, pagibig, tin)VALUES('$firstname', '$middlename', '$lastname', '$suffix','$email', '$gender','$sss', '$gsis', '$philhealth', '$pagibig', '$tin')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "DATA INSERTED";
            }else{
                echo "NOTHING HAPPENED";
            }

        
        }else{
            echo " hey ";
            die(mysqli_error($conn));
        }
    
}
?>