<?php


namespace business\service;

/**
 * Class Business
 * @method array query($code) 字典代码
 * @package business\service
 */
class Dictionary extends Base
{
    protected $argQuery = [
        'code',
    ];
}
