<?php
    $arr = array('12345','23456','34567','45678');
    /*生成一个随机索引  array_rand:可以生成指定的数组长度内的索引*/
    $index = array_rand($arr);
    sleep(2); // 表示延迟2秒后向浏览器响应数据
    echo $arr[$index];
?>