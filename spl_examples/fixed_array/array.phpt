--TEST--
arrayを使ったサイズ上限付き配列の実現

--FILE--
<?php
$sizeLimit = 3;
$data = [];
$items = ['乃士', '出川', '多木', '雉川'];

try {
    foreach ($items as $item) {
        if (count($data) >= $sizeLimit) {
            throw new \RuntimeException('上限オーバー！');
        }
        array_push($data, $item);
    }
} catch (\RuntimeException) {
    echo '上限オーバー！';
}

--EXPECT--
上限オーバー！
