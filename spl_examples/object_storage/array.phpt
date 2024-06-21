--TEST--
SplObjectStorageを使った被りなしのオブジェクト集合

--FILE--
<?php
$data = new SplObjectStorage();

$a = new stdClass();
$a->val = 'a';
$b = new stdClass();
$b->val = 'b';
$items = [$a, $b, $a];

foreach ($items as $item) {
  $data->attach($item);
}

foreach ($data as $v) {
  echo $v->val, PHP_EOL;
}
--EXPECT--
a
b
