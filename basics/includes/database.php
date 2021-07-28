<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_php";
$db_pass = "1y*f[31G.MyWms81";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}
