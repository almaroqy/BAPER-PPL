<?php
function denda($tgl1, $tgl2)
{
    $denda = 1000; // Ubah disini  untuk merubah nominal denda
    $hari = 7;   // Ubah disini untuk merubah batas hari peminjaman
    $batas = new DateTime($tgl1);
    $kembali = new DateTime($tgl2);
    $jarak = $kembali->diff($batas);

    $selisih = $jarak->d;
    if ($selisih > $hari) {
        return $denda * $selisih;
    } else {
        return 0;
    }
}
