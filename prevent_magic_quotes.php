<form method='post'>
Question: <input type='text' name='question'/><br />
<input type='submit' value="Click Me...">
</form>

<?php
if(!get_magic_quotes_gpc())
	echo stripslashes($_POST['question']);
else
	echo $_POST['question'];
	
?>
