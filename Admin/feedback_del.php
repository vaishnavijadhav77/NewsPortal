<?php
include('../includes/connect.php');
$delete_id = $_GET['del'];

$delete_query = "delete from feedback where id = '$delete_id'";
if(mysqli_query($conn, $delete_query))
{  
  echo"<script>alert('Feedback has Been Deleted..')</script>";
  echo"<script>window.open('index.php?feedback=feedback','_self')</script>";
}
?>