<?php 
    include '../includes/db/db_con.php';
    $dis_id = $_SESSION['distributorId'];
    
    $sql = "SELECT `name`, `address`, `phn_no`, `email` FROM `Distributor` WHERE `id` = ?;";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $dis_id);

    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $dashT_result = mysqli_stmt_get_result($stmt);
        $dashT_row = mysqli_fetch_assoc($dashT_result);
    }
?>