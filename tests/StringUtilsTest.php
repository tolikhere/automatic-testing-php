<?php

$autoloadPath1 = __DIR__ . '/../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

$file = file_exists($autoloadPath1) ? $autoloadPath1 : $autoloadPath2;

require_once $file;

use function StringUtils\capitalize;
use Webmozart\Assert\Assert;

Assert::eq(capitalize(''), '');
Assert::eq(capitalize('hello'), 'Hello');

echo 'All tests have been passed!' . PHP_EOL;
