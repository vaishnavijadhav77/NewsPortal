<?php
include('../includes/connect.php');

$delete_id = $_GET['del'];

$delete_query = "delete from ads where id = '$delete_id'";
if(mysqli_query($conn, $delete_query))
{  
  echo"<script>alert('Post has Been Deleted..')</script>";
  echo"<script>window.open('index.php?viewa=viewa','_self')</script>";
}
?>