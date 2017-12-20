<?php

namespace Globalis\WP\LocalConfig;

class Vars
{
    private static $vars;

    public static function init($file)
    {
        self::$vars = include $file;
        require_once __DIR__ . '/helpers.php';
    }

    public static function get($key)
    {
        return isset(self::$vars[$key]) ? self::$vars[$key] : null;
    }
}
