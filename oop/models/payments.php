<?php
require_once "Db.php";

class payments extends Db
{

    public function __construct()
    {
        $this->table = 'payments';
    }
}
