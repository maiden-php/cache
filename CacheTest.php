<?php

abstract class Facade
{
    public static function __callStatic($name, $arguments)
    {
        self::$name();
    }
}

class Cache extends Facade
{
    private static $caches = [];

    private function __construct()
    {
    }

    public function set($key, $value)
    {
        self::$caches[$key] = $value;
    }

    public function get($key)
    {
        return self::$caches[$key];
    }

    public function getAllCaches()
    {
        return self::$caches;
    }
}


Cache::set('key1', 'value1');
echo Cache::get('key1');