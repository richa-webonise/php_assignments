<html>
	<head>
	    <title>Prevent Spoofed From Input</title>
	</head>
	<body>
	    <?php
	    $user_name = "Richa";
	    $password = "weboniselab";
	    ?>
        <form action="another.php" method="post">
            <input type="text" name="user_name" value="<?php echo $user_name; ?>"/>
            <input type="password" name="password" value="<?php echo $password; ?>"/>
            <input type="submit" value="Click me!!"/>
        </form>
	</body>
</html>
