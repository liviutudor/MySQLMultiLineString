<html>
<head>
<meta charset="UTF-8" />
<title>MySQL - Safe Multi-line Value for INSERT/UPDATE</title>
</head>
<body>

<?php
	//settings
	$form_action = "mysql_multiline.php";
	$rows = 10;
	$columns = 80;
	$eliminate_empty = true;

	//convert function
	function safeMySQLMultiline( $txt ) {
		$txt = str_replace( "'", "''", $txt );
		$txt = preg_replace( "/\r/i", "", $txt );
		$txt = preg_replace( "/\n/i", "' \\\\\\\\n\r'", $txt);
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

</body>
</html>
