<?php


namespace sffi\phlegethon\service\Lock;


use sffi\phlegethon\service\Base;

class Lists extends Base
{
    protected $router = 'lock/list';

    protected $args = [
        'page_size',
        'current_page',
        'node_no',
        'lock_no',
        'house_code',
        'room_code',
    ];
}