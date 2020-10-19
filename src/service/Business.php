<?php


namespace business\service;

/**
 * Class Business
 * @method array register($username,$password) 商户注册
 * @method array valid($username,$password) 验证用户密码
 * @method array update($id,$member,$info,$card,$third) 更新用户信息
 * @package business\service
 */
class Business extends Base
{
    protected $argRegister = [
        'username',
        'password'
    ];
    protected $argValid = [
        'username',
        'password'
    ];
    protected $argUpdate = [
        'id',
        'member',
        'info',
        'card',
        'third'
    ];
}
