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
				foreach($arrPost_Clean[$strKey] as $iKey2ValuesKey as $strKey2ValuesValue)
				{
					$arrPost_Clean['arrFields'][] = filter_var($strKey2ValuesValue, FILTER_SANITIZE_STRING);
				}
			break;

		}
	}

	echo '<pre>';
	print_r($arrPost_Clean);
	echo '</pre>';

?>