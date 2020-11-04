<?php


namespace sffi\phlegethon\service\Pwd;


use sffi\phlegethon\service\Base;

class Lists extends Base
{
    /**
     * status状态值
        启用中：01
        禁用中：02
        删除中：03
        已启用 11
        已禁用 12
        已删除 13
        启用失败：21
        禁用失败：22
        删除失败：23
     */
    protected $router = 'pwd/list';

    protected $args = [
        'lock_no',
        'pwd_no',
        'status'
    ];
}