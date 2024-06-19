--TEST--
arrayを使った昇順での羅列の実現

--FILE--
<?php
$data = [];
$items = [33, 4, 11, 22, 24, 7, 14, 21, 30];

foreach ($items as $item) {
    array_push($data, $item);
}
sort($data);

while($data) {
    echo array_shift($data), ',';
}

--EXPECT--
4,7,11,14,21,22,24,30,33,
