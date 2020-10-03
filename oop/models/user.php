<?php
require_once "Db.php";

class users extends Db
{
    public function __construct()
    {
        $this->table = 'users';
    }

}

$show = new users();
echo $show->find(2);