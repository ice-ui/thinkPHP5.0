<?php
namespace app\index\controller;

//动态绑定属性
//use app\index\model\User;
//use think\Controller;
//use think\Request;
//use think\Session;
//导入命名空间的类库

class Index
{
//   public function _initialize(){
//       $user = User::get(Session::get('user_id'));
//       Request::instance() -> bind('user',$user);
//   }

//使用助手函数--->没有继承think\Controller也不想给操作方法添加额外的Request对象参数

public function hello($name ='World'){

    //获取当前url地址  不含域名
    echo 'url:' .request() -> url() . '<br />';
    return 'Hello,' .$name .'!';
}

}
