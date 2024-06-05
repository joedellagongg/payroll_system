<?php
    include('database.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Payslip | CMI</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

<style>
@page { size: auto;  margin: 0mm; }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body onload="window.print()">

<div class="row">
  <div class="col-12"><br><br>
    <h1 align="center">Daily Time Record</h1>
    <table id="example1" class="table table-bordered dataTable no-footer" role="grid" aria-describedby="example1_info">
      <thead>
      <tr>
        <th>Employee Name</th>
        <th>Total Rendered Time</th>
      </tr>
      </thead>
      <tbody>
      <?php
   
      $sql= "SELECT *, SUM(attendance_hour) AS total_dtr FROM emp_attendance WHERE employee_id";

      $result0 = mysqli_query($conn, $sql);
      while($row0 = mysqli_fetch_array($result0))
      {
        $name = $row0['employee_name'];
      ?>
      <tr>
        <td><?php echo $row0['employee_name']; ?></td>
        <td><?php echo $row0['total_dtr']; ?></td>
      </tr>
      <?php
      }
      ?>
      </tbody>
    </table>
    <br><br><br>
    <h1 align="center">Payslip</h1>
    <hr>
    <table id="example1" class="table table-bordered dataTable no-footer" role="grid" aria-describedby="example1_info">
      <?php
    
    $sql_computing = "SELECT pos.position_rate, sum(h.attendance_hour) AS total_hours
                        FROM emp_position AS pos
                        LEFT JOIN emp_attendance AS h ON h.employee_id = h.employee_id
                        GROUP BY h.employee_id, pos.position_rate";

    $results = mysqli_query($conn, $sql_computing);    
      while($rowGross = mysqli_fetch_array($results))
      {
        $GrossPay = $rowGross['position_rate'] * $rowGross['total_hours'];
      ?>
        <p align="center"><b>Net Pay: ₱<?php echo number_format($GrossPay , 2); ?></b></p>
      <?php
      }
      ?>

    </table>
    <br>
    <p align="center">
      <u>____<b><?php echo $name; ?></b>____</u>
      <br>
      Signature over printed name
    </p>
  </div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="plugins/select2/js/select2.full.min.js"></script>

<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

</body>
</html>