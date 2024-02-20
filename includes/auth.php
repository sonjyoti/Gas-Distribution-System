<?php 
  session_start();
  if (isset($_SESSION['adminId'])) {
    header ("Location: admin/admin-dashboard.php");
  }

  else if (isset($_SESSION['consumerId'])) {
    header ("Location: consumer/consumer-dashboard.php");
  }

  else if (isset($_SESSION['distributorId'])) {
    header ("Location: distributor/distributor-dashboard.php");
  } 
?>