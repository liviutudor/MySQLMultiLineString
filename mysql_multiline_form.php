<?php
	//settings
	global $form_action;
	if($form_action == '' ) {
		$form_action = "mysql_multiline_form.php";
	}
	
	global $rows;
	if( !$rows ) {
		$rows = 10;
	}

	global $columns;
	if( !$columns ) {
		$columns = 80;
	}

	global $eliminate_empty;
	if( !$eliminate_empty ) {
		$eliminate_empty = true;
	}

	//convert function
	function safeMySQLMultiline( $txt ) {
		$txt = str_replace( "'", "''", $txt );
		$txt = preg_replace( "/\r/i", "", $txt );
		$txt = preg_replace( "/\n/i", "\\\\\\\\n' \r'", $txt);
		//$txt = preg_replace( "/\t/i", "' \\\\\\\\t'", $txt);
		$txt = "'" . $txt . "'";

		//get rid of empty lines if needed
		if( $eliminate_empty ) {
			
		}
		return stripslashes($txt);
	}
?>

<form action="<?php echo $form_action; ?>" method="POST">
	<label for="mysql_value">Multi-line value</label>
	<br/>
<textarea id="mysql_value" name="mysql_value" rows="<?php echo $rows; ?>" cols="<?php echo $columns; ?>">
<?php
	if( $_POST["mysql_value"] != "" ) {
		echo stripslashes($_POST["mysql_value"]);
	}
?>
</textarea>
	<br/><br/>
		<label for="converted_value">Converted value</label><br/>
<textarea id="converted_value" name="converted_value" rows="<?php echo $rows; ?>" cols="<?php echo $columns; ?>">
<?php
	if( $_POST["mysql_value"] != "" ) {
		echo safeMySQLMultiline($_POST["mysql_value"]);
	}
?>
</textarea>
	<br/>

	<input type="submit" />
</form>
