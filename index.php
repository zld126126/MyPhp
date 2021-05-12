<?php
require("connectMysql.php");

Class Base{
    var $url;
    var $title;

    function setUrl($par){
        $this -> url = $par;
    }
    
    function setTitle($par){
        $this -> title = $par;
    }
}

function getPeopleTitle(){
    $People = new Base;
    $People -> setUrl("Human");
    $People -> setTitle("Human Win!");
    return $People ->title;
}


    // 打印输出 面向对象 .相当于+
    createUserTable();

    InsertUserTable();
    SelectUserTable();

    
    echo "面向对象:" . "HelloWorld!" . getPeopleTitle().PHP_EOL;
?>
