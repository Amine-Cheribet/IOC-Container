<?php

namespace IOC;

class IOC
{
    private static $container;

    /**
     * This static method return an instance of IOC class (this class).
     *
     */
    public static function createContainer(): Container
    {
        return static::$container = new Container();
    }

    /**
     * Return an instance of the Container class
     *
     */
    public static function container(): Container
    {
        if (static::$container) {
            return static::$container;
        }
        static::$container = new Container();
        return static::$container;
    }
}
