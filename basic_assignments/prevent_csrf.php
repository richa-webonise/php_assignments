<?php
$user_name = "Richa";
$password = "WeboniseLab";
$key = md5(uniqid(rand(), true)); //Generate any unique random number
//Or we can also use $key = sha1($user_name); to generate any random number/key

?>

<form action="other.php" method="post">
    <input type="hidden" name=csrf" value="<?php echo $key; ?>"/>
    <input type="text" name="user_name" value="<?php echo $user_name; ?>"/>
    <input type="password" name="password" value="<?php echo $password; ?>"/>
    <input type="submit" value="Click me..."/>
</form>
