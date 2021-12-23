<?php
session_start();


$_SESSION['connect']=0;

if(!isset($_POST['login']) OR !isset($_POST['motdepasse']))
{
   redirectLink('index.php');
}
require('fonctions.php');

$login=killHack($_POST['login']);
$motdepasse=md5(killHack($_POST['motdepasse']));

$_SESSION['connect']=1;
$_SESSION['login']=$login;
session_regenerate_id;

$db=dbConnect();

/* test LOGIN */
$query = "SELECT iuserd, uuserser, puserass, nuserbr_connect, duserates from tuserable_utilisateur where uuserser='".$login."'";
$select = $db->query($query);
$select->setFetchMode(PDO::FETCH_ASSOC);
$row = $select->fetch();
if ($row==null)	redirectLink('index.php?error=connect');
	
/* test MDP */
$select = $db->query($query." and puserass='".$motdepasse."'");
$select->setFetchMode(PDO::FETCH_ASSOC);
$row = $select->fetch();

if ($row==null)	{ //ou !$row

	list($fullDate, $fullHour) = explode(' ', $row['duserates']);
	$nbr_essai = intval($row['nuserbr_connect'])+1;
	if ($fullDate===date('Y-m-d') AND intval(_MAX_TENTATIVE)<$nbr_essai ) {
		redirectLink('index.php?error=compte_bloqué');
	}
	
	$db->query("UPDATE tuserable_utilisateur SET nuserbr_connect='".$nbr_essai."', duserates=CURRENT_TIMESTAMP() where iuserd='".$row["iuserd"]."'");
	redirectLink('index.php?error=connect');
}

$db->Query("UPDATE tuserable_utilisateur SET nuserbr_connect=0, duserates=CURRENT_TIMESTAMP() where iuserd='".$row["iuserd"]."'");

$db=null;

redirectLink('sommaire.php');

?>

