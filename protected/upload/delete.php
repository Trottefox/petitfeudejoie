
<?php

if (unlink($_POST['file'])) {
    echo $_POST['file']." supprim� avec succ�s";
} 
else {
    echo "Erreur : Fichier non supprim�<br/>";
	print_r($_POST['file']);
}

echo '<br/><a href="./index.php">retour</a>';

?>
 