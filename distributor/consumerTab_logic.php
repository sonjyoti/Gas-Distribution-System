<?php 
    
    $sql = "SELECT `id`, `name`, `address`, `phn_no`, `email`, `status`, `reg_date` FROM `Consumer` WHERE `dis_id` = ?;";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $dis_id);

    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $conT_result = mysqli_stmt_get_result($stmt);
    }
?>