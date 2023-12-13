<?php 

function generateSequence($n) {
    $sequence = array(); // Inisialisasi array untuk menyimpan urutan
    $currentValue = 0; // Inisialisasi nilai awal
    
    // Loop untuk menghasilkan urutan
    for ($i = 1; $i <= $n; $i++) {
        $currentValue += $i; // Menambahkan nilai bilangan asli dari 1 hingga n
        $sequence[] = $currentValue; // Menambahkan nilai ke dalam array urutan
    }
    return $sequence; // Mengembalikan array urutan
}

// Fungsi untuk mencetak urutan dengan pemisah "-"
function printSequence($sequence) {
    echo implode('-', $sequence); // Menggabungkan elemen array dengan pemisah "-" dan mencetaknya
}

// Menerima input dari pengguna untuk jumlah term yang diinginkan
$numberOfTerms = (int) readline("Masukkan jumlah term: ");

// Menghasilkan urutan segitiga bilangan (A000124) sesuai dengan input pengguna
$resultSequence = generateSequence($numberOfTerms);

// Menampilkan output urutan
echo "Output: ";
printSequence($resultSequence);


?>
