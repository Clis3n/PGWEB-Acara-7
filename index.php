<?php
// 1. Comments
// Ini adalah komentar satu baris
/* Ini adalah komentar multi-baris */

echo "<hr>"; // Batas antar bagian




// 2. PHP Variabel
// Mendefinisikan variabel
$nama = "Clisen"; // Tipe data string
$umur = 20;      // Tipe data integer
$tinggi = 179.5; // Tipe data float

echo "Nama: $nama, Umur: $umur, Tinggi: $tinggi cm<br>";

echo "<hr>"; // Batas antar bagian




// 3. PHP Echo
echo "Hello, Dunia!<br>";

echo "<hr>"; // Batas antar bagian




// 4. PHP Data Type
// Mendemonstrasikan berbagai tipe data
$nama = "Clisen"; // String
$umur = 20;      // Integer
$tinggi = 179.5; // Float

// Menampilkan tipe data
echo "Tipe data nama: " . gettype($nama) . "<br>";
echo "Tipe data umur: " . gettype($umur) . "<br>";
echo "Tipe data tinggi: " . gettype($tinggi) . "<br>";

echo "<hr>"; // Batas antar bagian




// 5. PHP String Functions
$teks = "Selamat datang di tutorial PHP!";
echo "Panjang string: " . strlen($teks) . "<br>";
echo "Kebalikan teks: " . strrev($teks) . "<br>";

echo "<hr>"; // Batas antar bagian




// 6. PHP Number
$x = 10;
$y = 3;
echo "Hasil penjumlahan: " . ($x + $y) . "<br>"; // 13
echo "Hasil perkalian: " . ($x * $y) . "<br>"; // 30

echo "<hr>"; // Batas antar bagian




// 7. PHP Casting
$angka = "100"; // string
$angka_int = (int)$angka; // casting ke integer
echo "Hasil casting string ke integer: " . $angka_int . "<br>";

echo "<hr>"; // Batas antar bagian




// 8. PHP Math
$a = 5;
$b = 2;
echo "Hasil pembagian: " . ($a / $b) . "<br>";
echo "Hasil pangkat: " . pow($a, $b) . "<br>";

echo "<hr>"; // Batas antar bagian




// 9. PHP Operator
$x = 10;
$x += 5; // sekarang $x menjadi 15
echo "Nilai setelah += operator: $x<br>";

$y = 20;
echo ($y == 20) ? "Nilai $y sama dengan 20<br>" : "Tidak sama<br>"; // Equal
echo ($y === 20) ? "Nilai $y identik dengan 20<br>" : "Tidak identik<br>"; // Identical

echo "<hr>"; // Batas antar bagian




// 10. PHP If-Else
if ($umur >= 18) {
    echo "Aku sudah dewasa.<br>";
} else {
    echo "Aku masih anak-anak.<br>";
}

echo "<hr>"; // Batas antar bagian




// 11. PHP Switch
$warna = "merah";
switch ($warna) {
    case "merah":
        echo "Warna favoritku merah!<br>";
        break;
    case "biru":
        echo "Warna favoritku biru!<br>";
        break;
    default:
        echo "Aku tidak punya warna favorit.<br>";
}

echo "<hr>"; // Batas antar bagian




// 12. PHP Array
$buah = array("Apel", "Jeruk", "Mangga");
echo "Buah favorit: " . $buah[0] . "<br>";

echo "<hr>"; // Batas antar bagian




// 13. PHP Loop
for ($i = 1; $i <= 5; $i++) {
    echo "Nomor: $i<br>";
}

foreach ($buah as $item) {
    echo "Buah: $item<br>";
}

echo "<hr>"; // Batas antar bagian




// 14. PHP Function
function luasPersegi($sisi) {
    return $sisi * $sisi;
}
echo "Luas persegi dengan sisi 4: " . luasPersegi(4) . "<br>";

echo "<hr>"; // Batas antar bagian




// 15. Pembuatan Tabel dengan 3 Baris dan 3 Kolom
echo "<table border='1'>
        <tr>
          <th>Nama</th>
          <th>Umur</th>
          <th>Kota</th>
        </tr>
        <tr>
          <td>Clisen</td>
          <td>20</td>
          <td>Yogyakarta</td>
        </tr>
        <tr>
          <td>Andi</td>
          <td>22</td>
          <td>Kediri</td>
        </tr>
        <tr>
          <td>Budi</td>
          <td>19</td>
          <td>Surabaya</td>
        </tr>
      </table>";

echo "<hr>"; // Batas antar bagian

?>
