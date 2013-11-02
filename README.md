MySQLMultiLineString
====================

Simple PHP code to help create a safe multi-line mysql string.

If you ever have to generate a MySQL `INSERT` statement which involves a string/text value which spans over multiple line, you probably had to involve some manual processing of the value first to ensure it doesn't break the SQL syntax. This simple tool is meant to help with that: it simply accepts a random multi-line piece of text and generates a string value which can be safely pasted into a MySQL `INSERT` or `UPDATE` statement.

Example:
--------

			<script type="text/javascript">
				function abc() {
					//do some stuff
					alert( 'done' );
				}
				abc();
			</script>


becomes:

			'<script type="text/javascript">\n'
			'\tfunction abc() {\n'
			'\t\t//do some stuff\n'
			'\t\talert( ''done'' );\n'
			'\t}\n'
			'\tabc();\n'
			'</script>\n'

The single quotes get doubled as you can see and the code adds corresponding `\n` and `\t` for new lines and tabs.

Files
-----

The actual form and conversion is in `mysql_multiline_form.php`, and the `mysql_multiline.php` is an example on how to embed the form in your own page. The page is formatted to match my website (http://liviutudor.com) and you can actually see it in action here: http://liviutudor.com/mysql_multiline.php#sthash.u0etbzHP.Ja0k7uRl.dpbs
