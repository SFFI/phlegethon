<?php


namespace sffi\phlegethon\service\Login;


use sffi\phlegethon\util\ConfigUtil;
use sffi\phlegethon\util\DesCrypt;
use sffi\phlegethon\util\RequestUtil;

class Login extends \sffi\phlegethon\service\Base
{
    protected $args = [
        'account',
        'password',
        'check_token'
    ];

    protected $rule = [
        'account' => 'require',
        'password' => 'require'
    ];

    protected $router='login';

    protected $needEncryption = [
        'password'
    ];

    public function __construct($account = '', $password = '', $key = '')
    {
        parent::__construct($account, $password, $key);
        $this->param['account'] = $this->config['account'];
        $this->param['password'] = $this->config['password']; #DesCrypt::des_encrypt($this->config['password'], $this->config['key']);
    }
}