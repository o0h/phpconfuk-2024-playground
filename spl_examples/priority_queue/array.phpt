--TEST--
SplPriorityQueueを使った優先度順での羅列の実現

--FILE--
<?php
$data = new SplPriorityQueue();
function items()
{
   yield ['name' => 'エリカ', 'deban' => 3];
   yield ['name' => 'カスミ', 'deban' => 1];
   yield ['name' => 'カツラ', 'deban' => 6];
   yield ['name' => 'キョウ', 'deban' => 4];
   yield ['name' => 'サカキ', 'deban' => 7];
   yield ['name' => 'タケシ', 'deban' => 0];
   yield ['name' => 'ナツメ', 'deban' => 5];
   yield ['name' => 'マチス', 'deban' => 2];
   yield ['name' => '???',    'deban' => 0];
}

foreach (items() as ['name' => $name, 'deban' => $deban]) {
    $data->insert($name, -1 * $deban);
}

while(!$data->isEmpty()) {
    echo $data->extract() . PHP_EOL;
}

--EXPECT--
タケシ
???
カスミ
マチス
エリカ
キョウ
ナツメ
カツラ
サカキ
