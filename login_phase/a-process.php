<?php
    include_once('config.php');


if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
    $middle 		= $_POST['middlename'];
	$lastname 		= $_POST['lastname'];
    $phonenumber	= $_POST['mobilenumber'];
    $birthday 		= $_POST['birthday'];
    $gender 		= $_POST['ginder'];
	$sss	        = $_POST['sssnum'];
    $gsis	        = $_POST['gsisnum'];
    $philhealth 	= $_POST['phnum'];
	$pagibig 		= ($_POST['pgibgnum']);
    $tin    		= ($_POST['tinnum']);
    
    // SQL query and execution
    $sql = "INSERT INTO employee_data (firstname, middle, lastname, phonenumber, email, birthday, gender, sss, gsis, philhealth, pagibig, tin) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$firstname, $middle, $lastname, $phonenumber, $birthday, $gender, $sss, $gsis, $philhealth, $pagibig, $tin]);

    if ($result) {
        echo 'Successfully saved.';
    } else {
        echo 'There were errors while saving the data.';
    }
} else {
    echo 'No data';
}
