<?php
session_start();
if ((!isset($_SESSION['login'])) || (empty($_SESSION['login']))){
session_destroy();   
header('Location: http://www.petitfeudejoie.org/index.php');
exit();
}
?>

<html>
<head>
</head>
<body>
<table><tr>
<td style='width:50%;vertical-align:top;'>
Personal links :<br/><br/>

Ajouter un formulaire de gestion des liens

</td>
<td style='width:50%;vertical-align:top;'>
Home :<br/><br/>
<a href='https://panel.lws.fr/'>Admin LWS (LWS-177912-fRX2XSKA)</a><br/>
<a href='ftp://petit563167:fRX2XSKA@ftp.petitfeudejoie.org'>FTP</a><br/>
<a href='./protected/upload/'>Upload/Download Files</a><br/>
<a href='./tableau/'>Tableau partag�</a><br/>
<a href='./tableau/'>Calendrier partag� (en construction)</a><br/>
<td>
</body>