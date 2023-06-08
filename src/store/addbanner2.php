<?php
session_start();
require 'connect.php';
$createdBy = $_SESSION['userid'];
$createdDate = date("Y-m-d");

$banner_title   = $_POST['banner_title'];
$banner_link    = $_POST['banner_link'];
$fileName       = $_POST['fileName'];
$isButton       = $_POST['isButton'];
$isActive       = $_POST['isActive'];  

$qryInsertAnnouncement = "INSERT INTO 
                                `tbl_announcement`
                                (
                                `Ancmnt_Image`, 
                                `Ancmnt_Title`, 
                                `Ancmnt_Link`, 
                                `isButton`, 
                                `isActive`, 
                                `dateCreated`,
                                `createdBy`
                                ) 
                             VALUES 
                                (
                                '$fileName',
                                '$banner_title',
                                '$banner_link',
                                '$isButton',
                                '$isActive',
                                '$createdBy',
                                '$createdDate')";
$resInsertAnnouncement = mysqli_query($conn,$qryInsertAnnouncement);
?>