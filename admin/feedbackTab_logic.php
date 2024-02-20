<?php 
    
    $sql = "SELECT `Feedback`.`dis_id` AS `dis_id`, `Feedback`.`cus_id` AS `con_id`, `Distributor`.`name` AS `dis_name`, `Consumer`.`name` AS `con_name`, `Feedback`.`date` AS `feed_date`, `Feedback`.`time` AS `feed_time`, `Feedback`.`type` AS `feed_type`, `Feedback`.`subject` AS `feed_subject`, `Feedback`.`description` AS `feed_des` FROM `Distributor`, `Feedback`, `Consumer` WHERE `Feedback`.`dis_id` = `Distributor`.`id` AND `Feedback`.`cus_id` = `Consumer`.`id`;";
    $stmt = mysqli_prepare($conn, $sql);

    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $feedT_result = mysqli_stmt_get_result($stmt);
    }
?>