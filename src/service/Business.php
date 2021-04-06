<?php


namespace business\service;

/**
 * Class Business
 * @method array register($username,$password) 商户注册
 * @method array authentication($id,$status,$reason) 商户审核
 * @method array memberValid($username) 用户是否绑定商户
 * @method array update($id,$base,$detail,$certificates) 更新商户信息
<<<<<<< HEAD
 * @method array query($id,$type=[]) 查询商户信息 type['detail','certificates']
 * @method array list($page,$size,$where = [],$order=['id'=>'desc']) 查询商户列表
=======
 * @method array query($id,$type) 查询商户信息 type['base','detail','certificates']
 * @method array list($page,$size,$where = [],$order=['id'=>'desc'],$field = ['business' => ['id','name'], 'detail' => ['business_id','contact']]) 查询商户列表
>>>>>>> 1747115dd3e882107507d004b1d9b43d50a2cf24
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
    protected $argList = [
        'page',
        'size',
        'where',
        'order',
        'field'
    ];
}
