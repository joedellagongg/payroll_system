<?php
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="employee_form.css" type="text/css">
    <script src="https://kit.fontawesome.com/256a0a77a7.js" crossorigin="anonymous"></script>
    <title>ADD EMPLOYEE | CMI </title>
</head>

<style>
    input{
        padding-left:10px;
    }

    .submittion{
        padding-top: 20px;
    }

    button {
    display: inline-block;
    border-radius: 4px;
    background-color: #4fc3a1;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 17px;
    padding: 16px;
    width: 130px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
   }
   
   button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
   }
   
   button span:after {
    content: '»';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -15px;
    transition: 0.5s;
   }
   
   button:hover span {
    padding-right: 15px;
   }
   
   button:hover span:after {
    opacity: 1;
    right: 0;
   }
    


</style>

<body>

   <div class="registration--form"> 
        <h1 class="title">REGISTRATION OF EMPLOYEE</h1>
        <form action="config.php" method="post">
            <div class="mainuser-info">
                <div class="userinput-box">
                    <label class="details">FIRST NAME</label>
                    <input class="input" type="text" name="firstname" maxlength="50"  placeholder="Enter First Name" required>
                </div>

                <div class="userinput-box">
                    <label class="details">MIDDLE NAME</label>
                    <input class="input" type="text" name="middlename" maxlength="50"   placeholder="Just Press Space for N/A" >
                </div>

                <div class="userinput-box">
                <label class="details">LAST NAME</label>
                <input class="input" type="text" name="lastname" maxlength="50"  placeholder="Enter Last Name" required>
                </div>

                <div class="userinput-box">
                <label class="details">BIRTHDAY</label>
                <input class="input" type="date" name="birthday" maxlength="8"  placeholder="Enter Birthday" required>
                </div>

                <div class="userinput-box">
                <label class="details">ADDRESS</label>
                <input class="input" type="text" name="homeaddress" maxlength="255"  placeholder="Enter Address" required>
                </div>

                <div class="userinput-box">
                <label class="details">DEPARTMENT</label>
                <input class="input" type="text" name="department" maxlength="50"  placeholder="Enter 1000" required>
                </div>


                <div class="userinput-box">
                <label class="details">SUFFIX</label>
                    <select class="input" name="suffix_1">
                        <option value="" disabled selected hidden>Select Suffix</option>
                        <option placeholder="None"></option>
                        <option>Jr</option>
                        <option>Sr</option>
                        <option>I</option>
                        <option>II</option>
                        <option>III</option>
                    </select>
                </div>

                <div class="userinput-box">
                    <label class="details">EMAIL ADDRESS</label>
                    <input class="input" type="text" name="emailaddress" maxlength="50"  placeholder="Enter Email Address" required>
                </div>

                <div class="userinput-box">
                    <label class="details">GENDER</label>
                    <select class="input" name="gender">
                        <option value="" disabled selected hidden>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <!-- additional changes  ⬇️⬇️⬇️⬇️⬇️ -->
                <div class="userinput-box">
                    <label class="details">SSS</label>
                    <input class="input" type="text" name="sss-id" maxlength="10"  placeholder="Input SSS Number" required>
                </div>

                <div class="userinput-box">
                    <label class="details">GSIS</label>
                    <input class="input" type="text" name="gsis-id" maxlength="10"  placeholder="Input GSIS Number" required>
                </div>
                
                <div class="userinput-box">
                <label class="details">PHIL-HEALTH</label>
                <input class="input" type="text" name="philhealth-id" maxlength="10"  placeholder="Input PhilHealth Number" required>
                </div>
                
                <div class="userinput-box">
                    <label class="details">PAG-IBIG</label>
                    <input class="input" type="text" name="pagibig-id" maxlength="10"  placeholder="Input PAG-IBIG Number" required>
                </div>

                <div class="userinput-box">
                    <label class="details">TAX NUMBER</label>
                    <input class="input" type="text" name="tin-id" maxlength="10"  placeholder="Input TIN Number" required>
                </div>


                <div class="submittion">
                <a><button type='submit'>SUBMIT</button></a>


                </div>
                
            </div>
            
        </form>
        <a href="../masterlist/show_masterlist.php"><button>BACK</button></a>
    </div>
</div>


     
</body>
</html>