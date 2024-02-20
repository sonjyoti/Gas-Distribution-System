<?php 
    include '../includes/db/db_con.php';
    $con_id = $_SESSION['consumerId'];
    
    $sql = "SELECT `Consumer`.`name` AS `name`, `Consumer`.`address` AS `address`, `Consumer`.`phn_no` AS `phn_no`, `Consumer`.`email` AS `email`, `Consumer`.`dis_id` AS `dis_id`, `Distributor`.`name` AS `dis_name` FROM `Consumer`, `Distributor` WHERE `Consumer`.`dis_id` = `Distributor`.`id` AND `Consumer`.`id` = ?;";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $con_id);

    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $dashT_result = mysqli_stmt_get_result($stmt);
        $dashT_row = mysqli_fetch_assoc($dashT_result);
        $dis_id = $dashT_row['dis_id'];
    }
?>