 <!-- DATA UPDATING BLOCK -->
<?php

//form get from other file and reload with value query
require_once('database.php');
    $query = $_SERVER['QUERY_STRING'];
    parse_str($query, $array);
    $id = $array['view'];

    $query = "SELECT * from `employee_data` where id = $id";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Not Successful".mysqli_connect_error());
    }
    // COLUMN

    while ($employee_data = mysqli_fetch_array($result)) {
        $firstname = $employee_data["firstname"];
        $mname = $employee_data['middlename'];
        $lname = $employee_data['lastname'];
        $dept_id = $employee_data["dept_id"];
        $homeaddress = $employee_data["homeaddress"];
        $bday = $employee_data['birthday'];
        $suffix = $employee_data['suffix_1'];
        $emails = $employee_data['email'];
        $genders = $employee_data['gender'];
        $sss = $employee_data['sss'];
        $gsis = $employee_data['gsis'];
        $philhealth = $employee_data['philhealth'];
        $pagibig = $employee_data['pagibig'];
        $tin = $employee_data['tin'];


        $query_department = "SELECT `dept_name` from `department` where id = $dept_id";
        $result_department = mysqli_query($conn, $query_department);

        while ($department_table_data = mysqli_fetch_array($result_department)) {
            $department = $department_table_data["dept_name"];
        }
    }

    // form submit
    include('database.php');

    if(isset($_POST['submit_update'])) {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $FNAME = $_POST['firstname'];
        $MNAME = $_POST['middlename'];
        $LNAME = $_POST['lastname'];
        $BDAY = $_POST['birthday'];
        $BAHAY = $_POST['homeaddress'];
        $DEPARTMENT_ID = $_POST['dept_id'];
        $SUFFIX = $_POST['suffix_1'];
        $EMAILS = $_POST['emailaddress'];
        $GENDERS = $_POST['gender'];
        $SSS = $_POST['sss-id'];
        $GSIS = $_POST['gsis-id'];
        $PHILHEALTH = $_POST['philhealth-id'];
        $PAGIBIG = $_POST['pagibig-id'];
        $TIN = $_POST['tin-id'];
        // , `middlename` = '$mname', `lastname` = '$lname', `birthday` = '$bday', `dept_id` = '$department', `suffix_1` = '$suffix', `email` = '$emails', `gender` = '$genders', `sss` = '$sss', `gsis` = '$gsis', `philhealth` = '$philhealth', `pagibig` = '$pagibig', `tin` = '$tin'
        $u_query = "UPDATE `employee_data` SET `firstname` = '$FNAME', `dept_id` = '$DEPARTMENT_ID', `middlename` = '$MNAME', `lastname` = '$LNAME', `homeaddress` = '$BAHAY' ,`birthday` = '$BDAY', `suffix_1` = '$SUFFIX', `email` = '$EMAILS', `gender` = '$GENDERS', `sss` = '$SSS', `gsis` = '$GSIS', `philhealth` = '$PHILHEALTH', `pagibig` = '$PAGIBIG', `tin` = '$TIN' WHERE id = $id";

        $u_result = mysqli_query($conn, $u_query);
    
        if(!$result){
            die("Query Not Successful".mysqli_connect_error());
        }else{
            $row = mysqli_fetch_assoc($result);  
            print_r($u_result);
        }
        }
        header("Location: show_masterlist.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <script src="https://kit.fontawesome.com/256a0a77a7.js" crossorigin="anonymous"></script>
    <title>UPDATE EMPLOYEE | CMI</title>
</head>
<style>
    .registration--form{
        margin-top: 150px;
    }

    .balik{
        margin-left:500px;
        margin-top:0px;
    }
    a{
        text-decoration:none;
    }
</style>
<body>

    <div class="registration--form"> 
        <h1 class="title">UPDATE EMPLOYEE INFORMATION</h1>
        <form action="<?php echo "http://localhost/Payroll_System/login_phase/masterlist/update.php?".$_SERVER["QUERY_STRING"] ?>" method="post">
            <div class="mainuser-info">
                <div class="userinput-box">
                    <label class="details">FIRST NAME</label>
                    <input class="input" type="text" name="firstname" maxlength="50" value="<?php echo $firstname; ?>" placeholder="Enter First Name" required>
                </div>

                <div class="userinput-box">
                    <label class="details">MIDDLE NAME</label>
                    <input class="input" type="text" name="middlename" maxlength="50" value="<?php echo $mname; ?>"  placeholder="Enter Middle Name" required>
                </div>

                <div class="userinput-box">
                <label class="details">LAST NAME</label>
                <input class="input" type="text" name="lastname" maxlength="50" value="<?php echo $lname; ?>"   placeholder="Enter Last Name" required>
                </div>

                <div class="userinput-box">
                <label class="details">BIRTHDAY</label>
                <input class="input" type="date" name="birthday" maxlength="50" value="<?php echo $bday; ?>"  placeholder="Enter Birthday" required>
                </div>

                <div class="userinput-box">
                <label class="details">ADDRESS</label>
                <input class="input" type="text" name="homeaddress" maxlength="50" value="<?php echo $homeaddress; ?>"   placeholder="Enter Address" required>
                </div>

                <div class="userinput-box">
                <label class="details">POSITION</label>
                <input class="input" type="text" name="" maxlength="50" value=""   placeholder="Enter Something" required>
                </div>


                <div class="userinput-box">
                <label class="details">DEPARTMENT</label>
                <select class="input" name="dept_id">
                <?php
                    $MYSQL_departments = "SELECT * from `department`";
                    $QUERY_departments = mysqli_query($conn, $MYSQL_departments);
                    while ($department_table = mysqli_fetch_array($QUERY_departments)):
                        if ($dept_id == $department_table["id"]):
                ?>
                    <option class="input" name="department" value="<?php echo $department_table["id"]; ?>" selected>
                        <?php echo $department_table["dept_name"] ?>
                    </option>
                <?php endif ?>
                    <option class="input" name="department" value="<?php echo $department_table["id"]; ?>">
                        <?php echo $department_table["dept_name"] ?>
                    </option>
                <?php endwhile ?>
                </select>
                </div>


                <div class="userinput-box">
                <label class="details">SUFFIX</label>
                    <select class="input" name="suffix_1">
                    
                    
                        <?php if(empty($suffix)){ ?>  
                            <option value="" selected >None</option>
                            <option value="Jr">Jr</option>
                            <option value="Sr">Sr</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                        <?php } ?>

                        <?php if($suffix == "Jr"){ ?>
                            <option value="">None</option>
                            <option value="Jr" selected>Jr</option>
                            <option value="Sr">Sr</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                        <?php } ?>

                        <?php if($suffix == "Sr"){ ?>
                            <option value="">None</option>
                            <option value="Jr">Jr</option>
                            <option value="Sr" selected>Sr</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III" >III</option>
                        <?php } ?>

                        <?php if($suffix == "I"){ ?>
                            <option value="">None</option>
                            <option value="Jr">Jr</option>
                            <option value="Sr">Sr</option>
                            <option value="I" selected>I</option>
                            <option value="II">II</option>
                            <option value="III" >III</option>
                        <?php } ?>

                        <?php if($suffix == "II"){ ?>
                            <option value="">None</option>
                            <option value="Jr">Jr</option>
                            <option value="Sr">Sr</option>
                            <option value="I">I</option>
                            <option value="II" selected>II</option>
                            <option value="III">III</option>
                        <?php } ?>

                        <?php if($suffix == "III"){ ?>
                            <option value="">None</option>
                            <option value="Jr">Jr</option>
                            <option value="Sr">Sr</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III" selected>III</option>
                        <?php } ?>
                    </select>
                </div>

                <div class="userinput-box">
                    <label class="details">EMAIL ADDRESS</label>
                    <input class="input" type="text" name="emailaddress" maxlength="50" value="<?php echo $emails; ?>"  placeholder="Enter Email Address" required>
                </div>

                <div class="userinput-box">
                    <label class="details">GENDER</label>
                    <select class="input" value="<?php echo $genders; ?>" name="gender">
                        <option value="" disabled selected hidden>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

              <!--  additional changes  ⬇️⬇️⬇️⬇️⬇️ -->
                <div class="userinput-box">
                    <label class="details">SSS</label>
                    <input class="input" type="text" name="sss-id" maxlength="50" value="<?php echo $sss; ?>"  placeholder="Input SSS Number" required>
                </div>

                <div class="userinput-box">
                    <label class="details">GSIS</label>
                    <input class="input" type="text" name="gsis-id" maxlength="50" value="<?php echo $gsis; ?>"  placeholder="Input GSIS Number" required>
                </div>
                
                <div class="userinput-box">
                <label class="details">PHIL-HEALTH</label>
                <input class="input" type="text" name="philhealth-id" maxlength="50" value="<?php echo $philhealth; ?>"  placeholder="Input PhilHealth Number" required>
                </div>
                
                <div class="userinput-box">
                    <label class="details">PAG-IBIG</label>
                    <input class="input" type="text" name="pagibig-id" maxlength="50" value="<?php echo $pagibig; ?>"  placeholder="Input PAG-IBIG Number" required>
                </div>

                <div class="userinput-box">
                    <label class="details">TAX NUMBER</label>
                    <input class="input" type="text" name="tin-id" maxlength="50" value="<?php echo $tin; ?>"  placeholder="Input TIN Number" required>
                </div>

                <a><button name="submit_update" type='submit'>
                    UPDATE DATA
                    <div class="arrow-wrapper">
                        <div class="arrow"></div>
                    </div>
                </button></a>
            </div>
        </form>
        <a href="../masterlist/show_masterlist.php"><button class="balik"><i class="fa-solid fa-chevron-left"></i> BACK</button><a>
    </div>

</body>
</html>