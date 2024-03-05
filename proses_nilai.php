<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];

//nilai total (30% uts + 35% uas + 35% tugas)
$nilai_total = (30/100 * $uts) + (35/100 * $uas) + (35/100 * $tugas);

if ($nilai_total > 55) {
    $hasil = 'LULUS';
} else {
    $hasil = 'TIDAK LULUS';
}

if ($nilai_total >= 86 && $nilai_total <= 100) {
    $grade = 'A';
} elseif ($nilai_total >= 71 && $nilai_total <= 85) {
    $grade = 'B';
} elseif ($nilai_total >= 57 && $nilai_total <= 70) {
    $grade = 'C';
} elseif ($nilai_total >= 36 && $nilai_total <= 56) {
    $grade = 'D';
} else {
    $grade = 'E';
}

// hasil input
echo "Nama Lengkap: $nama<br>";
echo "Matkul: $matkul<br>";
echo "Uts: $uts<br>";
echo "Uas: $uas<br>";
echo "Tugas: $tugas<br>";
echo "Hasil: $hasil<br>";
echo "Grade: $grade";

?>
