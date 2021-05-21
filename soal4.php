<?php
function fibo($k,$b)
{
 
  $angka_sebelumnya=0;
  $angka_sekarang=1;
  $total=$k*$b;
 
  $hasil = "$angka_sebelumnya" . "," ." $angka_sekarang"  ;
 
  for ($i=0; $i<$total-2; $i++)
  {
  
    $output = $angka_sekarang + $angka_sebelumnya;
  
    $hasil = $hasil. ",".  $output;
  
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
  }
  return $hasil;
}
echo fibo(4,3);




?>