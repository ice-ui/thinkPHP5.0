<?php
namespace app\index\controller;

use think\Request;
class Index{


public function hello(Request $request){
    //http://localhost:8888/tp5/public/index/index/hello.html?test=add&name=thinkphp
    echo '请求参数:';
//    dump($request -> param());
//    echo 'name:' .$request->param('name');

    //使用input函数来简化请求，会自动判断当前的请求
//    dump(input());
//    echo 'name:' .input('name');

    //param方法获取的参数会自动判断当前的请求：路由变量>当前请求变量>$GET变量

    echo 'name:' .$request->param('name','World','strtolower');
    echo '<br/>test:' .$request->param('test','thinkphp','strtoupper');
  }

}
