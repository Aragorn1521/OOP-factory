<?php

class Admin implements UserRole
{
    protected $addAdmin = true;
    protected $addModerators = true;
    protected $addPost = true;
    protected $addAComments = true;
}