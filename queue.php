<?php
$queue = array();

function enqueue($str){
    global $queue;  //$queueを関数内でも使えるようにしています。
    //ここからソースコードを記載してください。
    $queue[]=$str; 
    //ここまでソースコードを記載してください。
}
function denqueue(){
    global $queue;  //$queueを関数内でも使えるようにしています。
    //ここからソースコードを記載してください。
    unset($queue[0]);
    $queue = array_values($queue);
    //ここまでソースコードを記載してください。
}
echo "<pre>";
enqueue('3');
enqueue('4');
enqueue('5');
print_r($queue);
denqueue();
denqueue();
print_r($queue);
enqueue('6');
enqueue('7');
denqueue();
denqueue();
denqueue();
enqueue('8');
print_r($queue);
echo "</pre>";