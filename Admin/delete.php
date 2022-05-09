<?php
include('../includes/connect.php');

$d1="delete from crime_post";
mysqli_query($conn, $d1);

$d2="delete from crime_video";
mysqli_query($conn, $d2);

$d3="delete from ads";
mysqli_query($conn, $d3);

$d4="delete from agriculture_post";
mysqli_query($conn, $d4);

$d5="delete from agriculture_video";
mysqli_query($conn, $d5);

$d6="delete from commertial_post";
mysqli_query($conn, $d6);

$d7="delete from commertial_video";
mysqli_query($conn, $d7);

$d8="delete from entertainment_post";
mysqli_query($conn, $d8);

$d9="delete from entertainment_video";
mysqli_query($conn, $d9);

$d10="delete from realestate_post";
mysqli_query($conn, $d10);

$d11="delete from realestate_video";
mysqli_query($conn, $d11);

$d12="delete from health_post";
mysqli_query($conn, $d12);

$d13="delete from health_video";
mysqli_query($conn, $d13);

$d14="delete from polytics_post";
mysqli_query($conn, $d14);

$d15="delete from polytics_video";
mysqli_query($conn, $d15);

$d16="delete from viral_post";
mysqli_query($conn, $d16);

$d17="delete from viral_video";
if(mysqli_query($conn, $d17))
{
echo"<script>alert('All Data has Been Deleted..')</script>";
echo"<script>window.open('index.php','_self')</script>";
	
}

?>