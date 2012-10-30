<?php
	
	$strPreview = '';

	if(!empty($_POST))
	{
		include './includes/generate.php';
	}

	include './includes/header.php';
		
	include './includes/content.php';

	include './includes/footer.php';
?>