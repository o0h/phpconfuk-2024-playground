--TEST--
arrayを使った被りなしのオブジェクト集合

--FILE--
<?php
$data = [];

$a = new stdClass();
$a->val = 'a';
$b = new stdClass();
$b->val = 'b';
$items = [$a, $b, $a];

foreach ($items as $item) {
  $key = spl_object_id($item);
  if (array_key_exists($key, $data)) {
    continue;
  }
  $data[$key] = $item;
}

foreach ($data as $v) {
  echo $v->val, PHP_EOL;
}
--EXPECT--
a
b
