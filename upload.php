
<?php

$uploaddir = './upload/';

$fichier = strtr(basename($_FILES['nom']['name']),
     '����������������������������������������������������',
     'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'); 
 
$fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

$uploadfile = $uploaddir . $fichier;

echo '<pre>';
if (move_uploaded_file($_FILES['nom']['tmp_name'], $uploadfile)) {
    echo "Fichier t�l�charg� avec succ�s";
} 
else {
    echo "Erreur : Fichier non telecharg�";
	print_r($_FILES);
}

echo '</pre><a href="./index.php">retour</a>';

?>
 