<?php 
    
    $sql = "SELECT `id`, `name`, `address`, `city`, `phn_no`, `email`, `status` FROM `Consumer`;";
    $stmt = mysqli_prepare($conn, $sql);

    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $conT_result = mysqli_stmt_get_result($stmt);
    }
?>