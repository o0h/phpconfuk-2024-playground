--TEST--
arrayを使ったqueueの実現

--FILE--
<?php
$data = [];
$items = ['foo', 'bar', 'baz'];

foreach ($items as $item) {
    array_push($data, $item);
}
$data = array_reverse($data);

while($data) {
    echo array_shift($data), PHP_EOL;
}

--EXPECT--
baz
bar
foo
