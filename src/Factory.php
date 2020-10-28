<?php
namespace business;

use business\service\Business;
use business\service\Dictionary;
use business\util\RequestUtil;

/**
 * Class Factory
 * @method static Business Business ($url='',$key='')        商户
 * @method static Dictionary Dictionary ($url='',$key='')                字典
 * @package business
 */
class Factory {
    public static function make($name, array $config)
    {
        $application = "business\\service\\{$name}";

        $config = RequestUtil::getConfig($config);
//        $config = ['http://api.bs.coolcgh.cn', '7fc7940b4f7f58b49c71bf9e237b633e'];

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
