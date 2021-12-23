<?php
session_start();
if ((!isset($_SESSION['login'])) || (empty($_SESSION['login']))){
session_destroy();   
header('Location: http://www.petitfeudejoie.org/index.php');
exit();
}
?>
Upload :<br/>

<?php
echo '<br/>';
$dir    = './tree/';

$files = array_slice(scandir($dir), 2);

foreach ($files as $elt) {
	echo "<form method='post' action='delete.php'><input type='hidden' name='file' value='".$dir.$elt."' /><input type='submit' value='X' /> <a href=\"".$dir.$elt.'">'.$elt.'</a></form>';
}
?>
<br/>Ajouter un autre fichier ?<br/><br/>
<form method="post" action="upload.php" enctype="multipart/form-data">
	
	<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
	<input type="file" name="nom" /><br/>
	<input type="submit" name="submit" value="Envoyer" />
</form>

