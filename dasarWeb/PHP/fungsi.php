<?php
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan ($nama, $salam ="Assalamualaikum")
{
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Saya senang bertemu dengan Anda <br/>";
}

perkenalan("Elok");
?>
