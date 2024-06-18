<?php

use Symfony\Component\Stopwatch\Stopwatch;

require __DIR__ . '/../vendor/autoload.php';

$items = range(0, 1000000);
shuffle($items);


$stopwatch = new Stopwatch(true);

$array = [];
$queue = new SplQueue();

$stopwatch->start('array-insert');
foreach ($items as $item) {
    array_push($array, $item);
}
$stopwatch->stop('array-insert');

$stopwatch->start('queue-insert');
foreach ($items as $item) {
    $queue->enqueue($item);
}
$stopwatch->stop('queue-insert');

$stopwatch->start('array-remove');
while ($array) {
    array_shift($array);
}
$stopwatch->stop('array-remove');

$stopwatch->start('queue-remove');
while (!$queue->isEmpty()) {
    $queue->dequeue();
}
$stopwatch->stop('queue-remove');

echo '---insert---' . PHP_EOL;
echo 'array: ' . $stopwatch->getEvent('array-insert')->getDuration() . PHP_EOL;
echo 'queue: ' . $stopwatch->getEvent('queue-insert')->getDuration() . PHP_EOL;

echo '---remove---' . PHP_EOL;
echo 'array: ' . $stopwatch->getEvent('array-remove')->getDuration() . PHP_EOL;
echo 'queue: ' . $stopwatch->getEvent('queue-remove')->getDuration() . PHP_EOL;
