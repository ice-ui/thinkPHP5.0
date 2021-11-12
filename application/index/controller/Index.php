<?php

namespace app\index\controller;


use think\Db;

class Index
{


    public function hello()
    {
        $result = Db::execute('delete from  think_data where id = 1');
        dump($result);
        //查询数据库中id等于2的元素
        //find方法用于查找满足条件的第一个记录，如果查询成功，返回的是一个一维数组，没有满足条件返回Null。
        $result1 = Db::table('think_data')->where('id', 2)->find();
        dump($result1);
        //select用于查询数据库，如果查询成功，返回的是一个二维数组，没有满足条件的话则返回空数组
        $result2 = Db::table('think_data')->where('id','>=',1)->limit(10)->select();
        dump($result2);
    }

}
