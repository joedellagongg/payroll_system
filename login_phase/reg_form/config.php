<?php   

require_once('database.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $homeaddress  = $_POST['homeaddress'];
    $department = $_POST['department'];
    $suffix_1 = $_POST['suffix_1'];
    $email = $_POST['emailaddress'];
    $gender = $_POST['gender'];
    $sss = $_POST['sss-id'];
    $gsis = $_POST['gsis-id'];
    $philhealth = $_POST['philhealth-id'];
    $pagibig = $_POST['pagibig-id'];
    $tin = $_POST['tin-id'];

if($conn){  
    $sql = "INSERT INTO employee_data (firstname, middlename, lastname, birthday, homeaddress, dept_id, suffix_1, email, gender, sss, gsis, philhealth, pagibig, tin)VALUES('$firstname', '$middlename', '$lastname', '$birthday','$homeaddress','$department', '$suffix_1','$email', '$gender','$sss', '$gsis', '$philhealth', '$pagibig', '$tin')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: ../masterlist/show_masterlist.php");
    }else{
        echo "NOTHING HAPPENED";
    }
}
}

?>