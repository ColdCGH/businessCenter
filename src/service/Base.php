<?php


namespace business\service;

use business\util\RequestUtil;

class  Base
{
    protected $request;
    protected $key;
    protected $controler;
    protected $arg;
    protected $secret_token;

    public function __construct($url, $key, $token)
    {
        $this->request = new RequestUtil($url);
        $this->key = $key;
        $this->secret_token = $token;
    }

    public function __call($name, $arguments)
    {
        $args = [];
        foreach ($this->getArg($name) as $key => $item){
            if (!isset($arguments[$key]) || !$arguments[$key]) continue;
            if (strpos($item,'|')){
                 $args[explode('|',$item)[count($arguments) == count($this->getArg($name)) ? 0 : 1]] = $arguments[$key];
            } else {
                $args[$item] = $arguments[$key];
            }
        }
        return $this->request($name,$args);
    }

    protected function request($name,$args)
    {
        $controller = ($this->controler?:strtolower(basename(str_replace('\\','/',static::class))));
        $result = $this->request->post('/'.$controller.'/'.$name.(isset($argstring)?'?'.$argstring:''),
            $args, 'POST',
            ['PLATFORM-KEY'=>$this->key, 'secret_token' => $this->secret_token,'Content-type'=>'application/x-www-form-urlencoded']);
        if ($result['code'] == 1){
            return $result['data'];
        }
        throw new \Exception($result['msg'],$result['code']);
    }

    protected function getArg($name) {
        $arg = 'arg'.ucfirst($name);
        return $this->$arg;
    }
}
