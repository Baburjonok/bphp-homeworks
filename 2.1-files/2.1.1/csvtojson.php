<?php 


$uploadsDir = '/uploads';

foreach ($_FILES['userfile']['error'] as $key => $error) {
	if ($error == UPLOAD_ERR_OK) {
		$tmpName = $_FILES['userfile']['tmp_name'][$key];
		if (is_uploaded_file($tmpName)) {
			$pathParts = pathinfo($_FILES['userfile']['name'][$key]);
			if ($pathParts['extension'] != 'php') {
				move_uploaded_file(
					$tmpName,
					$uploadsDir.'/'.$pathParts['basename']
				);
			}
		}
	}
}


?>