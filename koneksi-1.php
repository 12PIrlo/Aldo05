<?php
$koneksi = mysqli_connect("localhost","root","","admin");
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connnect_error();
}?>