<?php

$número = 12343456.56;

// notación inglesa (por defecto)
echo $número_formato_inglés = number_format($número);
// 1,235
echo "--";
// notación francesa
echo $nombre_format_francais = number_format($número, 2, ',', '.');
// 1 234,56
echo "--";
$número = 123445.5678;

// notación inglesa sin separador de millares
echo $english_format_number = number_format($número, 2, '.', '');
// 1234.57

?>