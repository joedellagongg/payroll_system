<?php

$id = $_GET['updateid'];

$sequel = "SELECT * FROM `employee_data` WHERE id=$id";
$res = mysqli_query($conn, $sequel);
$rows = mysqli_fetch_assoc($res);
$firstname = $rows['firstname'];
$middlename = $rows['middlename'];
$lastname = $rows['lastname'];
$birthday = $rows['birthday'];
$department = $rows['department'];
$suffix_1 = $rows['suffix_1'];
$email = $rows['emailaddress'];
$gender = $rows['gender'];
$sss = $rows['sss-id'];
$gsis = $rows['gsis-id'];
$philhealth = $rows['philhealth-id'];
$pagibig = $rows['pagibig-id'];
$tin = $rows['tin-id'];

