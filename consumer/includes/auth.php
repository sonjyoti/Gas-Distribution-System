<?php
session_start();
if (!isset($_SESSION['consumerId'])) {
    header("Location: ../login.php");
    exit();
}
?>