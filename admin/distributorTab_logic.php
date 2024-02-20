<?php 
    
    $sql = "SELECT `id`, `name`, `address`, `city`, `phn_no`, `email`, `status` FROM `Distributor`;";
    $stmt = mysqli_prepare($conn, $sql);

    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $disT_result = mysqli_stmt_get_result($stmt);
    }
?>