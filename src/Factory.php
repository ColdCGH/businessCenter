<?php
namespace business;

class Factory {
    public static function make($name, array $config)
    {
        $application = "sffi\\service\\{$name}";

        $config = RequestUtil::getConfig($config);

        return new $application(...$config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return self::make($name, $arguments);
    }
}
