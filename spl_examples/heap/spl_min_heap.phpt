--TEST--
SplMinHeapを使った昇順での羅列の実現

--FILE--
<?php
$data = new SplMinHeap();
$items = [33, 4, 11, 22, 24, 7, 14, 21, 30];

foreach ($items as $item) {
    $data->insert($item);
}

while(!$data->isEmpty()) {
    echo $data->extract(), ',';
}

--EXPECT--
4,7,11,14,21,22,24,30,33,
