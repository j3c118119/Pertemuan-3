<?php
    $host   = "ftpupload.net";
    $user   = "epiz_26775024";
    $psw    = "";
    $db_name= "crud";
    $kon = mysqli_connect($host,$user,$psw,$db_name);

    if (!$kon){
        die ('Gagal terhubung dengan database:'.mysqli_connect_error());
    }

?>