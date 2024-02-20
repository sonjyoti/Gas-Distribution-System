<?php  
    $submit = false;
    if(isset($_POST['book'])){
        date_default_timezone_set('Asia/Kolkata');
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $dis_id = $dashT_row['dis_id'];
        $amount = 975;
        $status = "Ordered";
        $sql = "INSERT INTO `Order`(`dis_id`, `cus_id`, `date`, `time`, `amount`, `status`) VALUES (?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "iissis", $dis_id, $con_id, $date, $time, $amount, $status);

        if (!mysqli_stmt_execute($stmt)) {
            mysqli_stmt_error($stmt);
        } else {
            $submit = true;
            header("Location: success.php");
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
?>