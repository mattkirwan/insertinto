<?php
	
	$strPreview = '#Give me some <strike>sugar</strike> data...';

	if(!empty($_POST))
	{
		include './includes/generate.php';
	}

	include './includes/header.php';
		
	include './includes/content.php';

	include './includes/footer.php';
?>