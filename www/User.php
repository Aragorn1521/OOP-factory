<?php


class User  implements UserRole
{
    protected $addAdmin = false;
    protected $addModerators = false;
    protected $addPost = false;
    protected $addAComments = true;
}
