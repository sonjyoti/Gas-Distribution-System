<?php 
include 'includes/db/db_con.php';
    if(isset($_POST['dis_submit'])){
        $name = $_POST['dname'];
        $address = $_POST['dadd'];
        $city = $_POST['dcity'];
        $pin = $_POST['dpin'];
        $email = $_POST['demail'];
        $phone = $_POST['dphone'];
        $password = $_POST['dpassword'];
        $status = "deactive";

        $sql = "INSERT INTO `Distributor` (`name`, `address`, `city`, `pin`, `email`, `phn_no`, `pwd`, `status`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?);";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssissss", $name, $address, $city, $pin, $email, $phone, $password, $status);

        if (!mysqli_stmt_execute($stmt)) {
            mysqli_stmt_error($stmt);
        } else {
            header("Location: login.php");
        }
    }
?>