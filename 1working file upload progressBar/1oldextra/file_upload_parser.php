<?php
	$target_dir = $_SERVER["DOCUMENT_ROOT"]."/SRS/";
	$target_file = $target_dir . basename($_FILES["file1"]["name"]);

	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


    if(move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file))
    	echo "The file ". basename( $_FILES["file1"]["name"]). " has been uploaded.";
    else
       	echo "Sorry, there was an error uploading your file.";
















/*	$fileName = $_FILES["file1"]["name"]; //The file name
	$fileTmpLoc = $_FILES["file1"]["tmp_name"]; //File in php tmp folder
	$fileType = $_FILES["file1"]["type"]; //Type of file it is
	$fileSize = $_FILES["file1"]["size"]; //Filesize in bytes
	$fileErrorMsg = $_FILES["file1"]["error"]; //0 for false 1 for true
	
	if(!$fileTmpLoc)//if file is not chosen
	{
		echo "Error, please browse for the file before clicking the upload button";
		exit();
	}

							  // Check if image file is a actual image or fake image
							  if(isset($_POST["submit"]))
							  {
							      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
							      if($check !== false)
							      {
							          echo "File is an image - " . $check["mime"] . ".";
							          $uploadOk = 1;
							      }
							      else
							      {
							          echo "File is not an image.";
							          $uploadOk = 0;
							      }
							  }

							  // Check if file already exists
							  if(file_exists($target_file))
							  {
							      echo "Sorry, file already exists.";
							      $uploadOk = 0;
							  }

							  // Check file size
							  if($_FILES["fileToUpload"]["size"] > 500000)
							  {
							      echo "Sorry, your file is too large.";
							      $uploadOk = 0;
							  }

							  // Allow certain file formats
							  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
							  {
							      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
							      $uploadOk = 0;
							  }

	if(move_uploaded_file($fileTmpLoc, "SRS/$fileName"))
		echo "$fileName upload is complete";
	else
		echo "move_uploaded_file function failed.";
*/

?>
