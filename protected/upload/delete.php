
<?php

if (unlink($_POST['file'])) {
    echo $_POST['file']." supprimé avec succès";
} 
else {
    echo "Erreur : Fichier non supprimé<br/>";
	print_r($_POST['file']);
}

echo '<br/><a href="./index.php">retour</a>';

?>
 