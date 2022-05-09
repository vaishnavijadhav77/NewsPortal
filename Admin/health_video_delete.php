<?php
include('../includes/connect.php');
$delete_id = $_GET['del'];

$delete_query = "delete from health_video where id = '$delete_id'";
if(mysqli_query($conn, $delete_query))
{  
  echo"<script>alert('Video has Been Deleted..')</script>";
  echo"<script>window.open('index.php?viewhev=viewhev','_self')</script>";
}
?>