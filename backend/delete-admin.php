<?php
include('../config/constants.php');
// 01. get the ID of admin to br deleted

$id =$_GET['id'];

// 02. create qSQl query to delte admin

$sql = "DELETE FROM tbl_admin WHERE id=$id";

//execute the query
$res = mysqli_query($conn, $sql);

if($res==true)
{
 //successfully and delete admin
$_SESSION['delete'] ="<div class='success'>Admin Deleted Successfully.</div>";
header('location:'.SITEURL.'admin/manage-admin.php');
}
else
{
//failed to delte admin
$_SESSION['delete'] ="<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
header('location:'.SITEURL.'admin/manage-admin.php');
}
// 03. redirect to manage admin page with mesage (Success/error)

?>