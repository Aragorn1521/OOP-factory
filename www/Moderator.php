<?php

class Moderator implements UserRole
{
    protected $addAdmin = false;
    protected $addModerators = false;
    protected $addPost = true;
    protected $addAComments = true;
}