<?php 
session_start();
require 'connect.php';
$createdBy = $_SESSION['userid'];
$createdDate = date("Y-m-d");

$property_tdn            = $_POST['property_tdn'];
$property_location       = $_POST['property_location'];
$property_area           = $_POST['property_area'];
$property_market_value   = $_POST['property_market_value'];
$property_assessed_value = $_POST['property_assessed_value'];
$property_actual_use     = $_POST['property_actual_use'];
$property_declared_date  = $_POST['property_declared_date'];
$property_effective_date = $_POST['property_effective_date'];
$property_pin            = $_POST['property_pin'];

$owner_firstname         = $_POST['owner_firstname'];
$owner_lastname          = $_POST['owner_lastname'];
$owner_middlename        = $_POST['owner_middlename'];
$owner_bldg_no           = $_POST['owner_bldg_no'];
$owner_street_no         = $_POST['owner_street_no'];
$owner_street_name       = $_POST['owner_street_name'];
$owner_block_no          = $_POST['owner_block_no'];
$owner_lot_no            = $_POST['owner_lot_no'];
$owner_phase_no          = $_POST['owner_phase_no'];
$owner_country           = $_POST['owner_country'];
$owner_province          = $_POST['owner_province'];
$owner_municipality      = $_POST['owner_municipality'];
$owner_barangay          = $_POST['owner_barangay'];
$owner_zip_code          = $_POST['owner_zip_code'];
$owner_gender            = $_POST['owner_gender'];
$owner_email             = $_POST['owner_email'];
$owner_contact_no        = $_POST['owner_contact_no'];
$owner_telephone_no      = $_POST['owner_telephone_no'];


$qryInsertProperty = "INSERT INTO `tbl_rpt_consumer_details`
                (
                    `lastname`, 
                    `firstname`, 
                    `middlename`,  
                    `UHB_No`, 
                    `street_no`, 
                    `street_name.`, 
                    `block_no`, 
                    `lot_no`, 
                    `phase_no`, 
                    `country`, 
                    `province_state`, 
                    `city`, 
                    `barangay`, 
                    `zip_code`, 
                    `gender`, 
                    `email`, 
                    `mobileNo`, 
                    `telephoneNo`, 
                    `status`, 
                    `createdBy`, 
                    `dateCreated`
                ) 
                VALUES 
                (
                    '$owner_lastname',
                    '$owner_firstname',
                    '$owner_middlename',
                    '$owner_bldg_no',
                    '$owner_street_no',
                    '$owner_street_name',
                    '$owner_block_no',
                    '$owner_lot_no',
                    '$owner_phase_no',
                    '$owner_country',
                    '$owner_province',
                    '$owner_municipality',
                    '$owner_barangay',
                    '$owner_zip_code',
                    '$owner_gender',
                    '$owner_email',
                    '$owner_contact_no',
                    '$owner_telephone_no',
                    'GOOD',
                    '$createdBy',
                    '$createdDate'
                )";
$resInsertProperty = mysqli_query($conn,$qryInsertProperty);
$last_id = mysqli_insert_id($conn);

$qryInsertPropertyDetails = "INSERT INTO `tbl_users_property`
                    (
                        `userid`, 
                        `tdn`, 
                        `pin`,
                        `location`,
                        `area`,
                        `market_value`,
                        `assessed_value`,
                        `actual_use`,
                        `declared_date`,
                        `effective_date`, 
                        `createdBy`, 
                        `createdDate`
                    ) 
                    VALUES 
                    (
                        '$last_id',
                        '$property_tdn',
                        '$property_pin',
                        '$property_location',
                        '$property_area',
                        '$property_market_value',
                        '$property_assessed_value',
                        '$property_actual_use',
                        '$property_declared_date',
                        '$property_effective_date',
                        '$createdBy',
                        '$createdDate'

                    )";
$resInsertPropertyDetails = mysqli_query($conn,$qryInsertPropertyDetails);

echo 'Added Successfully';
?>