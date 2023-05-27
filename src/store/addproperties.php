<?php 
require 'connect.php';

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
$owner_telephone_no      = $_POST['firstnowner_telephone_noame'];

if ($owner_block_no != '')
{
    $owner_block_no = 'Blk ' . $owner_block_no;
}
$address = $owner_street_no . ' ' . $owner_street_name . ' ' . $owner_block_no;

echo $owner_block_no;

// $qryCheckEmail = "INSERT INTO `tbl_rpt_consumers`
//                     (
//                         `lastname`, 
//                         `firstname`, 
//                         `middlename`, 
//                         `address`, 
//                         `country`, 
//                         `gender`, 
//                         `email`, 
//                         `mobileNo`, 
//                         `telephoneNo`, 
//                         `status`, 
//                         `createdBy`, 
//                         `dateCreated`
//                     ) 
//                     VALUES 
//                     (
//                         '[value-1]',
//                         '[value-2]',
//                         '[value-3]',
//                         '[value-4]',
//                         '[value-5]',
//                         '[value-6]',
//                         '[value-7]',
//                         '[value-8]',
//                         '[value-9]',
//                         '[value-10]',
//                         '[value-11]',
//                         '[value-12]'
//                     )";
// $resCheckEmail = mysqli_query($conn,$qryCheckEmail);
?>