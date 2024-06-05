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
   $sql = "SELECT sched_id, sched_in, sched_out FROM emp_sched";
   $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" rel="stylesheet">
  <title>SCHEDULER</title>
</head>

<style>
  body{
    background-color: rgba(71, 147, 227, 1);
    text-align:center;
    margin-left:5%;
    margin-right:10%;
    margin-top:5%;
  }

  .b{
    background-color:#4fc3a1;
    padding:10px;
    width:150px;
    cursor:pointer;
    border-radius:10px;
    margin-bottom:5px;
    border:none;
  }

  .b:hover{
    background-color:white;
  }
</style>

<body>


<form action="config.php" method="POST">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
              <div class="form-group row">
                <label class="col-sm-1 col-form-label"></label>
                <label class="col-sm-3 col-form-label">SCHED IN</label>
                <div class="col-sm-7">
                  <div class="bootstrap-timepicker">
                    <div class="input-group date" id="thirdpicker" data-target-input="nearest">
                      <input type="time" name="sched_in" class="form-control datetimepicker-input" data-target="#timepicker" data-toggle="datetimepicker" placeholder="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-1 col-form-label"></label>
                <label class="col-sm-3 col-form-label">SCHED OUT</label>
                <div class="col-sm-7">
                  <div class="bootstrap-timepicker">
                    <div class="input-group date" id="fourthpicker" data-target-input="nearest">
                      <input type="time"  name="sched_out" class="form-control datetimepicker-input" data-target="#secondpicker" data-toggle="datetimepicker" placeholder="">
                    </div>
                  </div>
                </div>
              </div>

              <button type='submit' method='post' class="b">Submit</button>
</form>
<a href="../schedule/show_masterlist.php"><button class="b">Back</button></a>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>

<script>
  $(document).ready(function(){
    $('.timepicker').timepicker({
      showMeridian: false,
      defaultTime: false
    });
  });
</script>

</body>
</html>
