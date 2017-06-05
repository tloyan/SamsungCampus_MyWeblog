<?php
require_once "inc/bootstrap.php";
$db = App::getDatabase();

if(App::getAuth()->confirm($db, $_GET['id'], $_GET['token'], Session::getInstance())) {

	Session::setFlash('success', 'votre compte a bien ete valider');
	App::redirection('account.php');
} else {
	Session::setFlash('danger', 'ce token nest plus valide');
	App::redirection('login.php');
}