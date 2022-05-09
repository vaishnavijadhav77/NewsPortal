<?php
include('../includes/connect.php');
$delete_id = $_GET['del'];

$delete_query = "delete from polytics_post where id = '$delete_id'";
if(mysqli_query($conn, $delete_query))
{  
  echo"<script>alert('Post has Been Deleted..')</script>";
  echo"<script>window.open('index.php?viewpp=viewpp','_self')</script>";
}
?>