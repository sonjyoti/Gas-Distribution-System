<?php 
    include 'includes/db/db_con.php';
    session_start();
    if(isset($_POST['dis_submit'])) {
        $id = $_POST['did'];
        $pwd = $_POST['dpwd'];

        $sql = "SELECT `id` FROM `Distributor` WHERE `id` = ? AND `pwd` = ?;";
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
                $_SESSION['distributorId'] = $id;
                header ("Location: distributor/distributor-dashboard.php");
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        exit;
    }
?>