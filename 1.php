<?php
function params($awal, $akhir)
{

    for ($a = $awal; $a <= $akhir; $a++) {  //pengecekan angka untuk masuk

        $counter = 0;
        for ($j = 1; $j <= $a; $j++) { //faktor pembagi

            //jika angka yg dicek habis dibagi faktor pembagi, counter nya +1
            if ($a % $j == 0) {

                $counter++;
            }
        }

        //jumlah faktor habis bagi nya harus 2 
        if ($counter == 2) {

            print $a . " ";
        }
    }
}

params(20, 50);  //inputan
