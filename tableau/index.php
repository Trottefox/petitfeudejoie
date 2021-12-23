
<?
require('../fonctions.php');

$db=dbConnect();

/*mise à jour*/
$query = "SELECT max(id) from excel";
$select = $db->query($query);
$select->setFetchMode(PDO::FETCH_ASSOC);
$row = $select->fetch();
$idmax = current($row);

/*vérif des supressions*/
for ($increment=1; $increment<$idmax+1; $increment++) {
	if (killHack($_POST['suppr'.$increment])=="x"){
		$db->query("DELETE FROM excel WHERE id=".$increment);
	}
}


$modif=killHack($_POST['modif']);
if ($modif=='Enregistrer les modifications') {
/*requete d'ajout*/
$a=killHack($_POST['a']);
$b=killHack($_POST['b']);
$c=killHack($_POST['c']);
$d=killHack($_POST['d']);
$e=killHack($_POST['e']);
$f=killHack($_POST['f']);
$g=killHack($_POST['g']);
$h=killHack($_POST['h']);
$i=killHack($_POST['i']);
if (($a.$b.$c.$d.$e.$f.$g.$h.$i)!=null) { 
	/*on ajoute la ligne*/
	$idmax++;
	$query = "INSERT INTO excel (id, a, b, c, d, e, f, g, h, i) VALUES ('".$idmax."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."')";
	$db->query($query);
	}
/*requete de suppression*/

/*Requete de mise à jour (sur toutes les lignes)*/
for ($increment=1; $increment<$idmax+1; $increment++) {
$id=killHack($_POST['id'.$increment]);
$a=killHack($_POST['a'.$increment]);
$b=killHack($_POST['b'.$increment]);
$c=killHack($_POST['c'.$increment]);
$d=killHack($_POST['d'.$increment]);
$e=killHack($_POST['e'.$increment]);
$f=killHack($_POST['f'.$increment]);
$g=killHack($_POST['g'.$increment]);
$h=killHack($_POST['h'.$increment]);
$i=killHack($_POST['i'.$increment]);
	/*on modifie la ligne*/
	$query = "UPDATE excel SET a='".$a."', b='".$b."', c='".$c."', d='".$d."', e='".$e."', f='".$f."', g='".$g."', h='".$h."', i='".$i."' WHERE id=".$id;
	$db->query($query);	
}
}

/*affichage du contenu de la table après les modifs*/
$entete=true;
$query = "SELECT id,a,b,c,d,e,f,g,h,i from excel";


if ($select=$db->query($query))
	$select->setFetchMode(PDO::FETCH_ASSOC);

	echo '<div style="overflow:auto;white-space: nowrap">';
	echo '<form method="post" action="index.php"">'.PHP_EOL;
	echo '<input type="submit" name="modif" value="Enregistrer les modifications"><br/>';
	$row=0;
	while($row=$select->fetch()) 
	{

		echo '<input type="hidden" name="id'.$row['id'].'" value="'.$row['id'].'"/>';
		echo '<input type="text" name="a'.$row['id'].'" value="'.$row['a'].'"/>';
		echo '<input type="text" name="b'.$row['id'].'" value="'.$row['b'].'"/>';
		echo '<input type="text" name="c'.$row['id'].'" value="'.$row['c'].'"/>';
		echo '<input type="text" name="d'.$row['id'].'" value="'.$row['d'].'"/>';
		echo '<input type="text" name="e'.$row['id'].'" value="'.$row['e'].'"/>';
		echo '<input type="text" name="f'.$row['id'].'" value="'.$row['f'].'"/>';
		echo '<input type="text" name="g'.$row['id'].'" value="'.$row['g'].'"/>';
		echo '<input type="text" name="h'.$row['id'].'" value="'.$row['h'].'"/>';
		echo '<input type="text" name="i'.$row['id'].'" value="'.$row['i'].'"/>';
		if ($entete==false) { echo '<input type="submit" name="suppr'.$row['id'].'" value="x"/>'.PHP_EOL;}
		$entete=false;
		echo "<br/>";
	}
	echo '<input type="text" value="" name="a">';
	echo '<input type="text" value="" name="b">';
	echo '<input type="text" value="" name="c">';
	echo '<input type="text" value="" name="d">';
	echo '<input type="text" value="" name="e">';
	echo '<input type="text" value="" name="f">';
	echo '<input type="text" value="" name="g">';
	echo '<input type="text" value="" name="h">';
	echo '<input type="text" value="" name="i">';
	

	echo '</form>';
	echo '</div>';

?>

