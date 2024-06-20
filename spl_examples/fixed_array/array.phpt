--TEST--
SplFixedArrayを使ったサイズ上限付き配列の実現

--FILE--
<?php
$sizeLimit = 3;
$data = new SplFixedArray($sizeLimit);
$items = ['乃士', '出川', '多木', '雉川'];

try {
    foreach ($items as $i => $item) {
        $data[$i] = $item;
    }
} catch (\RuntimeException) {
    echo '上限オーバー！';
}

--EXPECT--
上限オーバー！
