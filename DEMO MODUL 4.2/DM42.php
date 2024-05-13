<?php

function generateHelloWorld($n) {
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            yield "HelloWorld";
        } elseif ($i % 3 == 0) {
            yield "Hello";
        } elseif ($i % 5 == 0) {
            yield "World";
        } else {
            yield $i;
        }
    }
}

// Contoh penggunaan generator function
foreach (generateHelloWorld(15) as $value) {
    echo $value . "\n";
}

?>
