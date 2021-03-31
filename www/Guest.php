<?php


class Guest implements UserRole
{
    protected $addAdmin = false;
    protected $addModerators = false;
    protected $addPost = false;
    protected $addAComments = false;
}