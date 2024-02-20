<?php 
    include 'includes/db/db_con.php';
    session_start();
    if(isset($_POST['con_submit'])) {
        $id = $_POST['cid'];
        $pwd = $_POST['cpwd'];

        $sql = "SELECT `id` FROM `Consumer` WHERE `id` = ? AND `pwd` = ?;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "is", $id, $pwd);

        if (!mysqli_stmt_execute($stmt)) {
            mysqli_stmt_error($stmt);
        } else {
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) == 0) {
                header ("Location: login.php");
            } else {
                $row = mysqli_fetch_assoc($result);
                $id = $row["id"];
                $_SESSION['consumerId'] = $id;
                header ("Location: consumer/consumer-dashboard.php");
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        exit;
    }
?>