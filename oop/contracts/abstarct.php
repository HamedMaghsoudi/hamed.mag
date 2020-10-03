<?php

abstract class onlineGetway
{
    protected $options;

    public function __construct()
    {
        $this->options = array(
            'mellat' => array(
                'username' => 'dhifghbuayfhaiuhf',
                'password' => 'slkgyafugfysfa',
                'merchat' => 'sfdhuaygfygf'),
            'persian' => array(
                'usernam' => 'sdfgysudgfay',
                'password' => 'jagfyfvyvsfayv',),
            'saman' => array(
                'api_key' => 'sdfhgvfdbghsc'
            )

        );

    }

    abstract public function sendRequest();

    abstract public function verifyRequest();
}

class mellat extends onlineGetway
{
    private $gateWayName;
    private $mellatOptiion;

    public function __construct()
    {
        $this->gateWayName = 'mellat';
        parent::__construct();
        $this->mellatOptiion = $this->options[$this->gateWayName];
    }

    public function sendRequest()
    {
        var_dump($this->mellatOptiion);
    }

    public function verifyRequest()
    {

    }
}

$mellat = factory::make('mellat');
$mellat->sendRequest();

class factory
{
    public static function make($calss)
    {
        $classname = ucfirst($calss);
        if (!class_exists($classname)) {
            return false;
        }
        return new $classname;
    }
}