<?php
require_once "oop/classes/htmlExport.php";
require_once "oop/classes/xmlExpor.php";
require_once "oop/classes/jsonExport.php";

$export="json";
$handler=$export."Export";
$handler=new $handler;
echo $handler->export();
