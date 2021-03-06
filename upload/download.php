<?php
// d?sactive le temps max d'ex?cution
set_time_limit(0);
 
// d?marrage de la session
session_start();
 
// v?rifie que l'utilisateur est connect?
if (!isset($_SESSION["user_id"])) {
    header("HTTP/1.1 403 Forbidden");
    exit;
}
 
// on a bien une demande de t?l?chargement de fichier
if (empty($_GET["file"])) {
    header("HTTP/1.1 404 Not Found");
    exit;
}
// le nom doit ?tre un nom de fichier
if(basename($_GET["file"]) != $_GET["file"]) {
    header("HTTP/1.1 400 Bad Request");
    exit;
}
$name = $_GET["file"];
 
// v?rifie l'existence et l'acc?s en lecture au fichier
$filename = dirname(__FILE__)."/../files/".$name;
if (!is_file($filename) || !is_readable($filename)) {
    header("HTTP/1.1 404 Not Found");
    exit;
}
$size = filesize($filename);
 
// d?sactivation compression GZip
if (ini_get("zlib.output_compression")) {
    ini_set("zlib.output_compression", "Off");
}
 
// fermeture de la session
session_write_close();
 
// d?sactive la mise en cache
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0");
header("Cache-Control: max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
 
// force le t?l?chargement du fichier avec un beau nom
header("Content-Type: application/force-download");
header('Content-Disposition: attachment; filename="'.$name.'"');
 
// indique la taille du fichier ? t?l?charger
header("Content-Length: ".$size);
 
// envoi le contenu du fichier
readfile($filename);