<?php
namespace app\index\controller;


//导入命名空间的类库

class Index
{

        public function index(){
          return 'index';
        }

        public function hello($name = 'world',$city=''){
          return 'Hello,' . $name . '! You come from '. $city .'.' ;
     }
}
