<?php

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "Bithto";
    $dbname = "webtech_m";

    function getConnection(){
        global $host;
        global $dbuser;
        global $dbpass;
        global $dbname;
        $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return $conn;
    }
?>