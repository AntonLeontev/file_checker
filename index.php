<?php 

include_once __DIR__ . '/vendor/autoload.php';
include_once __DIR__ . '/src/FileReader.php';

use ParenthesisChecker as PC;

if (key_exists(1, $argv)) {
    try {
        $fr     = new FileReader();
        $text   = $fr->readfile($argv[1]);
        
        $pc     = new PC\ParenthesisChecker();
        $result = $pc->check($text);
    } catch (InvalidArgumentException $e) {
        die($e->getMessage() . "\n");  
    }
} else die("Не передан путь до файла\n");

if ($result) echo "Скобки расставлены верно\n";
else echo "Скобки расставлены неверно\n";
