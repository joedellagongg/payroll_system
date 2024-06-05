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


    $sql = "SELECT id, dept_id, firstname, middlename, lastname, gender, suffix_1 FROM employee_data";
    $result = mysqli_query($conn, $sql);
    // DELETE Function
    if(isset($_POST["delete"]) && isset($_POST["deleteId"])){
        foreach($_POST["deleteId"] as $deleteId){
          $delete = "DELETE FROM employee_data WHERE id = $deleteId";
          mysqli_query($conn, $delete);
          header("Location: show_masterlist.php");
        }
      }
      ?>

<style>

    aside {
  color: #fff;
  width: 14%;
  padding-left: 20px;
  height: 100vh;
  background-image: linear-gradient(30deg , #0048bd, #44a7fd);
}

aside a {
  font-size: 15px;
  color: #fff;
  display: block;
  padding: 12px;
  font-family: Verdana;
  padding-left: 30px;
  text-decoration: none;
  -webkit-tap-highlight-color:transparent;
}

aside a:hover {
  color: #3f5efb;
  background: #fff;
  outline: none;
  position: relative;
  background-color: #fff;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
}

aside a i {
  margin-right: 5px;
}

aside a:hover::after {
  content: "";
  position: absolute;
  background-color: transparent;
  bottom: 100%;
  right: 0;
  height: 35px;
  width: 35px;
  border-bottom-right-radius: 18px;
  box-shadow: 0 20px 0 0 #fff;
}

aside a:hover::before {
  content: "";
  position: absolute;
  background-color: transparent;
  top: 38px;
  right: 0;
  height: 35px;
  width: 35px;
  border-top-right-radius: 18px;
  box-shadow: 0 -20px 0 0 #fff;
}

aside p {
  margin: 0;
  padding: 40px 0;
}

.pandikit{
    display:flex;
}


.nav {
    height: 60px;
    width: 100%;
    background-color: #0d6fb9;
}

.logo-cmi {
    height: 20px;
    margin: 1.23rem;
}


.tg {
    border-collapse: collapse;
    border-spacing: 0;
}
.tg td {
    border-color: black;
    border-style: solid;
    border-width: 1px;
    font-family: Arial, sans-serif;
    font-size: 14px;
    overflow: hidden;
    padding: 10px 5px;
    word-break: normal;
}
.tg th {
    border-color: black;
    border-style: solid;
    border-width: 1px;
    font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: normal;
    overflow: hidden;
    padding: 10px 5px;
    word-break: normal;
}
.tg .tg-9wq8 {
    border-color: inherit;
    text-align: center;
    vertical-align: middle;
}
.tg .tg-0pky {
    border-color: inherit;
    text-align: left;
    vertical-align: top;
}

.t {
    float: left;
    width: 85%;
    margin-left: auto;
    margin-right: auto;
    padding-top: 10px;
}
.ae{
        float: right;
        margin: 2rem;
        margin-left:80%;
        position: fixed;
        border-radius:50%;
        background-color:#4fc3a1;
        width:50px;
        height:50px;
        font-size:40px;
        cursor: pointer;
        border:0px;
    }
    .ae:hover{
        background-color:white;
    }
    .deleteButton{
        float: right;
        margin: 4rem;
        margin-left:80%;
        position: fixed;
        background-color:white;
        border:0px;
        width: 50px;
        height: 50px;
        border-radius:50%;
        cursor: pointer;
        background-color:#4fc3a1;
    }

    .bahay{
        float: right;
        margin: 10rem;
        margin-left:80%;
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

    .deleteButton:hover{
        background-color:white;
    }

    i{
        font-size:20px;
    }
    
    .eyeview{
        height: 18px;
    
    }

    .aksyon{
        border:none;
        background-color:transparent;
        cursor: pointer;
    }


</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="show-masterlist.css">
    <script src="https://kit.fontawesome.com/256a0a77a7.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
<div class="nav">
        <div class="logo">
            <a href="../homepage/home_page.php">
                <img class="logo-cmi" src="../homepage/CMIlogo.png" alt="">
            </a>
        </div>
    </div>
    <div class="pandikit">
    <aside>
    <br>
    <br>
    <br>
        <a href="../masterlist/show_masterlist.php">
          <b>MASTERLIST<b>
        </a>
        <a href="../reg_form/employee_form.php">

          EMPLOYEE
        </a>
        <a href="../position/position.php">
          PAYROLL 
        </a>

        <a href="../schedule/employee_schedule.php">

          SCHEDULE
        </a>

      </aside>

    <a href="../homepage/home_page.php"><button class="bahay"><i class="fa-solid fa-house"></i></button></a>
    <a href="../reg_form/employee_form.php"><button class="ae">+</button></a>
<form action="" method="post">
<button name="delete" type="submit" class="deleteButton"> <i class="fa-solid fa-trash" style="color: #ff0000;"></i></button>
    

    <div class="table-wrapper">
        <table class="fl-table">
        <thead>
        <tr>
            <th class="tg-et4c"></th>
            <th class="tg-et4c">ID</th>
            <th class="tg-et4c">POSITION</th>
            <th class="tg-et4c">FULL NAME</th>
            <th class="tg-et4c">SUFFIX</th>
            <th class="tg-et4c">GENDER</th>
            <th class="tg-et4c">ACTIONS</th>
        </tr>
        </thead>
    <tbody>
        <tr>
        <?php 
            while($row=$result->fetch_assoc()){
                ?>

        <td align="center"> 
            <input type="checkbox" name="deleteId[]" value="<?php echo $row['id']; ?>">
        </td>
        <td class="tg-0pky"><?php echo $row["id"]; ?></td>

        <td class="tg-0pky"><?php echo $row["dept_id"]; ?></td>

        <td class="tg-0pky"><?php echo $row["firstname"] . ' ' . $row["middlename"] . ' ' . $row["lastname"];?></td>
        <td class="tg-0pky"><?php echo $row["suffix_1"]; ?></td>
        <td class="tg-0pky"><?php echo $row["gender"]; ?></td>
        <td class="tg-0pky">
            <form action="http://localhost/Payroll_System/login_phase/masterlist/update.php" method="GET">
                <button class="aksyon" type="submit" name="view" value="<?php echo $row["id"]; ?>">
                    <i class="fa-solid fa-pen-to-square"></i>
                </button>
                <button class="aksyon">
                <i class="fa-solid fa-eye"></i>
            </button>
            </form>
        </td>
        


    </tr>
            </form>
    <?php 
        } 
    ?>
</tbody>
</table>
</div>
    </div>

</body>
</html>
