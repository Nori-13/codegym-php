<?php

/* doubleという関数を定義する。
　double関数は、引数で受け取った値を2倍にして返す */


/*$tmp = 100;
echo double($tmp);
echo PHP_EOL;
return $tmp;

//exit; ここでPHPの処理が終わる*/


//合計算出
function sum ($cart) {
    $sum = 0;
    //var_dump($cart);
    
    /* ここにコードを追加しましょう */
    foreach ($cart as $item) {
        $sum = $sum + $item["個数"] * $item["単価"];
        //var_dump($item["個数"]);
        //var_dump($item["単価"]);
    }
    return $sum;
}

//1人あたりの金額算出
function moneyPerPerson ($sum, $people) {
    /* ここにコードを追加しましょう */
    $per = $sum / $people;
    return $per;
    

}

const JSON_FILE = './warikan.json';    //JSONファイル

$json = file_get_contents('./warikan.json');
if ($json === false) {
    echo 'ファイル入力エラー: ' . JSON_FILE . 'が見つかりません。';
}
$warikan = json_decode($json, true);
//var_dump($warikan);
//var_dump($warikan["people"]);
//var_dump($warikan["cart"]);

//合計
//var_dump($item);
//var_dump($item["個数"]);
//var_dump($item["単価"]);
//$sum = sum($item["個数"]*$item["単価"]);
$sum = sum($warikan["cart"]);
//1人辺りの金額
$per = moneyPerPerson($sum,$warikan["people"]);

echo '合計金額は' . $sum . '円です。';
echo '<br>';
echo '1人あたりの金額は' . ceil($per) . '円です。';


/*
このプログラムの処理の流れ
・JSONファイルを読みよる 1ヶ所
・合計を計算する 2ヶ所
・一人当たりの金額を計算する 2ヶ所
・結果を出力する
*/