--TEST--
SplQueueを使ったqueueの実現

--FILE--
<?php
$data = new SplQueue();
$items = ['foo', 'bar', 'baz'];

foreach ($items as $item) {
    $data->push($item);
}

foreach ($data as $item) {
    echo $item, PHP_EOL;
}

--EXPECT--
foo
bar
baz
