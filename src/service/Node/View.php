<?php


namespace sffi\phlegethon\service\Node;


use sffi\phlegethon\service\Base;

class View extends Base
{
    protected $router = 'node/view';

    protected $args = [
        'node_no'
    ];

    protected $rule = [
        'node_no' => 'require'
    ];
}