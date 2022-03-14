<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller {
    //TODO 根據條件更改
    // 'DEFAULT_MODULE'        =>  'Index',  // 默认模块

    // http://localhost/thinkphp/index.php/Index
    // http://localhost/thinkphp/index.php/Index/Index
    // http://localhost/thinkphp/index.php/Index/Index/Index
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>PHP-東寶軟體...</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    // http://localhost/thinkphp/index.php/Index/index/mysqlTest
    public function mysqlTest(){
        $this->show("abc;<br>");
        $User = M("user")->Select();
        echo "mysql API Response:".$User[0]['name'];
    }

    // http://localhost/thinkphp/index.php/Index/index/jsonTest
    public function jsonTest(){
        header('Content-Type:application/json; charset=utf-8');
        $arr = array('a'=>1,'b'=>2);
        exit(json_encode($arr));
//        $this->ajaxReturn(json_encode($arr));
    }
}