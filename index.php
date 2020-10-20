<?php

use business\Factory;

require "vendor/autoload.php";


try {
    $res = Factory::Dictionary()->query('enterprise_type');
}catch (\Exception $exception){
    var_dump($exception->getFile(), $exception->getLine(), $exception->getMessage());
}
print_r($res);
