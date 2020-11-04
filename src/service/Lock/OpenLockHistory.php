<?php


namespace sffi\phlegethon\service\Lock;


use sffi\phlegethon\service\Base;

class OpenLockHistory extends Base
{
    protected $router = 'lock/open_lock_his';

    protected $args = [
        'lock_no',
        'page_size',
        'current_page',
        'search_time_start',
        'search_time_end'
    ];

    protected $rule = [
        'lock_no' => 'require',
    ];
}