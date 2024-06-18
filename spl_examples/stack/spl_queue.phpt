--TEST--
SplStackを使ったstackの実現

--FILE--
<?php
$data = new SplStack();
$items = ['foo', 'bar', 'baz'];

foreach ($items as $item) {
    $data->push($item);
}

foreach ($data as $item) {
    echo $item, PHP_EOL;
}

--EXPECT--
baz
bar
foo
