<?php
function aritmatika($nilai_satu, $operator, $nilai_dua)
{
    if ($operator == '+') {
        $hasil = $nilai_satu + $nilai_dua;
    }
    if ($operator == '-') {
        $hasil = $nilai_satu - $nilai_dua;
    }
    if ($operator == '*') {
        $hasil = $nilai_satu * $nilai_dua;
    }
    if ($operator == '/') {
        $hasil = $nilai_satu / $nilai_dua;
    }
    if ($operator == '%') {
        $hasil = $nilai_satu % $nilai_dua;
    } else {
        echo 'No Result';
    }
    return $hasil;
}
echo aritmatika(1, '&', 2);

echo '<br>' . '<br>';

foreach (range(1, 30) as $pembatas) {
    echo '=';
}

echo '<br>' . '<br>';
// L = 6 x s x s
function luas_kubus($sisi)
{
    $nilai_sisi = pow($sisi, 2);
    $luas_kubus = 6 * $nilai_sisi;
    return $luas_kubus;
}
// V = sxsxs
function volume_kubus($sisi)
{
    $volume_kubus = pow($sisi, 3);
    return $volume_kubus;
}

// L = π * r²
function luas_alas_kerucut($jari)
{
    $nilai_jari = pow($jari, 2);
    $luas_alas_kerucut = 22 / 7 * $nilai_jari;
    return $luas_alas_kerucut;
}

// L = πr. (r + s)
function luas_permukaan_kerucut($jari, $sisi)
{
    $luas_permukaan_kerucut = 22 / 7 * $jari * ($jari + $sisi);
    return $luas_permukaan_kerucut;
}

// L = π.r.s
function luas_selimut_kerucut($jari, $sisi)
{
    $luas_selimut_kerucut = 22 / 7 * $jari * $sisi;
    return $luas_selimut_kerucut;
}

// V = 1/3 * π * r² * t
function volume_kerucut($jari, $tinggi)
{
    $nilai_jari = pow($jari, 2);
    $volume_kerucut = 1 / 3 * 22 / 7 * $nilai_jari * $tinggi;
    return $volume_kerucut;
}

//L = 4 x π x r²
function luas_bola($jari)
{
    $nilai_jari = pow($jari, 2);
    $luas_bola = 4 * 22 / 7 * $nilai_jari;
    return $luas_bola;
}

// V = 4/3.π.r³
function volume_bola($jari)
{
    $nilai_jari = pow($jari, 3);
    $volume_bola = 4 / 3 * 22 / 7 * $nilai_jari;
    return $volume_bola;
}
