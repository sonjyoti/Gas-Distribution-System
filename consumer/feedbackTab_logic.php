<?php  
    if(isset($_POST['submitFeedback'])){

        date_default_timezone_set('Asia/Kolkata');
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $type = $_POST['type'];
        $subject = $_POST['subject'];
        $sub_tit = $_POST['sub_tit'];
        $msg = $_POST['msg'];
        $dis_id = $dashT_row['dis_id'];

        $sql = "INSERT INTO `Feedback`(`dis_id`, `cus_id`, `date`, `time`, `type`, `subject`, `subject_title`, `description`) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "iissssss", $dis_id, $con_id, $date, $time, $type, $subject, $sub_tit, $msg);

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