<?php
     if($_SERVER["REQUEST_METHOD"] == "POST") {

        // Username at Password ng Login user sa phpMyAdmin
        $username = $_POST['user'];
        $password = $_POST['pass'];

        // Main account para ma access ang phpMyAdmin
        $host = "localhost";
        $phpusername = "";
        $phppassword = "";
        $dbname = "payroll_database";

        $conn = new mysqli($host, $phpusername, $phppassword, $dbname);

        if($conn->connect_error){
            die("Connection Failed! ". $conn->connect_error);
        }

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result = $conn->query($query);

        if($result->num_rows ==1){
            header("location: homepage/home_page.php");
            exit();
        }else{
            echo '<script>
            window.location.href = "index.php";
            alert("Login failed. Invalid username or password!")
            </script>';
            exit();
        }
        $conn->close();
     }
?>

    
