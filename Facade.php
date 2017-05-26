<?php

namespace API\Components\Cache;

abstract class Facade
{
    public static function __callStatic($name, $arguments)
    {
        self::$name();
    }
}