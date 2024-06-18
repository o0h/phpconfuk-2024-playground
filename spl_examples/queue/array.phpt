--TEST--
SplQueueを使ったqueueの実現

--FILE--
<?php
$data = new SplQueue();
$items = ['foo', 'bar', 'baz'];

foreach ($items as $item) {
    $data->enqueue($item);
}

while(!$data->isEmpty()) {
    echo $data->dequeue(), PHP_EOL;
}

--EXPECT_EXTERNAL--
expect
