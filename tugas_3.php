<?php
// Fungsi untuk menampilkan angka ganjil
function tampilkanAngkaGanjil($start, $end) {
    // Memeriksa apakah start lebih besar dari end
    if ($start > $end) {
        echo "Angka pertama harus lebih kecil atau sama dengan angka terakhir.\n";
        return;
    }
    
    // Mengiterasi dari angka pertama hingga angka terakhir
    for ($angka = $start; $angka <= $end; $angka++) {
        // Memeriksa apakah angka tersebut ganjil
        if ($angka % 2 != 0) {
            echo $angka . "\n";
        }
    }
}

// Fungsi untuk menampilkan angka genap
function tampilkanAngkaGenap($start, $end) {
    // Memeriksa apakah start lebih besar dari end
    if ($start > $end) {
        echo "Angka pertama harus lebih kecil atau sama dengan angka terakhir.\n";
        return;
    }
    
    // Mengiterasi dari angka pertama hingga angka terakhir
    for ($angka = $start; $angka <= $end; $angka++) {
        // Memeriksa apakah angka tersebut genap
        if ($angka % 2 == 0) {
            echo $angka . "\n";
        }
    }
}

// Fungsi untuk melakukan operasi aritmatika
function hitungAritmatika($angka1, $angka2, $operator) {
    switch ($operator) {
        case 'tambah':
            return $angka1 + $angka2;
        case 'kurang':
            return $angka1 - $angka2;
        case 'kali':
            return $angka1 * $angka2;
        case 'bagi':
            // Memeriksa pembagian dengan nol
            if ($angka2 == 0) {
                return "Kesalahan: Pembagian dengan nol.";
            }
            return $angka1 / $angka2;
        default:
            return "Operator tidak valid. Gunakan 'tambah', 'kurang', 'kali', atau 'bagi'.";
    }
}

// Contoh penggunaan
echo "Angka Ganjil antara 1 dan 10:\n";
tampilkanAngkaGanjil(1, 10);

echo "\nAngka Genap antara 1 dan 10:\n";
tampilkanAngkaGenap(1, 10);

echo "\nHasil Aritmatika:\n";
echo "Tambah: " . hitungAritmatika(10, 5, 'tambah') . "\n";
echo "Kurang: " . hitungAritmatika(10, 5, 'kurang') . "\n";
echo "Kali: " . hitungAritmatika(10, 5, 'kali') . "\n";
echo "Bagi: " . hitungAritmatika(10, 5, 'bagi') . "\n";
?>
