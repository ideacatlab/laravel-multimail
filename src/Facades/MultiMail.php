<?php

namespace IdeaCatLab\LaravelMultiMail\Facades;

use Illuminate\Support\Facades\Facade;

class MultiMail extends Facade
{
    /**
    * 
    * @return string
    */
    protected static function getFacadeAccessor()
    {
        return 'IdeaCatLab-laravelmultimail';
    }
}
