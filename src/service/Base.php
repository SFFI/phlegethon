<?php


namespace sffi\phlegethon\service;


use sffi\phlegethon\service\Login\Login;
use sffi\phlegethon\util\ConfigUtil;
use sffi\phlegethon\util\DesCrypt;
use sffi\phlegethon\util\RequestUtil;
use sffi\phlegethon\util\StringUtil;
use sffi\phlegethon\util\TokenUtil;

class Base
{
    protected static $token;
    protected $url = 'http://ops.huohetech.com:80/';
    protected $head=[
        'version' => '2.9.9'
    ];

    protected $config = [];

    protected $param;
    protected $router;

    protected $args;
    protected $rule = [];
    /**
     * @var array 需要加密的字段
     */
    protected $needEncryption = [
        'password',
        'pwd_text',
        'card_no',
        'card_dn_no',
        'active_code'
    ];
    protected $encrypted = [
    ];

    public function __construct($account='', $password='', $key='')
    {
        $this->config = $account ?['account'=>$account,'password'=>$password,'key'=>$key]:ConfigUtil::getConfigFile('phlegethon.php');
        $this->head['Content-Type'] = "application/json";
        $this->head['Cache-Control'] = "no-cache";
        $this->head['s_id'] = StringUtil::uuid();
        if (static::class != Login::class){
            $this->head['access_token'] =
            self::$token ?? self::$token = TokenUtil::getSession($this->config['account']);
        }
    }

    public function run(...$arguments)
    {
        foreach ($this->args as $key => $arg) {
            if (in_array($arg, $this->needEncryption) && !in_array($arg, $this->encrypted) || isset($this->param[$arg])) {
                if (isset($arguments[$key]) && !empty($arguments[$key])) {
                    $this->param[$arg] = DesCrypt::des_encrypt(isset($arguments[$key])?$arguments[$key]:$this->param[$arg],$this->config['key']);
                }
                $this->encrypted[] = $arg;
            }
            if (is_array($this->param) && key_exists($arg, $this->param)) {
                continue;
            }
            if (array_key_exists($key, $arguments)){
                $this->param[$arg] = $arguments[$key];
                continue;
            }
            if (!key_exists($arg, $arguments) && count($this->rule)>0 && isset($this->rule[$arg]) && $this->rule[$arg]=='require') {
                throw new \Exception('参数缺失，请检查参数！', 8000010);
            }
        }
        foreach ($this->param as $key => $item){
            if (empty($this->param[$key])) {
                unset($this->param[$key]);
            }
        }
        return $this->request();
    }

    public function request()
    {
        $res = RequestUtil::curlPostJson($this->url.$this->router, $this->param, $this->head);
        if ($res['rlt_code'] == 'HH0000'){
            return  isset($res['data']) ? $res['data'] : true;
        }
        throw new \Exception($res['rlt_msg'].':'.$res['rlt_code'], bindec($res['rlt_code']));
    }
}