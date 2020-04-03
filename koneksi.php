<?php  
$koneksi = new mysqli("localhost","root","mysql","db_kua");

if(mysqli_connect_errno()){
   echo "Gagal Koneksi Database : ". mysqli_connect_errno();
}
