<?php

    $target_dir = "../assets/media/announcement/";
	$file = $_FILES['file-input']['name'];
	$path = pathinfo($file);
	$filename = $path['filename'];
	$ext = $path['extension'];
	$temp_name = $_FILES['file-input']['tmp_name'];
	$path_filename_ext = $target_dir.$filename.".".$ext;

    move_uploaded_file($temp_name,$path_filename_ext);
?>