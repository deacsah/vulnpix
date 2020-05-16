<?php
$uploaded = FALSE;
$error = NULL;
if (!empty($_POST['submit']) && !empty($_FILES)) {
	$uploadDir = "uploads/";
	$fileName = basename($_FILES["file"]["name"]);
	$uploadedFilePath = $uploadDir.$fileName;
	$imageFileType = pathinfo($uploadedFilePath,PATHINFO_EXTENSION);
	if(!empty($_GET['hardmode']) && $_GET['hardmode'] == 2) {
		if(getimagesize($_FILES["file"]["tmp_name"]) === FALSE) {
			$error = "File is not an image. (getimagesize)";
		}
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			$error = "File is not an image (extension)";
		}
	} elseif (!empty($_GET['hardmode']) && $_GET['hardmode'] == 1) {
		if ($_FILES["file"]["type"] != 'image/png' && $_FILES["file"]["type"] != 'image/jpeg') {
			$error = "File is not an image. (MIME type)";
		}
	} else {
		if ($imageFileType === "php") {
			$error = "No php files allowed! (extension)";
		}
	}
	if ($_FILES["file"]["size"] > 500000) {
		$error = "Sorry, your file is too large.";
	}
	if (empty($error)) {
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadedFilePath)) {
			echo "The file ". $fileName. " has been uploaded.";
			$uploaded = TRUE;
		}
	}
}
?>
<div class="well">
	<p>Upload an image:</p>	
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="file" />
		<input type="submit" name="submit" class="btn btn-info" value="Upload" />
	</form>
	<?php if (!empty($error)): ?>
		<div class="alert alert-danger text-center"><?php echo $error ?></div>
	<?php endif ?>
	<?php if ($uploaded): ?>
		<p>Image uploaded!</p>
		<img src="<?php echo $uploadedFilePath ?>">
	<?php endif ?>
</div>