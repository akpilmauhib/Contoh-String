<?php
// Menggunakan operator titik (.) untuk menggabungkan string
$string1 = 'Hello';
$string2 = ', World!';
$concat = $string1 . $string2;
echo $concat;  // Output: Hello, World!

// Menggunakan method trim() untuk menghapus spasi di awal dan akhir string
$string = '  Hello, World!   ';
echo trim($string);  // Output: Hello, World!

// Menggunakan method str_replace() untuk mengganti sebuah substring dengan string lain
$string = 'Hello, World!';
echo str_replace('World', 'PHP', $string);  // Output: Hello, PHP!

// Menggunakan method explode() untuk memecah string menjadi array berdasarkan delimiter
$string = 'Hello, World!';
$array = explode(', ', $string);
print_r($array);  // Output: Array ( [0] => Hello [1] => World! )

// Menggunakan method implode() untuk menggabungkan array menjadi string
$array = array('Hello', 'World!');
$string = implode(', ', $array);
echo $string;  // Output: Hello, World!
