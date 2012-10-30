<?php

	// Sanitize
	foreach($_POST as $strKey => $mxdValue)
	{
		switch($strKey)
		{
			case 'db':
			case 'table':
			case 'key_1_name':
			case 'key_2_name':
				$arrPost_Clean[$strKey] = filter_var($mxdValue, FILTER_SANITIZE_STRING);
			break;

			case 'from':
			case 'to':
				$arrPost_Clean[$strKey] = filter_var($mxdValue, FILTER_SANITIZE_NUMBER_INT);
			break;

			case 'key_2_values':
				foreach($mxdValue as $iKey2ValuesKey => $strKey2ValuesValue)
				{
					$arrPost_Clean[$strKey][$iKey2ValuesKey] = filter_var($strKey2ValuesValue, FILTER_SANITIZE_STRING);
				}
			break;

		}

	}

	// Query builder
	$strPreview = "INSERT INTO `{$arrPost_Clean['db']}`.`{$arrPost_Clean['table']}`\n
						   	   (`{$arrPost_Clean['key_1_name']}`, `{$arrPost_Clean['key_1_name']}`)\n
						VALUES";

	for($i=$arrPost_Clean['from'];$i<=$arrPost_Clean['to'];$i++)
	{
		foreach($arrPost_Clean['key_2_values'] as $iValue => $strValue)
		{
			$strPreview .= " ('{$i}', '{$strValue}'), \n";
		}
	}

	$strPreview = rtrim($strPreview, ", \n");

	$strPreview .= ";";

	echo $strPreview;
	echo '<pre>';
	print_r($arrPost_Clean);
	echo '</pre>';

?>