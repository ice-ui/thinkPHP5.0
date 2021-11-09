<?php
namespace app\index\controller;

use think\Controller;
//导入命名空间的类库

class Index extends Controller
{
    public function hello($name = 'World'){
       // Request::instance()获取post、get、参数、表单上传的文件
//        $request = Request::instance();
        //获取当前URL地址  不含域名
        echo 'url:' . $this->request->url() . '<br/>';
        return 'Hello,' .$name . '!';
    }
}
