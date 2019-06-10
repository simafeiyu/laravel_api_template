# 将Laravel框架进行一些配置处理，让其在开发API时更得心应手

## 来源

配置过程以及配置原理都来自我的博客:[手摸手教你让Laravel开发Api更得心应手](https://www.guaosi.com/2019/02/26/laravel-api-initialization-preparation/)

这里是方便懒人下载，快速搭建，不需要再重新配置一遍。

目前使用的`Laravel`版本是`5.7`

## 实现功能

- 解决跨域问题

- 统一Response响应处理

- Api-Resource资源返回

- 使用Enum枚举

- jwt-auth用户认证与无感知自动刷新

- jwt-auth多角色认证不串号

- 单一设备登陆

- horizon管理异步队列
https://learnku.com/docs/laravel/5.7/horizon/2308
## 环境

| 程序 | 版本 |
| -------- | -------- |
| PHP| `>= 7.1` |
| MySQL| `>= 5.5` |
| Redis| `>= 2.8` |

## 安装

1.先把项目克隆到本地

```
git clone git@github.com:guaosi/Laravel_api_init.git
```

2.打开项目目录，下载依赖扩展包

```
composer install
```

3.复制配置文件

```
cp .env.example .env
```
自行配置`.env`里的相关配置信息

4.生成`APP_KEY`和`JWT_SECRET`
```
php artisan key:generate
php artisan jwt:secret
```

5.创建迁移
```
php artisan migrate
```

6.填充数据
```
php artisan db:seed
```

7.修改.env
REDIS_HOST=118.24.72.53
REDIS_PASSWORD=kbasdddsesdfkj
REDIS_PORT=6379

HORIZON_IP=118.24.72.53


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_test
DB_USERNAME=root
DB_PASSWORD=

8.修改./config/database.php

'mysql' => [
    'driver' => 'mysql',
    'host' => env('DB_HOST', '127.0.0.1'),
    'port' => env('DB_PORT', '3306'),
    'database' => env('DB_DATABASE', 'laravel_test'),
    'username' => env('DB_USERNAME', 'root'),
    'password' => env('DB_PASSWORD', ''),
    'unix_socket' => env('DB_SOCKET', ''),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'prefix_indexes' => true,
    'strict' => true,
    'engine' => null,
],


## 测试数据
users:
guoasi1    12345678
guoasi2    12345678

admins:
guaosi123  12345678
guaosi124  12345678