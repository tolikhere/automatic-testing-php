<?php

require_once __DIR__ . '/../src/StringUtils.php';

use function StringUtils\capitalize;

if (capitalize('hello') !== 'Hello') {
    throw new \Exception('The function failed a test!');
}

if (capitalize('') !== '') {
    throw new \Exception('The function failed a test!');
}

echo 'All tests have been passed!' . PHP_EOL;
