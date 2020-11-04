官网：https://lm.huohetech.com/
#插件使用教程
例子(远程开门)：
```php
\sffi\phlegethon\Factory::Lock()->remote_open('11.***.***.56','153****169');
```

需要将随包配置的config目录中的文件放到tp的config目录中
config目录中包含两个文件
- phlegethon
- redis
```php
#phlegethon文件内容如下：
return [
    'account' => '15*******69',
    'password' => '****',
    'key' => 'j*****Jm',
    'config_path' => '',
];
```

```php
#redis文件内容：
return [
    'host' => '127.0.0.1',
    'port' => 6379,
    'timeout' => '600'
];
```
###phlegethon文件
####account
此项记录 https://lm.huohetech.com/ 网站中账号
####password
此项记录  网站中密码
####key
此项记录 网站分配的key值

###redis文件
####host
记录Redis缓存远程地址
####port
记录Redis端口
####timeout
记录Redis链接超时时间

#api
##运营商查询消息
###查询网关列表（node/list）
####查询参数
| 序号 | 必需 | 参数名 | 消息体 | 参数描述 | 类型 | 说明 |
| :-----:| :----: | :----: | :----: | :----: | :----: | :----: |
| 1. | Y | version | header | 接口版本号 | 字符型 | 默认：1.0；| 
| 2. | Y | access_token | header | 访问凭证 | 字符型 | 最长 512 字符；| 
| 3. | Y | s_id | header | 业务流水单号 | 字符型 | 建议 UUID| 
| 4. | N | page_size | body | 每页行数 | 数值型 | 默认值 10，最大值 100| 
| 5. | N | current_page | body | 页码 | 数值型 | 默认 1| 
| 6. | N | node_no | body | 网关编码 | 字符型| | 
| 7. | N | house_code | body | 房源编码 | 字符型| 
####返回参数
|序号 |参数名 |参数描述 |类型 |说明|
| :-----:| :----: | :----: | :----: | :----: |
|1 |node_kind | 门锁类型 | 字符型 | 数据字典：0.一代协议 433 网关 1.蓝牙网关 3.二代协议 433 网关|
|2 |software_version | 软件版本 | 字符型 | |
|3 |hardware_version | 硬件版本 | 字符型 | |
|4 |node_no | 网关编码 | 字符型 | |
|5 |name | 网关名称 | 字符型 | |
|6 |house_code | 房源编码 | 字符型 | |
|7 |install_time | 安装时间 | 数值型 | 格式：13 位时间戳(毫秒) |
|8 |guarantee_time_start | 质保开始日期 | 数值型 | 格式：13 位时间戳(毫秒) |
|9 |guarantee_time_end | 质保截至日期 | 数值型 | 格式：13 位时间戳(毫秒) |
|10 |comu_status | 网关通信状态 | 字符型 | 数据字典：00通信正常；01：通信异常 |
|11 |comu_status_update_time | 通信状态最近更新时间 | 数值型 | 格式：13位时间戳(毫秒) 注：仅 433 网关有效 |

示例：
```php
$res = \sffi\phlegethon\Factory::Node()->Lists(10, 1);
var_dump($res);

#输出如下：
#array (size=6)
#  'total' => int 1
#  'start' => int 0
#  'total_page' => int 1
#  'rows' => 
#    array (size=1)
#      0 => 
#        array (size=11)
#          'install_time' => int 1603246744000
#          'guarantee_time_end' => int 1634745600000
#          'comu_status_update_time' => int 1603263731000
#          'house_code' => string '' (length=0)
#          'guarantee_time_start' => int 1603209600000
#          'new_software_version' => string '594' (length=3)
#          'node_no' => string '200.141.81.99' (length=13)
#          'software_version' => string '594' (length=3)
#          'hardware_version' => string '288' (length=3)
#          'node_kind' => string '3' (length=1)
#          'comu_status' => string '00' (length=2)
#  'current_page' => int 1
#  'page_size' => int 10
```

###查询网关详情(node/view)
####查询参数
| 序号 | 必需 | 参数名 | 消息体 | 参数描述 | 类型 | 说明 |
| :-----:| :----: | :----: | :----: | :----: | :----: | :----: |
| 1. | Y | version | header | 接口版本号 | 字符型 | 默认：1.0；| 
| 2. | Y | access_token | header | 访问凭证 | 字符型 | 最长 512 字符；| 
| 3. | Y | s_id | header | 业务流水单号 | 字符型 | 建议 UUID| 
| 4. | N | node_no | body | 网关编码 | 字符型 | | 
####返回参数
|序号 |参数名 |参数描述 |类型 |说明|
| :-----:| :----: | :----: | :----: | :----: |
|1. |node_kind |门锁类型 |字符型 |数据字典：0：一代协议 433 网关 1：蓝牙网关 3：二代协议 433 网关|
|2. |node_no |网关编码 |字符型||
|3. |name |网关名称 |字符型||
|4. |software_version |软件版本 |字符型 |转成 LM 端一致|
|5. |new_software_version |最新软件版本 |字符型 |升级后与当前版本一致|
|6. |hardware_version |硬件版本 |字符型||
|7. |comu_status |通信状态 |字符型 |数据字典：00：通信正常；01：通信异常；|
|8. |comu_status_update_time |通信状态最近更新时间 |数值型| 格式：13 位时间戳(毫秒) 注：仅 433 网关有效|
|9. |region |安装地区 |JSON| 数组，子对象包括code,name,level三个字段，code 和name是字符型，level 是数值类型格式：[{"code":"code","name":"na me","level":level}, {"code":"code","name":"na me","level":level}, {"code":"code","name":"na me","level":level}, {"code":"code","name":"na me","level":level}] 举例：[{"code":"0086","name":" 中国","level":0}, {"code":"110000","name": "黑龙江","level":1}, {"code":"110100","name": "牡丹江","level":2}, {"code":"110101","name": "海淀区","level":3}]|
|10.|address |安装地址 |字符型||
|11.|house_code |房源编码 |字符型||
|12.|install_time |安装日期 |数值型| 格式：13 位时间戳(毫秒)|
|13.|guarantee_time_start |质保日期（起） |数值型 |格式：13 位时间戳(毫秒)|
|14.|guarantee_time_end |质保日期（止） |数值型 |格式：13 位时间戳(毫秒)|
|15.|description |描述 |字符型||

示例：
```php
$res = \sffi\phlegethon\Factory::Node()->view('200.***.***.99');
var_dump($res);

#输出如下：
#array (size=14)
#  'install_time' => int 1603246744000
#  'address' => string '湖南长沙岳麓区麓谷企业广场c31003' (length=45)
#  'comu_status_update_time' => int 1603263731000
#  'guarantee_time_start' => int 1603209600000
#  'new_software_version' => string '594' (length=3)
#  'description' => string '' (length=0)
#  'hardware_version' => string '288' (length=3)
#  'node_kind' => string '3' (length=1)
#  'comu_status' => string '00' (length=2)
#  'guarantee_time_end' => int 1634745600000
#  'house_code' => string '' (length=0)
#  'node_no' => string '200.141.81.99' (length=13)
#  'software_version' => string '594' (length=3)
#  'region' => 
#    array (size=4)
#      0 => 
#        array (size=3)
#          'code' => string '0086' (length=4)
#          'level' => int 0
#          'name' => string '中国大陆' (length=12)
#      1 => 
#        array (size=3)
#          'code' => string '430000' (length=6)
#          'level' => int 1
#          'name' => string '湖南省' (length=9)
#      2 => 
#        array (size=3)
#          'code' => string '430100' (length=6)
#          'level' => int 2
#          'name' => string '长沙市' (length=9)
#      3 => 
#        array (size=3)
#          'code' => string '430104' (length=6)
#          'level' => int 3
#          'name' => string '岳麓区' (length=9)
```


###查询网关详情(node/update_install_info)
####查询参数
| 序号 | 必需 | 参数名 | 消息体 | 参数描述 | 类型 | 说明 |
| :-----:| :----: | :----: | :----: | :----: | :----: | :----: |
| 1. | Y | version | header | 接口版本号 | 字符型 | 默认：1.0；| 
| 2. | Y | access_token | header | 访问凭证 | 字符型 | 最长 512 字符；| 
| 3. | Y | s_id | header | 业务流水单号 | 字符型 | 建议 UUID| 
| 4. | N | node_no | body | 网关编码 | 字符型 | | 
| 4. | N | house_code | body | 房源编码 | 字符型 | 长度不能大于 40 个字符 | 
####返回参数
无

示例：
```php
$res = \sffi\phlegethon\Factory::Node()->update_install_info('node_no','house_code');
var_dump($res);

#输出如下：
#boolean true
```