<?php
    $filecounter="counter.txt"; // file yang akan diproses
    $open=fopen($filecounter,'r+'); // membuka file
    $counter=fgets($open); // melihat isi file
    fclose($open); // menutup file
    $counter++; // manipulasi isi file
    $write=fopen($filecounter,'w'); // membuka file
    fputs($write,$counter); // memasukkan data ke dalam file
    fclose($write); // menutup file
    echo "<b> Anda adalah pengunjung ke : $counter</b>";
?>