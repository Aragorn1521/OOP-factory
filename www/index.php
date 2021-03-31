<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/www/Factory.php';

$role = 'Guest';
/*
switch ($role) {
	case 'Admin':
		$login  = new Admin;
		break;
	
	case 'Moderator':
		$login  = new Moderator;
		break;

	case 'User':
		$login  = new User;
		break;

	case 'Guest':
		$login  = new Guest;
		break;
}
var_dump($login);
*/


try {
    $userRoleObj = Factory::createUsers($role);
    var_dump($userRoleObj);
} catch (Exception $e) {
    echo 'some error';
}
