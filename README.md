## ucenter for Laravel 5

Laravel 5 / 5.1 ucenter.

[![Latest Stable Version](https://poser.pugx.org/wehnhew/ucenter/v/stable.png)](https://packagist.org/packages/goodspb/laravel5-ucenter) 

### 安装

只要在你的 `composer.json` 文件require中加入下面内容，就能获得最新版.

~~~
"goodspb/laravel5-ucenter": "dev-master"
~~~

然后需要运行 "composer update" 来更新你的项目

安装完后，在 `app/config/app.php` 文件中找到 `providers` 键，

~~~
Goodspb\Ucenter\UcenterServiceProvider::class,
~~~

找到 `aliases` 键，

~~~
'Ucenter' => Goodspb\Ucenter\Facades\Ucenter::class,
~~~

## 配置
运行以下命令将配置复制到 `app\config` 方便修改配置
~~~
php artisan config:publish
~~~
ucenter配置项
~~~
//config.php
'url'		=> '/api/ucapi', // 网站UCenter接受数据地址
'api'		=> 'http://localhost/ucenter', // UCenter 的 URL 地址, 在调用头像时依赖此常量
'connect'	=> 'mysql', // 连接 UCenter 的方式: mysql/NULL, 默认为空时为 fscoketopen()
'dbhost'	=> 'localhost', // UCenter 数据库主机
'dbuser'	=> 'root', // UCenter 数据库用户名
'dbpw'		=> 'root', // UCenter 数据库密码
'dbname'	=> 'ucenter', // UCenter 数据库名称
'dbcharset'	=> 'utf8',// UCenter 数据库字符集
'dbtablepre'=> 'uc_', // UCenter 数据库表前缀
'key'		=> '6bc3bbKaoWnVrb26juVvk4uq4c2a5SNQvzv70Zs', // 与 UCenter 的通信密钥, 要与 UCenter 保持一致
'charset'	=> 'utf-8', // UCenter 的字符集
'ip'		=> '127.0.0.1', // UCenter 的 IP, 当 UC_CONNECT 为非 mysql 方式时, 并且当前应用服务器解析域名有问题时, 请设置此值
'appid'		=> 5, //当前应用的 ID
'ppp'		=> 20, //当前应用的 ID
~~~

## 使用
例如：获取用户名为wen的信息
~~~
$result = Ucenter::execute('uc_get_user',['wen']);
var_dump($result);
~~~

## 感谢
fork自 https://github.com/wehnhew/laravel4-ucenter 更改以适应 laravel 5以上
