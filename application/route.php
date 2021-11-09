<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    //添加路由规则路由到index控制器的hello方法
    //    'hello/:name' => 'index/index/hello'

    //修改路由规则，上面的配置必须传入参数才可以正确访问，使用[]表示该变量为可选,http://tp5/public/hello
    //'hello/[:name]' => 'index/hello'

    //完整匹配,表示当前路由规则需要完整匹配:http://tp5/public/hello或着http://tp5/public/hello/thinkphp
    //'hello/[:name]$' => 'index/hello',

    //闭包定义
    //'hello/:name' => function($name){
    //     return 'Hello,' . $name . '!';
    //}

    //对变量的规则进行定义，对变量进行规则约束，变量规则使用正则表达式进行定义:http://localhost:8888/tp5/public/blog/thinkphp
    //    'blog/:year/:month' => ['blog/archive',['method' => 'get'],['year' => '\d{4}', 'month' => '\d{2}']],
    //    'blog/:id' => ['blog/get', ['method' => 'get'], ['id' => '\d+']],
    //    'blog/:name' => ['blog/read', ['method' => 'get'], ['name' => '\w+']]

    //由于上面都含有blog，所以我们可以做路由简化
    '[blog]'=>[
       ':year/:month' => ['blog/archive',['method' => 'get'],['year' => '\d{4}', 'month' => '\d{2}']],
       ':id' => ['blog/get', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['blog/read', ['method' => 'get'], ['name' => '\w+']]
    ]
];
