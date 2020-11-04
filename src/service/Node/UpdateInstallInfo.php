<?php


namespace sffi\phlegethon\service\Node;


class UpdateInstallInfo extends \sffi\phlegethon\service\Base
{
    protected $router = 'node/update_install_info';

    protected $args = [
        'node_no',
        'house_code',
    ];
    protected $rule = [
        'node_no'       =>  'require',
        'house_code'    =>  'require',
    ];
}