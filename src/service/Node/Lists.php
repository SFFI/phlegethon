<?php


namespace sffi\phlegethon\service\Node;

/**
 * Class Lists
 * @method run(int $page_size=10,int $current_page=1,string $node_no='', string $house_code='')
 * @package sffi\phlegethon\service\Node
 */
class Lists extends \sffi\phlegethon\service\Base
{
    protected $router = 'node/list';

    protected $args = [
        'page_size',
        'current_page',
        'node_no',
        'house_code'
    ];

    public function __construct($account='',$password='',$key='')
    {
        if (is_array($account)) {
            if (isset($account['account'])){
                $key = $account['key'];
                $account = $account['account'];
                $password = $account['password'];
            }
        }
        parent::__construct($account,$password,$key);
    }
}