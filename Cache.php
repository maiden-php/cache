<?php

namespace API\Components\Cache;

class Cache extends Facade implements \CacheInterface
{
    private static $caches = [];

    public function __construct()
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

    public static function toString()
    {
        return __CLASS__;
    }
}