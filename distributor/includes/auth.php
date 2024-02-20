<?php
session_start();
if (!isset($_SESSION['distributorId'])) {
    header("Location: ../login.php");
    exit();
}
?>