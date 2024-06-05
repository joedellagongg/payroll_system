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

    // DELETE Function
    $sql = "SELECT pos_id, position_title, position_rate FROM emp_position";
    $result = mysqli_query($conn, $sql);

    if(isset($_POST["delete"]) && isset($_POST["deleteId"])){
        foreach($_POST["deleteId"] as $deleteId){
          $delete = "DELETE FROM emp_position WHERE pos_id = $deleteId";
          mysqli_query($conn, $delete);
          header("Location: position.php");
        }
      }
      ?>

<style>
    .ae{
        float: right;
        margin: 2rem;
        margin-left:95%;
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
        margin: 6rem;
        margin-left:95%;
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
        margin-left:95%;
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
    <link rel="stylesheet" href="position.css">
    <script src="https://kit.fontawesome.com/256a0a77a7.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <a href="../homepage/home_page.php"><button class="bahay"><i class="fa-solid fa-house"></i></button></a>
    <a href="position_create.php"><button class="ae">+</button></a>
<form action="" method="post">
<button name="delete" type="submit" class="deleteButton"> <i class="fa-solid fa-trash" style="color: #ff0000;"></i></button>
    <div class="table-wrapper">
        <table class="fl-table">
        <thead>
        <tr>
            <th class="tg-et4c"></th>
            <th class="tg-et4c">ID</th>
            <th class="tg-et4c">POSITION</th>
            <th class="tg-et4c">RATES</th>
            <th class="tg-et4c">ACTIONS</th>
        </tr>
        </thead>
    <tbody>
        <tr>
        <?php 
            while($row=$result->fetch_assoc()){ ?>
        <td align="center"> 
            <input type="checkbox" name="deleteId[]" value="<?php echo $row['pos_id']; ?>">
        </td>
        <td class="tg-0pky"><?php echo $row["pos_id"]; ?></td>
        <td class="tg-0pky"><?php echo $row["position_title"]; ?></td>
        <td class="tg-0pky"><?php echo $row["position_rate"]; ?></td>
        <td class="tg-0pky">
            <form action="http://localhost/Payroll_System/login_phase/masterlist/update.php" method="GET">
                <button class="aksyon" type="submit" name="view" value="<?php echo $row["pos_id"]; ?>">
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

</body>
</html>
