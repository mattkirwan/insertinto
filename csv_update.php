<?php
if(!empty($_POST))
{
	echo '</pre>';
	print_r($_POST);
	print_r($_FILES);
	echo '</pre>';
}
?>
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="csv" />
</form>