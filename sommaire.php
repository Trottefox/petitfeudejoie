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
<a href='./protected/upload/'>Upload/Download Files</a><br/>
<a href='./tableau/'>Tableau partagé</a><br/>
<a href='./tableau/'>Calendrier partagé (en construction)</a><br/>
<td>
</body>
