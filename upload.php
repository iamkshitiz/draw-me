<?php
	$target_dir = "uploads/";

	if ( isset($_POST["image"]) && !empty($_POST["image"]) )
	{
		$dataURL = $_POST["image"];  

		$parts = explode(',', $dataURL);  
		$data = $parts[1];  

		$data = base64_decode($data);  

		$file = $target_dir . time() . '.png';

		$success = file_put_contents($file, $data);

		print $success ? $file : 'Unable to save this image.';
	}