<?php 

/**
 *  Открывает и читает содержимое файлов
 */
class FileReader {
    
    public function Readfile(string $path)
    {
        // $f = fopen($path, "r");
        if (file_exists($path)) return file_get_contents($path);
        else throw new InvalidArgumentException(
            "Файл не существует или указан неверный путь");
    }
}
