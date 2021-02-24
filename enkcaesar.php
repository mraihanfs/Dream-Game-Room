<?php
function enkcaesr($kalimat)
{
    $hsl = '';
    for ($i = 0; $i < strlen($kalimat); $i++) {
        $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
        $b[$i] = ($kode[$i] + 13) % 256; //proses enkripsi
        $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
        $hsl.=$c[$i];
    }
    return $hsl;
}
