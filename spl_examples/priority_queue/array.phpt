--TEST--
arrayを使った優先度順での羅列の実現

--FILE--
<?php
$data = [];
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

foreach (items() as $i => ['name' => $name, 'deban' => $deban]) {
  $k = sprintf('%05d.%f', $deban, 0.0001 * $i);
  $data[$k] = $name;
}
ksort($data);

while($data) {
    echo array_shift($data) . PHP_EOL;
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
