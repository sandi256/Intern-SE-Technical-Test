<?php

function isBalanced($expression) {
    $stack = []; // Inisialisasi stack untuk menyimpan tanda kurung yang ditemukan
    $mapping = [')' => '(', '}' => '{', ']' => '[']; // Pemetaan tanda kurung
    $length = strlen($expression); // Menyimpan panjang string untuk menghindari pemanggilan berulang

    for ($i = 0; $i < $length; $i++) {
        $char = $expression[$i];
        // Jika karakter adalah tanda kurung pembuka, tambahkan ke stack
        if (in_array($char, $mapping)) {
            array_push($stack, $char);
        } elseif (in_array($char, array_keys($mapping)) && (empty($stack) || array_pop($stack) !== $mapping[$char])) {
            // Jika karakter adalah tanda kurung penutup, periksa kecocokan dengan tanda kurung terakhir di stack
            // Jika tidak cocok atau stack kosong, ekspresi tidak seimbang
            return "NO";
        }
    }
    // Jika stack kosong, ekspresi seimbang; sebaliknya, ekspresi tidak seimbang
    return empty($stack) ? "YES" : "NO";
}

// Meminta input dari pengguna
echo "Masukkan ekspresi tanda kurung: ";
$userInput = trim(fgets(STDIN));

// Memanggil fungsi isBalanced dengan input pengguna
$result = isBalanced($userInput);

// Menampilkan hasil
echo "Hasil: " . $result . "\n";
