<?php
$nums = [100, 5, 2, -10, 8, 10, -1, 15, 1, -100];

// ここにコードを書きましょう
// ここでbubblesort関数を呼び出します
$num =  bubblesort($nums);
echo '<pre>';
print_r($num);
echo '</pre>';

/* 関数を完成させましょう */
function bubblesort($nums) {
    for($i = 0; $i < count($nums); $i++) {
        for($n = $i; $n < count($nums); $n++) {
            if($nums[$i] > $nums[$n]) {
                $num = $nums[$i];
                $nums[$i] = $nums[$n];
                $nums[$n] = $num;
            }
        }
    }
return $nums;
}
