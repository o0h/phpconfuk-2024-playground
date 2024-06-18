--TEST--
SplQueueを使ったqueueの実現

--FILE--
<?php
$data = new SplQueue();
$data->setIteratorMode(SplQueue::IT_MODE_DELETE);

$items = ['foo', 'bar', 'baz'];

foreach ($items as $item) {
    $data->enqueue($item);
}

foreach ($data as $item) {
    echo $item, PHP_EOL;
}
printf('dataの残りは%d個です', count($data));

--EXPECT--
foo
bar
baz
dataの残りは0個です
