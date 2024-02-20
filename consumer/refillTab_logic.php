<?php  

    $sql = "SELECT `Order`.`id` AS `order_id`, `Order`.`dis_id` AS `dis_id`, `Distributor`.`name` AS `dis_name`, `Order`.`date` AS `order_date`, `Order`.`time` AS `order_time`, `Order`.`amount` AS `order_amount`, `Order`.`status` AS `order_status` FROM `Order`, `Consumer`, `Distributor` WHERE `Consumer`.`id` = `Order`.`cus_id` AND `Order`.`dis_id` = `Distributor`.`id`  AND `Order`.`cus_id` = ?;";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $con_id);

    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $rflT_result = mysqli_stmt_get_result($stmt);
        $pendingOrders = [];
        $runningOrders = [];
        $deliveredOrders = [];

        while ($rflT_row = mysqli_fetch_assoc($rflT_result)) {
            if ($rflT_row['order_status'] === "Ordered") {
                $pendingOrders[] = $rflT_row;
            } elseif ($rflT_row['order_status'] === "Running") {
                $runningOrders[] = $rflT_row;
            } elseif ($rflT_row['order_status'] === "Delivered") {
                $deliveredOrders[] = $rflT_row;
            }
        }
    }
?>
