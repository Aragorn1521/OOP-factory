<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/www/Admin.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/www/User.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/www/Moderator.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/www/Guest.php';

class Factory
{
    public static function createUsers($role)
    {
        switch ($role) {
            case 'Admin':
                $result = new Admin();
                break;
            case 'User':
                $result = new User();
                break;
            case 'Moderator':
                $result = new Moderator();
                break;
            default:
                $result = new Guest();
        }
        return $result;
    }
}