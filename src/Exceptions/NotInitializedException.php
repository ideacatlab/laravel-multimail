<?php

namespace IdeaCatLab\LaravelMultiMail\Exceptions;

class NotInitializedException extends \Exception
{
    public function __construct()
    {
        $this->message = 'Please call loadConfiguration($key) before anything else.';
        parent::__construct();
    }
}
