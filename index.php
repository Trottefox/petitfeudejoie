<?php
session_start();
session_destroy();
?>
<form method="post" action="connect.php">
Login    :<input type="text" name="login"/><br/>
Password :<input type="password" name="motdepasse"/>
<input type="submit" name="submit" value="Se connecter"/>
</form>