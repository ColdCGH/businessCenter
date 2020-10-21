<?php


namespace business\service;

/**
 * Class Business
 * @method array register($username,$password) 商户注册
 * @method array authentication($id,$status,$reason) 商户审核
 * @method array memberValid($username) 用户是否绑定商户
 * @method array update($id,$base,$detail,$certificates) 更新商户信息
 * @method array query($id,$type) 查询商户信息 type['base','detail','certificates']
 * @package business\service
 */
class Business extends Base
{
    protected $argRegister = [
        'username',
        'password'
    ];
    protected $argAuthentication = [
        'id',
        'status',
        'reason'
    ];
    protected $argMemberValid = [
        'username'
    ];
    protected $argUpdate = [
        'id',
        'base',
        'detail',
        'certificates',
    ];
    protected $argQuery = [
        'id',
        'type'
    ];
}
