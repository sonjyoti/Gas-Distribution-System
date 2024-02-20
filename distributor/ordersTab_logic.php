<?php  

    $sql = "SELECT `Order`.`id` AS `order_id`, `Order`.`cus_id` AS `con_id`, `Consumer`.`name` AS `con_name`, `Order`.`date` AS `order_date`, `Order`.`time` AS `order_time`, `Order`.`amount` AS `order_amount`, `Order`.`status` AS `order_status` FROM `Order`, `Consumer`, `Distributor` WHERE `Consumer`.`id` = `Order`.`cus_id` AND `Order`.`dis_id` = `Distributor`.`id`  AND `Order`.`dis_id` = ?;";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $dis_id);

    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $ordT_result = mysqli_stmt_get_result($stmt);
        $pendingOrders = [];
        $runningOrders = [];
        $deliveredOrders = [];

        while ($ordT_row = mysqli_fetch_assoc($ordT_result)) {
            if ($ordT_row['order_status'] === "Ordered") {
                $pendingOrders[] = $ordT_row;
            } elseif ($ordT_row['order_status'] === "Running") {
                $runningOrders[] = $ordT_row;
            } elseif ($ordT_row['order_status'] === "Delivered") {
                $deliveredOrders[] = $ordT_row;
            }
        }
    }
?>
