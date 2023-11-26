<?php

namespace IdeaCatLab\LaravelMultiMail\Exceptions;

class NoDefaultException extends \Exception
{
    public function __construct($mail)
    {
        $this->message = 'Username or password for ' . $mail . ' is missing in config/multimail.php and no default specified!';
        parent::__construct();
    }
}
