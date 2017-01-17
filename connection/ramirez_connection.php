<meta charset="utf">
<?php
/**---------------------------------CONNEXION---------------------------*/
$dbname = 'application_bd';
$host = 'localhost';
$user = 'a_la_trace';
$pwd = 'application';

$dbconnect = new mysqli($host, $user, $pwd, $dbname);

//Verification de la connexion.
if($dbconnect -> connect_error) {
	printf('Échec de la connexion : %s<br>', $dbconnect -> connect_error);
	die('Connexion erreur : '. $dbconnect -> connect_error);
	exit();	
}

//Modification du jeu de résultata en utf8.
if(!mysqli_set_charset($dbconnect, 'utf8')){
	printf('Erreur lors du changement du jeu de caractères utf8 : %s<br>', mysqli_error($dbconnect));
}else{
	//printf('Jeu de caractères courant : %s<br>', mysqli_character_set_name($dbconnect));
}
?>

