<?php 
    $sql = "SELECT `Consumer`.`name` AS 'cus_name', `Feedback`.`date` AS 'feed_date', `Feedback`.`time` AS `feed_time`, `Feedback`.`type` AS `feed_type`, `Feedback`.`subject` AS `feed_sub`, `Feedback`.`description` AS `feed_des` FROM `Feedback`, `Consumer`   WHERE `Feedback`.`cus_id` = `Consumer`.`id` AND `Feedback`.`dis_id` = ?;";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $dis_id);

    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $count = 0;
        $feedT_result = mysqli_stmt_get_result($stmt);
    }
?>