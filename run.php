<?php

$sourceCode = __DIR__ . "/VanillaBlocks.php";

$pattern = "/@method static ([a-zA-Z0-9]+) ([a-zA-Z0-9_]+)\((.*)\)(.*)/";

$lines = file($sourceCode);

$methods = [];

foreach ($lines as $line) {
    if (preg_match($pattern, $line, $matches)) {
        var_dump($matches[2]);
    }
}

