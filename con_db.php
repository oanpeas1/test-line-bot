<?php
    $host = 'us-cdbr-gcp-east-01.cleardb.net';
    $user = 'b8829a0204904c';
    $pass = '806d0f22';
    $db = 'gcp_14a188b784a5b217ed1d';
    $conn = new mysqli($host,$user,$pass,$db);
    mysqli_query($conn, "SET NAMES utf8");
?>