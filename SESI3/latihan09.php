<?php
//fungsi dengan parameter dengan nilai default

    function hitungluas($panjang=6,$lebar=4){
        return $panjang*$lebar;
    }
//menggunakan fungsi dengan parameter
echo hitungluas(5,3);
echo "<br>";
//tidak ada parameter maka akan
//menggunakan nilai default
echo hitungluas();