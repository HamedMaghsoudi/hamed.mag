<?php

require_once "Db.php";

class posts extends Db
{
    public function __construct()
    {
        $this->table = 'posts';
    }
}
