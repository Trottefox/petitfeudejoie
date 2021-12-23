<?php
define('_MAX_TENTATIVE', 3);


/* connection bdd */
function dbConnect()
{
	try {
    $dbh = new PDO('mysql:host=193.37.145.62;dbname=xxxx', 'login', 'password');
    return $dbh;
} 
	catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
	die();
	}
}


/* echap chars */
function killHack($str)
{
	return str_replace(array("\\", "\0", "\n", "\r", "\xla", "'", '"'), 
		array("\\\\", "\\0", "\\n", "\\r", "\Z", "\'", '\"'), strval($str));
}

function redirectLink($link)
{
	header('Location: '.strval($link));
	exit;
}


?>