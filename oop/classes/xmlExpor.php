<?php
require_once __DIR__.DIRECTORY_SEPARATOR."../interfaces/canExport.php";
class xmlExpor implements canExport{

    public function export()
    {
       echo "this export is: xml";
    }
}