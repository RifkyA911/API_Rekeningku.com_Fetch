<?php
// fungsi penyederhanaan satuan rupiah
function Simpl($rp)
{
    $simp = ['', '', 'Ribu', 'Juta', 'Milyar', 'Trilyun', 'Kuadriliun'];
    $input = explode(".", $rp); // into index
    return $input[0] . (count($input) > 1 ? ',' . round($input[1] / 10) : '') . ' ' . $simp[count($input)];
}
// fungsi pemilihan icon koin
function KIcon($icons)
{
    return "https://images.rekeningku.com/accounts/" . strtolower(end($icons)) . ".png?v=6";
    // print_r($icons);
}
