<?php
require 'connect.php';

session_start();

$email = $_SESSION['email'];
$postotp = $_POST['otp'];

$qryVerifyotp = "SELECT * FROM `tbl_rpt_users` WHERE email = '$email'  AND otp = $postotp";
$resVerifyotp= mysqli_query($conn,$qryVerifyotp);
$cntVerifyotp = mysqli_num_rows($resVerifyotp);

if ($cntVerifyotp != 1)
{
    echo "Please provide correct OTP!";
}

else
{
    $qryUpdateStatus = "UPDATE `tbl_rpt_users` SET `status`= 1 WHERE email = '$email' AND otp = $postotp";
    $resUpdateStatus = mysqli_query($conn,$qryUpdateStatus);
    echo "Success"; 
}

?>