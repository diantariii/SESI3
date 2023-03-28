<?php
    $mhs = array(
        array("Ardika","22347215","Denpasar"),
        array("Wahyu Hidayat","22347067","Malang"),
        array("Santi Kirana","22347342","Surabaya"),
        array("Zizi","22347112","Flores"),
    );

 header ("Content-Type: application/json");
    echo json_encode($mhs);