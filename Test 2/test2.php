<?php

function denseRanking($totalPlayers, $scores, $numGames, $gameScores)
{
    // Urutkan skor secara descending
    arsort($scores);

    // Buat array untuk menyimpan peringkat masing-masing pemain
    $ranking = array();

    $currentRank = 1; // Inisialisasi peringkat awal
    $prevScore = null; // Skor sebelumnya untuk memeriksa duplikasi

    // Iterasi untuk menghitung peringkat pemain
    foreach ($scores as $score) {
        // Jika skor belum ada dalam array peringkat, tambahkan dengan peringkat saat ini
        if ($score !== $prevScore) {
            $ranking[$score] = $currentRank;
        }
        $currentRank++;
        $prevScore = $score;
    }

    // Hitung peringkat untuk setiap skor permainan GITS
    $result = array();
    foreach ($gameScores as $gameScore) {
        // Jika skor permainan ada dalam array peringkat, gunakan peringkat tersebut; jika tidak, beri pesan "Skor tidak ada dalam peringkat"
        $result[] = isset($ranking[$gameScore]) ? $ranking[$gameScore] : "Skor tidak ada dalam peringkat";
    }

    return $result;
}

// Membaca input untuk jumlah pemain
echo "Masukkan jumlah pemain: ";
$totalPlayers = intval(trim(readline()));

// Membaca input untuk skor pemain
echo "Masukkan skor pemain (pisahkan dengan spasi): ";
$inputScores = trim(readline());
$scores = array_map('intval', explode(' ', $inputScores));

// Membaca input untuk jumlah permainan GITS
echo "Masukkan jumlah permainan GITS: ";
$numGames = intval(trim(readline()));

// Membaca input untuk skor permainan GITS
echo "Masukkan skor permainan GITS (pisahkan dengan spasi): ";
$inputGameScores = trim(readline());
$gameScores = array_map('intval', explode(' ', $inputGameScores));

// Menghitung Dense Ranking
try {
    $result = denseRanking($totalPlayers, $scores, $numGames, $gameScores);

    // Menampilkan hasil Dense Ranking
    echo "Hasil Dense Ranking: " . implode(', ', $result) . "\n";
} catch (Exception $e) {
    // Menampilkan pesan error jika terjadi kesalahan
    echo "Error: " . $e->getMessage() . "\n";
}





?>