<?php 
    include 'includes/db/db_con.php';
    if(isset($_POST['con_submit'])){
        $name = $_POST['cname'];
        $address = $_POST['cadd'];
        $city = $_POST['ccity'];
        $pin = $_POST['cpin'];
        $email = $_POST['cemail'];
        $phone = $_POST['cphone'];
        $password = $_POST['cpassword'];
        $reg_date = date('Y-m-d');
        $status = "Deactive";

        $sql = "INSERT INTO `Consumer` (`name`, `address`, `city`, `pin`, `email`, `phn_no`, `pwd`, `reg_date`, `status`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssisssss",$name, $address, $city, $pin, $email, $phone, $password, $reg_date, $status);

        if (!mysqli_stmt_execute($stmt)) {
            mysqli_stmt_error($stmt);
        } else {
            header("Location: login.php");
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        exit;
    }
?>