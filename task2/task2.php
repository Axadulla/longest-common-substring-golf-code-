<?php

// Укажи путь к папке с файлами (распакованными из x)
$directory = __DIR__ . '/x_'; // <-- измени на нужную тебе папку

// Укажи свой email
$email = 'example@email.com';

// Получаем список всех файлов, исключая "." и ".." 
$files = array_diff(scandir($directory), ['.', '..']);

// Проверка на количество файлов в моем случаи 256
if (count($files) !== 256) {
   die("ОШИБКА: Ожидается 256 файлов, найдено: " . count($files) . PHP_EOL);
}

$hashes = [];

// Хешируем каждый файл по алгоритму SHA3-256
foreach ($files as $file) {
   $path = $directory . '/' . $file;
   $contents = file_get_contents($path);
   $hash = hash('sha3-256', $contents);
   $hashes[] = $hash;
}

// Сортировка по убыванию
rsort($hashes, SORT_STRING);

// Склейка всех хешей в одну строку + email
$concatenated = implode('', $hashes) . strtolower($email);

// Финальный SHA3-256 хеш
$finalHash = hash('sha3-256', $concatenated);

// Вывод финального результата
echo "Финальный хеш: " . $finalHash . PHP_EOL;



?>