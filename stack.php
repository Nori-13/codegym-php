<?php
$stack = array();

function push($str){
    global $stack;  //$stackを関数内でも使えるようにしています。
    //ここからソース記載してください。
    $stack[] = $str;
    
    //ここまでソースコードを記載してください。
}
function pop(){
    global $stack;  //$stackを関数内でも使えるようにしています。
    //ここからソースコードを記載してください。
    unset($stack[count($stack)-1]);
    $stack =array_values($stack);
    //ここまでソースコードを記載してください。
}

echo "<pre>";
push('9');
push('8');
push('7');
print_r($stack);
pop();
pop();
print_r($stack);
push(6);
push(5);
pop();
push(4);
pop();
push(3);
print_r($stack);
echo "</pre>";